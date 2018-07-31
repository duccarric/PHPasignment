<?php

namespace App\Http\Controllers;

use App\product;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Input;

class productController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {

        $product = product::all();
        return view('product/list')->with('products',$product);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('product/create');

    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store()
    {

       $product = new product();
      $product->name = Input::get('Name');
      $product->category_id = Input::get('Category');
       $product->price = Input::get('Price');
       $product->image = Input::get('Image');
      $product->save();
       return redirect('/product');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $productedit = product::find($id);
        if($productedit == null){
            return 'Product not found';
        }
        return view('product/edit') -> with('product', $productedit);

    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $product = product::find($id);
        if($product == null){
            return 'Sản phẩm không tồn tại hoặc đã bị xóa.';
        }
        $product = new product();
        $product->name = Input::get('Name');
        $product->category_id = Input::get('Category');
        $product->price = Input::get('Price');
        $product->image = Input::get('Image');
        $product->save();
        return redirect('/product');

    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {

       product::destroy($id);
       return redirect('/product');
    }
}
