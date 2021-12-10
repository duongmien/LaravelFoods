<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;
use Illuminate\Support\Facades\DB;

class CreateTblRoleTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('tbl_role', function (Blueprint $table) {
            $table->increments('role_id');
            $table->string('role_name');
            $table->string('role_detail');
        });
        DB::table('tbl_role')->insert(['role_name' => 'admin','role_detail' => 'admin']);
        DB::table('tbl_role')->insert(['role_name' => 'user','role_detail' => 'user']);

    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('tbl_role');
    }
}
