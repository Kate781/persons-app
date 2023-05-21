<?php

namespace App\Http\Controllers;

use App\Models\Person;
use Illuminate\Http\Request;

class PersonController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $persons = Person::all();

        return view('index', compact('persons'));
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
        /* Get textarea content and split it into an array */
        $text = $request->input('names');
        $names = !empty($text) ? explode("\r\n", $text) : [];

        /* Get random name */
        $random_name = $names[array_rand($names)];

        /* Save person to database */
        Person::create([
            'name' => $random_name
        ]);

        /* Redirect back to index.blade.php with list of variables */
        return redirect()->route('index')->with([
            'random_name' => $random_name,
            'names' => count($names) > 1 ? str_replace($random_name . "\r\n", "", $text . "\r\n") : ''
        ]);
    }

    /**
     * Display the specified resource.
     */
    public function show(Person $person)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Person $person)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Person $person)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Request $request, Person $person)
    {
        $person->delete();

        /* Redirect back to index.blade.php with list of names for textarea */
        return redirect()->route('index')->with([
            'names' => $request->input('names')
        ]);
    }
}
