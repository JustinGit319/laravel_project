@extends('app')

@section('title', "Guns_Create")

@section('theme', '建立槍枝表單')

@section('contents')
{{--這是建立槍枝的view</br>--}}
{{--    <a style="color: crimson" href="<?php echo route('guns.index');?>">回到所有槍枝的view</a>--}}
{{--<hr/>--}}
@include('message.list')
    {!! Form::open(['url' => 'guns/store']) !!}
    @include('guns.form', ['submitButtonText'=>'新增槍枝資料'])
    {!! Form::close() !!}
@endsection
