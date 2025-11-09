<?php

namespace App\Http\Controllers\Frontend;

use App\Http\Controllers\Controller;
use App\Models\ContactForm;
use Illuminate\Auth\Events\Validated;
use Illuminate\Http\Request;

class ContactController extends Controller
{
    public function index() {
        $num1 = rand(1, 9);
        $num2 = rand(1, 9);

        return view('frontend.contact', compact('num1', 'num2'));
    }

    public function submitContact(Request $request) {
        $validated = $request->validate([
            'name' => 'required|string|max:255',
            'email' => 'required|email|unique:contact_forms,email',
            'message' => 'required|string',
            'captcha_sum' => 'required|numeric',
            'captcha_answer' => 'required|numeric'
        ]);

        if ((int) $request->captcha_answer !== (int) $request->captcha_sum) {
            flash()->error('Captcha Error!!!');
            return back();
        }

        ContactForm::create($validated);

        flash()->success('Message Submitted Successfully!!!');
        return redirect()->route('about');
    }
}
