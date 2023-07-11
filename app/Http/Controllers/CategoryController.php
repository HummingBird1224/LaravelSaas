<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

use App\Models\Category;
use App\Models\LargeCategory;
use App\Models\Issue;
use App\Models\Guide;
use App\Models\CategoryNecessaryPoint;
use App\Models\CategoryComparisonPoint;
use App\Models\CategoryGoodBadPoint;

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
		$category=Category::findOrFail($id);
		return view('category.show', ['category'=>$category]);
	}


	public function categories_by_parent($parent,$id)
	{
		$categories=Category::where($parent, $id)->with('guide')->get();
		return $categories;
	}

	public function lc_edit(Request $request)
	{
		$lc=LargeCategory::updateOrCreate(
			['id'=>$request->lc_id],
			['title'=>$request->lc_title]
		);
		return redirect()->route('admin_category_issues');
	}

	public function issue_edit(Request $request)
	{
		$image=$request->file('i_image');
		$issue=Issue::updateOrCreate(
			['id'=>$request->i_id],
			['title'=>$request->i_title]
		);
		if($image) {
			$issue->image = $image->storeAs(
			'uploads/issue_logos/', time().'_'.$image->getClientOriginalName(), 'public'
			);
			$issue->save();
		}
		return back()->withInput();
	}

	public function category_issues()
	{
		$lcs=LargeCategory::get();
		$issues=Issue::get();
		return view('admin.category_issues', ['lcs'=>$lcs, 'issues'=>$issues]);
	}

	public function create(Request $request)
	{
		$image=$request->file('g_image');
    $data=$request->file('g_data');
		$category=Category::create([
			'title'=>$request->c_title,
			'description'=>$request->c_description,
			'large_category_id'=>$request->lc_id,
			'issue_id'=>$request->i_id,
			'success_method'=>$request->s_point,
			'necessary_points'=>$request->n_point,
			'good_points'=>$request->g_point,
			'bad_points'=>$request->b_point,
			'comparison_points'=>$request->c_point,
		]);		

		$guide= Guide::create([
			'title'=>$request->g_title,
			'description'=>$request->g_description,			
      		'recommended'=>$request->g_recommended=='on'?1:0,
			'free'=>$request->g_free=='on'?1:0,
		]);
		if($data) {
			$guide->data = $data->storeAs(
			'uploads/guides/materials', time().'_'.$data->getClientOriginalName(), 'public'
			);
			$guide->save();
		}
		if($image) {
			$guide->image = $image->storeAs(
			'uploads/guides/images', time().'_'.$image->getClientOriginalName(), 'public'
			);
			$guide->save();
		}
		$category->guide_id=$guide->id;
		$category->save();
		return back()->withInput();
	}

	public function edit(Request $request)
	{
		$category = Category::find($request->c_id);
		$category->title = $request->c_title;
		$category->description = $request->c_description;
		$category->large_category_id = $request->lc_id;
		$category->success_method = $request->s_point;
		$category->necessary_points = $request->n_point;
		$category->good_points = $request->g_point;
		$category->bad_points = $request->b_point;
		$category->comparison_points = $request->c_point;
		$category->save();

		$guide=Guide::find($category->guide_id);
		$guide->title=$request->g_title;
		$guide->description=$request->g_description;
		$guide->recommended=$request->g_recommended=='on'?1:0;
		$guide->free=$request->g_free=='on'?1:0;
		$guide->save();

		$image=$request->file('g_image');
    $data=$request->file('g_data');

		if($data) {
			$guide->data = $data->storeAs(
			'uploads/guides/materials', time().'_'.$data->getClientOriginalName(), 'public'
			);
			$guide->save();
		}
		if($image) {
			$guide->image = $image->storeAs(
			'uploads/guides/images', time().'_'.$image->getClientOriginalName(), 'public'
			);
			$guide->save();
		}

		return back()->withInput();
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