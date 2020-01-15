<?php

namespace common\models;

use Yii;
use yii\base\Model;
use yii\behaviors\BlameableBehavior;
use yii\behaviors\TimestampBehavior;
use yii\db\ActiveRecord;

/**
 * This is the model class for table "{{%job_application}}".
 *
 * @property int $id
 * @property int|null $job_id
 * @property string $name
 * @property int $nationality_id
 * @property string $contact
 * @property string $email
 * @property string $address
 * @property string $postal_code
 * @property float $current_salary
 * @property float $expected_salary
 * @property string $resume
 * @property int $status
 * @property int STATUS_ACTIVE
 * @property int $created_at
 * @property int|null $created_by
 * @property int $updated_at
 * @property int|null $updated_by
 *
 * @property Job $job
 * @property User $createdBy;
 * @property User $updatedBy;
 * @property Nationality $nationality
 */
class JobApplication extends ActiveRecord{

	/**
	 * @var
	 */
	public $file;

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
		return '{{%job_application}}';
	}

	/**
	 * {@inheritdoc}
	 */
	public function rules(){
		Model::rules();

		return [
			[['job_id', 'nationality_id', 'status', 'created_at', 'created_by', 'updated_at', 'updated_by'], 'integer'],
			[['name', 'nationality_id', 'contact', 'email', 'address', 'postal_code', 'current_salary', 'expected_salary', 'resume'], 'required'],
			[['current_salary', 'expected_salary'], 'number'],
			[['resume'], 'string'],
			[['name', 'email'], 'string', 'max' => 50],
			[['email'], 'email'],
			[['contact'], 'string', 'max' => 10],
			[['address'], 'string', 'max' => 255],
			[['postal_code'], 'string', 'max' => 6],
			[['email'], 'unique'],
			[['job_id'], 'exist', 'skipOnError' => TRUE, 'targetClass' => Job::class, 'targetAttribute' => ['job_id' => 'id']],
			[['nationality_id'], 'exist', 'skipOnError' => TRUE, 'targetClass' => Nationality::class, 'targetAttribute' => ['nationality_id' => 'id']],
			[['file'], 'file', 'skipOnEmpty' => FALSE, 'extensions' => 'gif, jpeg, png, doc, pdf,jpg',],
		];
	}

	/**
	 * {@inheritdoc}
	 */
	public function attributeLabels(){
		return [
			'id'              => 'ID',
			'job_id'          => 'Job',
			'name'            => 'Name',
			'nationality_id'  => 'Nationality',
			'contact'         => 'Contact',
			'email'           => 'Email',
			'address'         => 'Address',
			'postal_code'     => 'Postal Code',
			'current_salary'  => 'Current Salary',
			'expected_salary' => 'Expected Salary',
			'resume'          => 'Resume',
			'status'          => 'Status',
			'created_at'      => 'Created At',
			'created_by'      => 'Created By',
			'updated_at'      => 'Updated At',
			'updated_by'      => 'Updated By',
		];
	}

	/**
	 * @return \yii\db\ActiveQuery
	 */
	public function getJob(){
		return $this->hasOne(Job::class, ['id' => 'job_id']);
	}

	/**
	 * @return \yii\db\ActiveQuery
	 */
	public function getNationality(){
		return $this->hasOne(Nationality::class, ['id' => 'nationality_id']);
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
	 * @return bool
	 */
	public function upload(){
		if ($this->validate()){
			$name_file = "attachment_resume" . time() . "." . $this->file->extension;
			$this->file->saveAs(Yii::getAlias('@saveresume') . '/uploads/' . $name_file);

			return TRUE;
		}else{
			return FALSE;
		}
	}
}
