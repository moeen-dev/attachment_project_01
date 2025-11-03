<?php

namespace App\Http\Controllers\Frontend;

use App\Http\Controllers\Controller;
use App\Models\ContactForm;
use Illuminate\Http\Request;

class AboutController extends Controller
{
    public function index() {
        $messages = ContactForm::latest()->get();
        return view('frontend.about', compact('messages'));
    }
}
