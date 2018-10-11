<?php

namespace storage\Http\Controllers;

use Illuminate\Support\Facades\DB;
use Request;

class ProductsController extends Controller {

    public function list() {
        $products = $this->getProducts();

        if (view()->exists('products/list') && !empty($products)) {
            return view('products/list')->withProducts($products);
        }
    }

    public function details($id) {
        $product = DB::select('SELECT * FROM products WHERE id = ?', [$id]);


        if (empty($product)) {
            return 'Product not found.';
        }

        return view('products/details')->with('product', $product[0]);
    }

    public function new() {
        return view('products/new');
    }

    public function add() {
        $name = Request::input('name');
        $desc = Request::input('description');

        $insert = DB::insert('INSERT INTO products VALUES (null, ?, ?)', array($name, $desc));

        if ($insert) {
            return redirect()
                ->action('ProductsController@list')
                ->withInput(Request::only('name'));
        }
    }

    public function json() {
        return response()->json($this->getProducts());
    }

    private function getProducts() {
        return DB::select('SELECT * FROM products');
    }
}
