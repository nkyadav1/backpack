<?php

namespace App\Http\Controllers\Admin;

use Backpack\CRUD\app\Http\Controllers\CrudController;
// VALIDATION: change the requests to match your own file names if you need form validation
use App\Http\Requests\RestaurantRequest as StoreRequest;
use App\Http\Requests\RestaurantRequest as UpdateRequest;

class RestaurantCrudController extends CrudController {

    public function setup() {

        /*
          |--------------------------------------------------------------------------
          | BASIC CRUD INFORMATION
          |--------------------------------------------------------------------------
         */
        $this->crud->setModel('App\Models\Restaurant');
        $this->crud->setRoute(config('backpack.base.route_prefix') . '/restaurant');
        $this->crud->setEntityNameStrings('restaurant', 'Restaurants');

        /*
          |--------------------------------------------------------------------------
          | BASIC CRUD INFORMATION
          |--------------------------------------------------------------------------
         */

        //$this->crud->setFromDb();
        $allFields = [
            "name" => [
                "name" => "name",
                "label" => "Name",
                "value" => null,
                "default" => null,
                "type" => "text",
                "values" => [],
                "attributes" => ["placeholder" => "Enter Restaurant Name"],
                "autoset" => true
            ],
            "phone" => [
                "name" => "phone",
                "label" => "Phone",
                "value" => null,
                "default" => null,
                "type" => "text",
                "values" => [],
                "attributes" => ["placeholder" => "Enter Restaurant Phone Number"],
                "autoset" => true
            ],
            "status" => [
                "name" => "status",
                "label" => "Document Status",
                "default" => "Under Process",
                "type" => "select2_from_array",
                "options" => ["Active" => "Active", "In Active" => "In Active", "Blocked" => "Blocked", "Under Process" => "Under Process"],
                "allows_null" => false,
                "allows_multiple" => false,
                "attributes" => [],
                "autoset" => true
            ],
            "is_available" => [
                "name" => "is_available",
                "label" => "Available For Booking",
                "value" => null,
                "default" => 1,
                "type" => "radio",
                "options" => [0 => "No", 1 => "Yes"],
                "inline" => true,
                "attributes" => [],
                "autoset" => true
            ],
            "address" => [
                "name" => "address",
                "label" => "Address",
                "value" => null,
                "default" => null,
                "type" => "text",
                "attributes" => ["placeholder" => "Enter Address"],
                "autoset" => true
            ],
            "landmark" => [
                "name" => "landmark",
                "label" => "Landmark",
                "value" => null,
                "default" => null,
                "type" => "text",
                "values" => [],
                "attributes" => ["placeholder" => "Near by location or Landmark"],
                "autoset" => true
            ],
            "city" => [// 1-n relationship
                'label' => "City", // Table column heading
                'type' => "select2_from_ajax",
                'name' => 'id', // the column that contains the ID of that connected entity
                'entity' => 'city', // the method that defines the relationship in your Model
                'attribute' => "name", // foreign key attribute that is shown to user
                'model' => "App\Models\City", // foreign key model
                'data_source' => url("api/city"), // url to controller search function (with /{id} should return model)
                'placeholder' => "Select a City", // placeholder for the select
                'minimum_input_length' => 2, // minimum characters to type before querying results
            ],
            "state" => [
                "name" => "state",
                "label" => "State",
                "value" => null,
                "default" => null,
                "type" => "text",
                "values" => [],
                "attributes" => [],
                "autoset" => true
            ],
            "description" => [
                "name" => "description",
                "label" => "Description",
                "value" => null,
                "default" => null,
                "type" => "text",
                "values" => [],
                "attributes" => [],
                "autoset" => true
            ],
            "latitude" => [
                "name" => "latitude",
                "label" => "Latitude",
                "value" => null,
                "default" => null,
                "type" => "text",
                "values" => [],
                "attributes" => [],
                "autoset" => true
            ],
            "longitude" => [
                "name" => "longitude",
                "label" => "Longitude",
                "value" => null,
                "default" => null,
                "type" => "text",
                "values" => [],
                "attributes" => [],
                "autoset" => true
            ],
            "amenities" => [
                "name" => "amenities",
                "label" => "Amenities",
                "value" => null,
                "default" => null,
                "type" => "textarea",
                "values" => [],
                "attributes" => [],
                "autoset" => true
            ],
            "taxno" => [
                "name" => "taxno",
                "label" => "Taxno",
                "value" => null,
                "default" => null,
                "type" => "text",
                "values" => [],
                "attributes" => [],
                "autoset" => true
            ],
            "payments_terms" => [
                "name" => "payments_terms",
                "label" => "Payments terms",
                "value" => null,
                "default" => null,
                "type" => "text",
                "values" => [],
                "attributes" => [],
                "autoset" => true
            ],
            "localities" => [
                "name" => "localities",
                "label" => "Localities",
                "value" => null,
                "default" => null,
                "type" => "text",
                "values" => [],
                "attributes" => [],
                "autoset" => true
            ],
            "manager_name" => [
                "name" => "manager_name",
                "label" => "Manager name",
                "value" => null,
                "default" => null,
                "type" => "text",
                "values" => [],
                "attributes" => [],
                "autoset" => true
            ],
            "manager_phone" => [
                "name" => "manager_phone",
                "label" => "Manager phone",
                "value" => null,
                "default" => null,
                "type" => "text",
                "values" => [],
                "attributes" => [],
                "autoset" => true
            ],
            "owner_name" => [
                "name" => "owner_name",
                "label" => "Owner name",
                "value" => null,
                "default" => null,
                "type" => "text",
                "values" => [],
                "attributes" => [],
                "autoset" => true
            ],
            "owner_phone" => [
                "name" => "owner_phone",
                "label" => "Owner phone",
                "value" => null,
                "default" => null,
                "type" => "text",
                "values" => [],
                "attributes" => [],
                "autoset" => true
            ],
            "pincode" => [
                "name" => "pincode",
                "label" => "Pincode",
                "value" => null,
                "default" => null,
                "type" => "text",
                "values" => [],
                "attributes" => [],
                "autoset" => true
            ],
        ];
        // ------ CRUD FIELDS
        // $this->crud->addField($options, 'update/create/both');
        // $this->crud->addFields($array_of_arrays, 'update/create/both');
        // $this->crud->removeField('name', 'update/create/both');
        // $this->crud->removeFields($array_of_names, 'update/create/both');
        $this->crud->addFields($allFields, 'both');
        // ------ CRUD COLUMNS
        // $this->crud->addColumn(); // add a single column, at the end of the stack
        // $this->crud->addColumns(); // add multiple columns, at the end of the stack
        // $this->crud->removeColumn('column_name'); // remove a column from the stack
        // $this->crud->removeColumns(['column_name_1', 'column_name_2']); // remove an array of columns from the stack
        // $this->crud->setColumnDetails('column_name', ['attribute' => 'value']); // adjusts the properties of the passed in column (by name)
        // $this->crud->setColumnsDetails(['column_1', 'column_2'], ['attribute' => 'value']);
        // ------ CRUD BUTTONS
        // possible positions: 'beginning' and 'end'; defaults to 'beginning' for the 'line' stack, 'end' for the others;
        // $this->crud->addButton($stack, $name, $type, $content, $position); // add a button; possible types are: view, model_function
        // $this->crud->addButtonFromModelFunction($stack, $name, $model_function_name, $position); // add a button whose HTML is returned by a method in the CRUD model
        // $this->crud->addButtonFromView($stack, $name, $view, $position); // add a button whose HTML is in a view placed at resources\views\vendor\backpack\crud\buttons
        // $this->crud->removeButton($name);
        // $this->crud->removeButtonFromStack($name, $stack);
        // $this->crud->removeAllButtons();
        // $this->crud->removeAllButtonsFromStack('line');
        // ------ CRUD ACCESS
        // $this->crud->allowAccess(['list', 'create', 'update', 'reorder', 'delete']);
        // $this->crud->denyAccess(['list', 'create', 'update', 'reorder', 'delete']);
        // ------ CRUD REORDER
        // $this->crud->enableReorder('label_name', MAX_TREE_LEVEL);
        // NOTE: you also need to do allow access to the right users: $this->crud->allowAccess('reorder');
        // ------ CRUD DETAILS ROW
        // $this->crud->enableDetailsRow();
        // NOTE: you also need to do allow access to the right users: $this->crud->allowAccess('details_row');
        // NOTE: you also need to do overwrite the showDetailsRow($id) method in your EntityCrudController to show whatever you'd like in the details row OR overwrite the views/backpack/crud/details_row.blade.php
        // ------ REVISIONS
        // You also need to use \Venturecraft\Revisionable\RevisionableTrait;
        // Please check out: https://laravel-backpack.readme.io/docs/crud#revisions
        //$this->crud->allowAccess('revisions');
        $this->crud->allowAccess(['show', 'delete', 'reorder']);


        // ------ AJAX TABLE VIEW
        // Please note the drawbacks of this though:
        // - 1-n and n-n columns are not searchable
        // - date and datetime columns won't be sortable anymore
        // $this->crud->enableAjaxTable();
        // ------ DATATABLE EXPORT BUTTONS
        // Show export to PDF, CSV, XLS and Print buttons on the table view.
        // Does not work well with AJAX datatables.
        // $this->crud->enableExportButtons();
        // ------ ADVANCED QUERIES
        // $this->crud->addClause('active');
        // $this->crud->addClause('type', 'car');
        // $this->crud->addClause('where', 'name', '==', 'car');
        // $this->crud->addClause('whereName', 'car');
        // $this->crud->addClause('whereHas', 'posts', function($query) {
        //     $query->activePosts();
        // });
        // $this->crud->addClause('withoutGlobalScopes');
        // $this->crud->addClause('withoutGlobalScope', VisibleScope::class);
        // $this->crud->with(); // eager load relationships
        // $this->crud->orderBy();
        // $this->crud->groupBy();
        // $this->crud->limit();
    }

    public function store(StoreRequest $request) {
        // your additional operations before save here
        $redirect_location = parent::storeCrud($request);
        // your additional operations after save here
        // use $this->data['entry'] or $this->crud->entry
        return $redirect_location;
    }

    public function update(UpdateRequest $request) {
        // your additional operations before save here
        $redirect_location = parent::updateCrud($request);
        // your additional operations after save here
        // use $this->data['entry'] or $this->crud->entry
        return $redirect_location;
    }

}
