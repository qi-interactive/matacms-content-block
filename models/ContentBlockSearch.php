<?php

/**
 * @link http://www.matacms.com/
 * @copyright Copyright (c) 2015 Qi Interactive Limited
 * @license http://www.matacms.com/license/
 */

namespace matacms\contentblock\models;

use Yii;
use yii\base\Model;
use yii\data\ActiveDataProvider;
use matacms\contentblock\models\ContentBlock;

/**
 * ContentBlockSearch represents the model behind the search form about `mata\contentblock\models\ContentBlock`.
 */
class ContentBlockSearch extends ContentBlock {

    public function rules() {
        return [
            [['Id'], 'integer'],
            [['Title', 'Text', 'Region'], 'safe'],
        ];
    }

    public function scenarios() {
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
    public function search($params) {
        $query = ContentBlock::find();

        $dataProvider = new ActiveDataProvider([
            'query' => $query,
        ]);

        $this->load($params);

        if (!$this->validate()) {
            // uncomment the following line if you do not want to any records when validation fails
            // $query->where('0=1');
            return $dataProvider;
        }

        $query->andFilterWhere([
            'Id' => $this->Id,
        ]);

        $query->andFilterWhere(['like', 'Title', $this->Title])
            ->andFilterWhere(['like', 'Text', $this->Text])
            ->andFilterWhere(['like', 'Region', $this->Region]);

        return $dataProvider;
    }
}
