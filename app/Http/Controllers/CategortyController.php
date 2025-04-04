<?php

namespace App\Http\Controllers;

use App\Models\Categorty;
use Illuminate\Http\Request;

class CategortyController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
{
    $categories = Categorty::paginate(10); // Fetch categories from the database
    return view('category.index', compact('categories')); // Pass the data to the view
}


    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('category.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
         $request->validate([
            'name' => 'required|string|max:255',
            'description' => 'required|string|max:255',
            'status' => 'nullable'
         ]);

         Categorty::create([
            'name' => $request->name,
            'description' => $request->description,
            'status' => $request->status == true ? 1:0,

         ]);

         return redirect()->back()->with('status','Created Successfully');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Categorty  $categorty
     * @return \Illuminate\Http\Response
     */
    public function show(Categorty $categorty)
    {
        return view('category.show');
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Categorty  $categorty
     * @return \Illuminate\Http\Response
     */
    public function edit(Categorty $categorty)
    {
        return view('category.edit');
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Categorty  $categorty
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Categorty $categorty)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Categorty  $categorty
     * @return \Illuminate\Http\Response
     */
    public function destroy(Categorty $categorty)
    {
        //
    }
}
