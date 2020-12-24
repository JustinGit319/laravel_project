@extends('app')

@section('title', "Companies")

@section('theme', '所有廠商表單')

@section('contents')
{{--    <h1>這是所有廠商資料view</h1>--}}
{{--    <br><a style="color: steelblue" href="<?php echo route('guns.index');?>">轉移至所有槍枝資料的view</a>--}}
    <div class="p-6 border-t border-gray-200 dark:border-gray-700 md:border-t-0 md:border-l">
        <a style="color: crimson" href="<?php echo route('companies.create');?>">新增廠商</a>
    </div>

    <table>
        <tr>
            <td style="color: crimson">廠商編號</td>
            <td style="color: deepskyblue">廠商名稱</td>
            <td style="color: blueviolet">所在地區</td>
            <td style="color: crimson">詳細</td>
            <td style="color: deepskyblue">編輯</td>
            <td style="color: deepskyblue">操作</td>
        </tr>
        @foreach($companies as $company )
            <tr>
                <td>{{$company->id}}</td>
                <td>{{$company->company_name}}</td>
                <td>{{$company->country}}</td>
                <td><a href="{{route('companies.show', [$id = $company->id])}}">檢視</a></td>
                <td><a href="{{route('companies.edit', [$id = $company->id])}}">修改</a></td>
                <td><a href="{{route('companies.destroy', [$id = $company->id])}}">刪除</a></td>
        @endforeach
    </table>
@endsection

