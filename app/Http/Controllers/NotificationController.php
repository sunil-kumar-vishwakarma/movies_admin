<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Notification;

class NotificationController extends Controller
{
    public function index()
    {
        $notification = Notification::all();
        return view('admin.notification', compact('notification'));
    }
    
//     public function create()
// {
//     return view('notifications.create');
// }

public function store(Request $request)
{
    $request->validate([
        'title' => 'required|string',
        'message' => 'required|string',
        'image' => 'nullable|image|mimes:jpg,jpeg,png|max:2048',
    ]);

    $data = $request->only('title', 'message');

    if ($request->hasFile('image')) {
        $filename = time() . '.' . $request->image->extension();
        $request->image->move(public_path('uploads/notifications'), $filename);
        $data['image'] = 'uploads/notifications/' . $filename;
    }

    Notification::create($data);

    return redirect()->route('admin.notification')->with('success', 'Notification created.');
}

public function edit(Notification $notification)
{
    return view('notifications.edit', compact('notification'));
}

public function update(Request $request, Notification $notification)
{
    $request->validate([
        'title' => 'required|string',
        'message' => 'required|string',
        'image' => 'nullable|image|mimes:jpg,jpeg,png|max:2048',
    ]);

    $data = $request->only('title', 'message');

    if ($request->hasFile('image')) {
        $filename = time() . '.' . $request->image->extension();
        $request->image->move(public_path('uploads/notifications'), $filename);
        $data['image'] = 'uploads/notifications/' . $filename;
    }

    $notification->update($data);

    return redirect()->route('notifications.index')->with('success', 'Notification updated.');
}



public function destroy($id)
    {
       
        $notification = Notification::find($id);
        if ($notification->image && file_exists(public_path($notification->image))) {
            unlink(public_path($notification->image));
        }

        $notification->delete();
        return response()->json([
            'success' => true,
            'message' => 'Notification deleted.',
            'data' => $notification 
        ]);
       
    }

}
