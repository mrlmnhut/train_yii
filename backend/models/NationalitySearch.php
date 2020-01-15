<?php

namespace backend\models;

use common\models\Nationality;
use yii\base\Model;
use yii\data\ActiveDataProvider;

/**
 * NationalitySearch represents the model behind the search form of `common\models\Nationality`.
 */
class NationalitySearch extends Nationality{

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
		$query = Nationality::find()->alias('nationality')->with(['createdBy', 'updatedBy']);
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
			'nationality.id'         => $this->id,
			'nationality.status'     => $this->status,
			'nationality.created_by' => $this->created_by,
			'nationality.updated_at' => $this->updated_at,
			'nationality.updated_by' => $this->updated_by,
		]);

		$query->andFilterWhere(['like', 'nationality.name', $this->name])
		      ->andFilterWhere(['like', 'nationality.description', $this->description])
		      ->andFilterWhere(['like', 'nationality.created_at', $this->created_at]);

		return $data_provider;
	}
}
