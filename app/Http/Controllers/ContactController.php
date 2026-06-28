<?php

namespace App\Http\Controllers;

use App\Http\Requests\StoreContactRequest;
use App\Models\Contact;

class ContactController extends Controller
{
    public function create()
    {
        $num1 = rand(1, 9);
        $num2 = rand(1, 9);
        session(['captcha_result' => $num1 + $num2]);

        return view('contact', compact('num1', 'num2'));
    }
    public function store(StoreContactRequest $request)
    {
        Contact::create($request->validated());

        return redirect()->back()->with('success', 'Pesan Anda telah berhasil dikirim. Terima kasih!');
    }
}
