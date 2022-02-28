<?php

namespace Database\Seeders;

use App\Models\Wishlist;
use Illuminate\Database\Seeder;

class WishlistTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $wishlist = new Wishlist();
        $wishlist->user_id = '1';
        $wishlist->product_id = '1';
        $wishlist->save();

        $wishlist1 = new Wishlist();
        $wishlist1->user_id = '1';
        $wishlist1->product_id = '5';
        $wishlist1->save();

        $wishlist2 = new Wishlist();
        $wishlist2->user_id = '1';
        $wishlist2->product_id = '3';
        $wishlist2->save();


        $wishlist3 = new Wishlist();
        $wishlist3->user_id = '1';
        $wishlist3->product_id = '8';
        $wishlist3->save();
        



    }
}
