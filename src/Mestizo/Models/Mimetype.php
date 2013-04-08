<?php

namespace Mestizo\Models;

/**
 * @Entity 
 * @Table(name="mimetype")
 */
class Mimetype
{
	use \Mestizo\Traits\BaseModel;

	/** @Column(type="text") */
	public $mimetype;
	/** @Column(type="text") */
	public $extension;

	public function __construct(){
		
	}
}
