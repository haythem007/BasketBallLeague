<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class Add5d27b84d93f8fRelationshipsToPlayerTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('players', function(Blueprint $table) {
            if (!Schema::hasColumn('players', 'team_id')) {
                $table->integer('team_id')->unsigned()->nullable();
                $table->foreign('team_id', '324396_5d27b7efc5ba2')->references('id')->on('teams')->onDelete('cascade');
                }
                
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('players', function(Blueprint $table) {
            
        });
    }
}
