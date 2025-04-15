<?php

namespace App\Http\Controllers;

use App\Models\Cast;
use Illuminate\Http\Request;

class CastController extends Controller
{
    public function cast()
    {
        $allcast = Cast::all();
        return view('admin.cast', compact('allcast'));
    }

    public function store(Request $request)
    {
        $request->validate([
            'name' => 'required|string',
            'type' => 'required|string',
            'personal_info' => 'required|string',
            'image' => 'nullable|image|mimes:jpeg,png,jpg,gif|max:2048',
        ]);

        $data = $request->only('name','type','personal_info');

        if ($request->hasFile('image')) {
            $image = $request->file('image');
            $filename = time() . '_' . $image->getClientOriginalName();
            $image->move(public_path('uploads/cast'), $filename);
            $data['image'] = 'uploads/cast/' . $filename;
        }

        $cast =  Cast::create($data);

        return response()->json([
            'success' => true,
            'message' => 'Cast added successfully.',
            'data' => $cast
        ]);

     }

    public function update(Request $request, $id)
    {
        $request->validate([
            'name' => 'required|string',
            'type' => 'required|string',
            'personal_info' => 'required|string',
            'image' => 'nullable|image|mimes:jpeg,png,jpg,gif|max:2048',
        ]);

        $cast = Cast::find($id);
        $data = $request->only('name','type','personal_info');

        if ($request->hasFile('image')) {
            $image = $request->file('image');
            $filename = time() . '_' . $image->getClientOriginalName();
            $image->move(public_path('uploads/cast'), $filename);
            $data['image'] = 'uploads/cast/' . $filename;
        }

        $cast->update($data);

        return response()->json([
            'success' => true,
            'message' => 'cast updated successfully.',
            'data' => $cast // optional, if you want to return updated data
        ]);

    }

    public function destroy($id)
    {
       
        $cast = Cast::find($id);
        if ($cast->image && file_exists(public_path($cast->image))) {
            unlink(public_path($cast->image));
        }

        $cast->delete();
        return response()->json([
            'success' => true,
            'message' => 'cast deleted.',
            'data' => $cast 
        ]);
       
    }

}
