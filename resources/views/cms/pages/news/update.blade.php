@extends('cms.master')

@section('content')
    
    <h1>Nieuwsberichten Aanpassen </h1>
   
    <hr>

    <div class="row"> <!-- outer row start -->

        <div class="col-lg-12">  <!--  Outer column start- -->


            <div class="row">

                <div class="col-md-12">

                    <div class="panel panel-default">
                       
                        <div class="panel-body">

                            <div class="row">

                                <div class="col-md-12 col-sm-12 col-xs-12">

                                    <div class="table-responsive">

                                        <table class="table table-hover">
                                            
                                            <tbody>

                                               {!! Form::model($news, ['method' => 'PUT', 'action' => ['NewsController@update', $news->id ] ]) !!} 
                                                    {{ csrf_field() }}
                                                    @include('cms.pages.news.partials.form', ['submitButtonText' => 'Aanpassen' ])

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

                                                        <form  enctype="multipart/form-data" action='/cms/news/{{ $news->id }}/photos' method="POST" id="PhotoUpload" class="dropzone" >
                                                            {{ csrf_field() }}

                                                            <input type="number" id='width' name="width">
                                                            <input type="number" id='height' name="height">
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
    <div style="width: 200px; height:200px" class="dragncrop"> 
         @foreach($news->photos as $photo)
        <div class="dragncrop-containment" style="top: 0px; bottom: 0px; left: -100px; right: -100px; position: absolute;"></div>
        <img src="../../{{$photo->path}}" id="demo1" class="dragncrop-horizontal ui-draggable" style="position: relative; left: -4px;"> </div>
        
       
       
                                                
          

                                               
                                                @endforeach

      
    </div>
@stop


@section('scripts')
<script type="text/javascript">
$('#demo1').dragncrop({overlay: true, overflow: true, drag: function(event, position){
    console.log(position.dimension[0]);

    $('#width').val(position.dimension[0]);
    $('#height').val(position.dimension[1] * 100);
}} );
</script>



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



@stop