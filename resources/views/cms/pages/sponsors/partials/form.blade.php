<!-- form textfield  -->
<div class='form-group'>
    {!! Form::label('name', '  Naam  ') !!}
    {!! Form::text('name', null, ['class' => 'form-control']) !!}
</div>

<!-- form textfield  -->
<div class='form-group'>
    {!! Form::label('website', '  Website adres  ') !!}
    {!! Form::text('website', null, ['class' => 'form-control']) !!}
</div>

<!-- form textfield  -->
<div class='form-group'>
    {!! Form::label('main_partner', '  Is dit jullie hoofdpartner?  ') !!}
    {!! Form::select('main_partner', array('ja' => 'ja', 'nee' => 'nee')) !!}
</div>

<!-- form textfield  -->
<div class='form-group'>
    {!! Form::label('description', '  Beschrijving  ') !!}
    {!! Form::textarea('description', null, ['class' => 'form-control']) !!}
</div>

<!-- form submit button -->
<div class='form-group'>
    {!! Form::submit($submitButtonText, ['class' => 'btn btn-success']) !!}
</div>