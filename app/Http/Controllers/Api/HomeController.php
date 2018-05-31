<?php

namespace App\Http\Controllers\Api;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Cache;
use App\Goods_category;

class HomeController extends Controller
{
	public function index()
	{
		$Goods_categories = Cache::remember('goods_categories', 10, function () {
		    return Goods_category::get()->toTree();
		});
		return $Goods_categories;
	}
}
