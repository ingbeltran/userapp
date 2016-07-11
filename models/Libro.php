<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "libro".
 *
 * @property integer $id
 * @property string $autores
 * @property string $titulo
 * @property integer $anio
 * @property string $lugar
 * @property string $editorial
 * @property string $resumen
 * @property string $keywords
 * @property string $idioma
 * @property string $portada
 * @property string $libro
 * @property integer $usuario_id
 */
class Libro extends \yii\db\ActiveRecord
{
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return 'libro';
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['autores', 'titulo', 'lugar', 'editorial', 'resumen', 'keywords', 'idioma', 'portada', 'libro'], 'required'],
            [['anio', 'usuario_id'], 'integer'],
            [['resumen', 'keywords'], 'string'],
            [['autores'], 'string', 'max' => 255],
            [['titulo', 'lugar'], 'string', 'max' => 155],
            [['editorial'], 'string', 'max' => 85],
            [['idioma', 'portada', 'libro'], 'string', 'max' => 55],
        ];
    }

    /**
     * @inheritdoc
     */
    public function attributeLabels()
    {
        return [
            'id' => 'ID',
            'autores' => 'Autores',
            'titulo' => 'Titulo',
            'anio' => 'Anio',
            'lugar' => 'Lugar',
            'editorial' => 'Editorial',
            'resumen' => 'Resumen',
            'keywords' => 'Keywords',
            'idioma' => 'Idioma',
            'portada' => 'Portada',
            'libro' => 'Libro',
            'usuario_id' => 'Usuario ID',
        ];
    }
}
