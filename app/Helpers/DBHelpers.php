<?php

namespace App\Helpers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\App;
use Illuminate\Support\Facades\Config;
use Illuminate\Support\Facades\DB;

class DBHelpers {

	public static function checkConnectionStatusOnCreate(Request $request) {

		Config::set("database.connections.dynamic_mysql", [
			'driver'    => 'mysql',
			'host' => $request->db_host,
			'port' => $request->db_user,
			'database' =>  $request->db_name,
			'username' =>  $request->db_user,
			'password' =>  $request->db_pass,
			'charset'   => $request->db_charset,
			'prefix'    => $request->db_prefix,
		]);

		DB::purge('dynamic_mysql');

		if(DB::connection('dynamic_mysql')->getPdo()){
			return true;
		} else {
			return false;
		}

	}
}