<?php

namespace App\Http\Controllers;

use App\Apparel;
use App\Category;
use Illuminate\Http\Request;

class ApparelsController extends Controller {
    public function view_apparel_single ($id) {
        $apparel = Apparel::findOrFail($id);
        return view('apparel_single', compact('apparel'));
    }
}
