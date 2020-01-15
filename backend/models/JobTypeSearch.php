<?php

namespace backend\models;

use common\models\JobType;
use yii\base\Model;
use yii\data\ActiveDataProvider;

/**
 * JobTypeSearch represents the model behind the search form of `common\models\JobType`.
 */
class JobTypeSearch extends JobType{

	/**
	 * {@inheritdoc}
	 */
	public function rules(){
		return [
			[['id', 'status', 'created_at', 'created_by', 'updated_at', 'updated_by'], 'integer'],
			[['name', 'description'], 'safe'],
		];
	}

	/**
	 * {@inheritdoc}
	 */
	public function scenarios(){
		// bypass scenarios() implementation in the parent class
		return Model::scenarios();
	}

	/**
	 * Creates data provider instance with search query applied
	 *
	 * @param array $params
	 *
	 * @return ActiveDataProvider
	 */
	public function search($params){
		$query = JobType::find()->alias('job_type')->with(['createdBy', 'updatedBy']);

		// add conditions that should always apply here

		$data_provider = new ActiveDataProvider([
			'query' => $query,
		]);

		$this->load($params);

		if (!$this->validate()){
			// uncomment the following line if you do not want to return any records when validation fails
			// $query->where('0=1');
			return $data_provider;
		}

		// grid filtering conditions
		$query->andFilterWhere([
			'job_type.id'         => $this->id,
			'job_type.status'     => $this->status,
			'job_type.created_at' => $this->created_at,
			'job_type.created_by' => $this->created_by,
			'job_type.updated_at' => $this->updated_at,
			'job_type.updated_by' => $this->updated_by,
		]);

		$query->andFilterWhere(['like', 'job_type.name', $this->name])
		      ->andFilterWhere(['like', 'job_type.description', $this->description]);

		return $data_provider;
	}
}
