<?php

namespace app\models;

use yii\base\Model;
use yii\data\ActiveDataProvider;
use app\models\DepartmentStaff;

/**
 * DepartmentStaffSearch represents the model behind the search form of `app\models\DepartmentStaff`.
 */
class DepartmentStaffSearch extends DepartmentStaff
{
    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['id', 'department_id', 'staff_id'], 'integer'],
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
        $query = DepartmentStaff::find();

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
            'department_id' => $this->department_id,
            'staff_id' => $this->staff_id,
        ]);

        return $dataProvider;
    }
}
