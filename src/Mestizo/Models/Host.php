<?php

namespace Mestizo\Models;

class Host
{
	use \Mestizo\Traits\BaseModel;

	public $server_id;
	public $maintenance;
	public $name;
	public $matching;

	public function __construct(){
		
	}
}
