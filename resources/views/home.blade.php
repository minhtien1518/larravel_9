{{-- Home sẽ kế thừ viiew master --}}
@extends('layout.master')
{{-- section sẽ thay đổi phần yeild trong master --}}
@section('title', 'Home page')
@section('content-title', 'Home page')
@section('content')

<table class="table table-hover">
    <thead>
        <th>Tên</th>
        <th>Chiều Cao</th>
        <th>Cân Nặng</th>
        <th>Tuổi</th>
        <th>Giới Tính</th>
        <th>Lớp</th>
        <th>ID</th>
        <th>Ảnh đại diện</th>
    </thead>
    <tbody>
     @foreach ($users as $users) 
     @if ($users['id'] ==1)           
     <tr>
        <th>{{$users['name']}}</th>
        <th>{{$users['height']}}</th>
        <th>{{$users['weight']}}</th>
        <th>{{$users['age']}}</th>
        <th>{{$users['gender']}}</th>
        <th>{{$users['class']}}</th>
        <th>{{$users['id']}}</th>
        <th><img width="80px" src="{{$users['avatar']}}" alt=""></th>
    </tr>
    @endif                   
    @endforeach          
    </tbody>
</table>

@endsection


