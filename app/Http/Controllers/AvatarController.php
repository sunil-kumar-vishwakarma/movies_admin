<?php

namespace App\Http\Controllers;
use App\Models\Avatar;
use Illuminate\Http\Request;

class AvatarController extends Controller
{
    public function index()
    {
        $avatars = Avatar::all();
        
        return view('admin.basic-item.avatar', compact('avatars'));
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
            $image->move(public_path('uploads/avatar'), $filename);
            $data['image'] = 'uploads/avatar/' . $filename;
        }

        $avatar =  Avatar::create($data);

        return response()->json([
            'success' => true,
            'message' => 'Avatar added successfully.',
            'data' => $avatar
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

        $avatar = Avatar::find($id);
        $data = $request->only('name');

        if ($request->hasFile('image')) {
            $image = $request->file('image');
            $filename = time() . '_' . $image->getClientOriginalName();
            $image->move(public_path('uploads/avatar'), $filename);
            $data['image'] = 'uploads/avatar/' . $filename;
        }

        $avatar->update($data);

        return response()->json([
            'success' => true,
            'message' => 'Avatar updated successfully.',
            'data' => $avatar // optional, if you want to return updated data
        ]);

    }

    public function destroy($id)
    {
       
        $avatar = Avatar::find($id);
        if ($avatar->image && file_exists(public_path($avatar->image))) {
            unlink(public_path($avatar->image));
        }

        $avatar->delete();
        return response()->json([
            'success' => true,
            'message' => 'Avatar deleted.',
            'data' => $avatar 
        ]);
       
    }
}
