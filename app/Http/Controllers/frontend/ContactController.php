<?php

namespace App\Http\Controllers\Frontend;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class ContactController extends Controller
{
    public function index() {
        $num1 = rand(10, 99);
        $num2 = rand(10, 99);

        return view('frontend.contact', compact('num1', 'num2'));
    }

    public function submitContact() {
        
    }
}
