@extends('app')

@section('title', "Companies_Edit")
@section('contents')
    <h1>這是修改單筆廠商view </h1>
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

{{--    <table class="text-center">--}}
{{--        <tr>--}}
{{--            <td>Company id</td>--}}
{{--            <td>Company name</td>--}}
{{--            <td>Country </td>--}}
{{--        </tr>--}}
{{--        <tr>--}}
{{--            <td>{{$id}}</td>--}}
{{--            <td>{{$company_name}}</td>--}}
{{--            <td>{{$country}}</td>--}}
{{--        </tr>--}}
{{--    </table>--}}
{{--    <br>--}}
    <a style="color: crimson" href="<?php echo route('companies.index');?>">回到公司的 view</a>
@endsection
