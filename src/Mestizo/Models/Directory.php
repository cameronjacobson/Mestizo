<?php

namespace Mestizo\Models;

/**
 * @Entity 
 * @Table(name="directory")
 */
class Directory
{
	use \Mestizo\Traits\BaseModel;

	/** @Column(type="text") */
	public $base;
	/** @Column(type="text") */
	public $index_file;
	/** @Column(type="text") */
	public $default_ctype;
	/** @Column(type="integer") */
	public $cache_ttl;

	public function __construct(){
		
	}
}
