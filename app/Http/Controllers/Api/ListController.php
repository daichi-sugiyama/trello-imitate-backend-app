<?php

namespace App\Http\Controllers\Api;

use Illuminate\Http\Request;
use App\Article;
use App\Http\Controllers\Controller;
use App\Lists;

class ListController extends Controller {
	// TODO:DBに保存したい

	public function index() {
		// DBから取得
		$list = Lists::find(1);
		return response()->json(json_decode($list->json));
	}

	public function store(Request $request) {
		// DBに登録
		$json = json_encode($request->input());
		$list = Lists::find(1);
		$list->update(['json' => $json]);
	}
}