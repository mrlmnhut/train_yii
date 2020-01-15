<?php

namespace common\models;

use yii\behaviors\BlameableBehavior;
use yii\behaviors\TimestampBehavior;
use yii\db\ActiveRecord;
use yii\helpers\ArrayHelper;

/**
 * This is the model class for table "{{%nationality}}".
 *
 * @property int $id
 * @property string $name
 * @property string $description
 * @property int $status
 * @property int $created_at
 * @property int $created_by
 * @property int $updated_at
 * @property int $updated_by
 * @property User $createdBy;
 * @property User $updatedBy;
 * @property JobApplication[] $jobApplications
 */
class Nationality extends ActiveRecord{

	/**
	 * @return array
	 */
	public function behaviors(){
		return [
			TimestampBehavior::class,
			BlameableBehavior::class,
		];
	}

	/**
	 * {@inheritdoc}
	 */
	public static function tableName(){
		return '{{%nationality}}';
	}

	/**
	 * {@inheritdoc}
	 */
	public function rules(){
		return [
			[['name', 'description', 'status'], 'required'],
			[['status', 'created_at', 'created_by', 'updated_at', 'updated_by'], 'integer'],
			[['name'], 'string', 'max' => 50],
			[['description'], 'string', 'max' => 255],
			[['name'], 'unique'],
		];
	}

	/**
	 * {@inheritdoc}
	 */
	public function attributeLabels(){
		return [
			'id'          => 'ID',
			'name'        => 'Name',
			'description' => 'Description',
			'status'      => 'Status',
			'created_at'  => 'Created At',
			'created_by'  => 'Created By',
			'updated_at'  => 'Updated At',
			'updated_by'  => 'Updated By',
		];
	}

	/**
	 * @return \yii\db\ActiveQuery
	 */
	public function getJobApplications(){
		return $this->hasMany(JobApplication::class, ['nationality_id' => 'id']);
	}

	/**
	 * @return \yii\db\ActiveQuery
	 */
	public function getCreatedBy(){
		return $this->hasOne(User::class, ['id' => 'created_by']);
	}

	/**
	 * @return \yii\db\ActiveQuery
	 */
	public function getUpdatedBy(){
		return $this->hasOne(User::class, ['id' => 'updated_by']);
	}

	/**
	 * format timestamp to date
	 * Grouping array DISTINCT dd/mm/yy
	 *
	 * @return array
	 */
	public static function getCreatedAt(){
		$data  = ArrayHelper::map(self::find()->all(), 'created_at', 'created_at');
		$array = [];
		foreach ($data as $key => $value){
			$array[substr($key, 0, 6)] = date('d M Y', $value);
		}

		return $array;
	}
}
