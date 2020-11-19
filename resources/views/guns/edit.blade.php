@extends('app')

@section('title', "Guns_Edit")
@section('contents')
<h1>這是修改一筆槍枝的view</h1>
<table class="text-center">
    <tr>
        <td>Gun ID</td>
        <td>Gun name</td>
        <td>Gun type</td>
        <td>Caliber</td>
        <td>company</td>
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
