<div class = "form-group">
    {!! Form::Label('gun_name' , '槍枝名稱:') !!}
    {!! Form::text('gun_name', null, [ 'class' => 'form-control']) !!}
</div>
<div class = "form-group">
    {!! Form::Label('gun_type' , '槍枝種類:') !!}
    {!! Form::text('gun_type', null, [ 'class' => 'form-control']) !!}
</div>
<div class = "form-group">
    {!! Form::Label('caliber' , '口徑:') !!}
    {!! Form::text('caliber', null, [ 'class' => 'form-control']) !!}
</div>

<div class = "form-group">
    {!! Form::Label('company' , '廠商名稱:') !!}
    {{ Form::select('company', $companies) }}
</div>
<div class="form-group">
    {!! Form::submit($submitButtonText, ['class'=>'btn btn-primary form-control']) !!}
</div>
