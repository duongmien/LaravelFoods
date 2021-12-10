<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;
use Illuminate\Support\Facades\DB;

class CreateUsersTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('tbl_user', function (Blueprint $table) {
            $table->bigIncrements('user_id');
            $table->string('name');
            $table->string('username');
            $table->timestamp('user_verified_at')->nullable();
            $table->string('password');
            $table->integer('role_id');
            $table->string("user_sex");
            $table->string("user_tel");
            $table->string("user_address");
            $table->string("user_email");
            $table->rememberToken();
            $table->timestamps();
        });
        $faker = Faker\Factory::create();
        $limit=20;
        DB::table('tbl_user')->insert([
            'name' =>'admin',
            'username' =>'admin',
            'password' =>'admin',
            'role_id' =>'1',
            'user_sex' =>'Nam',
            'user_tel' =>'0192929292',
            'user_address' =>'admin',
            'user_email' =>'admin@email.com',
        ]);
        DB::table('tbl_user')->insert([
            'name' =>'user',
            'username' =>'user',
            'password' =>'user',
            'role_id' =>'1',
            'user_sex' =>'Nam',
            'user_tel' =>'0192929292',
            'user_address' =>'user',
            'user_email' =>'user@email.com',
        ]);
        for($i=0;$i<$limit;$i++){
            DB::table('tbl_user')->insert([
                'name' =>$faker->name,
                'username' =>$faker->userName,
                'password' =>'1111',
                'role_id' =>$faker->numberBetween(1,2),
                'user_sex' =>$faker->randomElement($aray=array('Nam','Nữ')),
                'user_tel' =>$faker->e164PhoneNumber,
                'user_address' =>$faker->address,
                'user_email' =>$faker->email,
            ]);
        }

    }
    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('tbl_user');
    }
}
