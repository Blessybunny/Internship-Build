<?php

namespace App\Http\Controllers;

use App\Apparel;
use Illuminate\Http\Request;

class ApparelsController extends Controller {
    //For now, ApparelsController will be the general controller
    
    /*
        "title" => "hello",
        "description" => "test test test"
    Array
(
    [0] => Array
        (
            [_id] => 5c1e4295b0dace71ec62e325
            [email] => dhavalpansuriya1195@gmail.com
            [franchisecode] => MELHH
            [title] => Mr
            [firstname] => dhaval s
            [lastname] => patel
            [gender] => Male
            [age] => 16-18
            [phone] => 9601354880
            [address] => rajkot
            [city] => Ahmedabad
            [country] => India
            [tempcode] => hUmoEF
            [studentid] => HTNKLF
            [updated_at] => 2019-11-21 13:32:31
            [created_at] => 2018-12-22 19:26:37
            [student_status] => eda
            [student_levels] => Array
                (
                    [_id] => 5c8b11d2b0dace2f9a044d86
                    [student_id] => HTNKLF
                    [teacher_id] => 5c1e1ab5b0dace716e429654
                    [level_name] => recomended_level
                    [level] => Level 1
                    [comments] => hhbhhhh
                    [exam_type] => eda
                    [student_course] => 
                    [updated_at] => 2019-03-15 08:15:38
                    [created_at] => 2019-03-15 08:15:38
                )

        )
    */
    private $apparel_data = [
        //Shirt Male Igorotak (12 total)
        1 => [
            'name' => 'Floating Igorotak Django Shirt',
            'price' => 480,
            'imgUrl' => './img/shirt-men-igorotak/floating-igorotak-django-shirt-480.jpg',
            'category' => 'igorotak-shirt'
        ],
        2 => [
            'name' => 'Floating Igorotak Shirt',
            'price' => 450,
            'imgUrl' => './img/shirt-men-igorotak/floating-igorotak-shirt-450.jpg',
            'category' => 'igorotak-shirt'
        ],
        3 => [
            'name' => 'Igorotak Beads Django Shirt',
            'price' => 480,
            'imgUrl' => './img/shirt-men-igorotak/igorotak-beads-django-shirt-480.jpg',
            'category' => 'igorotak-shirt'
        ],
        4 => [
            'name' => 'Igorotak Beads Shirt',
            'price' => 480,
            'imgUrl' => './img/shirt-men-igorotak/igorotak-beads-shirt-480.jpg',
            'category' => 'igorotak-shirt'
        ],
        5 => [
            'name' => 'Igorotak Seal Django Shirt',
            'price' => 450,
            'imgUrl' => './img/shirt-men-igorotak/igorotak-seal-django-shirt-450.jpg',
            'category' => 'igorotak-shirt'
        ],
        6 => [
            'name' => 'Igorotak Seal Shirt',
            'price' => 480,
            'imgUrl' => './img/shirt-men-igorotak/igorotak-seal-shirt-480.jpg',
            'category' => 'igorotak-shirt'
        ],
        7 => [
            'name' => 'Igorotak Splash Shirt',
            'price' => 450,
            'imgUrl' => './img/shirt-men-igorotak/igorotak-splash-shirt-450.jpg',
            'category' => 'igorotak-shirt'
        ],
        8 => [
            'name' => 'Igorotak Tangkil Shirt',
            'price' => 480,
            'imgUrl' => './img/shirt-men-igorotak/igorotak-tangkil-shirt-480.jpg',
            'category' => 'igorotak-shirt'
        ],
        9 => [
            'name' => 'Igo Strip Shirt',
            'price' => 480,
            'imgUrl' => './img/shirt-men-igorotak/igo-strip-shirt-480.jpg',
            'category' => 'igorotak-shirt'
        ],
        10 => [
            'name' => 'Igo Weave Necklace Django Shirt',
            'price' => 480,
            'imgUrl' => './img/shirt-men-igorotak/igo-weave-necklace-django-shirt-480.jpg',
            'category' => 'igorotak-shirt'
        ],
        11 => [
            'name' => 'Igo Weave Necklace Shirt',
            'price' => 450,
            'imgUrl' => './img/shirt-men-igorotak/igo-weave-necklace-shirt-450.jpg',
            'category' => 'igorotak-shirt'
        ],
        12 => [
            'name' => 'Series 1 Igorotak Shirt',
            'price' => 450,
            'imgUrl' => './img/shirt-men-igorotak/series-1-igorotak-shirt-450.jpg',
            'category' => 'igorotak-shirt'
        ],
        
        
        13 => [
            'name' => '',
            'price' => 0,
            'imgUrl' => '',
            'category' => ''
        ],
    ];
    /*

//APPARELS: Shirt Ladies (6 total - IDs 12-17 = 18 total)
    apparel.create(`Igorotak Seal V-neck Shirt`, 460, `./img/shirt-ladies/igorotak-seal-v-neck-shirt-460.jpg`);
    apparel.create(`Igorotak Splash V-neck Shirt`, 460, `./img/shirt-ladies/igorotak-splash-v-neck-shirt-460.jpg`);
    apparel.create(`Igorotak Weave V-neck Shirt`, 460, `./img/shirt-ladies/igorotak-weave-v-neck-shirt-460.jpg`);
    apparel.create(`Igo Tribal 3 V-neck Shirt`, 460, `./img/shirt-ladies/igo-tribal-3-v-neck-shirt-460.jpg`);
    apparel.create(`Pattong V-neck Shirt`, 460, `./img/shirt-ladies/pattong-v-neck-shirt-460.jpg`);
    apparel.create(`Sangi V-neck Shirt`, 460, `./img/shirt-ladies/sangi-v-neck-shirt 460.jpg`);

//APPARELS: Accessories (3 total - IDs 18-20 = 21 total)
    apparel.create(`3-Ply Face Mask (Cordillera Inspired Woven Cloth)`, 175, `./img/accessories/3-ply-face-mask-cordillera-inspired-woven-cloth-175.jpg`);
    apparel.create(`3-Ply Face Mask (Sagada Weaving Cloth)`, 175, `./img/accessories/3-ply-face-mask-sagada-weaving-cloth-175.jpg`);
    apparel.create(`Balikbayan Hat`, 620, `./img/accessories/balikbayan-hat-620.jpg`);

//APPARELS: Other prints (7 total - IDs 21-27 = 28 total)
    apparel.create(`Green Necktie Shirt`, 480, `./img/shirt-other-prints/green-necktie-shirt-480.jpg`);
    apparel.create(`Igorot War Dance Shirt`, 450, `./img/shirt-other-prints/igorot-war-dance-shirt-450.jpg`);
    apparel.create(`Pinikpikan Django Shirt`, 480, `./img/shirt-other-prints/pinikpikan-django-shirt-480.jpg`);
    apparel.create(`Pinikpikan Shirt`, 450, `./img/shirt-other-prints/pinikpikan-shirt-450.jpg`);
    apparel.create(`Red Necktie Shirt`, 480, `./img/shirt-other-prints/red-necktie-shirt-480.jpg`);
    apparel.create(`Sangi Shirt`, 450, `./img/shirt-other-prints/sangi-shirt-450.jpg`);
    apparel.create(`Tangkil Django Shirt`, 450, `./img/shirt-other-prints/tangkil-django-shirt-450.jpg`);
    */
    //View home
    public function viewHome () {
        //Return view
            
        $apparel_data = $this->apparel_data;
        return view('/home', compact('apparel_data'));
    }
    
    //View apparels
    public function viewApparels () {
        //Return view
        $apparel_data = $this->apparel_data;
        return view('/apparels', compact('apparel_data'));
    }
}
