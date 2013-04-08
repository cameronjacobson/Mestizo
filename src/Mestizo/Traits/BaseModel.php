<?php

namespace Mestizo\Traits;

trait BaseModel
{
	/** @Id @Column(type="integer") @GeneratedValue */
	public $id;

	public function getId(){
		return $this->id;  
	}

	public function __get($key){
		return $this->$key;
	}

	public function __set($key,$value){
		$this->$key = $value;
	}
}
