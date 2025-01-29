<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\role;
use App\Models\Specialrole;

class userController extends Controller
{
    // For Admin Adding roles
    public function index()
    {
        $type = role::select('type')
        ->distinct()
        ->get();
        $management = role::select('Rolename')
        ->where('type', 'Management')
        ->get();
        $centerofheads = role::select('Rolename')
        ->where('type', 'center of heads')
        ->get();

        $update = Specialrole::join('faculty', 'Specialrole.id', '=', 'faculty.id')
            ->select('specialrole.id', 'specialrole.Role', 'faculty.name')
            ->get();
        return view('index', compact('type', 'management', 'centerofheads' ,'update'));
    }
    public function addRole(Request $request)
    {
        
        Specialrole::create([
            'id' => $request->fid,
            'type' => $request->workType,
            'Role' => $request->selectedOption,
            'Status' => $request->simpleDropdown
        ]);

        return response()->json([
            'status' => 200,
            'message' => 'Role added successfully!'
        ]);
    }
}
