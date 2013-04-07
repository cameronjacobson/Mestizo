<?php

namespace Mestizo\Models;

class Log
{
	use \Mestizo\Traits\BaseModel;

	public $who;
	public $what;
	public $location;
	public $happened_at;
	public $how;
	public $why;

	public function __construct(){
		
	}
}
