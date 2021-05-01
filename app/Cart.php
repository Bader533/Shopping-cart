<?php

namespace App;


class Cart
{
    public $item =[];
    public $totalQty;
    public $totalprice;

    public function __construct($cart =null)
    {
        if($cart)
        {
            $this->item=$cart->item;
            $this->totalQty=$cart->totalQty;
            $this->totalprice=$cart->totalprice;
        }else{
            $this->item=[];
            $this->totalQty=0;
            $this->totalprice=0;
        }

        
    }

    public function add($product)
    {
        $item=[
            'title'=>$product->title,
            'price'=>$product->price,
            'Qty'=>0,
            'image'=>$product->image,
        ];
        //قبل الاضافة ل البطلقة يجب التاكد من انت المنتج موجود فى ال
        // item
        if(!array_key_exists($product->id,$this->item))
        {
            $this->item[$product->id]=$item;
            $this->totalQty+=1;
            $this->totalprice+=$product->price;
        }else{
            $this->totalQty+=1;
            $this->totalprice+=$product->price;
        }
        $this->item[$product->id]['Qty'] += 1;
 
    }
}
