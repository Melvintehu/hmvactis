@extends('cms.master')

@section('title')
    Aanpassen
@stop

@section('content')
    <h1>Mentor aanpassen </h1>
    <hr>

    <div class="row">
        <div class="col-lg-12"> 
            
            <hr>
            <div class="row">
                    <div class="col-md-12">
                        <div class="panel panel-default">
                           
                            <div class="panel-body">
                                </div>
                                <div class="row">
                                    <div class="col-md-12 col-sm-12 col-xs-12">
                                        
                                        <div class="table-responsive">        
                                            <div>
                                                 {!! Form::model($data['mentor'],
                                                    array(
                                                        'method' => 'PUT',
                                                        'action' => ['MentorsController@update', $data['mentor']->id]
                                                        )
                                                    )
                                                !!}
                                                <thead>
                                                    <tr>    
                                                        <th>
                                                            {!! Form::label('first_name', ' Voornaam ') !!} 
                                                        </th>
                                                        <td>  
                                                            {!! Form::textarea('first_name', null, ['class' => 'form-control']); !!}
                                                        </td>
                                                    </tr>    
                                                    <tr>    
                                                        <th>
                                                            {!! Form::label('last_name', ' Achternaam ') !!} 
                                                        </th>
                                                        <td>  
                                                            {!! Form::textarea('last_name', null, ['class' => 'form-control']); !!}
                                                        </td>
                                                    </tr>     
                                                    <tr>    
                                                        <th>
                                                            {!! Form::label('description', ' Beschrijving ') !!} 
                                                        </th>
                                                        <td>  
                                                            {!! Form::textarea('description', null, ['class' => 'form-control']); !!}
                                                        </td>
                                                    </tr> 
                                                    <tr>    
                                                        <th>
                                                            {!! Form::label('date_of_birth', ' Geboortedatum ') !!} 
                                                        </th>
                                                        <td>  
                                                            {!! Form::textarea('date_of_birth', null, ['class' => 'form-control']); !!}
                                                        </td>
                                                    </tr> 
                                                </thead>    


                                               
                                                    
                                                    <div class='form-group'>
                                                        <input type='submit' class='btn btn-primary' value='aanpassen' />
                                                    </div>
                                                {!! Form::close() !!}
                                            </div>
                                        </div>
                                       
                                    </div>
                                </div>
                            </div>
                           
                        </div>
                    </div>

                </div> <!-- End row -->
                
                
                   <div class="row">

                    <div class="col-md-12">

                        <div class="panel panel-default">
                           
                            <div class="panel-body">

                                <div class="row">

                                    <div class="col-md-12 col-sm-12 col-xs-12">

                                        <div class="table-responsive">

                                            <table class="table table-hover">
                                                
                                                <tbody>
                                                   @foreach($data['mentor']->photos as $photo)
                                                    <td>

                                                        <div id='newsPhoto' class="col-lg-3">    <img style="width:100%" src="{{ $photo->path }}"> </div>

                                                    </td>
                                                    @endforeach

                                                </tbody>

                                            </table>

                                        </div>

                                    </div>

                                </div>

                            </div>

                        </div>

                    </div>

                </div> <!-- End row -->


            
                <div class="row">

                    <div class="col-md-12">

                        <h1>Foto beheren </h1>

                        <hr>

                        <div class="panel panel-default">
                           
                            <div  class="panel-body">

                                <div class="row">

                                    <div class="col-md-12 col-sm-12 col-xs-12">

                                        <div class="table-responsive">

                                            <table class="table">
                                                
                                                <tbody>

                                                    <tr>

                                                        <td>

                                                            <form  enctype="multipart/form-data" action='/cms/mentor/{{ $data['mentor']->id }}/photos' method="POST" id="PhotoUpload" class="dropzone" >
                                                                {{ csrf_field() }}
                                                            </form>

                                                        </td>

                                                    </tr>

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

@section('scripts')

<script src="https://cdnjs.cloudflare.com/ajax/libs/dropzone/4.3.0/dropzone.js"></script>
<script >
Dropzone.options.PhotoUpload = {
  maxFilesize: 25,
  accept: function(file, done) {
    console.log("uploaded");
    done();
  },
  init: function() {
    this.on("addedfile", function() {
      if (this.files[1]!=null){
        this.removeFile(this.files[0]);
      }
    });
  }
};

</script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/vue-resource/0.7.0/vue-resource.min.js"></script>
<script type="text/javascript" src="../../js/app.js"></script>

@stop