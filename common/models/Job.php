<?php

namespace common\models;

use yii\behaviors\BlameableBehavior;
use yii\behaviors\TimestampBehavior;
use yii\db\ActiveRecord;
use yii\helpers\ArrayHelper;

/**
 * This is the model class for table "{{%job}}".
 *
 * @property int $id
 * @property string $title
 * @property string $description
 * @property int $type_id
 * @property int $classification_id
 * @property int $location_id
 * @property float $salary
 * @property string $working_hours
 * @property int $status
 * @property int $created_at
 * @property int $created_by
 * @property int $updated_at
 * @property int $updated_by
 *
 * @property JobClassification $classification
 * @property JobLocation $location
 * @property JobType $type
 * @property User $createdBy;
 * @property User $updatedBy;
 * @property JobApplication[] $jobApplications
 */
class Job extends ActiveRecord{

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
		return '{{%job}}';
	}

	/**
	 * {@inheritdoc}
	 */
	public function rules(){
		return [
			[['title', 'description', 'type_id', 'classification_id', 'location_id', 'salary', 'working_hours', 'status'], 'required'],
			[['description'], 'string'],
			[['type_id', 'classification_id', 'location_id', 'status', 'created_at', 'created_by', 'updated_at', 'updated_by'], 'integer'],
			[['salary'], 'number'],
			[['title'], 'string', 'max' => 255],
			[['working_hours'], 'string', 'max' => 50],
			[['classification_id'], 'exist', 'skipOnError' => TRUE, 'targetClass' => JobClassification::class, 'targetAttribute' => ['classification_id' => 'id']],
			[['location_id'], 'exist', 'skipOnError' => TRUE, 'targetClass' => JobLocation::class, 'targetAttribute' => ['location_id' => 'id']],
			[['type_id'], 'exist', 'skipOnError' => TRUE, 'targetClass' => JobType::class, 'targetAttribute' => ['type_id' => 'id']],
		];
	}

	/**
	 * {@inheritdoc}
	 */
	public function attributeLabels(){
		return [
			'id'                => 'ID',
			'title'             => 'Title',
			'description'       => 'Description',
			'type_id'           => 'Type',
			'classification_id' => 'Classification',
			'location_id'       => 'Location',
			'salary'            => 'Salary',
			'working_hours'     => 'Working Hours',
			'status'            => 'Status',
			'created_at'        => 'Created At',
			'created_by'        => 'Created By',
			'updated_at'        => 'Updated At',
			'updated_by'        => 'Updated By',
		];
	}

	/**
	 * @return \yii\db\ActiveQuery
	 */
	public function getClassification(){
		return $this->hasOne(JobClassification::class, ['id' => 'classification_id']);
	}

	/**
	 * @return \yii\db\ActiveQuery
	 */
	public function getLocation(){
		return $this->hasOne(JobLocation::class, ['id' => 'location_id']);
	}

	/**
	 * @return \yii\db\ActiveQuery
	 */
	public function getType(){
		return $this->hasOne(JobType::class, ['id' => 'type_id']);
	}

	/**
	 * @return \yii\db\ActiveQuery
	 */
	public function getJobApplications(){
		return $this->hasMany(JobApplication::class, ['job_id' => 'id']);
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
