<?php

namespace backend\models;

use common\models\Job;
use yii\base\Model;
use yii\data\ActiveDataProvider;

/**
 * JobSearch represents the model behind the search form of `common\models\Job`.
 */
class JobSearch extends Job{

	/**
	 * {@inheritdoc}
	 */
	public function rules(){
		return [
			[['id', 'type_id', 'classification_id', 'location_id', 'status', 'created_at', 'created_by', 'updated_at', 'updated_by'], 'integer'],
			[['title', 'description', 'working_hours'], 'safe'],
			[['salary'], 'number'],
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
		$query = Job::find()
		            ->alias('job')
		            ->with(['createdBy', 'updatedBy', 'classification', 'type', 'location']);

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
			'job.id'                => $this->id,
			'job.type_id'           => $this->type_id,
			'job.classification_id' => $this->classification_id,
			'job.location_id'       => $this->location_id,
			'job.salary'            => $this->salary,
			'job.status'            => $this->status,
			'job.created_by'        => $this->created_by,
			'job.updated_at'        => $this->updated_at,
			'job.updated_by'        => $this->updated_by,
		]);

		$query->andFilterWhere(['like', 'job.title', $this->title])
		      ->andFilterWhere(['like', 'job.description', $this->description])
		      ->andFilterWhere(['like', 'job.working_hours', $this->working_hours])
		      ->andFilterWhere(['like', 'job.created_at', $this->created_at]);;

		return $data_provider;
	}
}
