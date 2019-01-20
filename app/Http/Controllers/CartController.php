<?php

namespace App\Http\Controllers;

use Cart;
use Auth;
use Illuminate\Http\Request;
use App\Product;


class CartController extends Controller
{
    //

    public function addCart($id){
        $pro_buy= Product::where('id',$id)->first();
        $price =$pro_buy->price-$pro_buy->price*$pro_buy->discount/100;
        $image=$pro_buy->avatar;

        Cart::add(array('id'=>$id,'name'=>$pro_buy->name,'quantity'=>1,'price'=>$price,
            'attributes'=>array('img' => $image)));
        if (!empty( Auth::user()->id)){
            $userId = Auth::user()->id;
            Cart::session($userId)->add(array('id'=>$id,'name'=>$pro_buy->name,'quantity'=>1,'price'=>$price,
                'attributes'=>array('img' => $image)));}

        return redirect()->route('cart','info-order');

    }
    public function index()
    {
        $content= Cart::getContent()->toArray();
        $total= Cart::getTotal ();
        return view('font-end/product.cart',compact('content','total'));

    }
    public function removeCart(Request $request){
        $id=$request->id;
        Cart::remove($id);
        $content= Cart::getContent()->toArray();
        $total= Cart::getTotal ();
        $TotalQuantity = Cart::getTotalQuantity ();
        $TotalQuantity = Cart::getTotalQuantity ();
        if($content==null){
            echo ("Null");
        }else{
            $data['total']=number_format($total);
            $data['number']=number_format($TotalQuantity);
            return $data ;
        }
    }
    public function updateCart(Request $request)
    {
        $id=$request->id;
        $quantity=$request->qty;
        Cart::update($id, array(
            'quantity' => array(
                'relative' => false,
                'value' => $quantity
            ),
        ));
        $summedPrice = Cart::get($id)->getPriceSum();
        $total= Cart::getTotal ();
        $TotalQuantity = Cart::getTotalQuantity ();
        $data['price']=number_format($summedPrice);
        $data['total']=number_format($total);
        $data['number']=number_format($TotalQuantity);
        return  $data;
    }
}
