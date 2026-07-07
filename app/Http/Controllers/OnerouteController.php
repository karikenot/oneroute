<?php

namespace App\Http\Controllers;

use App\Models\Oneroute;
use Illuminate\Foundation\Auth\Access\AuthorizesRequests;
use Illuminate\Http\Request;

class OnerouteController extends Controller
{
    use AuthorizesRequests;
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

        auth()->user()->oneroutes()->create($validated);

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
    public function edit(Oneroute $oneroute)
    {
        $this->authorize('update', $oneroute);

        return view('oneroutes.edit', compact('oneroute'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Oneroute $oneroute)
    {

        $this->authorize('update', $oneroute);

        $validated = $request->validate([
            'message' => 'required|string|max:255'
        ]);


        $oneroute->update($validated);

        return redirect('/')->with('success', 'Route updated!');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Oneroute $oneroute)
    {
        $this->authorize('update', $oneroute);

        $oneroute->delete();

        return redirect('/')->with('success', 'Route deleted!');
    }
}
