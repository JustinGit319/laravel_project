@extends('app')

@section('title', "Guns_Edit")
@section('contents')
<h1>這是修改一筆槍枝的view</h1>
@include('message.list')
{{Form::open(['url'=>'guns/'.$id.'/update', 'method'=>'patch'])}}
<div class = "form-group">
    {!! Form::Label('gun_name' , '槍枝名稱:') !!}
    {!! Form::text('gun_name', $gun_name, [ 'class' => 'form-control']) !!}
</div>
<div class = "form-group">
    {!! Form::Label('gun_type' , '槍枝種類:') !!}
    {!! Form::text('gun_type', $gun_type, [ 'class' => 'form-control']) !!}
</div>
<div class = "form-group">
    {!! Form::Label('caliber' , '口徑:') !!}
    {!! Form::text('caliber', $caliber, [ 'class' => 'form-control']) !!}
</div>
<div class = "form-group">
    {!! Form::Label('company' , '廠商名稱:') !!}
    {!! Form::select('company', $companies, $company) !!}
</div>
{{Form::submit('確認修改此槍枝')}}
{!! Form::close() !!}
<a style="color: crimson" href="<?php echo route('guns.index');?>">回到所有槍枝的view</a>
@endsection
