<?php

namespace App\Http\Controllers;

use App\Brand;
use App\Category;
use App\Product;
use App\Photo;
use App\Slider;


use Illuminate\Support\Facades\DB;
use App\Http\Controllers\Controller;

use Illuminate\Support\Facades\Redirect;
use Request;
use Cart;

class Front extends HomeController
{
    //
    var $brands;
    var $categories;
    var $products;
    var $title;
    var $description;
    var $cat_less;
    var $cart;

    public function __construct(){
        $this->brands = Brand::all(array('name'));
        $this->categories = Category::all();
        $this->products = Product::all();
    }

    public function index(){
        $brands = Brand::all();
        $categories = Category::all();
        $products = Product::paginate(4);
        $cat_less = Category::whereIn('id', [1, 2, 3])
                    ->get();
        $sliders = Slider::all();
    	return view('home2',compact('brands', 'categories', 'products', 'cat_less', 'sliders'));
    }

    public function products(){
        $products = Product::paginate(4);
        $brands = Brand::all();
        $categories = Category::all();
    	
        return view('products',compact('brands','categories','products'));
    }

    public function products_details($id){
        $product = Product::find($id);
        $this->cart = Cart::content();
        $this->products = Product::limit(4)->get();

        $products = Product::paginate(4);
        return view('product_detail',array('product' => $product,'title'=>$product->name,
            'description'=>$product->description, 'page'=>'products',
            'brands'=>$this->brands, 'categories' => $this->categories, 'products'=>$this->products, 'cart'=>$this->cart ));
    }

    public function product_categories($name){
    	return view('products',array('title' => 'Welcome', 'description'=>'lorem ipsum', 'page'=>'products',
            'brands'=>$this->brands, 'categories' => $this->categories, 'products'=>$this->products ));
    }

    public function product_brands($name, $category = null){
    	 return view('products',array('title' => 'Welcome', 'description'=>'lorem ipsum', 'page'=>'products',
            'brands'=>$this->brands, 'categories' => $this->categories, 'products'=>$this->products ));
    }

    public function login(){
    	return view('login',array('title' => 'Welcome', 'description'=>'lorem ipsum', 'page'=>'admin.index'));
    }

    public function logout(){
    	return view('home2',array('title' => 'Welcome', 'description'=>'lorem ipsum', 'page'=>'home2'));
    }

    
    public function checkout(){
        $brands = Brand::all();
        $categories = Category::all();
    	return view('checkout',compact('brands', 'categories'));
    }

    public function cart(){
        $categories = Category::all();
        $brands = Brand::all();
        $product = Product::all();
        if(Request::isMethod('post')){
            $product_id = Request::get('product_id');
            $product = Product::find($product_id);
            Cart::add(array('id' => $product_id, 'name' => $product->name, 'qty' => 1, 'price' => $product->price, 'photo'=>$product->photo));
        }
        $cart = Cart::content();

        //increment
        if (Request::get('product_id') && (Request::get('increment')) == 1) {
            $item = Cart::search(
                function($key, $value) {
                    return $key->id == Request::get('product_id');
                })->first();
            Cart::update($item->rowId, $item->qty + 1);
        }

        if (Request::get('product_id') && (Request::get('decrease')) == 1) {
            $item = Cart::search(function($key, $value) { return $key->id == Request::get('product_id'); })->first();
            Cart::update($item->rowId, $item->qty - 1);
        }

               //delete item
        if (Request::get('product_id') && (Request::get('delete')) == 1) {
            $item = Cart::search(function($key, $value) { return $key->id == Request::get('product_id'); })->first();
            Cart::remove($item->rowId);
        }

        return view('cart',compact('cart', 'categories', 'brands', 'product')
        );

    }

     public function clear_cart(){
        Cart::destroy();
        return Redirect::away('cart');
    }
}
