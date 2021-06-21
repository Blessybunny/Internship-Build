<?php

use App\Apparel;
use App\Material;
use Illuminate\Database\Seeder;

class ApparelSeeder extends Seeder {
    public function run () {
        //Igorotak
        Apparel::create([
            'name' => 'Floating Igorotak Django Shirt',
            'price' => 480,
            'category' => 'igorotak',
            'type' => 'shirt',
            'img_url' => './img/shirt-men-igorotak/floating-igorotak-django-shirt-480.jpg',
            'stock_universal' => rand(0, 300),
            'stock_xs' => rand(0, 300),
            'stock_sm' => rand(0, 300),
            'stock_md' => rand(0, 300),
            'stock_lg' => rand(0, 300),
            'stock_xl' => rand(0, 300),
            'sold' => rand(0, 100)
        ]);
        Apparel::create([
            'name' => 'Floating Igorotak Shirt',
            'price' => 450,
            'category' => 'igorotak',
            'type' => 'shirt',
            'img_url' => './img/shirt-men-igorotak/floating-igorotak-shirt-450.jpg',
            'stock_universal' => rand(0, 300),
            'stock_xs' => rand(0, 300),
            'stock_sm' => rand(0, 300),
            'stock_md' => rand(0, 300),
            'stock_lg' => rand(0, 300),
            'stock_xl' => rand(0, 300),
            'sold' => rand(0, 100)
        ]);
        Apparel::create([
            'name' => 'Igorotak Beads Django Shirt',
            'price' => 480,
            'category' => 'igorotak',
            'type' => 'shirt',
            'img_url' => './img/shirt-men-igorotak/igorotak-beads-django-shirt-480.jpg',
            'stock_universal' => rand(0, 60),
            'stock_xs' => rand(0, 60),
            'stock_sm' => rand(0, 60),
            'stock_md' => rand(0, 60),
            'stock_lg' => rand(0, 60),
            'stock_xl' => rand(0, 60),
            'sold' => rand(0, 100)
        ]);
        Apparel::create([
            'name' => 'Igorotak Beads Shirt',
            'price' => 480,
            'category' => 'igorotak',
            'type' => 'shirt',
            'img_url' => './img/shirt-men-igorotak/igorotak-beads-shirt-480.jpg',
            'stock_universal' => rand(0, 300),
            'stock_xs' => rand(0, 300),
            'stock_sm' => rand(0, 300),
            'stock_md' => rand(0, 300),
            'stock_lg' => rand(0, 300),
            'stock_xl' => rand(0, 300),
            'sold' => rand(0, 100)
        ]);
        Apparel::create([
            'name' => 'Igorotak Seal Django Shirt',
            'price' => 450,
            'category' => 'igorotak',
            'type' => 'shirt',
            'img_url' => './img/shirt-men-igorotak/igorotak-seal-django-shirt-450.jpg',
            'stock_universal' => rand(0, 300),
            'stock_xs' => rand(0, 300),
            'stock_sm' => rand(0, 300),
            'stock_md' => rand(0, 300),
            'stock_lg' => rand(0, 300),
            'stock_xl' => rand(0, 300),
            'sold' => rand(0, 100)
        ]);
        Apparel::create([
            'name' => 'Igorotak Seal Shirt',
            'price' => 480,
            'category' => 'igorotak',
            'type' => 'shirt',
            'img_url' => './img/shirt-men-igorotak/igorotak-seal-shirt-480.jpg',
            'stock_universal' => rand(0, 300),
            'stock_xs' => rand(0, 300),
            'stock_sm' => rand(0, 300),
            'stock_md' => rand(0, 300),
            'stock_lg' => rand(0, 300),
            'stock_xl' => rand(0, 300),
            'sold' => rand(0, 100)
        ]);
        Apparel::create([
            'name' => 'Igorotak Splash Shirt',
            'price' => 450,
            'category' => 'igorotak',
            'type' => 'shirt',
            'img_url' => './img/shirt-men-igorotak/igorotak-splash-shirt-450.jpg',
            'stock_universal' => rand(0, 300),
            'stock_xs' => rand(0, 300),
            'stock_sm' => rand(0, 300),
            'stock_md' => rand(0, 300),
            'stock_lg' => rand(0, 300),
            'stock_xl' => rand(0, 300),
            'sold' => rand(0, 100)
        ]);
        Apparel::create([
            'name' => 'Igorotak Tangkil Shirt',
            'price' => 480,
            'category' => 'igorotak',
            'type' => 'shirt',
            'img_url' => './img/shirt-men-igorotak/igorotak-tangkil-shirt-480.jpg',
            'stock_universal' => rand(0, 300),
            'stock_xs' => rand(0, 300),
            'stock_sm' => rand(0, 300),
            'stock_md' => rand(0, 300),
            'stock_lg' => rand(0, 300),
            'stock_xl' => rand(0, 300),
            'sold' => rand(0, 100)
        ]);
        Apparel::create([
            'name' => 'Igo Strip Shirt',
            'price' => 480,
            'category' => 'igorotak',
            'type' => 'shirt',
            'img_url' => './img/shirt-men-igorotak/igo-strip-shirt-480.jpg',
            'stock_universal' => rand(0, 300),
            'stock_xs' => rand(0, 300),
            'stock_sm' => rand(0, 300),
            'stock_md' => rand(0, 300),
            'stock_lg' => rand(0, 300),
            'stock_xl' => rand(0, 300),
            'sold' => rand(0, 100)
        ]);
        Apparel::create([
            'name' => 'Igo Weave Necklace Django Shirt',
            'price' => 480,
            'category' => 'igorotak',
            'type' => 'shirt',
            'img_url' => './img/shirt-men-igorotak/igo-weave-necklace-django-shirt-480.jpg',
            'stock_universal' => rand(0, 300),
            'stock_xs' => rand(0, 300),
            'stock_sm' => rand(0, 300),
            'stock_md' => rand(0, 300),
            'stock_lg' => rand(0, 300),
            'stock_xl' => rand(0, 300),
            'sold' => rand(0, 100)
        ]);
        Apparel::create([
            'name' => 'Igo Weave Necklace Shirt',
            'price' => 450,
            'category' => 'igorotak',
            'type' => 'shirt',
            'img_url' => './img/shirt-men-igorotak/igo-weave-necklace-shirt-450.jpg',
            'stock_universal' => rand(0, 300),
            'stock_xs' => rand(0, 300),
            'stock_sm' => rand(0, 300),
            'stock_md' => rand(0, 300),
            'stock_lg' => rand(0, 300),
            'stock_xl' => rand(0, 300),
            'sold' => rand(0, 100)
        ]);
        Apparel::create([
            'name' => 'Series 1 Igorotak Shirt',
            'price' => 450,
            'category' => 'igorotak',
            'type' => 'shirt',
            'img_url' => './img/shirt-men-igorotak/series-1-igorotak-shirt-450.jpg',
            'stock_universal' => rand(0, 300),
            'stock_xs' => rand(0, 300),
            'stock_sm' => rand(0, 300),
            'stock_md' => rand(0, 300),
            'stock_lg' => rand(0, 300),
            'stock_xl' => rand(0, 300),
            'sold' => rand(0, 100)
        ]);
        
        //Ladies
        Apparel::create([
            'name' => 'Igorotak Seal V-neck Shirt',
            'price' => 460,
            'category' => 'ladies',
            'type' => 'shirt',
            'img_url' => './img/shirt-ladies/igorotak-seal-v-neck-shirt-460.jpg',
            'stock_universal' => rand(0, 300),
            'stock_xs' => rand(0, 300),
            'stock_sm' => rand(0, 300),
            'stock_md' => rand(0, 300),
            'stock_lg' => rand(0, 300),
            'stock_xl' => rand(0, 300),
            'sold' => rand(0, 100)
        ]);
        Apparel::create([
            'name' => 'Igorotak Splash V-neck Shirt',
            'price' => 460,
            'category' => 'ladies',
            'type' => 'shirt',
            'img_url' => './img/shirt-ladies/igorotak-splash-v-neck-shirt-460.jpg',
            'stock_universal' => rand(0, 300),
            'stock_xs' => rand(0, 300),
            'stock_sm' => rand(0, 300),
            'stock_md' => rand(0, 300),
            'stock_lg' => rand(0, 300),
            'stock_xl' => rand(0, 300),
            'sold' => rand(0, 100)
        ]);
        Apparel::create([
            'name' => 'Igorotak Weave V-neck Shirt',
            'price' => 460,
            'category' => 'ladies',
            'type' => 'shirt',
            'img_url' => './img/shirt-ladies/igorotak-weave-v-neck-shirt-460.jpg',
            'stock_universal' => rand(0, 300),
            'stock_xs' => rand(0, 300),
            'stock_sm' => rand(0, 300),
            'stock_md' => rand(0, 300),
            'stock_lg' => rand(0, 300),
            'stock_xl' => rand(0, 300),
            'sold' => rand(0, 100)
        ]);
        Apparel::create([
            'name' => 'Igo Tribal 3 V-neck Shirt',
            'price' => 460,
            'category' => 'ladies',
            'type' => 'shirt',
            'img_url' => './img/shirt-ladies/igo-tribal-3-v-neck-shirt-460.jpg',
            'stock_universal' => rand(0, 300),
            'stock_xs' => rand(0, 300),
            'stock_sm' => rand(0, 300),
            'stock_md' => rand(0, 300),
            'stock_lg' => rand(0, 300),
            'stock_xl' => rand(0, 300),
            'sold' => rand(0, 100)
        ]);
        Apparel::create([
            'name' => 'Pattong V-neck Shirt',
            'price' => 460,
            'category' => 'ladies',
            'type' => 'shirt',
            'img_url' => './img/shirt-ladies/pattong-v-neck-shirt-460.jpg',
            'stock_universal' => rand(0, 300),
            'stock_xs' => rand(0, 300),
            'stock_sm' => rand(0, 300),
            'stock_md' => rand(0, 300),
            'stock_lg' => rand(0, 300),
            'stock_xl' => rand(0, 300),
            'sold' => rand(0, 100)
        ]);
        Apparel::create([
            'name' => 'Sangi V-neck Shirt',
            'price' => 460,
            'category' => 'ladies',
            'type' => 'shirt',
            'img_url' => './img/shirt-ladies/sangi-v-neck-shirt 460.jpg',
            'stock_universal' => rand(0, 300),
            'stock_xs' => rand(0, 300),
            'stock_sm' => rand(0, 300),
            'stock_md' => rand(0, 300),
            'stock_lg' => rand(0, 300),
            'stock_xl' => rand(0, 300),
            'sold' => rand(0, 100)
        ]);
        
        //Accessories
        Apparel::create([
            'name' => '3-Ply Face Mask (Cordillera Inspired Woven Cloth)',
            'price' => 175,
            'category' => 'accessory',
            'type' => 'accessory',
            'img_url' => './img/accessories/3-ply-face-mask-cordillera-inspired-woven-cloth-175.jpg',
            'stock_universal' => rand(0, 300),
            'stock_xs' => rand(0, 300),
            'stock_sm' => rand(0, 300),
            'stock_md' => rand(0, 300),
            'stock_lg' => rand(0, 300),
            'stock_xl' => rand(0, 300),
            'sold' => rand(0, 100)
        ]);
        Apparel::create([
            'name' => '3-Ply Face Mask (Sagada Weaving Cloth)',
            'price' => 175,
            'category' => 'accessory',
            'type' => 'accessory',
            'img_url' => './img/accessories/3-ply-face-mask-sagada-weaving-cloth-175.jpg',
            'stock_universal' => rand(0, 300),
            'stock_xs' => rand(0, 300),
            'stock_sm' => rand(0, 300),
            'stock_md' => rand(0, 300),
            'stock_lg' => rand(0, 300),
            'stock_xl' => rand(0, 300),
            'sold' => rand(0, 100)
        ]);
        Apparel::create([
            'name' => 'Balikbayan Hat',
            'price' => 620,
            'category' => 'accessory',
            'type' => 'accessory',
            'img_url' => './img/accessories/balikbayan-hat-620.jpg',
            'stock_universal' => rand(0, 300),
            'stock_xs' => rand(0, 300),
            'stock_sm' => rand(0, 300),
            'stock_md' => rand(0, 300),
            'stock_lg' => rand(0, 300),
            'stock_xl' => rand(0, 300),
            'sold' => rand(0, 100)
        ]);
        
        //Other
        Apparel::create([
            'name' => 'Green Necktie Shirt',
            'price' => 480,
            'category' => 'other',
            'type' => 'shirt',
            'img_url' => './img/shirt-other-prints/green-necktie-shirt-480.jpg',
            'stock_universal' => rand(0, 300),
            'stock_xs' => rand(0, 300),
            'stock_sm' => rand(0, 300),
            'stock_md' => rand(0, 300),
            'stock_lg' => rand(0, 300),
            'stock_xl' => rand(0, 300),
            'sold' => rand(0, 100)
        ]);
        Apparel::create([
            'name' => 'Igorot War Dance Shirt',
            'price' => 450,
            'category' => 'other',
            'type' => 'shirt',
            'img_url' => './img/shirt-other-prints/igorot-war-dance-shirt-450.jpg',
            'stock_universal' => rand(0, 300),
            'stock_xs' => rand(0, 300),
            'stock_sm' => rand(0, 300),
            'stock_md' => rand(0, 300),
            'stock_lg' => rand(0, 300),
            'stock_xl' => rand(0, 300),
            'sold' => rand(0, 100)
        ]);
        Apparel::create([
            'name' => 'Pinikpikan Django Shirt',
            'price' => 480,
            'category' => 'other',
            'type' => 'shirt',
            'img_url' => './img/shirt-other-prints/pinikpikan-django-shirt-480.jpg',
            'stock_universal' => rand(0, 300),
            'stock_xs' => rand(0, 300),
            'stock_sm' => rand(0, 300),
            'stock_md' => rand(0, 300),
            'stock_lg' => rand(0, 300),
            'stock_xl' => rand(0, 300),
            'sold' => rand(0, 100)
        ]);
        Apparel::create([
            'name' => 'Pinikpikan Shirt',
            'price' => 450,
            'category' => 'other',
            'type' => 'shirt',
            'img_url' => './img/shirt-other-prints/pinikpikan-shirt-450.jpg',
            'stock_universal' => rand(0, 300),
            'stock_xs' => rand(0, 300),
            'stock_sm' => rand(0, 300),
            'stock_md' => rand(0, 300),
            'stock_lg' => rand(0, 300),
            'stock_xl' => rand(0, 300),
            'sold' => rand(0, 100)
        ]);
        Apparel::create([
            'name' => 'Red Necktie Shirt',
            'price' => 480,
            'category' => 'other',
            'type' => 'shirt',
            'img_url' => './img/shirt-other-prints/red-necktie-shirt-480.jpg',
            'stock_universal' => rand(0, 300),
            'stock_xs' => rand(0, 300),
            'stock_sm' => rand(0, 300),
            'stock_md' => rand(0, 300),
            'stock_lg' => rand(0, 300),
            'stock_xl' => rand(0, 300),
            'sold' => rand(0, 100)
        ]);
        Apparel::create([
            'name' => 'Sangi Shirt',
            'price' => 450,
            'category' => 'other',
            'type' => 'shirt',
            'img_url' => './img/shirt-other-prints/sangi-shirt-450.jpg',
            'stock_universal' => rand(0, 300),
            'stock_xs' => rand(0, 300),
            'stock_sm' => rand(0, 300),
            'stock_md' => rand(0, 300),
            'stock_lg' => rand(0, 300),
            'stock_xl' => rand(0, 300),
            'sold' => rand(0, 100)
        ]);
        Apparel::create([
            'name' => 'Tangkil Django Shirt',
            'price' => 450,
            'category' => 'other',
            'type' => 'shirt',
            'img_url' => './img/shirt-other-prints/tangkil-django-shirt-450.jpg',
            'stock_universal' => rand(0, 300),
            'stock_xs' => rand(0, 300),
            'stock_sm' => rand(0, 300),
            'stock_md' => rand(0, 300),
            'stock_lg' => rand(0, 300),
            'stock_xl' => rand(0, 300),
            'sold' => rand(0, 100)
        ]);
        
        //Fabrics
        Material::create([
            'name' => 'Cotton Fabric',
            'unit' => 'bolt',
            'quantity' => rand(0, 500)
        ]);
        Material::create([
            'name' => 'Silk Fabric',
            'unit' => 'bolt',
            'quantity' => rand(0, 500)
        ]);
        Material::create([
            'name' => 'Linen Fabric',
            'unit' => 'bolt',
            'quantity' => rand(0, 500)
        ]);
        Material::create([
            'name' => 'Wool Fabric',
            'unit' => 'bolt',
            'quantity' => rand(0, 500)
        ]);
        Material::create([
            'name' => 'Georgette Fabric',
            'unit' => 'bolt',
            'quantity' => rand(0, 500)
        ]);
        Material::create([
            'name' => 'Chiffon Fabric',
            'unit' => 'bolt',
            'quantity' => rand(0, 500)
        ]);
        Material::create([
            'name' => 'Nylon Fabric',
            'unit' => 'bolt',
            'quantity' => rand(0, 500)
        ]);
        Material::create([
            'name' => 'Polyester Fabric',
            'unit' => 'bolt',
            'quantity' => rand(0, 500)
        ]);
        Material::create([
            'name' => 'Velvet Fabric',
            'unit' => 'bolt',
            'quantity' => rand(0, 500)
        ]);
        Material::create([
            'name' => 'Denim Fabric',
            'unit' => 'bolt',
            'quantity' => rand(0, 500)
        ]);
        Material::create([
            'name' => 'Rayon Fabric',
            'unit' => 'bolt',
            'quantity' => rand(0, 500)
        ]);
        Material::create([
            'name' => 'Viscose Fabric',
            'unit' => 'bolt',
            'quantity' => rand(0, 500)
        ]);
        Material::create([
            'name' => 'Satin Fabric',
            'unit' => 'bolt',
            'quantity' => rand(0, 500)
        ]);
        Material::create([
            'name' => 'Crepe Fabric',
            'unit' => 'bolt',
            'quantity' => rand(0, 500)
        ]);
        Material::create([
            'name' => 'Lycra Fabric',
            'unit' => 'bolt',
            'quantity' => rand(0, 500)
        ]);
        Material::create([
            'name' => 'Net / Lace Fabric',
            'unit' => 'bolt',
            'quantity' => rand(0, 500)
        ]);
        Material::create([
            'name' => 'Leather',
            'unit' => 'square feet',
            'quantity' => rand(0, 500)
        ]);
    }
}
