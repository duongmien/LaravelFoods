<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;
use Illuminate\Support\Facades\DB;

class CreateTblCategoryProduct extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('tbl_category_product', function (Blueprint $table) {
            $table->increments('category_id');
            $table->string('category_name');
            $table->text('category_desc');
            $table->integer('category_status');
            $table->timestamps();
        });
        $faker = Faker\Factory::create();
        $limit=10;
        for($i=0;$i<$limit;$i++){
            DB::table('tbl_category_product')->insert([
                'category_name' =>$faker->lastName,
                'category_desc' =>$faker->sentence(20,$variableNbWords = true),
                'category_status' =>$faker->numberBetween(0,1)
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
        Schema::dropIfExists('tbl_category_product');
    }
}
