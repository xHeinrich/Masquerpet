<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Backpack\CRUD\CrudTrait;

class GameCharacter extends Model
{
    use CrudTrait;

     /*
    |--------------------------------------------------------------------------
    | GLOBAL VARIABLES
    |--------------------------------------------------------------------------
    */
    /*
     `id` int(11) NOT NULL AUTO_INCREMENT,
     `accountId` int(11) NOT NULL,
     `angle` float NOT NULL,
     `bankCode` int(11) NOT NULL,
     `classId` int(11) NOT NULL,
     `dexterity` int(11) NOT NULL,
     `exp` bigint(20) NOT NULL,
     `faceId` int(11) NOT NULL,
     `fp` int(11) NOT NULL,
     `gender` tinyint(3) unsigned NOT NULL,
     `gold` int(11) NOT NULL,
     `hairColor` int(10) unsigned NOT NULL,
     `hairId` int(11) NOT NULL,
     `hp` int(11) NOT NULL,
     `intelligence` int(11) NOT NULL,
     `level` int(11) NOT NULL,
     `mapId` int(11) NOT NULL,
     `mp` int(11) NOT NULL,
     `name` longtext,
     `posX` float NOT NULL,
     `posY` float NOT NULL,
     `posZ` float NOT NULL,
     `skinSetId` int(11) NOT NULL,
     `slot` int(11) NOT NULL,
     `stamina` int(11) NOT NULL,
     `strength` int(11) NOT NULL,
     `statPoints` int(11) NOT NULL,
     `skillPoints` int(11) NOT NULL,
 */
    protected $table = 'characters';
    protected $primaryKey = 'id';
    public $timestamps = false;
    protected $guarded = ['id'];
    protected $fillable = [
        'accountId', 'angle', 'bankCode', 'classId', 'dexterity', 'exp', 'faceId',
        'fp', 'gender', 'gold', 'hairColor', 'hairId', 'hp', 'intelligence',
        'level', 'mapId', 'mp', 'name', 'posX', 'posY', 'posZ', 'skinSetId',
        'slot', 'statmina', 'strength', 'statPoints', 'skillPoints',
    ];
    protected $hidden = [];
    // protected $dates = [];

    /*
    |--------------------------------------------------------------------------
    | FUNCTIONS
    |--------------------------------------------------------------------------
    */
    public function account_name()
    {

      return $this->account->username;
    }
    /*
    |--------------------------------------------------------------------------
    | RELATIONS
    |--------------------------------------------------------------------------
    */
    public function account(){
      return $this->hasOne('App\Models\GameUser', 'id', 'accountId');
    }

    public function items(){
      return $this->hasMany('App\Models\GameItem', 'characterId', 'id');
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
