<?php

namespace Mestizo\Models;

/**
 * @Entity 
 * @Table(name="statistic")
 */
class Statistic
{
	use \Mestizo\Traits\BaseModel;

	/** @Column(type="text") */
	public $other_type;
	/** @Column(type="integer") */
	public $other_id;
	/** @Column(type="text") */
	public $name;
	/** @Column(type="float") */
	public $sum;
	/** @Column(type="float") */
	public $sumsq;
	/** @Column(type="integer") */
	public $n;
	/** @Column(type="float") */
	public $min;
	/** @Column(type="float") */
	public $max;
	/** @Column(type="float") */
	public $mean;
	/** @Column(type="float") */
	public $sd;

	public function __construct(){
		
	}
}
