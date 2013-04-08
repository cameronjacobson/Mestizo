<?php

namespace Mestizo\Models;

/**
 * @Entity 
 * @Table(name="handler")
 */
class Handler
{
	use \Mestizo\Traits\BaseModel;

	/** @Column(type="text") */
	public $send_spec;
	/** @Column(type="text") */
	public $send_ident;
	/** @Column(type="text") */
	public $recv_spec;
	/** @Column(type="integer") */
	public $raw_payload;
	/** @Column(type="text") */
	public $protocol;

	public function __construct(){
		
	}
}
