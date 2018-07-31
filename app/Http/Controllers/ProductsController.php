<?php

namespace storage\Http\Controllers;

use Illuminate\Support\Facades\DB;
use Request;

class ProductsController extends Controller {

    public function list() {
        $products = DB::select('SELECT * FROM products');

        if (view()->exists('products')) {
            return view('products')->withProducts($products);
        }
    }

    public function details($id) {
        $product = DB::select('SELECT * FROM products WHERE id = ?', [$id]);

        if (empty($product)) {
            return 'Product not found.';
        }

        return view('details')->with('product', $product[0]);
    }
}
