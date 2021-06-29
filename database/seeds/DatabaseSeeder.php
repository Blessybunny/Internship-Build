<?php

use App\Apparel;
use App\Category;
use App\Material;
use App\Branch;
use App\BranchApparel;
use App\BranchMaterial;

use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder {
    public function run () {
        //Variables
        $maximum = 1500;
        
        //Branches
        Branch::create(['name' => 'Naduma Store, SM City Baguio Luneta Hill, Upper Session Rd, Baguio City, 2600 Benguet']);
        Branch::create(['name' => 'Naduma Enterprises, Inc., 135 Liwanag - Loakan, Baguio City, 2600 Benguet']);
        
        //Apparel categories
        Category::create(['name' => 'Igorotak Shirt']);
        Category::create(['name' => 'Ladies']);
        Category::create(['name' => 'Accessory']);
        Category::create(['name' => 'Other']);
        
        //Apparel: Igorotak
        Apparel::create([
            'name' => 'Floating Igorotak Django Shirt',
            'category_id' => 1,
            'type' => 'shirt',
            'price' => 480,
            'img_url' => './img/shirt-men-igorotak/floating-igorotak-django-shirt-480.jpg'
        ]);
        Apparel::create([
            'name' => 'Floating Igorotak Shirt',
            'category_id' => 1,
            'type' => 'shirt',
            'price' => 450,
            'img_url' => './img/shirt-men-igorotak/floating-igorotak-shirt-450.jpg'
        ]);
        Apparel::create([
            'name' => 'Igorotak Beads Django Shirt',
            'category_id' => 1,
            'type' => 'shirt',
            'price' => 480,
            'img_url' => './img/shirt-men-igorotak/igorotak-beads-django-shirt-480.jpg'
        ]);
        Apparel::create([
            'name' => 'Igorotak Beads Shirt',
            'category_id' => 1,
            'type' => 'shirt',
            'price' => 480,
            'img_url' => './img/shirt-men-igorotak/igorotak-beads-shirt-480.jpg'
        ]);
        Apparel::create([
            'name' => 'Igorotak Seal Django Shirt',
            'category_id' => 1,
            'type' => 'shirt',
            'price' => 450,
            'img_url' => './img/shirt-men-igorotak/igorotak-seal-django-shirt-450.jpg'
        ]);
        Apparel::create([
            'name' => 'Igorotak Seal Shirt',
            'category_id' => 1,
            'type' => 'shirt',
            'price' => 480,
            'img_url' => './img/shirt-men-igorotak/igorotak-seal-shirt-480.jpg'
        ]);
        Apparel::create([
            'name' => 'Igorotak Splash Shirt',
            'category_id' => 1,
            'type' => 'shirt',
            'price' => 450,
            'img_url' => './img/shirt-men-igorotak/igorotak-splash-shirt-450.jpg'
        ]);
        Apparel::create([
            'name' => 'Igorotak Tangkil Shirt',
            'category_id' => 1,
            'type' => 'shirt',
            'price' => 480,
            'img_url' => './img/shirt-men-igorotak/igorotak-tangkil-shirt-480.jpg'
        ]);
        Apparel::create([
            'name' => 'Igo Strip Shirt',
            'category_id' => 1,
            'type' => 'shirt',
            'price' => 480,
            'img_url' => './img/shirt-men-igorotak/igo-strip-shirt-480.jpg'
        ]);
        Apparel::create([
            'name' => 'Igo Weave Necklace Django Shirt',
            'category_id' => 1,
            'type' => 'shirt',
            'price' => 480,
            'img_url' => './img/shirt-men-igorotak/igo-weave-necklace-django-shirt-480.jpg'
        ]);
        Apparel::create([
            'name' => 'Igo Weave Necklace Shirt',
            'category_id' => 1,
            'type' => 'shirt',
            'price' => 450,
            'img_url' => './img/shirt-men-igorotak/igo-weave-necklace-shirt-450.jpg'
        ]);
        Apparel::create([
            'name' => 'Series 1 Igorotak Shirt',
            'category_id' => 1,
            'type' => 'shirt',
            'price' => 450,
            'img_url' => './img/shirt-men-igorotak/series-1-igorotak-shirt-450.jpg'
        ]);

        //Apparel: Ladies
        Apparel::create([
            'name' => 'Igorotak Seal V-neck Shirt',
            'category_id' => 2,
            'type' => 'shirt',
            'price' => 460,
            'img_url' => './img/shirt-ladies/igorotak-seal-v-neck-shirt-460.jpg'
        ]);
        Apparel::create([
            'name' => 'Igorotak Splash V-neck Shirt',
            'category_id' => 2,
            'type' => 'shirt',
            'price' => 460,
            'img_url' => './img/shirt-ladies/igorotak-splash-v-neck-shirt-460.jpg'
        ]);
        Apparel::create([
            'name' => 'Igorotak Weave V-neck Shirt',
            'category_id' => 2,
            'type' => 'shirt',
            'price' => 460,
            'img_url' => './img/shirt-ladies/igorotak-weave-v-neck-shirt-460.jpg'
        ]);
        Apparel::create([
            'name' => 'Igo Tribal 3 V-neck Shirt',
            'category_id' => 2,
            'type' => 'shirt',
            'price' => 460,
            'img_url' => './img/shirt-ladies/igo-tribal-3-v-neck-shirt-460.jpg'
        ]);
        Apparel::create([
            'name' => 'Pattong V-neck Shirt',
            'category_id' => 2,
            'type' => 'shirt',
            'price' => 460,
            'img_url' => './img/shirt-ladies/pattong-v-neck-shirt-460.jpg'
        ]);
        Apparel::create([
            'name' => 'Sangi V-neck Shirt',
            'category_id' => 2,
            'type' => 'shirt',
            'price' => 460,
            'img_url' => './img/shirt-ladies/sangi-v-neck-shirt-460.jpg'
        ]);

        //Apparel: Accessories
        Apparel::create([
            'name' => '3-Ply Face Mask (Cordillera Inspired Woven Cloth)',
            'category_id' => 3,
            'type' => 'accessory',
            'price' => 175,
            'img_url' => './img/accessories/3-ply-face-mask-cordillera-inspired-woven-cloth-175.jpg'
        ]);
        Apparel::create([
            'name' => '3-Ply Face Mask (Sagada Weaving Cloth)',
            'category_id' => 3,
            'type' => 'accessory',
            'price' => 175,
            'img_url' => './img/accessories/3-ply-face-mask-sagada-weaving-cloth-175.jpg'
        ]);
        Apparel::create([
            'name' => 'Balikbayan Hat',
            'category_id' => 3,
            'type' => 'accessory',
            'price' => 620,
            'img_url' => './img/accessories/balikbayan-hat-620.jpg'
        ]);

        //Apparel: Other
        Apparel::create([
            'name' => 'Green Necktie Shirt',
            'category_id' => 4,
            'type' => 'shirt',
            'price' => 480,
            'img_url' => './img/shirt-other-prints/green-necktie-shirt-480.jpg'
        ]);
        Apparel::create([
            'name' => 'Igorot War Dance Shirt',
            'category_id' => 4,
            'type' => 'shirt',
            'price' => 450,
            'img_url' => './img/shirt-other-prints/igorot-war-dance-shirt-450.jpg'
        ]);
        Apparel::create([
            'name' => 'Pinikpikan Django Shirt',
            'category_id' => 4,
            'type' => 'shirt',
            'price' => 480,
            'img_url' => './img/shirt-other-prints/pinikpikan-django-shirt-480.jpg'
        ]);
        Apparel::create([
            'name' => 'Pinikpikan Shirt',
            'category_id' => 4,
            'type' => 'shirt',
            'price' => 450,
            'img_url' => './img/shirt-other-prints/pinikpikan-shirt-450.jpg'
        ]);
        Apparel::create([
            'name' => 'Red Necktie Shirt',
            'category_id' => 4,
            'type' => 'shirt',
            'price' => 480,
            'img_url' => './img/shirt-other-prints/red-necktie-shirt-480.jpg'
        ]);
        Apparel::create([
            'name' => 'Sangi Shirt',
            'category_id' => 4,
            'type' => 'shirt',
            'price' => 450,
            'img_url' => './img/shirt-other-prints/sangi-shirt-450.jpg'
        ]);
        Apparel::create([
            'name' => 'Tangkil Django Shirt',
            'category_id' => 4,
            'type' => 'shirt',
            'price' => 450,
            'img_url' => './img/shirt-other-prints/tangkil-django-shirt-450.jpg'
        ]);
        
        //Materials
        Material::create([
            'name' => 'Cotton Fabric',
            'unit' => 'bolt'
        ]);
        Material::create([
            'name' => 'Silk Fabric',
            'unit' => 'bolt'
        ]);
        Material::create([
            'name' => 'Linen Fabric',
            'unit' => 'bolt'
        ]);
        Material::create([
            'name' => 'Wool Fabric',
            'unit' => 'bolt'
        ]);
        Material::create([
            'name' => 'Georgette Fabric',
            'unit' => 'bolt'
        ]);
        Material::create([
            'name' => 'Chiffon Fabric',
            'unit' => 'bolt'
        ]);
        Material::create([
            'name' => 'Nylon Fabric',
            'unit' => 'bolt'
        ]);
        Material::create([
            'name' => 'Polyester Fabric',
            'unit' => 'bolt'
        ]);
        Material::create([
            'name' => 'Velvet Fabric',
            'unit' => 'bolt'
        ]);
        Material::create([
            'name' => 'Denim Fabric',
            'unit' => 'bolt'
        ]);
        Material::create([
            'name' => 'Rayon Fabric',
            'unit' => 'bolt'
        ]);
        Material::create([
            'name' => 'Viscose Fabric',
            'unit' => 'bolt'
        ]);
        Material::create([
            'name' => 'Satin Fabric',
            'unit' => 'bolt'
        ]);
        Material::create([
            'name' => 'Crepe Fabric',
            'unit' => 'bolt'
        ]);
        Material::create([
            'name' => 'Lycra Fabric',
            'unit' => 'bolt'
        ]);
        Material::create([
            'name' => 'Net / Lace Fabric',
            'unit' => 'bolt'
        ]);
        Material::create([
            'name' => 'Leather',
            'unit' => 'square feet'
        ]);
        
        //Apparels and materials for each branch
        for ($i = 1; $i <= Branch::where('id', '>=', '1')->count(); $i++) {
            //Apparels
            for ($j = 1; $j <= Apparel::where('id', '>=', '1')->count(); $j++) {
                BranchApparel::create([
                    'branch_id' => $i,
                    'apparel_id' => $j,
                    'quantity_universal' => rand(0, $maximum),
                    'quantity_xs' => rand(0, $maximum),
                    'quantity_sm' => rand(0, $maximum),
                    'quantity_md' => rand(0, $maximum),
                    'quantity_lg' => rand(0, $maximum),
                    'quantity_xl' => rand(0, $maximum),
                    'quantity_sold' => rand(0, $maximum)
                ]);
            }
            //Materials
            for ($j = 1; $j <= Material::where('id', '>=', '1')->count(); $j++) {
                BranchMaterial::create([
                    'branch_id' => $i,
                    'material_id' => $j,
                    'quantity' => rand(0, $maximum)
                ]);
            }
        }
    }
}