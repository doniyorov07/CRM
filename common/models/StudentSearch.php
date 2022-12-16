<?php

namespace common\models;

use yii\base\Model;
use yii\data\ActiveDataProvider;
use common\models\Student;

/**
 * StudentSearch represents the model behind the search form of `common\models\Student`.
 */
class StudentSearch extends Student
{
    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['id', 'raqami', 'yosh', 'status', 'created_at', 'updated_at'], 'integer'],
            [['ism', 'familiya', 'qabul_sanasi', 'dars_boshlanishi', 'dars_kuni', 'jinsi', 'guruxi', 'oqitish_tili', 'yonalishi'], 'safe'],
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
        $query = Student::find();

        // add conditions that should always apply here

        $dataProvider = new ActiveDataProvider([
            'query' => $query,
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
            'qabul_sanasi' => $this->qabul_sanasi,
            'raqami' => $this->raqami,
            'yosh' => $this->yosh,
            'status' => $this->status,
            'created_at' => $this->created_at,
            'updated_at' => $this->updated_at,
        ]);

        $query->andFilterWhere(['like', 'ism', $this->ism])
            ->andFilterWhere(['like', 'familiya', $this->familiya])
            ->andFilterWhere(['like', 'dars_boshlanishi', $this->dars_boshlanishi])
            ->andFilterWhere(['like', 'dars_kuni', $this->dars_kuni])
            ->andFilterWhere(['like', 'jinsi', $this->jinsi])
            ->andFilterWhere(['like', 'guruxi', $this->guruxi])
            ->andFilterWhere(['like', 'oqitish_tili', $this->oqitish_tili])
            ->andFilterWhere(['like', 'yonalishi', $this->yonalishi]);

        return $dataProvider;
    }
}
