<?php

namespace App\Http\Controllers;

use App\Models\Skill;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class SkillController extends Controller
{
    public $user;

    // Constructor to initialize the user variable
    public function __construct()
    {
        // Assign the authenticated user to the user variable
        $this->user = Auth::user();
    }
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $skills = Skill::where('user_id',$this->user->id)->get();
        return view('admin.skills.index',compact('skills'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('admin.skills.index');

    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $validatedData = $request->validate([
            'title' => 'required|string',
            'percentage'=>'required|string',
            'user_id'=>'numeric|required'
        ]);
        $skill=Skill::create($validatedData);
        if($skill){
            $skills = Skill::where('user_id',$this->user->id)->get();
            return redirect()->route('skill.index')->with('success','Skill added successfully');
        }else{
            $skills = Skill::where('user_id',$this->user->id)->get();
            return redirect()->route('skill.index')->with('error','Something Went Wrong');

        }
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {

    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        $skill=Skill::find($id);
        return view('admin.skills.edit',compact('skill'));

    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        $validatedData=$request->validate([
            'title' => 'required|string',
            'percentage'=>'required|string',
            'user_id'=>'numeric|required'
        ]);
        $skill=Skill::findOrFail($id);
        if($skill->update($validatedData)){
            $skills = Skill::where('user_id',$this->user->id)->get();
            return redirect()->route('skill.index')->with('success','Skill Updated successfully');

        }else{
            $skills = Skill::where('user_id',$this->user->id)->get();
            return redirect()->route('skill.index')->with('error','Something went Wrong');

        }

    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        $skill=Skill::find($id);

        if($skill){
            $skill->delete();
            return response()->json(['message'=>"Delete Successfully"]);
        }else{
            return response()->json(['errors'=>['msg'=>'No data found']]);
        }
    }
}
