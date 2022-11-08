<?php

namespace App\Http\Controllers;

use App\Models\Lending;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;

class LendingController extends Controller
{
    public function index(){
        $lendings =  Lending::all();
        return $lendings;
    }
    
    public function show($id)
    {
        $lending = Lending::find($id);
        return $lending;
    }
    public function destroy($id)
    {
        Lending::find($id)->delete();
    }
    public function store(Request $request)
    {
        $lending = new Lending();
        $lending->user_id = $request->user_id;
        $lending->copy_id = $request->copy_id;
        $lending->start = $request->start;
        $lending->save();
    }

    public function update(Request $request, $id)
    {
        $lending = Lending::find($id);
        $lending->user_id = $request->user_id;
        $lending->copy_id = $request->copy_id;
        $lending->start = $request->start;
        $lending->save();
    }
}
