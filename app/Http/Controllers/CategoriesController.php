<?php

namespace App\Http\Controllers;

use App\Categories;
use App\Goods;
use Illuminate\Http\Request;

class CategoriesController extends Controller
{
    public function categoryAction($name){
        $category = Categories::find(['latin-url' =>$name]);
        if ($category){
            &goods = Goods::find(['categories_id' => $category=>id]);

            return view('goods', ['goods'=> $goods]});
        }
    }
}
