<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
//use App\Http\Requests\ContactRequest;
use App\Models\Contact;

class ContactController extends Controller
{
    public function index()
    {
        return view('index');
    }

    public function confirm(Request $request)
    {
        $contact = $request->only(['gender','email','postcode','address','building_name','opinion']);
        $contact['fullname'] = $request['family_name'].'　'.$request['first_name'];
        return view('confirm', compact('contact'));
    }

    public function store(Request $request)
    {
        $contact = $request->only(['fullname','gender','email','postcode','address','building_name','opinion']);
        Contact::create($contact);
        return view('thanks');
    }

    // 管理システム 
    public function admini()
    {
        return view('admini');
    }

    public function search(Request $request)
    {
        $contact = Contact::with('opinion')->NameSearch($request->fullname)->GenderSearch($request->gender)->DateSearch($request->created_at)->EmailSearch($request->email)->get();

        return view('admini', compact('contact'));
    }
}
