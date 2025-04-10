<?php

namespace App\Http\Controllers;
use App\Models\Language;
use Illuminate\Http\Request;

class LanguageController extends Controller
{
    public function index()
    {
        $language = Language::all();
        
        return view('admin.basic-item.language', compact('language'));
    }

    public function create()
    {
        return view('category.create');
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
            $image->move(public_path('uploads/categories'), $filename);
            $data['image'] = 'uploads/categories/' . $filename;
        }

        $language =  Language::create($data);

        return response()->json([
            'success' => true,
            'message' => 'language added successfully.',
            'data' => $language
        ]);

     }

    public function edit(Language $category)
    {
        return view('category.edit', compact('category'));
    }

    public function update(Request $request, $id)
    {
        $request->validate([
            'name' => 'required|string',
            'image' => 'nullable|image|mimes:jpeg,png,jpg,gif|max:2048',
        ]);

        $language = Language::find($id);
        $data = $request->only('name');

        if ($request->hasFile('image')) {
            $image = $request->file('image');
            $filename = time() . '_' . $image->getClientOriginalName();
            $image->move(public_path('uploads/categories'), $filename);
            $data['image'] = 'uploads/categories/' . $filename;
        }

        $language->update($data);

        return response()->json([
            'success' => true,
            'message' => 'language updated successfully.',
            'data' => $language // optional, if you want to return updated data
        ]);

    }

    public function destroy($id)
    {
       
        $language = Language::find($id);
        if ($language->image && file_exists(public_path($language->image))) {
            unlink(public_path($language->image));
        }

        $language->delete();
        return response()->json([
            'success' => true,
            'message' => 'language deleted.',
            'data' => $language 
        ]);
       
    }
}
