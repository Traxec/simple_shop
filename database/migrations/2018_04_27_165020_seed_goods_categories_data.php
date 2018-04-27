<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;
use App\goods_category;

class SeedGoodsCategoriesData extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        $name = [
            [1 => 'a'],
            [2 => 'b'],
            [3 => 'c'],
            [4 => 'd'],
            [5 => 'e'],
            [6 => 'f'],
            [7 => 'g'],
            [8 => 'h'],
            [9 => 'i'],
            [10 => 'j'],
        ];
        factory(App\goods_category::class, 10)->create();
        foreach($name[0] as $key => $value){
            $goods_category = goods_category::find($key);
            $goods_category ->name = $value;
            $goods_category ->save();
        }
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
