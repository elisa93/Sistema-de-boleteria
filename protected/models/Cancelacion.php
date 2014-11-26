<?php

/**
 * This is the model class for table "cancelacion".
 *
 * The followings are the available columns in table 'cancelacion':
 * @property integer $idcancelacion
 * @property string $fecha
 * @property string $hora
 * @property integer $idcliente
 * @property integer $idcompra
 *
 * The followings are the available model relations:
 * @property Cliente $idcliente0
 * @property Compra $idcompra0
 */
class Cancelacion extends CActiveRecord {

    /**
     * @return string the associated database table name
     */
    public function tableName() {
        return 'cancelacion';
    }

    /**
     * @return array validation rules for model attributes.
     */
    public function rules() {
        // NOTE: you should only define rules for those attributes that
        // will receive user inputs.
        return array(
            array('fecha, hora, idcliente, idcompra', 'required'),
            array('idcliente, idcompra', 'numerical', 'integerOnly' => true),
            array('fecha, hora', 'length', 'max' => 45),
            // The following rule is used by search().
            // @todo Please remove those attributes that should not be searched.
            array('idcancelacion, fecha, hora, idcliente, idcompra', 'safe', 'on' => 'search'),
        );
    }

    /**
     * @return array relational rules.
     */
    public function relations() {
        // NOTE: you may need to adjust the relation name and the related
        // class name for the relations automatically generated below.
        return array(
            'idcliente0' => array(self::BELONGS_TO, 'Cliente', 'idcliente'),
            'idcompra0' => array(self::BELONGS_TO, 'Compra', 'idcompra'),
        );
    }

    /**
     * @return array customized attribute labels (name=>label)
     */
    public function attributeLabels() {
        return array(
            'idcancelacion' => 'Idcancelacion',
            'fecha' => 'Fecha',
            'hora' => 'Hora',
            'idcliente' => 'Idcliente',
            'idcompra' => 'Idcompra',
        );
    }

    /**
     * Retrieves a list of models based on the current search/filter conditions.
     *
     * Typical usecase:
     * - Initialize the model fields with values from filter form.
     * - Execute this method to get CActiveDataProvider instance which will filter
     * models according to data in model fields.
     * - Pass data provider to CGridView, CListView or any similar widget.
     *
     * @return CActiveDataProvider the data provider that can return the models
     * based on the search/filter conditions.
     */
    public function search() {
        // @todo Please modify the following code to remove attributes that should not be searched.

        $criteria = new CDbCriteria;

        $criteria->compare('idcancelacion', $this->idcancelacion);
        $criteria->compare('fecha', $this->fecha, true);
        $criteria->compare('hora', $this->hora, true);
        $criteria->compare('idcliente', Yii::app()->session['id']);
        $criteria->compare('idcompra', $this->idcompra);

        return new CActiveDataProvider($this, array(
            'criteria' => $criteria,
        ));
    }

    /**
     * Returns the static model of the specified AR class.
     * Please note that you should have this exact method in all your CActiveRecord descendants!
     * @param string $className active record class name.
     * @return Cancelacion the static model class
     */
    public static function model($className = __CLASS__) {
        return parent::model($className);
    }

}
