<?php

namespace App\Http\Controllers;

use Illuminate\http\Request;
use Illuminate\Support\Facades\DB;

class ProductController extends Controller {
    function index(){
        $products = DB::select("Select * from products");
        $data = [
            'products' => $products
        ];
        return view('product/index', $data);
    }

    function add(Request $request){

        $data = [
            'success'=> false
        ];
        
        if ($request->isMethod('post')){
            $productName = $request->input('product_name');
            $productPrice = $request->input('product_price');
            $rating = $request->input('rating');
            
            $returnValue = DB::insert('insert into products (name, price, rating) values (?, ?, ?)', 
            [$productName, $productPrice, $rating]);
        
            if($returnValue){
                $data =[
                    'success' => 1
                ];
            }
        }

        return view('product/add', $data);
    }


    function discount(Request $request){

    $productName = $request->input('product_name');
    $productPrice = $request->input('product_price');
    $discount = $request->input('discount');

    $payment = $productPrice - (($discount/100)*$productPrice);

    $data = [
        'productName'=> $productName,
        'productPrice'=> number_format($productPrice,0,',','.'),
        'discount'=> $discount,
        'payment'=>number_format($payment,0,',','.'),
    ];
        return view('product/discount', $data);
    }


    function detail($product_id, Request $request){
        $products = DB::select('Select * from products where id=?', [$product_id]);
        // dd($products);
        //ambil first element
        $product = reset($products);
        $data = [
            'product'=>$product
        ];

        return view ('product/detail', $data);
    }


    function edit($product_id, Request $request){
        $products = DB::select('Select * from products where id=?', [$product_id]);
        
        $product = reset($products);
        
        $success= false;

        if($request->isMethod('post')){
            $productName = $request->input('product_name');
            $productPrice = $request->input('product_price');
            $rating = $request->input('rating');
            
            $returnValue = DB::update('update products set name=?, price=?, rating=? where id=?', 
            [$productName, $productPrice, $rating, $product_id]);

            if($returnValue){
                $success = true;
            }
        }

        $data = [
            'product'=>$product,
            'success'=>$success
        ];

        return view ('product/edit', $data);
    }


    function delete(Request $request){
        $productId = $request->input('product_id');

        $returnValue = DB::delete('DELETE from products WHERE id=?', [$productId]);

        if($returnValue){
            return "data deleted";
        }else {
            return "Error";
        }
    }
}