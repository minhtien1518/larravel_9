<?php

namespace App\Http\Controllers;

use App\Models\Product;
use Illuminate\Support\Str;
use Illuminate\Http\Request;

class ProductController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    // trả về danh sách các bản ghi mới
    public function index()
    {
        
        $products = Product::all();
        $productsGet = Product::select('*')
        ->orderBy('id','desc')
        ->paginate(10);
        return view('product.index', ['products' =>  $productsGet]);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    // 
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    //trả về thông tin 1 bản ghi theo id
    public function show($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    //cập nhật thông tin của 1 bản ghi
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    //xóa 1 bản ghi product
    
    
    public function delete(Product $delete) {
        
        if ($delete->delete()) {
            return redirect()->route('products.index');
        }       
        $productDelete = Product::destroy($delete);
        if ($productDelete !== 0) {
            return redirect()->route('products.index');
        }
    }
}
