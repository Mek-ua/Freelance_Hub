<?php

namespace App\Http\Controllers;

use App\Models\Skill_lists;
use Illuminate\Http\Request;

class SkillListsController extends Controller
{
    public function index()
    {
        return Skill_lists::all(); // Get all skill lists
    }

    public function store(Request $request)
    {
        $request->validate([
            'skill_name' => 'required|string|max:255',
            'skill_group_id' => 'nullable|exists:skill_groups,id',
        ]);

        return Skill_lists::create($request->only(['skill_name', 'skill_group_id']));
    }

    public function show(Skill_lists $Skill_lists)
    {
        return $Skill_lists; 
    }

    public function update(Request $request, Skill_lists $Skill_lists)
    {
        $request->validate([
            'skill_name' => 'required|string|max:255',
            'skill_group_id' => 'required|exists:skill_groups,id',
        ]);

        $Skill_lists->update($request->only(['skill_name', 'skill_group_id'])); 
        return $Skill_lists;
    }

    public function destroy(Skill_lists $Skill_lists)
    {
        $Skill_lists->delete(); 
        return response()->json(['message' => 'Skill deleted successfully.'], 204);
    }
}
