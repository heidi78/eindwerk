<?php

namespace App\Http\Controllers;

use App\Product;
use App\Brand;
use App\Category;
use App\User;
use App\Photo;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Http\Requests;

class ProductsController extends HomeController
{
    public function __construct()
    {
         $this->middleware('auth');
         $this->products = Product::all();
     }
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
        $products = Product::paginate(3);
        $brands = Brand::pluck('name','id')->all();
        $categories = Category::pluck('name','id')->all();
        $users = User::pluck('name','id')->all();
        return view('admin.products.index', compact('products','brands', 'categories', 'users'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
        $brands = Brand::pluck('name','id')->all();
        $categories = Category::pluck('name','id')->all();
        $users = User::pluck('name','id')->all();
        return view('admin.products.create', compact('brands', 'categories', 'users'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
        $input = $request->all();
        if($file = $request->file('photo_id')){
            $name = time() . $file->getClientOriginalName();
            $file->move('images', $name);
            $photo = Photo::create(['file'=>$name]);
            $input['photo_id'] = $photo->id;
        }

        Product::create($input);
        return redirect('/admin/products');
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
        //
        $product = Product::findOrFail($id);//ophalen uit database
        $categories = Category::pluck('name','id')->all();
        $brands = Brand::pluck('name','id')->all();
        $users = User::pluck('name','id')->all();
        
        return view('admin.products.edit', compact('product', 'categories', 'brands', 'users'));
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
        //
        $product = Product::findOrFail($id);
        $input = $request->all();
        if($file = $request->file('photo_id')){
            $name = time() . $file->getClientOriginalName();
            $file->move('images', $name);
            $photo = Photo::create(['file'=>$name]);
            $input['photo_id'] = $photo->id;
        }
        
        $product->update($input);
        return redirect('/admin/products');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
        $product = Product::findOrFail($id);
        $product->delete();
        return redirect('/admin/products');
    }
}
