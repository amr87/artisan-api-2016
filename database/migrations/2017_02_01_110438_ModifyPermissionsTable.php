<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class ModifyPermissionsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        //
        
                Schema::table('permissions', function (Blueprint $table) {

            $table->integer('company_id')->after('id')->nullable();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        //
        
        
        Schema::table('permissions', function (Blueprint $table) {
            $table->dropColumn('company_id');
        });
    }
}
