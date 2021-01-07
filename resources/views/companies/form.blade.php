<div class = "form-group">
    {!! Form::Label('company_name' , '廠商名稱:') !!}
    {!! Form::text('company_name', null, [ 'class' => 'form-control']) !!}
</div>
<div class = "form-group">
    {!! Form::Label('country' , '所在國家:') !!}
    {!! Form::text('country', null, [ 'class' => 'form-control']) !!}
</div>
<div class="form-group">
    {!! Form::submit($submitButtonText, ['class'=>'btn btn-primary form-control']) !!}
</div>
