<?php

namespace App\Http\Controllers\Frontend;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Laravolt\Indonesia\Models\Province;
use Laravolt\Indonesia\Models\City;

class BerkasController extends Controller
{
    public function index()
    {
        $provinces = Province::pluck('name', 'id');
        // return view('frontend.users.upload', [
        //     'provinces' => $provinces,
        // ]);

        return view('frontend.users.upload', compact('provinces'));
    }

    public function city(Request $request)
    {
        $cities = City::where('province_id', $request->get('id'))->pluck('name', 'id');
    
        return response()->json($cities);
    }

    public function create(Request $request)
    {
        
    }

    public function store(Request $request)
    {
        
    }

    public function show($id)
    {
        //
    }

    public function edit($id)
    {
        //
    }

    public function update(Request $request, $id)
    {
        //
    }

    public function destroy($id)
    {
        //
    }
}
