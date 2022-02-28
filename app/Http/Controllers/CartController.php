<?php

namespace App\Http\Controllers;

use App\Models\Cart;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class CartController extends Controller
{
    public function collectionCart($id)
    {
        $data = Cart::select('products.name', 'products.description','products.url_img','products.id','products.price','products.stock')
            ->join('products', 'carts.product_id', '=', 'products.id')
            ->where('carts.user_id', '=', $id)
            ->get();

        return $data;
    }

    public function deleteProductCart($idUser, $idProduct)
    {
        $data = DB::delete('DELETE FROM carts WHERE user_id = ?  AND  product_id = ? ', [$idUser, $idProduct]);
    }

    public function addProductCart($idUser, $idProduct)
    {
       
       
            $DateAndTime = date('Y-m-d h:i:s'); 
            $data = DB::insert('INSERT INTO carts (user_id,product_id,created_at,updated_at) values (?, ?,?,?)', [$idUser, $idProduct,$DateAndTime,$DateAndTime]);
            return 'Ok';
        
    }
}
