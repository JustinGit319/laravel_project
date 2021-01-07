@extends('app')

@section('title', "Guns")

@section('theme', '所有槍枝表單')

@section('contents')

    <div class="p-6 border-t border-gray-200 dark:border-gray-700 md:border-t-0 md:border-l">
{{--        <br><a style="color: steelblue" href="<?php echo route('companies.index');?>">轉移至所有廠商資料的view</a>--}}
        <a style="color: crimson" href="<?php echo route('guns.create');?>">新增槍枝</a><br>
        <form action="{{ url('guns/guntype') }}" method='POST'>
            {!! Form::label('type', '選取槍枝種類：') !!}
            {!! Form::select('type', $guntypes, ['class' => 'form-control']) !!}
            <input class="btn btn-default" type="submit" value="查詢" />
            @csrf
        </form>
    </div>

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
            <td>{{$gun->obj_company->company_name}}</td>
            <td><a href="{{route('guns.show', [$id = $gun->id])}}">檢視</a></td>
            <td><a href="{{route('guns.edit', [$id = $gun->id])}}">編輯</a></td>
            <td><a href="{{route('guns.destroy', [$id = $gun->id])}}">刪除</a></td>
        </tr>
    @endforeach
</table>
@endsection
