<?php
// This class was automatically generated by a giiant build task
// You should not change it manually as it will be overwritten on next build

namespace app\models\base;

use Yii;

/**
 * This is the base-model class for table "catchment".
 *
 * @property integer $id
 * @property string $name
 * @property string $name_es
 * @property string $name_ne
 * @property string $description
 * @property string $description_es
 * @property string $description_ne
 *
 * @property \app\models\Sensor[] $sensors
 * @property string $aliasModel
 */
abstract class Catchment extends \yii\db\ActiveRecord
{



    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return 'catchment';
    }

    /**
     * Alias name of table for crud viewsLists all Area models.
     * Change the alias name manual if needed later
     * @return string
     */
    public function getAliasModel($plural=false)
    {
        if($plural){
            return Yii::t('catchment', 'Catchments');
        }else{
            return Yii::t('catchment', 'Catchment');
        }
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['name', 'description'], 'required'],
            [['description', 'description_es', 'description_ne'], 'string'],
            [['name', 'name_es', 'name_ne'], 'string', 'max' => 255]
        ];
    }

    /**
     * @inheritdoc
     */
    public function attributeLabels()
    {
        return [
            'id' => Yii::t('catchment', 'ID'),
            'name' => Yii::t('catchment', 'Name'),
            'name_es' => Yii::t('catchment', 'Name Es'),
            'name_ne' => Yii::t('catchment', 'Name Ne'),
            'description' => Yii::t('catchment', 'Description'),
            'description_es' => Yii::t('catchment', 'Description Es'),
            'description_ne' => Yii::t('catchment', 'Description Ne'),
        ];
    }

    /**
     * @inheritdoc
     */
    public function attributeHints()
    {
        return array_merge(
            parent::attributeHints(),
            [
            'id' => Yii::t('catchment', 'ID'),
            'name' => Yii::t('catchment', 'Name'),
            'name_es' => Yii::t('catchment', 'Name Es'),
            'name_ne' => Yii::t('catchment', 'Name Ne'),
            'description' => Yii::t('catchment', 'Description'),
            'description_es' => Yii::t('catchment', 'Description Es'),
            'description_ne' => Yii::t('catchment', 'Description Ne'),
            ]);
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getSensors()
    {
        return $this->hasMany(\app\models\Sensor::className(), ['catchmentid' => 'id']);
    }




}
