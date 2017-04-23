<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Backpack\CRUD\CrudTrait;

class GameItem extends Model
{
    use CrudTrait;

     /*
    |--------------------------------------------------------------------------
    | GLOBAL VARIABLES
    |--------------------------------------------------------------------------
    */
    /*
      `id` int(11) NOT NULL AUTO_INCREMENT,
      `characterId` int(11) NOT NULL,
      `itemCreatorId` int(11) NOT NULL,
      `element` tinyint(3) unsigned NOT NULL,
      `elementRefine` tinyint(3) unsigned NOT NULL,
      `itemCount` int(11) NOT NULL,
      `itemId` int(11) NOT NULL,
      `itemSlot` int(11) NOT NULL,
      `refine` tinyint(3) unsigned NOT NULL,
    */
    protected $table = 'items';
    protected $primaryKey = 'id';
    public $timestamps = false;
    protected $guarded = ['id'];
    protected $fillable = [
      'characterId', 'itemCreatorId', 'element', 'elementRefine', 'itemCount',
      'itemId', 'itemSlot', 'refine',
    ];
    // protected $hidden = [];
    // protected $dates = [];

    /*
    |--------------------------------------------------------------------------
    | FUNCTIONS
    |--------------------------------------------------------------------------
    */
    public function character_name()
    {
      return $this->character->name;
    }
    /*
    |--------------------------------------------------------------------------
    | RELATIONS
    |--------------------------------------------------------------------------
    */
    public function character(){
      return $this->hasOne('App\Models\GameCharacter', 'id', 'characterId');
    }

    public function creator(){
      return $this->hasOne('App\Models\GameCharacter', 'id', 'itemCreatorId');
    }

    public function item(){
      return $this->hasOne('App\Models\ItemDetails', 'itemId');
    }
    /*
    |--------------------------------------------------------------------------
    | SCOPES
    |--------------------------------------------------------------------------
    */

    /*
    |--------------------------------------------------------------------------
    | ACCESORS
    |--------------------------------------------------------------------------
    */

    /*
    |--------------------------------------------------------------------------
    | MUTATORS
    |--------------------------------------------------------------------------
    */
}
