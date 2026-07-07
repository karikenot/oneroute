<?php

namespace App\Http\Controllers;

use App\Models\Oneroute;
use Illuminate\Http\Request;

class OnerouteController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
{
    $oneroutes = Oneroute::with('user')
    ->latest()
    ->take(50)
    ->get();

    return view('home', ['oneroutes' => $oneroutes]);
}

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $validated = $request->validate([
            'message' => 'required|string|max:255'
        ]);


        Oneroute::create([
            'message' => $validated['message'],
        ]);

        return redirect('/')->with('success', 'Route created!');
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        //
    }
}
