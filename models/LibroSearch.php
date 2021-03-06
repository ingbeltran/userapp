<?php

namespace app\models;

use Yii;
use yii\base\Model;
use yii\data\ActiveDataProvider;
use app\models\Libro;

/**
 * LibroSearch represents the model behind the search form about `app\models\Libro`.
 */
class LibroSearch extends Libro
{
    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['id', 'anio', 'usuario_id'], 'integer'],
            [['autores', 'titulo', 'lugar', 'editorial', 'resumen', 'keywords', 'idioma', 'portada', 'libro'], 'safe'],
        ];
    }

    /**
     * @inheritdoc
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
        $query = Libro::find();

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
            'anio' => $this->anio,
            'usuario_id' => $this->usuario_id,
        ]);

        $query->andFilterWhere(['like', 'autores', $this->autores])
            ->andFilterWhere(['like', 'titulo', $this->titulo])
            ->andFilterWhere(['like', 'lugar', $this->lugar])
            ->andFilterWhere(['like', 'editorial', $this->editorial])
            ->andFilterWhere(['like', 'resumen', $this->resumen])
            ->andFilterWhere(['like', 'keywords', $this->keywords])
            ->andFilterWhere(['like', 'idioma', $this->idioma])
            ->andFilterWhere(['like', 'portada', $this->portada])
            ->andFilterWhere(['like', 'libro', $this->libro]);

        return $dataProvider;
    }
}
