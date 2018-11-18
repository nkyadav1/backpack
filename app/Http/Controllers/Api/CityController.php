<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use App\Models\City;
use Illuminate\Http\Request;

class CityController extends Controller
{
    public function index(Request $request)
    {
        $search_term = $request->input('q');

        if ($search_term) {
            $results = City::where('name', 'LIKE', '%'.$search_term.'%')->paginate(10);
        } else {
            $results = City::paginate(10);
        }

        return $results;
    }

    public function search(Request $request)
    {
        $term = $request->input('term');
        $options = City::where('name', 'like', '%'.$term.'%')->get()->pluck('name', 'id');

        return $options;
    }

    public function show($id)
    {
        return City::find($id);
    }
}
