<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use App\Models\Locality;
use Illuminate\Http\Request;

class LocalityController extends Controller
{
    public function index(Request $request)
    {
        $search_term = $request->input('q');

        if ($search_term) {
            $results = Locality::where('name', 'LIKE', '%'.$search_term.'%')->paginate(10);
        } else {
            $results = Locality::paginate(10);
        }

        return $results;
    }

    public function search(Request $request)
    {
        $term = $request->input('term');
        $options = Locality::where('name', 'like', '%'.$term.'%')->get()->pluck('name', 'id');

        return $options;
    }

    public function show($id)
    {
        return Locality::find($id);
    }
}
