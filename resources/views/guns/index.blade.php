@extends('app')

@section('title', "Guns")

@section('theme', '所有槍枝表單')

@section('contents')
{{--<h1>這是所有槍枝view</h1>--}}
<br><a style="color: steelblue" href="<?php echo route('companies.index');?>">轉移至所有廠商資料的view</a>
<a style="color: crimson" href="<?php echo route('guns.create');?>">新增槍枝</a><br>
<a style="color: crimson" href="<?php echo route('guns.guntype');?>">查詢步槍</a><br>

{{--{!! Form::open(['url' => 'guns/gun_type']) !!}--}}
{{--<div class = "form-group">--}}
{{--    {!! Form::Label('gun_type' , '篩選槍種:') !!}--}}
{{--    {!! Form::select('gun_type', $guntypes) !!}--}}
{{--</div>--}}
{{--{{Form::submit('查詢')}}--}}
{{--{!! Form::close() !!}--}}

<table class="text-center">
    <tr>
        <td style="color: crimson">槍械編號</td>
        <td style="color: deepskyblue">槍名</td>
        <td style="color: blueviolet">槍種</td>
        <td style="color: steelblue">口徑</td>
        <td style="color: steelblue">廠牌名稱</td>
        <td style="color: crimson">詳細</td>
        <td style="color: deepskyblue">編輯</td>
        <td style="color: deepskyblue">操作</td>
    </tr>
    @foreach($guns as $gun)
        <tr>
            <td>{{$gun->id}}</td>
            <td>{{$gun->gun_name}}</td>
            <td>{{$gun->gun_type}}</td>
            <td>{{$gun->caliber}}</td>
            <td>{{$gun->company_name}}</td>
            <td><a href="{{route('guns.show', [$id = $gun->id])}}">檢視</a></td>
            <td><a href="{{route('guns.edit', [$id = $gun->id])}}">編輯</a></td>
            <td><a href="{{route('guns.destroy', [$id = $gun->id])}}">刪除</a></td>
        </tr>
    @endforeach
</table>
@endsection
