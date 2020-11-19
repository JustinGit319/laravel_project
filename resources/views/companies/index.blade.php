@extends('app')

@section('title', "Companies")
@section('contents')
    <h1>這是所有廠商資料view</h1>
    <br><a style="color: steelblue" href="<?php echo route('guns.index');?>">轉移至所有槍枝資料的view</a>
    <a style="color: crimson" href="<?php echo route('companies.create');?>">新增廠商</a>
    <table>
        <tr>
            <td style="color: crimson">公司編號</td>
            <td style="color: deepskyblue">公司名稱</td>
            <td style="color: blueviolet">所在地區</td>
            <td style="color: crimson">操作</td>
            <td style="color: deepskyblue">編輯</td>
        </tr>
        @foreach($companies as $company )
            <tr>
                <td>{{$company->id}}</td>
                <td>{{$company->company_name}}</td>
                <td>{{$company->country}}</td>
                <td><a href="{{route('companies.show', [$id = $company->id])}}">檢視</a></td>
                <td><a href="{{route('companies.edit', [$id = $company->id])}}">修改</a></td>
        @endforeach
    </table>
@endsection

