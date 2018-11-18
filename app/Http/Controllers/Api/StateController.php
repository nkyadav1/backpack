<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use App\Models\State;
use Illuminate\Http\Request;

class StateController extends Controller
{
    public function index(Request $request)
    {
        $search_term = $request->input('q');

        if ($search_term) {
            $results = State::where('name', 'LIKE', '%'.$search_term.'%')->paginate(10);
        } else {
            $results = State::paginate(10);
        }

        return $results;
    }

    public function search(Request $request)
    {
        $term = $request->input('term');
        $options = State::where('name', 'like', '%'.$term.'%')->get()->pluck('name', 'id');

        return $options;
    }

    public function show($id)
    {
        return State::find($id);
    }
}
