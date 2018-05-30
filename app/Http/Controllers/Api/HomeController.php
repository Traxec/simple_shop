<?php

namespace App\Http\Controllers\Api;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Goods_category;

class HomeController extends Controller
{
	public function index(Goods_category $goods_category)
	{
		return $goods_category->all()->toTree();
	}
}
