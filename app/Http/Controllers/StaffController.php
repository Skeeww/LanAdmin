<?php

namespace App\Http\Controllers;

use App\Models\Staff;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Cache;

class StaffController extends Controller
{
    function staff() {
        $staffs = Cache::remember("staff", 120, function() {
            return Staff::all();
        });

        return view('staff.list', ["staffs" => $staffs]);
    }

    function get($id) {
        $staff = Staff::find($id);
        if(is_null($staff)){
            return redirect("/staff/list")->withErrors(["Aucun compte ne correspond à cet id"]);
        }
        return view('staff.view', ["staff" => $staff]);
    }

    function add(Request $request) {
        $validate = $request->validate([
            'name'     => 'required',
            'email'     => 'required|email|unique:App\Models\Staff,email',
            'password'  => 'required|min:8'
        ]);
        
        $staff = new Staff;
        
        $staff->name = $validate['name'];
        $staff->email = $validate['email'];
        $staff->password = bcrypt($validate['password']);

        $staff->save();

        Cache::forget('staff');

        return redirect("staff/list");
    }

    function deleteView($id) {
        $staff = Staff::find($id);
        if(is_null($staff)){
            return redirect("/staff/list")->withErrors(["Aucun compte ne correspond a cet id"]);
        }
        return view('staff.delete', ["staff" => $staff]);
    }

    function delete($id) {
        $staff = Staff::find($id);
        if(is_null($staff)){
            return redirect("/staff/list")->withErrors(["Aucun compte ne correspond a cet id"]);
        }
        $staff->delete();
        Cache::forget('staff');
        return redirect("/staff/list");
    }

    function editView($id) {
        $staff = Staff::find($id);
        if(is_null($staff)){
            return redirect("/staff/list")->withErrors(["Aucun compte ne correspond a cet id"]);
        }
        return view('staff.edit', ["staff" => $staff]);
    }

    function edit(Request $request) {
        $validate = $request->validate([
            'id'        => 'required',
            'name'      => 'required',
            'email'     => 'required|email'
        ]);

        $staff = Staff::find($validate['id']);

        if(is_null($staff)){
            return redirect("/staff/list")->withErrors(["Aucun compte ne correspond a cet id"]);
        }

        $staff->name = $validate['name'];
        $staff->email = $validate['email'];

        if(!is_null($request->password)){
            $validate = $request->validate([
                'password'  => 'required|min:8'
            ]);
            $staff->password = bcrypt($validate['password']);
        }
        
        $staff->save();
        Cache::forget('staff');
        return redirect("/staff/list");
    }
}
