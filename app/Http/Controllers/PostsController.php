<?php

namespace App\Http\Controllers;

use App\Post;
use App\Website;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Session;

class PostsController extends Controller
{

    /**
     * @param Website $website
     * @return \Illuminate\Contracts\View\Factory|\Illuminate\View\View
     */
    public function create(Website $website)
    {
        if($website->cms_type == 'wp') $cmsDirectory = 'wordpress';
        else if($website->cms_type == 'lcms') $cmsDirectory = 'lumicms';

        return view('admin.websites.posts.'.$cmsDirectory.'.create', compact('website'));
    }

    /**
     * @param Request $request
     * @param Website $website
     */
    public function store(Request $request, Website $website) {

        if($website->cms_type == 'wp'){
            $request->validate([
                'post_title' => 'required|max:95',
                'post_name' => 'required',
                'post_content' => 'required',
            ]);
        } else if ($website->cms_type == 'lcms'){
            $request->validate([
                'post_title' => 'required|max:45',
                'post_content' => 'required',
            ]);
        }

        /* Use method create new post from Post class */
        if((new Post())->createPost($website, $request)){
            Session::flash('messae', "A new post has been successfully added.");
            return redirect(url('/admin/websites/' . $website->id ));
        }

    }

    /**
     * @param Website $website
     * @param $post_id
     * @return \Illuminate\Contracts\View\Factory|\Illuminate\View\View
     */
    public function edit(Website $website, $post_id){

        if($website->cms_type == 'wp') $cmsDirectory = 'wordpress';
        else if($website->cms_type == 'lcms') $cmsDirectory = 'lumicms';

        if((new Post())->getSinglePost($website, $post_id)){
            $post = (new Post())->getSinglePost($website, $post_id);
        }

        return view('admin.websites.posts.'.$cmsDirectory.'.edit', compact('website', 'post'));
    }

    public function update(Request $request, Website $website, $post_id){
        if($website->cms_type == 'wp'){
            $request->validate([
                'post_title' => 'required|max:95',
                'post_name' => 'required',
                'post_content' => 'required',
            ]);
        } else if ($website->cms_type == 'lcms'){
            $request->validate([
                'post_title' => 'required|max:45',
                'post_content' => 'required',
            ]);
        }

        /* Use method  update post from Post class */
        if((new Post())->updatePost($website, $request,$post_id)){
            Session::flash('message', "Post has been successfully updated.");
            return redirect(url('/admin/websites/' . $website->id ));
        }

    }


}
