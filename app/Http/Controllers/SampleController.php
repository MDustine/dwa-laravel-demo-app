<?php

namespace App\Http\Controllers;

use App\Models\Sample;
use Illuminate\Http\Request;

class SampleController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $samples = Sample::all();
        return view('samples.index', compact('samples'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('samples.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $validated = $request->validate([
            'first_name'    => 'required|string|max:255',
            'last_name'     => 'required|string|max:255',
            'email'         => 'required|email|unique:samples,email',
            'enrolled_date' => 'required|date',
        ]);

        Sample::create($validated);

        return redirect()->route('samples.index');
    }

    /**
     * Display the specified resource.
     */
    public function show(Sample $sample)
    {
        return view('samples.show', compact('sample'));
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Sample $sample)
    {
        return view('samples.edit', compact('sample'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Sample $sample)
    {
        $validated = $request->validate([
            'first_name'    => 'required|string|max:255',
            'last_name'     => 'required|string|max:255',
            'email'         => 'required|email|unique:samples,email,' . $sample->id,
            'enrolled_date' => 'required|date',
        ]);

        $sample->update($validated);

        return redirect()->route('samples.index');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Sample $sample)
    {
        $sample->delete();

        return redirect()->route('samples.index');
    }
}