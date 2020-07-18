<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class imageController extends Controller {
	function index() {
		$database = DB::table('information')->get();
		return View("index", ["db" => $database]);
	}
	function add(Request $request) {
		$mane = $request->input("name");
		$price = $request->input("price");
		$file = $request->file('photo')->store("public");
		$img = str_replace('public', 'storage', $file);

		DB::table('information')->insert(["Name" => $mane, "Price" => $price, "Image" => $img]);
		return redirect('index');
	}
	function delete($id) {
		DB::table('information')->where('ID', '=', $id)->delete();
		echo "<script> alert('Xoa Thanh Cong');</script>";
		return redirect('index');
	}
	function edit($id) {
		$database = DB::table('information')->where('ID', '=', $id)->get();
		return View("edit", ["dbedit" => $database]);
	}
	function update(Request $request) {
		$id = $request->input("id");
		$name = $request->input("nameNew");
		$price = $request->input("priceNew");
		$file = $request->file('photoNew');

		if (is_null($file)) {
			$img = DB::table('information')->where('ID', $id)->value('Image');
			DB::table('information')->where('ID', $id)->update(["Name" => $name, "Price" => $price, "Image" => $img]);
		} else {
			$file->store("public");
			$img = str_replace('public', 'storage', $file);
			DB::table('information')->where('ID', $id)->update(["Name" => $name, "Price" => $price, "Image" => $img]);
		}
		return redirect('index');
	}
}
