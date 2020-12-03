@extends('app')

@section('title', "Companies_Create")
@section('contents')
這是建立廠商的view </br>
<a style="color: crimson" href="<?php echo route('companies.index');?>">回到公司的 view</a>
<hr/>
{!! Form::open(['url' => 'companies/store']) !!}
    <div class = "form-group">
        {!! Form::Label('company_name' , '廠商名稱:') !!}
        {!! Form::text('company_name', null, [ 'class' => 'form-control']) !!}
    </div>
    <div class = "form-group">
        {!! Form::Label('country' , '所在城市:') !!}
        {!! Form::text('country', null, [ 'class' => 'form-control']) !!}
    </div>
        {{Form::submit('新增此廠商')}}
{!! Form::close() !!}
@endsection
