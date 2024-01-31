<?php

// app/Http/Controllers/KycController.php

namespace App\Http\Controllers;

use App\Models\Kyc;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Session;


class KycController extends Controller
{
    // app/Http/Controllers/KycController.php


// ...

public function store(Request $request)
{
    $request->validate([
        'full_name' => 'required|string',
        'nid_number' => 'required|string',
        'gender' => 'required|string',
        'you_hobby' => 'array',
        'nid_photo' => 'required|image|mimes:jpg,png',
    ]);

    // Convert array to JSON
    $youHobbyJson = json_encode($request->input('you_hobby'));

    // Upload and save the image
    $nidPhotoPath = $request->file('nid_photo')->store('nid_photos', 'public');

    // Create KYC record
    Kyc::create([
        'user_id' => auth()->id(),
        'full_name' => $request->input('full_name'),
        'nid_number' => $request->input('nid_number'),
        'gender' => $request->input('gender'),
        'you_hobby' => $youHobbyJson,
        'nid_photo' => $nidPhotoPath,
    ]);
    Session::flash('success', 'KYC information submitted successfully.');

    return redirect()->route('home');
}

}
