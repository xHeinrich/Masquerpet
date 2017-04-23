<?php

namespace App\Http\Controllers\Admin;

use Backpack\CRUD\app\Http\Controllers\CrudController;

// VALIDATION: change the requests to match your own file names if you need form validation
use App\Http\Requests\GameUserStoreRequest as StoreRequest;
use App\Http\Requests\GameUserUpdateRequest as UpdateRequest;
use App\Models\GameUser;

class GameUserCrudController extends CrudController
{

    public function setUp()
    {

        /*
        |--------------------------------------------------------------------------
        | BASIC CRUD INFORMATION
        |--------------------------------------------------------------------------
        */
        $this->crud->setModel('App\Models\GameUser');
        $this->crud->setRoute('admin/game/user');
        $this->crud->setEntityNameStrings('User', 'Users');

        /*
        |--------------------------------------------------------------------------
        | BASIC CRUD INFORMATION
        |--------------------------------------------------------------------------
        */

        // ------ CRUD COLUMNS
        $this->crud->addColumn([
                                'name' => 'username',
                                'label' => 'Username',
                            ]);
        $this->crud->addColumn([
                                'name' => 'authority',
                                'label' => 'Authority Level',
                              ]);
        $this->crud->addColumn([
                                'name' => 'verification',
                                'type' => 'boolean',
                                'label' => 'Verified',
                              ]);
        $this->crud->addColumn([
                                'name' => 'characters',
                                'label' => 'Characters',
                                'type' => 'array_count',
                              ]);
        // ------ CRUD FIELDS
        $this->crud->addField([
                                'name' => 'username',
                                'label' => 'Username',
                            ]);
        $this->crud->addField([
                                'name' => 'password',
                                'label' => 'Password',
                                'type' => 'Password',
                              ]);
        $this->crud->addField([
                                'name' => 'verification',
                                'label' => 'Verified',
                                'type' => 'checkbox',
                              ]);
        $this->crud->addField([
                                'name' => 'authority',
                                'label' => 'Authority Level',
                                'type' => 'radio',
                                'options' => [
                                  0 => "Banned",
                                  1 => "User",
                                  2 => "Moderator",
                                  3 => "Administrator"
                                ]
        ]);

    }

    public function store(StoreRequest $request)
    {
        // your additional operations before save here
        $redirect_location = parent::storeCrud();
        // your additional operations after save here
        // use $this->data['entry'] or $this->crud->entry
        return $redirect_location;
    }

    public function update(UpdateRequest $request)
    {
        /*
        Check if the password has been modified, if it hasnt dont replace it
        */
        $user = GameUser::find($request->get('id'));
        if($request->get('password') == null){
          $request['password'] = $user->password;
        }
        // your additional operations before save here
        $redirect_location = parent::updateCrud();
        // your additional operations after save here
        // use $this->data['entry'] or $this->crud->entry
        return $redirect_location;
    }
}
