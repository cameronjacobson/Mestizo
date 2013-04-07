<?php

namespace Mestizo\Models;

class Handler
{
	use \Mestizo\Traits\BaseModel;

	public $send_spec;
	public $send_ident;
	public $recv_spec;
	public $raw_payload;
	public $protocol;

	public function __construct(){
		
	}
}
