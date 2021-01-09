<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Product;
use App\ProductType;


class ProductController extends Controller
{
    //
	public function index(){

  // lay 4 san pham moi nhat
     $new_products = Product::where('new',1)->orderBy('created_at','desc')->paginate(4);
            // ->limit(4)         
            // ->get();


// những sản phẩm có giá kmai khác 0 sẽ được lấy ra bỏ vô top product
        $sanpham_km = Product::where('promotion_price','<>',0)->paginate(8);
                        // ->limit(8)
                        // ->get();


    return view('ban-banh.index',compact('new_products','sanpham_km')); 
}


   // public function index(){

       // $top_products = Product::where('top',1)
       //                 ->orderBy('created_at','desc')
       ///                 ->limit(15)                  
       //                 ->get();

      //  return view('ban-banh.index',array(
       //     'top_products' => $top_products,
       // ));
    //}

    public function getAllProducts(){
    	//get all products from db
		$products = Product::all();

		//show all products to client
		foreach ($products as $key => $value) {
			echo $key . ' - ' . $value->name . '<br>';
		}
    }

    public function getProductByType($id){
    	$products = Product::where('id_type',$id)->get();
    	$type = ProductType::all();

    	return view('ban-banh.product-by-type',array(
    		'products' => $products,
    		'type' => $type
    	));
    }

    public function getProductDetail($id){
    	$product = Product::find($id);

    	if($product){
    		return view('ban-banh.product-detail',array(
    			'product' => $product,
    		));
    	}else{
    		return redirect()->back();
    	}
    }
}
