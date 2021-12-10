<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;
use Illuminate\Support\Facades\DB;
use FakerRestaurant\Restaurant;
class CreateTblProduct extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('tbl_product', function (Blueprint $table) {
            $table->increments('product_id');
            $table->integer('category_id');
            $table->text('product_name');
            $table->text('product_desc');
            $table->text('product_content');
            $table->text('product_meal');
            $table->string('product_price');
            $table->string('product_image');
            $table->integer('product_status');
            $table->timestamps();
        });
        $faker = Faker\Factory::create();
        $faker->addProvider(new \FakerRestaurant\Provider\en_US\Restaurant($faker));
        $limit=20;
        for($i=0;$i<$limit;$i++){
            DB::table('tbl_product')->insert([
                'category_id' =>$faker->numberBetween(1,10),
                'product_name' =>$faker->foodName() ,
                'product_desc' =>$faker->sentence(20,$variableNbWords = true),
                'product_content' =>$faker->sentence(50,$variableNbWords = true),
                'product_meal' =>$faker->numberBetween(1,2).' person',
                'product_price' =>round($faker->numberBetween(50000,500000),-3),
                'product_image' =>($i+1).'.jpg',
                'product_status' =>'1'
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
        Schema::dropIfExists('tbl_product');
    }
}
