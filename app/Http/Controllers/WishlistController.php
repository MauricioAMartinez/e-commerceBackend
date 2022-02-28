<?php

namespace App\Http\Controllers;

use App\Models\Wishlist;
use Illuminate\Support\Facades\DB;

class WishlistController extends Controller
{

    public function collection($id)
    {
        $data = Wishlist::select('products.name', 'products.description','products.url_img','products.id','products.price','products.stock')
            ->join('products', 'wishlists.product_id', '=', 'products.id')
            ->where('wishlists.user_id', '=', $id)
            ->get();

        return $data;
    }

    public function deleteProductWish($idUser, $idProduct)
    {
        $data = DB::delete('DELETE FROM wishlists WHERE user_id = ?  AND  product_id = ? ', [$idUser, $idProduct]);
    }

    public function addProductWish($idUser, $idProduct)
    {
        $data = DB::SELECT('SELECT * FROM wishlists WHERE user_id = ? AND  product_id = ?', [$idUser, $idProduct]);
        if($data){
            return 'Producto ya esta añadido a Wishlist';
        }else{
            $DateAndTime = date('Y-m-d h:i:s'); 
            $data = DB::insert('INSERT INTO wishlists (user_id,product_id,created_at,updated_at) values (?, ?,?,?)', [$idUser, $idProduct,$DateAndTime,$DateAndTime]);
            return 'Ok';
        }
    }
}
