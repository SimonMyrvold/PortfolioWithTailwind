<?php

namespace App\Http\Controllers;

use App\Models\portfolio;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Termwind\Components\Dd;

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

        $roles = "";

        for ($i = 0; $i < count($request->roles); $i++) {
            $roles .= $request->roles[$i] . ',';
        }

        portfolio::create([
            'title' => $request->title,
            'description' => $request->description,
            'github' => $request->github,
            'link' => $request->demo,
            'tags' => $roles,
            'image' => $this->storeImage($request),
        ]);

        return redirect()->route('Portfolio.index');
    }

    /**
     * Display the specified resource.
     */
    public function show($id)
    {
        $tags = portfolio::findOrFail($id)->tags;
        $tags = explode(',', $tags);
        $count = count($tags);
        $tags = array_slice($tags, 0, $count - 1);

        return view('Portfolio.show', [
            'project' => portfolio::findOrFail($id),
            'tags' => $tags,
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
