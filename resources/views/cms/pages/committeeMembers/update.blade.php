@extends('cms.master')

@section('content')

    <h1>Commissielid aanpassen </h1>

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

                                                   {!! Form::model($committeeMember, ['method' => 'PUT', 'action' => [ 'CommitteeMembersController@update', $committeeMember->id ]]) !!}

                                                        @include('cms.pages.committeeMembers.partials.form', ['submitButtonText' => 'Aanpassen' ])

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

            <div class="col-lg-12">
                
            <h1> Foto selectie maken </h1>

            </div>
 
                <div class="col-lg-6">
                    
                    <p> Sleep om een selectie te maken van de afbeelding. </p>

                </div>

                <div class="col-lg-6"> 

                    <p> Zo komt de afbeelding eruit te zien op de website. </p>

                </div> 

                @foreach($committeeMember->photos as $photo)

                <div class="col-lg-6 ">
                    


                    <div id='container' style="width: 150px; height:150px" class="dragncrop"> 
                 
                        <div  class="dragncrop-containment" style="top: 0px; bottom: 0px; left: -100px; right: -100px; position: absolute;"></div>

                        <img src="../../{{$photo->path}}" id="demo1" class="dragncrop-horizontal ui-draggable" style="height:100%;position: relative; left: -4px;"> 

                    </div>

                </div>


                <div class="col-lg-6">
                    
                        <div style="border-radius:2000px;overflow:hidden;width:150px;height:150px;overlow:hidden;border-style:solid;border-width:1px; border-color:rgba(0,0,0,.4)">
                            
                            <img style="height:100%;" src="../../{{$photo->thumbnail_path}}"   >

                        </div>

                </div>

                <div class="col-lg-12" style="margin-top: 20px;"> 

                    {!! Form::model($committeeMember, ['method' => 'POST', 'action' => ['CommitteeMembersController@choosePhotoArea', $committeeMember->id ] ]) !!} 
                        
                        {{ csrf_field() }}
                                                                  
                        {!! Form::hidden('leftTrim', null, [ 'id' => 'leftTrim' ,'class' => 'form-control']) !!}
                        {!! Form::hidden('rightTrim', null, [ 'id' => 'rightTrim' ,'class' => 'form-control']) !!}

                        <button id='resizeImage' class="btn btn-primary"> Foto opslaan </button>

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

                                                            <form  enctype="multipart/form-data" action='/cms/committeeMember/{{ $committeeMember->id }}/photos' method="POST" id="PhotoUpload" class="dropzone" >
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
<script type="text/javascript">
$('#resizeImage').hide();
$('#demo1').dragncrop({overlay: true, overflow: true, drag: function(event, position){
    
    var leftTrim;
    var rightTrim;

    $('#resizeImage').show();

    $("#demo1") // Make in memory copy of image to avoid css issues
    .attr("src", $('#demo1').attr("src"))
    .load(function() {

        pic_real_width = this.naturalWidth;   // Note: $(this).width() will not
        pic_real_height = this.naturalHeight; // work for in memory images.

        var imageContainerWidth = $(this).width();
       
        var percentage = ( 100 / imageContainerWidth ) * pic_real_width;
        
        leftTrim = Math.round($(this).width() / 100 * ( position.dimension[0] * 100 ));
        rightTrim = Math.round(($(this).width() - $("#container").width() ) - leftTrim ) ;

        rightTrim = Math.round((rightTrim / 100 ) * percentage) - 1;
        leftTrim = Math.round((leftTrim / 100) * percentage) ;

        if(rightTrim < 0){
            rightTrim = 0;
        } 

        if($(this).width() == $("#container").width() ){
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
  maxFilesize: 15,
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