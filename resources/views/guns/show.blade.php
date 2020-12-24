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
        <td>{{$id}}</td>
        <td>{{$gun_name}}</td>
        <td>{{$gun_type}}</td>
        <td>{{$caliber}}</td>
        <td>{{$company}}</td>
        @foreach($companies as $one_company_data)
            @if($one_company_data->id == $company)
                <td>{{$one_company_data->company_name}}</td>
            @endif
        @endforeach
    </tr>
</table>
<a style="color: crimson" href="<?php echo route('guns.index');?>">回到所有槍枝的view</a>
@endsection
