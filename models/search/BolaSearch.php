<?php

namespace app\models\search;

use yii\base\Model;
use yii\data\ActiveDataProvider;
use app\models\Bola;

/**
 * BolaSearch represents the model behind the search form of `app\models\Bola`.
 */
class BolaSearch extends Bola
{
    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['id', 'guruh_id', 'status'], 'integer'],
            [['fio', 'tugilgan_vaqti', 'guvohnoma_raqami', 'otasi', 'ota_pass', 'ota_tel', 'onasi', 'ona_pass', 'ona_tel', 'phone', 'kelgan_vaqti'], 'safe'],
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
        $query = Bola::find();

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
            'tugilgan_vaqti' => $this->tugilgan_vaqti,
            'guruh_id' => $this->guruh_id,
            'kelgan_vaqti' => $this->kelgan_vaqti,
            'status' => $this->status,
        ]);

        $query->andFilterWhere(['like', 'fio', $this->fio])
            ->andFilterWhere(['like', 'guvohnoma_raqami', $this->guvohnoma_raqami])
            ->andFilterWhere(['like', 'otasi', $this->otasi])
            ->andFilterWhere(['like', 'ota_pass', $this->ota_pass])
            ->andFilterWhere(['like', 'ota_tel', $this->ota_tel])
            ->andFilterWhere(['like', 'onasi', $this->onasi])
            ->andFilterWhere(['like', 'ona_pass', $this->ona_pass])
            ->andFilterWhere(['like', 'ona_tel', $this->ona_tel])
            ->andFilterWhere(['like', 'phone', $this->phone]);

        return $dataProvider;
    }
}
