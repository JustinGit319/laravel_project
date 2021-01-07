@extends('app')

@section('title', "Companies_Show")

@section('theme', '單一筆廠商表單')

@section('contents')
{{--    <a style="color: crimson" href="<?php echo route('companies.index');?>">回到公司的 view</a>--}}
{{--    <h1>這是單筆廠商view</h1>--}}
    <table class="text-center">
        <tr>
            <td>廠商編號</td>
            <td>廠商名稱</td>
            <td>所在地區</td>
        </tr>
        <tr>
            <td>{{$company->id}}</td>
            <td>{{$company->company_name}}</td>
            <td>{{$company->country}}</td>
        </tr>
    </table>
    <br>

    <table class="text-center">
        <tr>
            <td style="color: crimson">槍械編號</td>
            <td style="color: deepskyblue">槍名</td>
            <td style="color: blueviolet">槍種</td>
            <td style="color: steelblue">口徑</td>
        </tr>
        @foreach($guns as $gun)
            <tr>
                <td>{{$gun->id}}</td>
                <td>{{$gun->gun_name}}</td>
                <td>{{$gun->gun_type}}</td>
                <td>{{$gun->caliber}}</td>
                <td>{{$gun->company_name}}</td>
            </tr>
        @endforeach
    </table>



@endsection
