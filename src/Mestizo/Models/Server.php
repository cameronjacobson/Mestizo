<?php

namespace Mestizo\Models;

/**
 * @Entity 
 * @Table(name="server")
 */
class Server
{
	use \Mestizo\Traits\BaseModel;

	/** @Column(type="text") */
	public $uuid;
	/** @Column(type="text") */
	public $access_log;
	/** @Column(type="text") */
	public $error_log;
	/** @Column(type="text") */
	public $chroot;
	/** @Column(type="text") */
	public $pid_file;
	/** @Column(type="text") */
	public $default_host;
	/** @Column(type="text") */
	public $name;
	/** @Column(type="text") */
	public $bind_addr;
	/** @Column(type="integer") */
	public $port;
	/** @Column(type="integer") */
	public $use_ssl;

	public function __construct(){
		
	}
}
