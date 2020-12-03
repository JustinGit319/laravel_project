@extends('app')

@section('title', "Guns")
@section('contents')
<h1>這是所有槍枝view</h1>
<br><a style="color: steelblue" href="<?php echo route('companies.index');?>">轉移至所有廠商資料的view</a>
<a style="color: crimson" href="<?php echo route('guns.create');?>">新增槍枝</a>
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
{{--            @foreach($companies as $company)--}}
{{--                @if($company->id == $gun->company)--}}
{{--                    <td>{{$company->company_name}}</td>--}}
{{--                @endif--}}
{{--            @endforeach--}}
            <td><a href="{{route('guns.show', [$id = $gun->id])}}">檢視</a></td>
            <td><a href="{{route('guns.edit', [$id = $gun->id])}}">編輯</a></td>
            <td><a href="{{route('guns.destroy', [$id = $gun->id])}}">刪除</a></td>
        </tr>
    @endforeach
</table>
@endsection
