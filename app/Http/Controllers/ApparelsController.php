<?php

namespace App\Http\Controllers;

use App\Apparel;
use Illuminate\Http\Request;

class ApparelsController extends Controller {
    //Pseudo database for apparels
    private $apparel_data = array();
    public function createApparelData () {
        //Shirt Male Igorotak (12 total)
        array_push($this->apparel_data, [
            'name' => 'Floating Igorotak Django Shirt',
            'price' => 480,
            'imgUrl' => './img/shirt-men-igorotak/floating-igorotak-django-shirt-480.jpg',
            'category' => 'igorotak-shirt']);
        array_push($this->apparel_data, [
            'name' => 'Floating Igorotak Shirt',
            'price' => 450,
            'imgUrl' => './img/shirt-men-igorotak/floating-igorotak-shirt-450.jpg',
            'category' => 'igorotak-shirt'
        ]);
        array_push($this->apparel_data, [
            'name' => 'Igorotak Beads Django Shirt',
            'price' => 480,
            'imgUrl' => './img/shirt-men-igorotak/igorotak-beads-django-shirt-480.jpg',
            'category' => 'igorotak-shirt'
        ]);
        array_push($this->apparel_data, [
            'name' => 'Igorotak Beads Shirt',
            'price' => 480,
            'imgUrl' => './img/shirt-men-igorotak/igorotak-beads-shirt-480.jpg',
            'category' => 'igorotak-shirt'
        ]);
        array_push($this->apparel_data, [
            'name' => 'Igorotak Seal Django Shirt',
            'price' => 450,
            'imgUrl' => './img/shirt-men-igorotak/igorotak-seal-django-shirt-450.jpg',
            'category' => 'igorotak-shirt'
        ]);
        array_push($this->apparel_data, [
            'name' => 'Igorotak Seal Shirt',
            'price' => 480,
            'imgUrl' => './img/shirt-men-igorotak/igorotak-seal-shirt-480.jpg',
            'category' => 'igorotak-shirt'
        ]);
        array_push($this->apparel_data, [
            'name' => 'Igorotak Splash Shirt',
            'price' => 450,
            'imgUrl' => './img/shirt-men-igorotak/igorotak-splash-shirt-450.jpg',
            'category' => 'igorotak-shirt'
        ]);
        array_push($this->apparel_data, [
            'name' => 'Igorotak Tangkil Shirt',
            'price' => 480,
            'imgUrl' => './img/shirt-men-igorotak/igorotak-tangkil-shirt-480.jpg',
            'category' => 'igorotak-shirt'
        ]);
        array_push($this->apparel_data, [
            'name' => 'Igo Strip Shirt',
            'price' => 480,
            'imgUrl' => './img/shirt-men-igorotak/igo-strip-shirt-480.jpg',
            'category' => 'igorotak-shirt'
        ]);
        array_push($this->apparel_data, [
            'name' => 'Igo Weave Necklace Django Shirt',
            'price' => 480,
            'imgUrl' => './img/shirt-men-igorotak/igo-weave-necklace-django-shirt-480.jpg',
            'category' => 'igorotak-shirt'
        ]);
        array_push($this->apparel_data, [
            'name' => 'Igo Weave Necklace Shirt',
            'price' => 450,
            'imgUrl' => './img/shirt-men-igorotak/igo-weave-necklace-shirt-450.jpg',
            'category' => 'igorotak-shirt'
        ]);
        array_push($this->apparel_data, [
            'name' => 'Series 1 Igorotak Shirt',
            'price' => 450,
            'imgUrl' => './img/shirt-men-igorotak/series-1-igorotak-shirt-450.jpg',
            'category' => 'igorotak-shirt'
        ]);
        //Shirt Ladies (6 total)
        array_push($this->apparel_data, [
            'name' => 'Igorotak Seal V-neck Shirt',
            'price' => 460,
            'imgUrl' => './img/shirt-ladies/igorotak-seal-v-neck-shirt-460.jpg',
            'category' => 'ladies'
        ]);
        array_push($this->apparel_data, [
            'name' => 'Igorotak Splash V-neck Shirt',
            'price' => 460,
            'imgUrl' => './img/shirt-ladies/igorotak-splash-v-neck-shirt-460.jpg',
            'category' => 'ladies'
        ]);
        array_push($this->apparel_data, [
            'name' => 'Igorotak Weave V-neck Shirt',
            'price' => 460,
            'imgUrl' => './img/shirt-ladies/igorotak-weave-v-neck-shirt-460.jpg',
            'category' => 'ladies'
        ]);
        array_push($this->apparel_data, [
            'name' => 'Igo Tribal 3 V-neck Shirt',
            'price' => 460,
            'imgUrl' => './img/shirt-ladies/igo-tribal-3-v-neck-shirt-460.jpg',
            'category' => 'ladies'
        ]);
        array_push($this->apparel_data, [
            'name' => 'Pattong V-neck Shirt',
            'price' => 460,
            'imgUrl' => './img/shirt-ladies/pattong-v-neck-shirt-460.jpg',
            'category' => 'ladies'
        ]);
        array_push($this->apparel_data, [
            'name' => 'Sangi V-neck Shirt',
            'price' => 460,
            'imgUrl' => './img/shirt-ladies/sangi-v-neck-shirt 460.jpg',
            'category' => 'ladies'
        ]);
        //Accessories (3 total)
        array_push($this->apparel_data, [
            'name' => '3-Ply Face Mask (Cordillera Inspired Woven Cloth)',
            'price' => 175,
            'imgUrl' => './img/accessories/3-ply-face-mask-cordillera-inspired-woven-cloth-175.jpg',
            'category' => 'accessory'
        ]);
        array_push($this->apparel_data, [
            'name' => '3-Ply Face Mask (Sagada Weaving Cloth)',
            'price' => '175',
            'imgUrl' => './img/accessories/3-ply-face-mask-sagada-weaving-cloth-175.jpg',
            'category' => 'accessory'
        ]);
        array_push($this->apparel_data, [
            'name' => 'Balikbayan Hat',
            'price' => 620,
            'imgUrl' => './img/accessories/balikbayan-hat-620.jpg',
            'category' => 'accessory'
        ]);
        //Other prints (7 total)
        array_push($this->apparel_data, [
            'name' => 'Green Necktie Shirt',
            'price' => 480,
            'imgUrl' => './img/shirt-other-prints/green-necktie-shirt-480.jpg',
            'category' => 'other'
        ]);
        array_push($this->apparel_data, [
            'name' => 'Igorot War Dance Shirt',
            'price' => 450,
            'imgUrl' => './img/shirt-other-prints/igorot-war-dance-shirt-450.jpg',
            'category' => 'other'
        ]);
        array_push($this->apparel_data, [
            'name' => 'Pinikpikan Django Shirt',
            'price' => 480,
            'imgUrl' => './img/shirt-other-prints/pinikpikan-django-shirt-480.jpg',
            'category' => 'other'
        ]);
        array_push($this->apparel_data, [
            'name' => 'Pinikpikan Shirt',
            'price' => 450,
            'imgUrl' => './img/shirt-other-prints/pinikpikan-shirt-450.jpg',
            'category' => 'other'
        ]);
        array_push($this->apparel_data, [
            'name' => 'Red Necktie Shirt',
            'price' => 480,
            'imgUrl' => './img/shirt-other-prints/red-necktie-shirt-480.jpg',
            'category' => 'other'
        ]);
        array_push($this->apparel_data, [
            'name' => 'Sangi Shirt',
            'price' => 450,
            'imgUrl' => './img/shirt-other-prints/sangi-shirt-450.jpg',
            'category' => 'other'
        ]);
        array_push($this->apparel_data, [
            'name' => 'Tangkil Django Shirt',
            'price' => 450,
            'imgUrl' => './img/shirt-other-prints/tangkil-django-shirt-450.jpg',
            'category' => 'other'
        ]);
    }
    
    //Views
    public function view_home () {
        $this->createApparelData();
        $apparel_data = $this->apparel_data;
        return view('/home', compact('apparel_data'));
    }
    public function view_apparels () {
        $this->createApparelData();
        $apparel_data = $this->apparel_data;
        return view('/apparels', compact('apparel_data'));
    }
}
