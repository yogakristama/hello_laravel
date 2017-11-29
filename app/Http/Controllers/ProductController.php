<?php

namespace App\Http\Controllers;

use Illuminate\http\Request;

class ProductController extends Controller {
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
}