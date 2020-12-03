@extends('app')

@section('title', "Guns_Edit")
@section('contents')
<h1>這是修改一筆槍枝的view</h1>
{{Form::open(['url'=>'guns/'.$id.'/update', 'method'=>'patch'])}}
<div class = "form-group">
    {!! Form::Label('id' , 'Gun ID:') !!}
    {!! Form::Label('id', $id, [ 'class' => 'form-control']) !!}
</div>
<div class = "form-group">
    {!! Form::Label('gun_name' , 'Gun name:') !!}
    {!! Form::text('gun_name', $gun_name, [ 'class' => 'form-control']) !!}
</div>
<div class = "form-group">
    {!! Form::Label('gun_type' , 'Gun type:') !!}
    {!! Form::text('gun_type', $gun_type, [ 'class' => 'form-control']) !!}
</div>
<div class = "form-group">
    {!! Form::Label('caliber' , 'Caliber:') !!}
    {!! Form::text('caliber', $caliber, [ 'class' => 'form-control']) !!}
</div>
<div class = "form-group">
    {!! Form::Label('company' , 'Company:') !!}
    {!! Form::text('company', $company, [ 'class' => 'form-control']) !!}
</div>
{{Form::submit('確認修改此槍枝')}}
{!! Form::close() !!}
{{--<table class="text-center">--}}
{{--    <tr>--}}
{{--        <td>Gun ID</td>--}}
{{--        <td>Gun name</td>--}}
{{--        <td>Gun type</td>--}}
{{--        <td>Caliber</td>--}}
{{--        <td>company</td>--}}
{{--    </tr>--}}
{{--    <tr>--}}
{{--        <td>{{$id}}</td>--}}
{{--        <td>{{$gun_name}}</td>--}}
{{--        <td>{{$gun_type}}</td>--}}
{{--        <td>{{$caliber}}</td>--}}
{{--        <td>{{$company}}</td>--}}
{{--        @foreach($companies as $one_company_data)--}}
{{--            @if($one_company_data->id == $company)--}}
{{--                <td>{{$one_company_data->company_name}}</td>--}}
{{--            @endif--}}
{{--        @endforeach--}}
{{--    </tr>--}}
{{--</table>--}}
<a style="color: crimson" href="<?php echo route('guns.index');?>">回到所有槍枝的view</a>
@endsection
