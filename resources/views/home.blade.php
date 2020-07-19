@extends('layout.master')
@section('title')
@endsection
@section('content')
<div class="container">

<div class="panel panel-default">
    <div class="panel-heading">
        <h4 class="panel-title">
            <i class="fa fa-list"></i> รายการที่ต้องทำ
            <span class="pull-right"><a href="/create" class="btn btn-xs btn-success"><i class="fa fa-plus"></i> เพิ่มรายการ</a></span>
        </h4>
    </div>
    <table class="table table-striped table-hover">
        <thead>
            <tr>
                <th>#</th>
                <th>ชื่อรายการ</th>
                <th>หมวดหมู่</th>
                <th>สถานะ</th>
                <th>จัดการ</th>
            </tr>
        </thead>
        <tbody>
            @foreach($posts as $item)
            <tr>
                <td>{{$item->id}}</td>
                <td>{{$item->detail}}</td>
                <td>{{$item->category_id}}</td>
                <td>@if($item->status == 1)completed @else incomplete @endif</td>
                <td>
                    <a href="#" class="btn btn-warning btn-xs"><i class="fa fa-edit"></i> edit</a>
                    <a href="/delete/{{ $item->id }}" class="btn btn-danger btn-xs"><i class="fa fa-times"></i> delete</a>
                </td>
            </tr>
           @endforeach
        </tbody>
    </table>
</div>
 {{$posts->links() }}
@endsection
