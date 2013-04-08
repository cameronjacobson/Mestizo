<?php

namespace Mestizo\Models;

/**
 * @Entity 
 * @Table(name="proxy")
 */
class Proxy
{
	use \Mestizo\Traits\BaseModel;

	/** @Column(type="text") */
	public $addr;
	/** @Column(type="integer") */
	public $port;

	public function __construct(){
		
	}
}
