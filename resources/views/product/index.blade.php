{{-- Home sẽ kế thừ viiew master --}}
@extends('layout.master')
{{-- section sẽ thay đổi phần yeild trong master --}}
@section('title', 'Category page')
@section('content-title', 'Category page')
@section('content')


<table class="table table-hover">
    
    <thead>
        <th>ID</th>
        <th>Name</th>
        <th>Price</th>
        <th>Actions</th>
        
    </thead>
    <tbody>
     @foreach ($products as $product) 
              
        <tr>
            <th>{{$product->id}}</th>
            <th>{{$product->name}}</th>
            <th>{{$product->price ?: 'N/A'}}</th>
             
            <th>              
                    <form
                    action="{{route('products.delete', $product->id)}}"
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
 {{ $products->links() }}

@endsection