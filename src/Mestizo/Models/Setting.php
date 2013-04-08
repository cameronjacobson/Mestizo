<?php

namespace Mestizo\Models;

/**
 * @Entity 
 * @Table(name="setting")
 */
class Setting
{
	use \Mestizo\Traits\BaseModel;

	/** @Column(type="text") */
	public $key;
	/** @Column(type="text") */
	public $value;

	public function __construct(){
		
	}
}
