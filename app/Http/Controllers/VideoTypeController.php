<?php

namespace App\Http\Controllers;

use App\Models\cr;

use App\Models\VideoType;
use Illuminate\Http\Request;

class VideoTypeController extends Controller
{
    public function index()
    {
        $types = VideoType::all();

        return view('admin.basic-item.types', compact('types'));
    }

    public function create()
    {
        return view('admin.basic-item.types.create');
    }

    public function store(Request $request)
    {
        $request->validate([
            'name' => 'required|string|max:255',
            'images' => 'nullable|image',
            // 'status' => 'required|boolean',
        ]);

        $data = $request->all();

        if ($request->hasFile('images')) {
            $file = $request->file('images');
            $fileName = time() . '_' . $file->getClientOriginalName();
            $file->move(public_path('uploads/videotypes'), $fileName);
            $data['images'] = 'uploads/videotypes/' . $fileName;
        }
        $data['status'] ='Active';
      $videodata =  VideoType::create($data);

        return redirect()->route('admin.basic-item.types')->with(['video' =>$videodata,'success', 'Video type created successfully.']);
    }

    public function edit($id)
    {
        $videotype= VideoType::find($id); 
        return view('admin.basic-item.types.edit', compact('videotype'));
    }

    public function update(Request $request, $id)
    {
        $request->validate([
            'name' => 'required|string|max:255',
            'images' => 'nullable|image|mimes:jpeg,png,jpg,gif',
            // 'status' => 'required|boolean',
        ]);

        $videotype = VideoType::find($id);
        $data = $request->all();

        // dd($data);
        if ($request->hasFile('images')) {
            $file = $request->file('images');
            $fileName = time() . '_' . $file->getClientOriginalName();
            $file->move(public_path('uploads/videotypes'), $fileName);
            $data['images'] = 'uploads/videotypes/' . $fileName;
        }

        $videotype->update($data);

        return response()->json([
            'success' => true,
            'message' => 'Video type updated successfully.',
            'data' => $videotype // optional, if you want to return updated data
        ]);

        // return redirect()->route('admin.basic-item.types')->with('success', 'Video type updated successfully.');
    }

    public function destroy($id)
    {
       $videotype =  VideoType::find($id);
        $videotype->delete();
        return response()->json([
            'success' => true,
            'message' => 'Video type deleted successfully.',
            'data' => $videotype // optional, if you want to return updated data
        ]);
        // return redirect()->route('admin.basic-item.types')->with('success', 'Video type deleted successfully.');
    }
}
