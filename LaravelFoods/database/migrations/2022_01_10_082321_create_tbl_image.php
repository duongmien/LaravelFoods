<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Schema;

class CreateTblImage extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('tbl_image', function (Blueprint $table) {
            $table->increments('image_id');
            $table->integer('product_id');
            $table->text('image_name');
            $table->timestamps();
        });
        $faker = Faker\Factory::create();
        $limit=20;
        for($i=0;$i<$limit;$i++){
            for($j=0;$j<4;$j++){
                DB::table('tbl_image')->insert([
                    'product_id' =>$i+1,
                    'image_name' =>$faker->numberBetween(1,20).'.jpg',
                ]);
            }
        }
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('tbl_image');
    }
}
