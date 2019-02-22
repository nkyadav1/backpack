<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use App\Models\Restaurant;
use Illuminate\Http\Request;

class RestaurantController extends Controller {

    public function index(Request $request) {
        $search_term = $request->input('q');

        if ($search_term) {
            $results = Restaurant::where('name', 'LIKE', '%' . $search_term . '%')->paginate(10);
        } else {
            $results = Restaurant::paginate(10);
        }

        return $results;
    }

    public function search(Request $request) {
        $term = $request->input('term');
        $options = Restaurant::where('name', 'like', '%' . $term . '%')->get()->pluck('name', 'id');

        return $options;
    }

    public function show($id) {
        return Restaurant::find($id);
    }

    public function showList(Request $request, $view = 'list') {
        $search_term = $request->input('q');
        if ($search_term) {
            $results = Restaurant::where('name', 'LIKE', '%' . $search_term . '%')->paginate(10);
        } else {
            $results = Restaurant::paginate(10);
        }
        return view('ajax-restaurant-list')->with('results', $results->toArray());
    }

    public function detailView($id) {
        $data = $this->show($id);
        return view('restaurant-detail')->with('data', $data);
    }

    /**
     * 
     * @param Request $request
     */
    public function addBasicDetails(Request $request) {
        $data = $request->all();
        unset($data['_token']);
        unset($data['_wysihtml5_mode']);
        $result = Restaurant::create($data);
        return $result;
    }

    public function addRestaurantTiming(Request $request) {
        $data = $request->all();
        unset($data['_token']);
        unset($data['_wysihtml5_mode']);
        $result = Restaurant::findOrFail($data['id']);
        $result->open_hour_to = $data['open_hour_to'];
        $result->open_hour_from = $data['open_hour_from'];
        $result->save();
        if ($result->id) {
            return response()->json($result->toArray())->setStatusCode('204', 'Resource updated successfully.');
        } else {
            return response('Cannot update Resource', '400');
        }
    }

    public function addRestaurantFeatures(Request $request) {
        $data = $request->all();
        unset($data['_token']);
        unset($data['_wysihtml5_mode']);
        $result = Restaurant::findOrFail($data['id']);
        $result->good_for = $data['good_for'];
        $result->feature = $data['feature'];
        $result->food = $data['food'];
        $result->save();
        if ($result->id) {
            return response()->json($result->toArray())->setStatusCode('204', 'Resource updated successfully.');
        } else {
            return response('Cannot update Resource', '400');
        }
    }

    public function uploadFeatureImage(Request $request) {
        $data = $request->all();
        $result = Restaurant::findOrFail($data['id']);
        $path = $request->file('file')->store('featureImages');
        $result->featureimage = $path;
        $result->save();
        if ($result->id) {
            return response()->json($result->toArray())->setStatusCode('201', 'Resource updated successfully.');
        } else {
            return response()->json($result->toArray())->setStatusCode('400', 'Cannnot Update Resource');
        }
    }    
    
}
