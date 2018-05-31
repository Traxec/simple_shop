<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;
use App\Goods_category;

class SeedGoodsCategoriesData extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        $faker = app(Faker\Generator::class);

        $parentName = [
            1 => '首页',
            2 => '居家',
            3 => '配件',
            4 => '服装',
            5 => '电器',
            6 => '洗护',
            7 => '饮食',
            8 => '餐厨',
            9 => '婴童',
        ];
        $Goods_category = factory(App\Goods_category::class, 50)
            ->create()
            ->each(function($Goods_category) use ($faker, $parentName){
                if($Goods_category->id <= count($parentName)){
                    $Goods_category->name = $parentName[$Goods_category->id];
                }else{
                    $Goods_category->parent_id = rand(1,9);
                }
                $Goods_category->save();
            });

    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        DB::table('goods_categories')->truncate();
    }
}
