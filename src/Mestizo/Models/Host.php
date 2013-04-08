<?php

namespace Mestizo\Models;

/**
 * @Entity 
 * @Table(name="host")
 */
class Host
{
	use \Mestizo\Traits\BaseModel;

	/** @Column(type="integer") */
	public $server_id;
	/** @Column(type="boolean") */
	public $maintenance;
	/** @Column(type="text") */
	public $name;
	/** @Column(type="text") */
	public $matching;

	public function __construct(){
		
	}
}
