<?php

namespace App\Http\Controllers;

use App\Models\Project_skills;
use Illuminate\Http\Request;

class ProjectSkillsController extends Controller
{
    public function index()
    {
        // Retrieve all project skills with related project and skill
        return Project_skills::with('project', 'skillList')->get();
    }

    public function store(Request $request)
    {
        // Validate the request
        $request->validate([
            'project_id' => 'required|exists:projects,id',
            'skill_list_id' => 'required|exists:skill_lists,id',
        ]);

        // Create a new project skill
        return Project_skills::create($request->only(['project_id', 'skill_list_id']));
    }

    public function show(Project_skills $Project_skills)
    {
        // Return a specific project skill with related project and skill
        return $Project_skills->load('project', 'skillList');
    }

    public function update(Request $request, Project_skills $Project_skills)
    {
        // Validate the request
        $request->validate([
            'project_id' => 'required|exists:projects,id',
            'skill_list_id' => 'required|exists:skill_lists,id',
        ]);

        // Update project skill
        $Project_skills->update($request->only(['project_id', 'skill_list_id']));
        return $Project_skills;
    }

    public function destroy(Project_skills $Project_skills)
    {
        // Delete a project skill
        $Project_skills->delete();
        return response()->json(['message' => 'Project skill deleted successfully.'], 204);
    }
}
