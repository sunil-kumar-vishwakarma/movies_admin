<?php

namespace App\Http\Controllers;

use App\Models\Package;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;
use Exception;
class SubscriptionController extends Controller
{
   

    // public function package()
    // {
    //     return view('admin.subscription.package');
    // }
    public function transaction()
    {
        return view('admin.subscription.transaction');
    }
    public function payment()
    {
        return view('admin.subscription.payment');
    }



    public function package()
    {
    $params = Package::latest()->get();
        return view('admin.subscription.package',compact('params'));
    }

    // public function package(Request $request)
    // {
    //     try {
    //         $params['data'] = [];
    //         if ($request->ajax()) {

    //             $input_search = $request['input_search'];
    //             if ($input_search != null && isset($input_search)) {
    //                 $data = Package::where('name', 'LIKE', "%{$input_search}%")->latest()->get();
    //             } else {
    //                 $data = Package::latest()->get();
    //             }

    //             return DataTables()::of($data)
    //                 ->addIndexColumn()
    //                 ->addColumn('action', function ($row) {

    //                     $edit = __('label.edit');
    //                     $delete = __('label.delete');
    //                     $package_delete = __('label.delete_package');

    //                     $delete = ' <form onsubmit="return confirm(\'' . $package_delete . '\');" method="POST"  action="' . route('package.destroy', [$row->id]) . '">
    //                             <input type="hidden" name="_token" value="' . csrf_token() . '">
    //                             <input type="hidden" name="_method" value="DELETE">
    //                             <button type="submit" class="edit-delete-btn" style="outline: none;" title="' . $delete . '"><i class="fa-solid fa-trash-can fa-xl"></i></button></form>';

    //                     $btn = '<div class="d-flex justify-content-around" title="' . $edit . '">';
    //                     $btn .= '<a href="' . route('package.edit', [$row->id]) . '" class="edit-delete-btn">';
    //                     $btn .= '<i class="fa-solid fa-pen-to-square fa-xl"></i>';
    //                     $btn .= '</a>';
    //                     $btn .= $delete;
    //                     $btn .= '</a></div>';
    //                     return $btn;
    //                 })
    //                 ->rawColumns(['action'])
    //                 ->make(true);
    //         }
    //         return view('admin.subscription.package', compact('params'));
    //     } catch (Exception $e) {
    //         return response()->json(array('status' => 400, 'errors' => $e->getMessage()));
    //     }
    // }
    public function create()
    {
        try {
            $params['data'] = [];
            return view('admin.package.add', $params);
        } catch (Exception $e) {
            return response()->json(array('status' => 400, 'errors' => $e->getMessage()));
        }
    }
    public function store(Request $request)
   
    {
    $request->validate([
                'name' => 'required|min:2',
                'price' => 'required',
    //             // 'type' => 'required',
                'duration' => 'required',
        ]);

        $data = $request->only('name','price','duration');

        

        $Package =  Package::create($data);

        return response()->json([
            'success' => true,
            'message' => 'Package added successfully.',
            'data' => $Package
        ]);

     }
   
    public function update(Request $request, $id)
    {
        $request->validate([
                'name' => 'required|min:2',
                'price' => 'required',
    //             // 'type' => 'required',
                'duration' => 'required',
        ]);

        $Package = Package::find($id);
        $data = $request->only('name','price','duration');

        

        $Package->update($data);

        return response()->json([
            'success' => true,
            'message' => 'Package updated successfully.',
            'data' => $Package // optional, if you want to return updated data
        ]);

    }

    public function destroy($id)
    {
       
        $Package = Package::find($id);
       

        $Package->delete();
        return response()->json([
            'success' => true,
            'message' => 'Package deleted.',
            'data' => $Package 
        ]);
       
    }
    public function package_detail($Pid)
    {
        Package_Detail::where('package_id', $Pid)->delete();

        $Pdata = Package::where('id', $Pid)->first();

        $watch = "Use only on Mobile";
        $ads = "Ads On All Content";
        $devic_sync = "Watch on " . $Pdata['no_of_device_sync'] . " device";
        if ($Pdata['watch_on_laptop_tv'] == 1) {
            $watch = "Watch on Mobile & TV";
        }
        if ($Pdata['ads_free_content'] == 1) {
            $ads = "Ads Free All Content";
        }

        Package_Detail::insert([
            ['package_id' => $Pdata['id'], 'package_key' => $devic_sync, 'package_value' => $Pdata['no_of_device_sync']],
            ['package_id' => $Pdata['id'], 'package_key' => $watch, 'package_value' => $Pdata['watch_on_laptop_tv']],
            ['package_id' => $Pdata['id'], 'package_key' => $ads, 'package_value' => $Pdata['ads_free_content']],
        ]);
        return true;
    }
}