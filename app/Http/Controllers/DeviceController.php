<?php

namespace App\Http\Controllers;

use App\Models\Device;
use Illuminate\Http\Request;

class DeviceController extends Controller
{
    public function list($id = null)
    {
        return $id ? Device::find($id) : Device::all();
    }
    public function listparams($id)
    {
        return Device::find($id);
    }
    public function store(Request $request)
    {
        $result = Device::insert([
            'name' => $request->name,
            'member_id' => $request->member_id,
        ]);
        if ($result) {
            return ['msg' => 'Data Saved Successfully'];
        } else {
            return ['msg' => 'Something Went Wrong'];
        }
    }
}
