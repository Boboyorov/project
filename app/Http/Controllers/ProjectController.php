<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Project;
class ProjectController extends Controller
{
    public function index()
    {
        $items = project::all();
        return view('project.index', compact('items'));
    }


    public function create()
    {
        return view('project.create');
    }


    public function store(Request $request)
    {
        if ($request->all()) {
            Project::create([
                'fullname'=> $request->fullname, 
                'age'=> $request->age,
                'phone'=>$request->phone,
                'birth_place'=>$request->birth_place,
                'gender'=>$request->gender
            ]);
            return redirect()->route('projects.index')->with('success', 'saved successfully');
        } else {
            return redirect()->back()->with('success', "Do not wrong anyone!!!");
        }
    }

    public function show($id)
    {
        $item = Project::FindOrFail($id);

        return view('project.show', compact('item'));
    }

    public function edit($id)
    {
        $item = Project::FindOrFail($id);

        return view('project.edit', compact('item'));
    }

    public function update(Request $request, $id)
    {
        $item = Project::FindOrFail($id);

        $item->update($request->all());

        return redirect()->route('projects.index')
                  ->with('success', 'updated successfully');
    }

    public function destroy($id)
    {
        $item = Project::FindOrFail($id);
        $item->delete();

        return redirect()->route('projects.index')
                  ->with('success', 'deleted successfully');

    }

}
