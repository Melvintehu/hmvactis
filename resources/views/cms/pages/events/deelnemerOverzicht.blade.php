@extends('cms.master')



@section('content')
    <h1>Deelnemer Overzicht </h1>
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
                                                        <th>Titel</th>
                                                        <th>Locatie</th>
                                                        <th>Datum</th>
                                                        <th>Beschrijving</th>
                                                        <th>Lustrum activiteit</th>
                                                        <th>Tijdstip</th>
                                                        <th style='color:red'> X </th>
                                                    </tr>
                                                </thead>
                                                <tbody>

                                                    @foreach($data['event']->users as $user)
                                                    <tr>
                                                         <td> {{ $user->name }} </td>
                                                        
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
