@extends('app')

@section('title', "Guns_Show")

@section('theme', '單一筆槍枝表單')

@section('contents')
{{--<h1>這是單筆槍枝的view</h1>--}}
<table class="text-center">
    <tr>
        <td>槍械編號</td>
        <td>槍名</td>
        <td>槍種</td>
        <td>口徑</td>
        <td>廠牌名稱</td>
    </tr>
    <tr>
        <td>{{$gun->id}}</td>
        <td>{{$gun->gun_name}}</td>
        <td>{{$gun->gun_type}}</td>
        <td>{{$gun->caliber}}</td>
        <td>{{$company_name}}</td>
    </tr>
</table>
{{--<a style="color: crimson" href="<?php echo route('guns.index');?>">回到所有槍枝的view</a>--}}
@endsection
