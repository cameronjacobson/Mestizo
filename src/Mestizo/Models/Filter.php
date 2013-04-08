<?php

namespace Mestizo\Models;

/**
 * @Entity 
 * @Table(name="filter")
 */
class Filter
{
	use \Mestizo\Traits\BaseModel;

	/** @Column(type="integer") */
	public $server_id;
	/** @Column(type="text") */
	public $name;
	/** @Column(type="text") */
	public $settings;

	public function __construct(){
		
	}
}
