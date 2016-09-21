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

                <div class="col-lg-6">
                    
                    <p> Sleep om een selectie te maken van de afbeelding. </p>

                </div>

                <div class="col-lg-6"> 

                    <p> Zo komt de afbeelding eruit te zien op de website. </p>

                </div> 

                @foreach($news->photos as $photo)

                <div class="col-lg-6 ">
                    


                    <div style="width: 250px; height:150px" class="dragncrop"> 
                 
                        <div class="dragncrop-containment" style="top: 0px; bottom: 0px; left: -100px; right: -100px; position: absolute;"></div>

                        <img src="../../{{$photo->path}}" id="demo1" class="dragncrop-horizontal ui-draggable" style="position: relative; left: -4px;"> 

                    </div>

                </div>


                <div class="col-lg-6">
                    
                        <div style="width:250px;height:150px;overlow:hidden;">
                            
                            <img style="height:100%;" src="../../{{$photo->thumbnail_path}}"   >

                        </div>

                </div>

                <div class="col-lg-12" style="margin-top: 20px;"> 

                    {!! Form::model($news, ['method' => 'POST', 'action' => ['NewsController@choosePhotoArea', $news->id ] ]) !!} 
                        
                        {{ csrf_field() }}
                                                                  
                        {!! Form::hidden('leftTrim', null, [ 'id' => 'leftTrim' ,'class' => 'form-control']) !!}
                        {!! Form::hidden('rightTrim', null, [ 'id' => 'rightTrim' ,'class' => 'form-control']) !!}

                        <button class="btn btn-primary"> Foto opslaan </button>

                    {!! Form::close() !!}
                                          

                </div>

                @endforeach


            </div>

            
            
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
<script type="text/javascript">
$('#demo1').dragncrop({overlay: true, overflow: true, drag: function(event, position){
    
    var leftTrim;
    var rightTrim;







    $("#demo1") // Make in memory copy of image to avoid css issues
    .attr("src", $('#demo1').attr("src"))
    .load(function() {

        pic_real_width = this.naturalWidth;   // Note: $(this).width() will not
        pic_real_height = this.naturalHeight; // work for in memory images.

        var imageContainerWidth = $(this).width();
       
        var percentage = ( 100 / imageContainerWidth ) * pic_real_width;
        
        leftTrim = Math.round($(this).width() / 100 * ( position.dimension[0] * 100 ));
        rightTrim = Math.round(($(this).width() - 250 ) - leftTrim ) ;



        rightTrim = Math.round((rightTrim / 100 ) * percentage) - 1;
        leftTrim = Math.round((leftTrim / 100) * percentage) ;

        if(rightTrim < 0){
            rightTrim = 0;
        } 

        if($(this).width() == 250 ){
            leftTrim = 0;
            rightTrim = 0;
        }


        $('#leftTrim').val(leftTrim);
        $('#rightTrim').val(rightTrim);

    });    


  
   



 
}} );


// $('#demo1').dragncrop('getPosition');
</script>



<script src="https://cdnjs.cloudflare.com/ajax/libs/dropzone/4.3.0/dropzone.js"></script>
<script >
Dropzone.options.PhotoUpload = {
  maxFilesize: 20,
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