<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class Add5d27b68287f10RelationshipsToCrmDocumentTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('crm_documents', function(Blueprint $table) {
            if (!Schema::hasColumn('crm_documents', 'customer_id')) {
                $table->integer('customer_id')->unsigned()->nullable();
                $table->foreign('customer_id', '324394_5d27b67d889b1')->references('id')->on('crm_customers')->onDelete('cascade');
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
        Schema::table('crm_documents', function(Blueprint $table) {
            
        });
    }
}
