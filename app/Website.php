<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\Config;
use Illuminate\Support\Facades\DB;

/**
 * @property mixed cms_type
 */
class Website extends Model
{
	protected $fillable = ['website_name', 'cms_type', 'db_user', 'db_name', 'db_pass', 'db_host', 'db_port', 'db_prefix', 'db_charset'];
}
