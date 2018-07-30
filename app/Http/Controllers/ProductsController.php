<?php

namespace storage\Http\Controllers;

use Illuminate\Support\Facades\DB;

class ProductsController extends Controller {

    public function list() {
        $html = '<h1>Products</h1>';
        $html .= '<ul>';

        $products = DB::select('SELECT * FROM products');

        foreach ($products as $product) {
            $html .= '<li> Nome: '. $product->name .', Descrição: '. $product->description .'</li>';
        }

        $html .= '</ul>';

        return $html;
    }
}
