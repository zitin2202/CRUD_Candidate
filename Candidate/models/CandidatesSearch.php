<?php

namespace app\models;

use yii\base\Model;
use yii\data\ActiveDataProvider;
use app\models\Candidates;

/**
 * CandidatesSearch represents the model behind the search form of `app\models\Candidates`.
 */
class CandidatesSearch extends Candidates
{
    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['id', 'gender', 'district_id', 'flat'], 'integer'],
            [['last_name', 'first_name', 'middle_name', 'date_of_birth', 'address'], 'safe'],
        ];
    }

    /**
     * {@inheritdoc}
     */
    public function scenarios()
    {
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
    public function search($params)
    {
        $query = Candidates::find();

        // add conditions that should always apply here

        $dataProvider = new ActiveDataProvider([
            'query' => $query,
            'pagination' => [
                'forcePageParam' => false,
                'pageSizeParam' => false,
                'pageSize' => 5,
                ]
        ]);

        $this->load($params);

        if (!$this->validate()) {
            // uncomment the following line if you do not want to return any records when validation fails
            // $query->where('0=1');
            return $dataProvider;
        }

        // grid filtering conditions
        $query->andFilterWhere([
            'id' => $this->id,
            'gender' => $this->gender,
            'date_of_birth' => $this->date_of_birth,
            'district_id' => $this->district_id,
            'flat' => $this->flat,
        ]);

        $query->andFilterWhere(['ilike', 'last_name', $this->last_name])
            ->andFilterWhere(['ilike', 'first_name', $this->first_name])
            ->andFilterWhere(['ilike', 'middle_name', $this->middle_name])
            ->andFilterWhere(['ilike', 'address', $this->address]);

        return $dataProvider;
    }
}
