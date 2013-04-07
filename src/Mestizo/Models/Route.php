<?php

namespace Mestizo\Models;

class Route
{
	use \Mestizo\Traits\BaseModel;

	public $path;
	public $reversed;
	public $host_id;
	public $target_id;
	public $target_type;

	public function __construct(){
		
	}
}
