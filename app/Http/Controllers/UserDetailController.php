<?php

namespace App\Http\Controllers;

use App\Models\UserDetail;
use Illuminate\Http\Request;

use Illuminate\Support\Facades\Auth;

class UserDetailController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        //
    }

    public function create()
    {
        return view('userdetails.create');
    }

    public function store(Request $request)
    {
        // $request->validate([
        //     'name' => 'required|string|max:255',
        //     'number' => 'required|string|max:15',
        //     'age' => 'required|integer',
        //     'designation' => 'required|string|max:255',
        //     'address' => 'required|string|max:255',
        // ]);

        UserDetail::create([
            'user_id' => Auth::id(),  // Automatically assign logged-in user's ID
            'name' => $request->name,
            'number' => $request->number,
            'age' => $request->age,
            'designation' => $request->designation,
            'address' => $request->address,
        ]);
        // dd(UserDetail::all());
        return redirect()->route('dashboard')->with('success', 'Details saved successfully!');
    }

    public function dashboard()
    {
        // $userDetails = UserDetail::where('user_id', Auth::id())->get(); // Fetch all user details

        // return view('dashboard', compact('userDetails'));
        $userDetails = UserDetail::all(); // Fetch all user details for dashboard
        return view('dashboard', compact('userDetails'));

    }
}
