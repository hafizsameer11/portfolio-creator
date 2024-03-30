<?php

namespace App\Http\Controllers;

use App\Models\Education;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class EducationController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public $user;
    public $user_id;
    public function __construct()
    {
        $this->user = Auth::user();
        $this->user_id =$this->user->id ;
    }
    public function index()
    {
        $education = Education::where('user_id',$this->user_id)->get();
        return view('admin.skills.index',compact('education'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('admin');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
     $validatedData=$request->validate([
        'title'=>'string|required',
        'instiute'=>'string|required',
        'description'=>'string|required',

     ]);

     $edu=Education::create($validatedData);
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
