{{-- Home sẽ kế thừ viiew master --}}
@extends('layout.master')
{{-- section sẽ thay đổi phần yeild trong master --}}
@section('title', 'Category page')
@section('content-title', 'Category page')
@section('content')
<div>
    <a href="{{route('categories.create')}}">
        <button class="btn btn-primary">Create</button>
    </a>
</div>

<table class="table table-hover">
    
    <thead>
        <th>ID</th>
        <th>Name</th>
        <th>Description</th>
        <th>Slug</th>
        <th>Status</th>
        <th>Created at</th>
        <th>Updated at</th>
        <th>Actions</th>
        
    </thead>
    <tbody>
     @foreach ($categories as $category) 
              
        <tr>
            <th>{{$category->id}}</th>
            <th>{{$category->name}}</th>
            <th>{{$category->description ?: 'N/A'}}</th>
            <th>{{$category->slug ?: 'N/A'}}</th>
            <th>{{$category->status == 1 ?  'Active' : 'Deactive'}} </th>
            <th>{{$category->created_at ?: 'N/A'}}</th>
            <th>{{$category->updated_at ?: 'N/A'}}</th>  
            <th>
                <a href="{{route('categories.edit', $category->id)}}" class="btn btn-warning">
                    Edit
                </a>
                    <form
                    action="{{route('categories.delete', $category->id)}}"
                    method="POST">
                    @method('DELETE')
                    {{-- <input type="text" name="_method" value="DELETE"> --}}
                    @csrf
                    {{-- <input type="text" name="csrf_token" value="asdadasd"> --}}
                    <button type="submit" class="btn btn-danger">
                        Delete
                    </button>
                </form>
                </th>       
        </tr>             
     @endforeach          
    </tbody>
</table>
 {{ $categories->links() }}

@endsection


