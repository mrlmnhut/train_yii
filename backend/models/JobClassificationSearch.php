<?php

namespace backend\models;

use common\models\JobClassification;
use yii\base\Model;
use yii\data\ActiveDataProvider;

/**
 * JobClassificationSearch represents the model behind the search form of
 * `common\models\JobClassification`.
 */
class JobClassificationSearch extends JobClassification{

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
		$query = JobClassification::find()
		                          ->alias('job_classification')
		                          ->with(['createdBy', 'updatedBy']);

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
			'job_classification.id'         => $this->id,
			'job_classification.status'     => $this->status,
			'job_classification.created_at' => $this->created_at,
			'job_classification.created_by' => $this->created_by,
			'job_classification.updated_at' => $this->updated_at,
			'job_classification.updated_by' => $this->updated_by,
		]);

		$query->andFilterWhere(['like', 'job_classification.name', $this->name])
		      ->andFilterWhere(['like', 'job_classification.description', $this->description]);

		return $data_provider;
	}
}
