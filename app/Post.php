<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Config;
use Illuminate\Support\Facades\DB;
use Illuminate\Database\DatabaseManager;


class Post extends Model
{
    public function dynamicConnectMySql($website){

        Config::set("database.connections.dynamic_mysql", [
            'driver'    => 'mysql',
            'host' => $website->db_host,
            'port' => $website->db_user,
            'database' =>  $website->db_name,
            'username' =>  $website->db_user,
            'password' =>  $website->db_pass,
            'charset'   => $website->db_charset,
            'collation' => 'utf8_unicode_ci',
            'prefix'    => $website->db_prefix,
            'strict' => true,
            'engine' => null,
        ]);

        DB::purge('dynamic_mysql');

    }
    static function getPostsFromAllWebsites(){
        foreach ($websites = Website::all() as $website){
            $posts = getPosts($website);
            array_push($all_posts, $posts);
        }
        return $all_posts;
    }
    public function getPosts($website){

        $this->dynamicConnectMySql($website);

        if($website->cms_type == 'wp'){
            $posts = $this->getPostWP();
        } else if ($website->cms_type == 'lcms') {
            $posts = $this->getPostLumiCMS();
        } else {
            $posts = DB::connection('dynamic_mysql')->table('posts')->get();
            foreach ($posts as $post){
                $user = DB::connection('dynamic_mysql')->table('users')->where('id', $post->user_id)->first();
                $post->user = $user->name;

            }
        }

        return $posts;

    }

    public function getPostWP(){
        return DB::connection('dynamic_mysql')
            ->table('posts')
            ->where([
                ['post_status', '=', 'publish'],
                ['post_type', '=', 'post'],
            ])
            ->orWhere([
                ['post_status', '=', 'publish'],
                ['post_type', '=', 'blog'],
            ])
            ->orWhere([
                ['post_status', '=', 'publish'],
                ['post_type', '=', 'news'],
            ])
            ->orderBy('ID', 'desc')
            ->paginate(20);
    }

    public function getPostLumiCMS(){
        return DB::connection('dynamic_mysql')
            ->table('news')
            ->orderBy('id', 'desc')
            ->paginate(20);
    }

    public function getSinglePost($website, $post_id){

        $this->dynamicConnectMySql($website);

        if($website->cms_type == 'wp'){
            $post = $this->getSinglePostWP($post_id);
        } else if ($website->cms_type == 'lcms') {
            $post = $this->getSinglePostLumiCMS($post_id);
        } else {
            $post = null;
        }

        return $post;

    }

    private function getSinglePostWP($post_id){
        return DB::connection('dynamic_mysql')
            ->table('posts')
            ->where('ID', '=', $post_id)->get();
    }

    private function getSinglePostLumiCMS($post_id){
        return DB::connection('dynamic_mysql')
            ->table('news')
            ->where('id', '=', $post_id)->get();
    }

    public function createPost($website, Request $request){

        $this->dynamicConnectMySql($website);

        if($website->cms_type == 'wp'){
           if($this->createPostWP($request)){
               return true;
           }
        }
        else if($website->cms_type == 'lcms'){
            if($this->createPostLumiCMS($request)){
                return true;
            }
        }
    }

    private function createPostWP(Request $request){

        DB::table('posts')->insert([
            'user_id' => Auth::id(),
            'body' => $request->post_content,
        ]);
        return DB::connection('dynamic_mysql')
            ->table('posts')
            ->insert([
                'post_author' => 1,
                'post_date' => date('Y-m-d H:i:s'),
                'post_date_gmt' => date('Y-m-d H:i:s'),
                'post_modified' => date('Y-m-d H:i:s'),
                'post_modified_gmt' => date('Y-m-d H:i:s'),
                'post_content' => $request->post_content,
                'post_excerpt' => '',
                'post_name' => $request->post_name,
                'post_title' => $request->post_title,
                'post_type' => 'post',
                'to_ping' => '',
                'pinged' => '',
                'post_content_filtered' => '',
                'post_parent' => 0,
                'guid' => 'http://www.lumitechnology.eu/?post_type=portfolio&p=1841',
                'menu_order' => 0,
                'post_mime_type' => '',
                'comment_count' => 0,
            ]);
        }

    private function createPostLumiCMS(Request $request){
        return DB::connection('dynamic_mysql')
            ->table('news')
            ->insert([
                'date' => date('Y-m-d'),
                'title_pl' => $request->post_title,
                'text_pl' => $request->post_content,
                'akt' => 1,
                'datevisible' => 1
            ]);
    }

    public function updatePost($website, Request $request, $post_id){

        $this->dynamicConnectMySql($website);

        if($website->cms_type == 'wp'){
            if($this->updatePostWP($request, $post_id)){
                return true;
            }
        }
        else if($website->cms_type == 'lcms'){
            if($this->updatePostLumiCMS($request, $post_id)){
                return true;
            }
        }
    }

    private function updatePostWP(Request $request, $post_id){
        return DB::connection('dynamic_mysql')
            ->table('posts')
            ->where('ID', $post_id)
            ->update([
                'post_modified' => date('Y-m-d H:i:s'),
                'post_modified_gmt' => date('Y-m-d H:i:s'),
                'post_content' => $request->post_content,
                'post_excerpt' => '',
                'post_name' => $request->post_name,
                'post_title' => $request->post_title,
            ]);
    }

    private function updatePostLumiCMS(Request $request){
        var_dump('update lumi post');
        exit;
    }

}
