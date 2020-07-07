<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Product;

class ProductsController extends Controller
{
    public function index() {
      $list_products = Product::all();
      return view('products', ['products' => $list_products]);
    }
}
