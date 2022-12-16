<?php

namespace common\models;

use yii\base\Model;
use yii\data\ActiveDataProvider;
use common\models\Worker;

/**
 * WorkerSearch represents the model behind the search form of `common\models\Worker`.
 */
class WorkerSearch extends Worker
{
    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['id', 'status'], 'integer'],
            [['ismi', 'familiya', 'shartnoma_muddati', 'lavozim', 'qabul_sanasi', 'tugilgan_yil', 'raqam', 'staj', 'oqitish_tili', 'image'], 'safe'],
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
        $query = Worker::find();

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
            'shartnoma_muddati' => $this->shartnoma_muddati,
            'qabul_sanasi' => $this->qabul_sanasi,
            'tugilgan_yil' => $this->tugilgan_yil,
            'status' => $this->status,
        ]);

        $query->andFilterWhere(['like', 'ismi', $this->ismi])
            ->andFilterWhere(['like', 'familiya', $this->familiya])
            ->andFilterWhere(['like', 'lavozim', $this->lavozim])
            ->andFilterWhere(['like', 'raqam', $this->raqam])
            ->andFilterWhere(['like', 'staj', $this->staj])
            ->andFilterWhere(['like', 'oqitish_tili', $this->oqitish_tili])
            ->andFilterWhere(['like', 'image', $this->image]);

        return $dataProvider;
    }
}
