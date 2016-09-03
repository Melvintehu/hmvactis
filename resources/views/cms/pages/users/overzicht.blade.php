@extends('cms.master')



@section('content')
    <h1> Leden en accounts Overzicht </h1>
    <hr>

    <div class="row">
        <div class="col-lg-12"> 
     
       
            <div class="row">
                    <div class="col-md-12">
                        <div class="panel panel-default">
                           
                            <div class="panel-body">
                                <div class="row">
                                    <div class="col-md-12 col-sm-12 col-xs-12">
                                        <div class="table-responsive">
                                            <table class="table table-hover">
                                                <thead>
                                                    <tr>
                                                        <th>#</th>
                                                        <th>Naam</th>
                                                        <th>Adres</th>
                                                        <th>Telefoonnummer</th>
                                                        <th>Emailadres</th>
                                                        <th>Geboortedatum</th>
                                                        <th>Studie</th>
                                                        <th>Studiejaar</th>
                                                        <th>IBAN</th>
                                                        <th style='color:red'> X </th>
                                                    </tr>
                                                </thead>
                                                <tbody>
                                                    @foreach($data['users'] as $user)
                                                    <tr>


                                                        <td>{{ $user->id }}</td>
                                                        <td><b>{{ $user->name }}</b></td>
                                                        <td> {{ $user->profile['street']}} </td>
                                                        <td> {{ $user->profile['phone_number']}} </td>
                                                        <td >
                                                            {!! Form::open(['method' => 'delete', 'action' => [                             'UserController@destroy',  $user->id ]  ]) !!}
                                                                @include('cms.pages.partials.delete_form', ['submitButtonText' => 'X' ])      
                                                            {!! Form::close() !!}  
                                                        </td>
                                                        <td >
                                                            {!! Form::open(['method' => 'GET', 'action' => [                             'UserController@show',  $user->id ]  ]) !!}
                                                                @include('cms.pages.partials.update_form')      
                                                            {!! Form::close() !!}  
                                                        </td>
                                                    </tr>
                                                    @endForeach

                                                </tbody>
                                            </table>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                     
                </div> <!-- End row -->
          
        </div>
    </div>
@stop
