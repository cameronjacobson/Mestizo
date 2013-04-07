<?php

namespace Mestizo\Models;

class Server
{
	use \Mestizo\Traits\BaseModel;

	public $uuid;
	public $access_log;
	public $error_log;
	public $chroot;
	public $pid_file;
	public $default_host;
	public $name;
	public $bind_addr;
	public $port;
	public $use_ssl;

	public function __construct(){
		
	}
}
