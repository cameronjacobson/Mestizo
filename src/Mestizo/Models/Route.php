<?php

namespace Mestizo\Models;

/**
 * @Entity 
 * @Table(name="route")
 */
class Route
{
	use \Mestizo\Traits\BaseModel;

	/** @Column(type="text") */
	public $path;
	/** @Column(type="boolean") */
	public $reversed;
	/** @Column(type="integer") */
	public $host_id;
	/** @Column(type="integer") */
	public $target_id;
	/** @Column(type="text") */
	public $target_type;

	public function __construct(){
		
	}
}
