<?php

namespace App\Http\Controllers;

use App\Helpers\DBHelpers;
use App\Website;
use Illuminate\Http\Request;
use App\Post;

class WebsitesController extends Controller
{
	/**
	 * Display a listing of the resource.
	 *
	 * @return \Illuminate\Http\Response
	 */
	public function index()
	{
		$websites = Website::all();
		return view('admin.websites.index', compact('websites'));
	}

	/**
	 * Show the form for creating a new resource.
	 *
	 * @return \Illuminate\Http\Response
	 */
	public function create()
	{
		return view('admin.websites.create');
	}

	/**
	 * Store a newly created resource in storage.
	 *
	 * @param  \Illuminate\Http\Request  $request
	 * @return \Illuminate\Http\Response
	 */
	public function store(Request $request)
	{
		$request->validate([
			'website_name' => 'required|max:45',
			'cms_type' => 'required',
			'db_user' => 'required',
			'db_name' => 'required',
			'db_host' => 'required',
			'db_port' => 'required',
		]);

		if(DBHelpers::checkConnectionStatusOnCreate($request)){

			Website::create($request->all());
			return redirect(route('websites.index'));

		} else {
			return back();
		}
	}

	/**
	 * Display the specified resource.
	 *
	 * @param  int  $id
	 * @return \Illuminate\Http\Response
	 */
	public function show(Website $website)
	{

		//Connect with Post this class has Methods
		$posts = new Post();
		/* Get all posts from custom database website */
		$posts = $posts->getPosts($website);

		/* Return all posts to view with website object */
		return view('admin.websites.single', compact('website','posts'));
	}

	/**
	 * Show the form for editing the specified resource.
	 *
	 * @param  int  $id
	 * @return \Illuminate\Http\Response
	 */
	public function edit(Website $website)
	{
		return view('admin.websites.edit', compact('website'));
	}

	/**
	 * Update the specified resource in storage.
	 *
	 * @param  \Illuminate\Http\Request  $request
	 * @param  int  $id
	 * @return \Illuminate\Http\Response
	 */
	public function update(Request $request, $id)
	{
		$request->validate([
			'website_name' => 'required|max:45',
			'cms_type' => 'required',
			'db_user' => 'required',
			'db_name' => 'required',
			'db_host' => 'required',
			'db_port' => 'required',
		]);

		if(DBHelpers::checkConnectionStatusOnCreate($request)){

			Website::findOrFail($id)->update($request->all());
			return redirect(route('websites.index'));

		} else {
			return back();
		}
	}

	/**
	 * Remove the specified resource from storage.
	 *
	 * @param  Website $website
	 * @return \Illuminate\Http\Response
	 */
	public function destroy(Website $website)
	{
		$website->delete();
		return back();
	}
}
