<?php

namespace Database\Seeders;

use App\Models\Product;
use App\Models\User;
use Illuminate\Database\Seeder;
use Illuminate\Support\Str;

class ProductTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $product = new Product();
        $product->name = 'PlayStation One';
        $product->description = 'The First PlayStation';
        $product->url_img= 'https://upload.wikimedia.org/wikipedia/commons/thumb/9/95/PSX-Console-wController.png/1200px-PSX-Console-wController.png';
        $product->price = '155000';
        $product->stock = '20';
        $product->save();

        $product1 = new Product();
        $product1->name = 'PlayStation Two';
        $product1->description = 'The Second Generation Of Playstation';
        $product1->url_img= 'https://cdn.hobbyconsolas.com/sites/navi.axelspringer.es/public/styles/855/public/media/image/2018/09/ps2.jpg?itok=3HrVbnD-';
        $product1->price = '250000';
        $product1->stock = '15';
        $product1->save();

        $product2 = new Product();
        $product2->name = 'PlayStation Three';
        $product2->description = 'The Best Generation Of PlayStation';
        $product2->url_img= 'https://static.wikia.nocookie.net/playstation5617/images/a/ab/PlayStation_3.png/revision/latest?cb=20210225184730&path-prefix=es';
        $product2->price = '375000';
        $product2->stock = '10';
        $product2->save();

        $product3 = new Product();
        $product3->name = 'PlayStation Four';
        $product3->description = 'New Generation Of PlayStation';
        $product3->url_img= 'https://m.media-amazon.com/images/I/416Jj3ZyoAS._AC_.jpg';
        $product3->price = '600000';
        $product3->stock = '8';
        $product3->save();

        $product4 = new Product();
        $product4->name = 'PlayStation Five';
        $product4->description = 'A New Age For The Video Games';
        $product4->url_img= 'https://media.revistagq.com/photos/6048a391d1187a598fb4965e/master/pass/Comprar-PS5.png';
        $product4->price = '3500000';
        $product4->stock = '5';
        $product4->save();

        $product5 = new Product();
        $product5->name = 'Xbox';
        $product5->description = 'Classic Box Xbox';
        $product5->url_img= 'https://i.blogs.es/3fccc7/xbox-original/1366_521.jpeg';
        $product5->price = '160000';
        $product5->stock = '8';
        $product5->save();

        $product6 = new Product();
        $product6->name = 'Xbox 360';
        $product6->description = 'Second Generation';
        $product6->url_img= 'https://i2.wp.com/tecnotiendas.com.co/wp-content/uploads/2018/07/xbox-360-slim-1.jpg';
        $product6->price = '250000';
        $product6->stock = '5';
        $product6->save();

        $product7 = new Product();
        $product7->name = 'Xbox One';
        $product7->description = 'New Age For Xbox';
        $product7->url_img= 'https://compass-ssl.xbox.com/assets/50/ba/50ba24b9-2be4-4451-8ec5-1f81d77f69a0.jpg?n=X1X_Page-Hero-0_Upgrade_767x431.jpg';
        $product7->price = '2000000';
        $product7->stock = '11';
        $product7->save();

        $product8 = new Product();
        $product8->name = 'Nintendo Switch';
        $product8->description = 'A Classic In The Future';
        $product8->url_img= 'https://cdn.computerhoy.com/sites/navi.axelspringer.es/public/styles/1200/public/media/image/2020/12/nintendo-switch-2174975.jpg?itok=KmdyoGn7';
        $product8->price = '1500000';
        $product8->stock = '5';
        $product8->save();
    }
}
