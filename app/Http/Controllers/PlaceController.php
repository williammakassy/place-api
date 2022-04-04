<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Place;

class PlaceController extends Controller
{
    public function index() {
        return response()->json(Place::orderBy('name')->get(), 200);
    }

    public function show($id) {
        $place = Place::findOrFail($id);
        return response()->json($place::findOrFail($id), 200);
    }

    public function store(Request $request) {
        $place = Place::create($request->all());
        return response($place, 201);
    }

    public function updates(Request $request, $id) {
        $place = Place::findOrFail($id);
        $place->update($request->all());
        return response($place, 200);
    }

    public function destroy(Request $request, $id) {
        $place = Place::findOrFail($id);
        $place->delete();
        return response()->json(null, 204);
    }
}
