<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

use App\Models\Category;
use App\Models\LargeCategory;
use App\Models\Issue;

class CategoryController extends Controller
{
	public function index()
	{
		$lcs=LargeCategory::with('categories')->get();
		return view('category.lc_list', ['lcs'=>$lcs]);
	}

	public function lc_view($id)
	{
		$lc=LargeCategory::findOrFail($id);
		// return view('category.lc_list', ['lc'=>$lc]);
	}

	public function issues()
	{
		$issues=Issue::with('categories')->get();
		return view('category.issue_list', ['issues'=>$issues]);
	}

	public function show($id)
	{
		$category=Category::with('necessary_points')->with('good_bad_points')->findOrFail($id);
		return view('category.show', ['category'=>$category]);
	}


	public function categories_by_parent($parent,$id)
	{
		$categories=Category::where($parent, $id)->get();
		return $categories;
	}

	// public function categories_by_issue($id)
	// {
	// 	$categories=Category::where('issue', $id);
	// 	return $categories;
	// }

	public function create(Request $request)
	{
		$req = json_decode($request['postData']);

		$category = new Category;

		$category->user_id = Auth::id();
		$category->name = $req->name;
		$category->access_key = $req->access_key;
		$category->secret_key = $req->secret_key;
		$category->partner_tag = $req->partner_tag;
		$category->yahoo_id = $req->yahoo_id;
		$category->target_price = $req->target_price;
		$category->fall_pro = $req->fall_pro;
		$category->web_hook = $req->web_hook;
		$category->save();

		return $category;
	}

	public function edit(Request $request)
	{
		$req = json_decode($request['postData']);

		$category = Category::find($req->id);

		$category->name = $req->name;
		$category->access_key = $req->access_key;
		$category->secret_key = $req->secret_key;
		$category->partner_tag = $req->partner_tag;
		$category->yahoo_id = $req->yahoo_id;
		$category->target_price = $req->target_price;
		$category->fall_pro = $req->fall_pro;
		$category->web_hook = $req->web_hook;
		$category->save();

		return $category;
	}

	public function delete(Request $request, $id)
	{
		Category::find($id)->delete();
		return $id;
	}

	public function set_column(Request $request)
	{
		$category = Category::find($request->cId);
		$category[$request->col] = $request->content;
		$category->save();

		if ($request->col == 'fall_pro') {
			$pro = 1 - $request->content / 100;
			$items = $category->items;
			foreach ($items as $i) {
				$i->target_price = intval($i->register_price * $pro);
				$i->save();
			}
		} else {
			# code...
		}
		
		return;
	}

	public function set_fall_pro(Request $request)
	{
		$category = Category::find($request->cId);
		$category->fall_pro = $request->percent;
		$category->save();
		return;
	}

	public function set_target_price(Request $request)
	{
		$category = Category::find($request->cId);
		$category->target_price = $request->tarprice;
		$category->save();
		return;
	}

	public function scan($id)
	{
		$category = Category::find($id);
		return $category;
	}

	public function stop($id)
	{
		$category = Category::find($id);
		$category->round = 0;
		$category->trk_num = 0;
		$category->stop = 1;
		$category->save();
		return $category;
	}

	public function restart(Request $request)
	{
		$category = Category::find($request->id);
		$category->stop = 0;
		$category->save();
		return $category;
	}

	public function save(Request $request)
	{
		$req = json_decode($request['exData']);
		$category = Category::find($req->category_id);
		if ($category == null) {
			$category = new Category;
		}

		$category->file_name = $req->file_name;
		$category->len = $req->len;
		$category->save();
	}
}