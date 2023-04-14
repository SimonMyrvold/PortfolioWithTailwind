<?php

namespace App\Http\Controllers;

use App\Models\portfolio;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class PortfolioController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        return view('Portfolio.index', [
            'projects' => portfolio::orderBy('id')->get(),
        ]);  
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        if (Auth::check()) {
            return view('Portfolio.create');
        } else {
            return redirect()->route('login');
        }
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        dd($request->all());
    }

    /**
     * Display the specified resource.
     */
    public function show($id)
    {
        return view('Portfolio.show', [
            'project' => portfolio::findOrFail($id),
        ]);
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(portfolio $portfolio)
    {

    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, portfolio $portfolio)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(portfolio $portfolio)
    {
        //
    }

    private function storeImage($request){
        $newImageName = uniqid() . '-' . $request->project_name . '.' .
        $request->picture->extension();

        return $request->picture->move(public_path('pictures'), $newImageName);
    }
    
}
