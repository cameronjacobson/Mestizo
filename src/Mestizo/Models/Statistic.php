<?php

namespace Mestizo\Models;

class Statistic
{
	use \Mestizo\Traits\BaseModel;

	public $other_type;
	public $other_id;
	public $name;
	public $sum;
	public $sumsq;
	public $n;
	public $min;
	public $max;
	public $mean;
	public $sd;

	public function __construct(){
		
	}
}
