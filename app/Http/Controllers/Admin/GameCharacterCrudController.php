<?php

namespace App\Http\Controllers\Admin;

use Backpack\CRUD\app\Http\Controllers\CrudController;

// VALIDATION: change the requests to match your own file names if you need form validation
use App\Http\Requests\GameCharacterRequest as StoreRequest;
use App\Http\Requests\GameCharacterRequest as UpdateRequest;

class GameCharacterCrudController extends CrudController
{

    public function setUp()
    {

        /*
        |--------------------------------------------------------------------------
        | BASIC CRUD INFORMATION
        |--------------------------------------------------------------------------
        */
        $this->crud->setModel('App\Models\GameCharacter');
        $this->crud->setRoute('admin/game/character');
        $this->crud->setEntityNameStrings('Character', 'Characters');

        /*
        |--------------------------------------------------------------------------
        | BASIC CRUD INFORMATION
        |--------------------------------------------------------------------------
        */

        //$this->crud->setFromDb();
        $this->crud->addColumn([
                                'name' => 'name',
                                'label' => 'Player Name',
                            ]);

        $this->crud->addColumn([
                                'label' => 'Account',
                                'type' => 'model_function',
                                'function_name' => 'account_name'
                            ]);

        $this->crud->addColumn([
                                'name' => 'level',
                                'label' => 'Level',
                            ]);

        $this->crud->addColumn([
                                'name' => 'gold',
                                'label' => 'Gold',
                            ]);
        $this->crud->addColumn([
                                  'name' => 'items',
                                  'label' => 'Item Count',
                                  'type' => 'array_count',
                            ]);

        $this->crud->addField([
                                'name' => 'accountId',
                                'type' => 'select',
                                'label' => 'Account',
                                'entity' => 'accountId',
                                'attribute' => 'username',
                                'model' => "App\Models\GameUser",
                            ]);

        $this->crud->addField([
                              'name' => 'name',
                              'label' => 'Character Name',
                            ]);

        $this->crud->addField([
                              'name' => 'bankCode',
                              'label' => 'Bank Code',
                              'type' => 'number',
                              'attributes' => [
                                "max" => 4,
                                "min" => 0,
                                "required" => true,
                              ]
                            ]);

        $this->crud->addField([
                                'name' => 'gender',
                                'label' => 'Character Gender',
                                'type' => 'radio',
                                'options' => [
                                  0 => "Female",
                                  1 => "Male",
                                ]
                              ]);

        $this->crud->addField([
                                'name' => 'slot',
                                'label' => 'Character Slot',
                                'type' => 'radio',
                                'options' => [
                                  0 => "1",
                                  1 => "2",
                                  2 => "3",
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
        // your additional operations before save here
        $redirect_location = parent::updateCrud();
        // your additional operations after save here
        // use $this->data['entry'] or $this->crud->entry
        return $redirect_location;
    }
}
