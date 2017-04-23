<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateGameItemsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
      Schema::enableForeignKeyConstraints();

      Schema::create('items', function (Blueprint $table) {
          $table->integer('id', true)->unique();
          $table->integer('characterId');
          $table->integer('itemCreatorId')->default(0);
          $table->tinyInteger('element')->unsigned()->default(0);
          $table->tinyInteger('elementRefine')->unsigned()->default(0);
          $table->integer('itemCount');
          $table->integer('itemId');
          $table->integer('itemSlot');
          $table->tinyInteger('refine')->unsigned()->default(0);

          $table->foreign('characterId')
          ->references('id')->on('characters')
          ->onDelete('cascade');
      });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
      Schema::dropIfExists('items');
    }
}
