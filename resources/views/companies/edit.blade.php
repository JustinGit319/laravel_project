@extends('app')

@section('title', "Companies_Edit")

@section('theme', '編輯廠商表單')

@section('contents')
{{--    <h1>這是修改單筆廠商view </h1>--}}
    @include('message.list')
    {{Form::open(['url'=>'companies/'.$id.'/update', 'method'=>'patch'])}}
    <div class = "form-group">
        {!! Form::Label('id' , '廠商編號:') !!}
        {!! Form::Label('id', $id, [ 'class' => 'form-control']) !!}
    </div>
    <div class = "form-group">
        {!! Form::Label('company_name' , '廠商名稱:') !!}
        {!! Form::text('company_name', $company_name, [ 'class' => 'form-control']) !!}
    </div>
    <div class = "form-group">
        {!! Form::Label('country' , '所在城市:') !!}
        {!! Form::text('country', $country, [ 'class' => 'form-control']) !!}
    </div>
    {{Form::submit('確認修改此廠商')}}
    {!! Form::close() !!}

{{--    <a style="color: crimson" href="<?php echo route('companies.index');?>">回到公司的 view</a>--}}
@endsection
