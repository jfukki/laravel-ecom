<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class ProductSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('products')->insert([

           [
            'name'=>'New Hawaiian Stag Beach Palm Aloha Party Summer Fancy Shirt XS to XXL',
            'price'=>'12.23',
            'category'=>'NeatVintageStore',
            'description'=>'Condition: Brand New with Tags Brand: Pepper Tree Soft, Light & Good Quality Palm Beach Print Hawaiian Shirts High Quality, Comfortable , Suitable for Beach,Summer,Stag,Party Holiday and Casual Wear Short Sleeves,One Front Pocket Meterial:100% Polyester',
            'gallery'=>'https://i.etsystatic.com/30696299/r/il/49b662/3762534908/il_794xN.3762534908_a4mj.jpg'

           ],

           [
            'name'=>'Man- Holiday ,Tie Dye ,Shirt ,Hippie, Boho, Festival, Collarless Granddad Colourful Top Perfect for him!',
            'price'=>'36.39',
            'category'=>'Amorelondonfairtrade',
            'description'=>'Most of the products what we sell are from NEPAL where 95% of the products are handmade. You also can be sure that you wont be able to see similar products in the average high street. Item may be slightly different colour then the picture uploaded',
            'gallery'=>'https://i.etsystatic.com/24193625/r/il/a98997/3220038774/il_794xN.3220038774_npiw.jpg'

           ],

           [
            'name'=>'Blue bird shirt short sleeve - Heron - BAÏSAP',
            'price'=>'52.39',
            'category'=>'BAISAP',
            'description'=>'Blue bird shirt for men. Light cotton short sleeves. Fitted shirt. White birds pattern. Blue background. Blue printed lining. Bright blue piping. Pearly blue button.',
            'gallery'=>'https://i.etsystatic.com/6758858/r/il/04d749/3013762912/il_794xN.3013762912_panp.jpg'

           ],

           
           [
            'name'=>'Lake Bukkake, Funky Gay T-shirt',
            'price'=>'26.34',
            'category'=>'ButchUnicorn',
            'description'=>'Hang out with the guys at Lake Bukkake this summer. Everyone needs the perfect t-shirt to complement an everyday, laid-back look. The ideal top for so many occasions, this lightweight cotton tee will keep you comfy and looking smart.',
            'gallery'=>'https://i.etsystatic.com/33960164/r/il/15c377/3911197235/il_794xN.3911197235_4fmm.jpg'

           ],
           [
            'name'=>'Funky Blue Blouse',
            'price'=>'20.24',
            'category'=>'judyjeanvtg',
            'description'=>'Funk Blue Button Up',
            'gallery'=>'https://i.etsystatic.com/33779164/r/il/541b73/3988566087/il_794xN.3988566087_dtrn.jpg'

           ]

           ]);
        
    }
}
