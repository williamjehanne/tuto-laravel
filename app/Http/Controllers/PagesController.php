<?php namespace App\Http\Controllers;

use App\Http\Requests;
use App\Http\Controllers\Controller;

use Illuminate\Http\Request;

class PagesController extends Controller {

	//
    public function about(){
        //return 'A propos de moi';
        $title = "A propos";
        $numbers = [1, 2, 3, 4];
        return view('pages/about', compact('title', 'numbers'));
    }

}
