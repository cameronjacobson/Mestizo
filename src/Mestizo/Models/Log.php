<?php

namespace Mestizo\Models;

/**
 * @Entity 
 * @Table(name="log")
 */
class Log
{
	use \Mestizo\Traits\BaseModel;

	/** @Column(type="text") */
	public $who;
	/** @Column(type="text") */
	public $what;
	/** @Column(type="text") */
	public $location;
	/** @Column(type="datetime") */
	public $happened_at;
	/** @Column(type="text") */
	public $how;
	/** @Column(type="text") */
	public $why;

	public function __construct(){
		
	}
}
