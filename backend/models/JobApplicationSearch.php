<?php

namespace backend\models;

use common\models\JobApplication;
use yii\base\Model;
use yii\data\ActiveDataProvider;

/**
 * JobApplicationSearch represents the model behind the search form of
 * `common\models\JobApplication`.
 */
class JobApplicationSearch extends JobApplication{

	/**
	 * {@inheritdoc}
	 */
	public function rules(){
		return [
			[['id', 'job_id', 'nationality_id', 'status', 'created_at', 'created_by', 'updated_at', 'updated_by'], 'integer'],
			[['name', 'contact', 'email', 'address', 'postal_code', 'resume'], 'safe'],
			[['current_salary', 'expected_salary'], 'number'],
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
		$query = JobApplication::find()->alias('job_application')->with(['createdBy', 'updatedBy']);

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
			'job_application.id'              => $this->id,
			'job_application.job_id'          => $this->job_id,
			'job_application.nationality_id'  => $this->nationality_id,
			'job_application.current_salary'  => $this->current_salary,
			'job_application.expected_salary' => $this->expected_salary,
			'job_application.status'          => $this->status,
			'job_application.created_at'      => $this->created_at,
			'job_application.created_by'      => $this->created_by,
			'job_application.updated_at'      => $this->updated_at,
			'job_application.updated_by'      => $this->updated_by,
		]);

		$query->andFilterWhere(['like', 'job_application.name', $this->name])
		      ->andFilterWhere(['like', 'job_application.contact', $this->contact])
		      ->andFilterWhere(['like', 'job_application.email', $this->email])
		      ->andFilterWhere(['like', 'job_application.address', $this->address])
		      ->andFilterWhere(['like', 'job_application.postal_code', $this->postal_code])
		      ->andFilterWhere(['like', 'job_application.resume', $this->resume]);

		return $data_provider;
	}
}
