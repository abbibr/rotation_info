<?php

namespace App\Http\Controllers;

use App\Models\WaitListModel;
use Illuminate\Http\Request;

class WaitListController extends Controller
{
    public function store(Request $request) {
        $request->validate([
            'name' => 'required',
            'email' => 'required|email',
            'phone' => ['required', 'regex:/^(\+998|998)[0-9]{9}$/']
        ]);

        WaitListModel::create([
            'fullName' => $request->name,
            'email' => $request->email,
            'phoneNumber' => $request->phone,
        ]);

        return redirect()->back()->with('success', 'You have successfully joined the waitlist!');
    }
}
