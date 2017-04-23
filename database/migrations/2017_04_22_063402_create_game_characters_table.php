<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateGameCharactersTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
      Schema::create('characters', function (Blueprint $table) {
          $table->integer('id', true)->unique();
          $table->integer('accountId');
          $table->float('angle')->default(0);
          $table->integer('bankCode');
          $table->integer('classId')->default(0);
          $table->integer('dexterity')->default(config('hellion.defaults.dexterity'));
          $table->bigInteger('exp')->default(0);
          $table->integer('faceId')->default(0);
          $table->integer('fp')->default(32);
          $table->tinyInteger('gender')->unsigned();
          $table->integer('gold')->default(config('hellion.defaults.gold'));
          $table->unsignedInteger('hairColor')->default();
          $table->integer('hairId')->default();
          $table->integer('hp')->default(63);
          $table->integer('intelligence')->default(config('hellion.defaults.intelligence'));
          $table->integer('level')->default(config('hellion.defaults.level'));
          $table->integer('mapId')->default(config('hellion.defaults.mapId'));
          $table->integer('mp')->default(63);
          $table->longText('name');
          $table->float('posX')->default(config('hellion.defaults.posX'));
          $table->float('posY')->default(config('hellion.defaults.posY'));
          $table->float('posZ')->default(config('hellion.defaults.posZ'));
          $table->integer('skinSetId')->default(0);
          $table->integer('slot')->default(0);
          $table->integer('stamina')->default(config('hellion.defaults.stamina'));
          $table->integer('strength')->default(config('hellion.defaults.strength'));
          $table->integer('statPoints')->default(0);
          $table->integer('skillPoints')->default(0);

        });
        DB::unprepared('
        ALTER TABLE `characters`
        CHANGE COLUMN `angle` `angle` FLOAT NOT NULL DEFAULT \'0.00\',
        CHANGE COLUMN `posX` `posX` FLOAT NOT NULL DEFAULT \'6968.00\' ,
        CHANGE COLUMN `posY` `posY` FLOAT NOT NULL DEFAULT \'100.00\' ,
        CHANGE COLUMN `posZ` `posZ` FLOAT NOT NULL DEFAULT \'3328.00\' '
        );

;

    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
      Schema::dropIfExists('characters');
    }
}
