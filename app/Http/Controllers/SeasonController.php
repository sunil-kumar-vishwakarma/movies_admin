<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Season;

class SeasonController extends Controller
{
    public function index()
    {
        $seasons = Season::all();
        
        return view('admin.basic-item.season', compact('seasons'));
    }

    public function create()
    {
        return view('season.create');
    }

    public function store(Request $request)
    {
        $request->validate([
            'name' => 'required|string',
            'image' => 'nullable|image|mimes:jpeg,png,jpg,gif|max:2048',
        ]);

        $data = $request->only('name');

        if ($request->hasFile('image')) {
            $image = $request->file('image');
            $filename = time() . '_' . $image->getClientOriginalName();
            $image->move(public_path('uploads/season'), $filename);
            $data['image'] = 'uploads/season/' . $filename;
        }

        $season =  Season::create($data);

        return response()->json([
            'success' => true,
            'message' => 'Season added successfully.',
            'data' => $season
        ]);

     }

    public function edit(Season $season)
    {
        return view('season.edit', compact('season'));
    }

    public function update(Request $request, $id)
    {
        $request->validate([
            'name' => 'required|string',
            'image' => 'nullable|image|mimes:jpeg,png,jpg,gif|max:2048',
        ]);

        $season = Season::find($id);
        $data = $request->only('name');

        if ($request->hasFile('image')) {
            $image = $request->file('image');
            $filename = time() . '_' . $image->getClientOriginalName();
            $image->move(public_path('uploads/season'), $filename);
            $data['image'] = 'uploads/season/' . $filename;
        }

        $season->update($data);

        return response()->json([
            'success' => true,
            'message' => 'Season updated successfully.',
            'data' => $season // optional, if you want to return updated data
        ]);

    }

    public function destroy($id)
    {
       
        $season = Season::find($id);
        if ($season->image && file_exists(public_path($season->image))) {
            unlink(public_path($season->image));
        }

        $season->delete();
        return response()->json([
            'success' => true,
            'message' => 'Season deleted.',
            'data' => $season 
        ]);
       
    }
}
