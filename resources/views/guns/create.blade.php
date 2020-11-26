@extends('app')

@section('title', "Guns_Create")
@section('contents')
這是建立槍枝的view</br>
<a style="color: crimson" href="<?php echo route('guns.index');?>">回到所有槍枝的view</a>
<hr/>
{!! Form::open(['url' => 'guns/store']) !!}
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
        {!! Form::text('company', null, [ 'class' => 'form-control']) !!}
    </div>
{!! Form::close() !!}
@endsection
