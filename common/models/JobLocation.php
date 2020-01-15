<?php

namespace common\models;

use yii\behaviors\BlameableBehavior;
use yii\behaviors\TimestampBehavior;
use yii\db\ActiveRecord;

/**
 * This is the model class for table "{{%job_location}}".
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
 * @property Job[] $jobs
 */
class JobLocation extends ActiveRecord{

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
		return '{{%job_location}}';
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
	public function getJobs(){
		return $this->hasMany(Job::class, ['location_id' => 'id']);
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
}
