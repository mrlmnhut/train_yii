<?php

namespace common\models;

use yii\base\Model;

/**
 * This is functions status.
 *
 * @property int STATUS_ACTIVE
 * @property int STATUS_DISABLE
 * @property array STATUS
 */
class Status extends Model{

	const STATUS_ACTIVE = 10;

	const STATUS_DISABLE = 20;

	const STATUS = [
		self::STATUS_ACTIVE  => 'Active',
		self::STATUS_DISABLE => 'Disable',
	];

	/**
	 * @return array
	 */
	public static function getStatus(){
		return self::STATUS;
	}

	/**
	 * get status label show in view
	 *
	 * @param $data
	 *
	 * @return mixed|string
	 */
	public static function getStatusLabel($data){
		foreach (self::STATUS as $key => $value){
			if ($data == $key){
				return Status::STATUS[$key];
			}
		}

		return "Unknow";
	}
}
