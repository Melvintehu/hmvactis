@extends('cms.master')



@section('content')
    <h1>Vacatures toevoegen </h1>
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
                                                
                                                <tbody>
                                                   {!! Form::model($vacancie, ['method' => 'PUT', 'action' => ['VacanciesController@update', $vacancie->id] ]) !!}
                                                        @include('cms.pages.vacancies.partials.form', ['submitButtonText' => 'Aanpassen' ])
                                                    {!! Form::close() !!}
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

                    <div class="panel panel-default">
                       
                        <div class="panel-body">

                            <div class="row">

                                <div class="col-md-12 col-sm-12 col-xs-12">

                                    <div class="table-responsive">

                                        <table class="table table-hover">
                                            
                                            <tbody>
                                             
                                                <td>

                                                    <div id='newsPhoto' class="col-lg-3">    <img style="width:100%" src="{{ $photo->path }}"> </div>

                                                </td>
                                             

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

                                                        <form  enctype="multipart/form-data" action='/cms/vacancie/{{ $vacancie->id }}/photos' method="POST" id="PhotoUpload" class="dropzone" >
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

           
        </div> <!--  outer column end -->

    </div> <!-- outer row end -->

@stop


@section('scripts')

<script src="https://cdnjs.cloudflare.com/ajax/libs/dropzone/4.3.0/dropzone.js"></script>
<script >
Dropzone.options.PhotoUpload = {
  maxFilesize: 5,
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

Dropzone.options.myAwesomeDropzone = {
  paramName: "file", // The name that will be used to transfer the file
  maxFilesize: 2, // MB
  accept: function(file, done) {
    if (file.name == "justinbieber.jpg") {
      done("Naha, you don't.");
    }
    else { done(); }
  }
};
</script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/vue-resource/0.7.0/vue-resource.min.js"></script>
<script type="text/javascript" src="../../js/app.js"></script>

@stop