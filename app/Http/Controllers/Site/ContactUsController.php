<?php

namespace App\Http\Controllers\Site;

use App\Http\Controllers\Controller;
use App\Models\ContactUs;
use App\Http\Requests\Site\ContactRequest;


class ContactUsController extends Controller
{
    public function getcontact()
    {
        ContactUs::all();
        return view('site.contact-us');
    }
    public function createContact_us(ContactRequest $request)
    {
        $input = $request->all();
        ContactUs::create($input);
        return redirect()->back();
    }
}
