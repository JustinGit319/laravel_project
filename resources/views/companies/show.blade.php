@extends('app')

@section('title', "Companies_Show")
@section('contents')
    <h1>這是單筆廠商view</h1>
    <table class="text-center">
        <tr>
            <td>Company id</td>
            <td>Company name</td>
            <td>Country </td>
        </tr>
        <tr>
            <td>{{$id}}</td>
            <td>{{$company_name}}</td>
            <td>{{$country}}</td>
        </tr>
    </table>
    <br>
    <a style="color: crimson" href="<?php echo route('companies.index');?>">回到公司的 view</a>
@endsection
