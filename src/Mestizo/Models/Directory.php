<?php

namespace Mestizo\Models;

class Directory
{
	use \Mestizo\Traits\BaseModel;

	public $base;
	public $index_file;
	public $default_ctype;
	public $cache_ttl;

	public function __construct(){
		
	}
}
