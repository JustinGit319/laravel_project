@extends('app')

@section('title', "Guns_Edit")

@section('theme', '修改槍枝表單')

@section('contents')
{{--<h1>這是修改一筆槍枝的view</h1>--}}
@include('message.list')
{!! Form::model($gun, ['method'=>'PATCH', 'action'=>['\App\Http\Controllers\GunsController@update', $gun->id]]) !!}
    @include('guns.form', ['submitButtonText'=>'修改槍枝資料'])
{!! Form::close() !!}
{{--<a style="color: crimson" href="<?php echo route('guns.index');?>">回到所有槍枝的view</a>--}}
@endsection
