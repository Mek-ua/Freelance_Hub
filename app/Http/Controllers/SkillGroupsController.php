<?php

namespace App\Http\Controllers;

use App\Models\Skill_groups;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class SkillGroupsController extends Controller
{
    public function index()
    {
        return Skill_groups::where('user_id', Auth::id())->get(); 
    }

    public function store(Request $request)
    {
       $validatedData= $request->validate([
            'name' => 'required|string|max:255',
            'user_id' => 'required|exists:users,id',  
        ]);

        return Skill_groups::create($validatedData);
    }

    public function show(Skill_groups $Skill_groups)
    {
        return $Skill_groups; 
    }

    public function update(Request $request, Skill_groups $Skill_groups)
    {
        $request->validate([
            'name' => 'required|string|max:255',
        ]);

        $Skill_groups->update($request->only(['name'])); 
        return $Skill_groups;
    }

    public function destroy(Skill_groups $Skill_groups)
    {
        $Skill_groups->delete(); 
        return response()->json(['message' => 'Skill group deleted successfully.'], 204);
    }
}
