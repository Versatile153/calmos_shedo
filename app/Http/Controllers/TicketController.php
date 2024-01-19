<?php
namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
class TicketController extends Controller
{
    // ...

    // public function create()
    // {
    //     // Get the logged-in user
    //     $user = Auth::user();

    //     // Show the form to create a new ticket
    //     return view('tickets.create', compact('user'));
    // }

    public function store(Request $request)
    {
        // Validate the request data
        $request->validate([
            'subject' => 'required',
            'message' => 'required',
            'file' => 'nullable|file|max:2048',
            'priority' => 'required',
        ]);

        // Handle file upload if provided
        $file = $request->file('file');
        $filePath = null;

        if ($file) {
            $filePath = $file->store('ticket_files', 'public');
        }

        // Create a new ticket associated with the logged-in user
        $user = Auth::user();
        $ticket = $user->tickets()->create([
            'subject' => $request->input('subject'),
            'message' => $request->input('message'),
            'file' => $filePath,
            'priority' => $request->input('priority'),
        ]);

        // Redirect or respond as needed
        return redirect()->route('deposits.tickets')->with('success', 'Ticket created successfully.');
    }



    public function loadregister($id)
    {
        // Assuming you're using authentication
        $user = Auth::user();

        // Check if the user has a referral link
        if ($user && $user->referral_link) {
            $referralLink = $user->referral_link;
        } else {
            // Set referral link to null if it doesn't exist
            $referralLink = null;
        }

        return view('referal_register', compact('referralLink'));
    }
}

