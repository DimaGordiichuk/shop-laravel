<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App;
class ShopController extends Controller
{
    public function categoryBread(){
        
        $model = new \App\Shop();
        $catBread = $model::bread();
        
        return view('site.catBread',['catBread'=>$catBread]);
    }
    
    public function categoryDrinks(){
        
        $model = new \App\Shop();
        $catBread = $model::drinks();
        
        return view('site.catDrinks',['catBread'=>$catBread]);
    }
    
    public function shop(){
        return view('site.single');
    }
    
    public function single($id){
        $val = App\Shop::find($id);
        return view('site.single',compact('val'));
    }
}
