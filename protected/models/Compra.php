<?php

/**
 * This is the model class for table "compra".
 *
 * The followings are the available columns in table 'compra':
 * @property integer $idcompra
 * @property string $fecha
 * @property string $hora
 * @property string $total
 * @property string $estado
 * @property integer $idcliente
 *
 * The followings are the available model relations:
 * @property Boleto[] $boletos
 * @property Cancelacion[] $cancelacions
 * @property Cliente $idcliente0
 */
class Compra extends CActiveRecord {

    /**
     * @return string the associated database table name
     */
    public function tableName() {
        return 'compra';
    }

    /**
     * @return array validation rules for model attributes.
     */
    public function rules() {
        // NOTE: you should only define rules for those attributes that
        // will receive user inputs.
        return array(
            array('fecha, hora, total,cantidad, estado, idcliente', 'required'),
            array('idcliente', 'numerical', 'integerOnly' => true),
            array('fecha, hora,cantidad,total, estado', 'length', 'max' => 45),
            // The following rule is used by search().
            // @todo Please remove those attributes that should not be searched.
            array('idcompra, fecha, hora, total, estado, idcliente', 'safe', 'on' => 'search'),
        );
    }

    /**
     * @return array relational rules.
     */
    public function relations() {
        // NOTE: you may need to adjust the relation name and the related
        // class name for the relations automatically generated below.
        return array(
            'boletos' => array(self::HAS_MANY, 'Boleto', 'idcompra'),
            'cancelacions' => array(self::HAS_MANY, 'Cancelacion', 'idcompra'),
            'idcliente0' => array(self::BELONGS_TO, 'Cliente', 'idcliente'),
        );
    }

    /**
     * @return array customized attribute labels (name=>label)
     */
    public function attributeLabels() {
        return array(
            'idcompra' => 'Idcompra',
            'fecha' => 'Fecha',
            'hora' => 'Hora',
            'cantidad'=>'Cantidad',
            'total' => 'Total',
            'estado' => 'Estado',
            'idcliente' => 'Idcliente',
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

        $criteria->compare('idcompra', $this->idcompra);
        $criteria->compare('fecha', $this->fecha, true);
        $criteria->compare('hora', $this->hora, true);
        $criteria->compare('cantidad', $this->cantidad, true);
        $criteria->compare('total', $this->total, true);
        $criteria->compare('estado', $this->estado, true);
        if(Yii::app()->session['cajero']>=0)
             $criteria->compare('idcliente', Yii::app()->session['cajero']);
        else
              $criteria->compare('idcliente', Yii::app()->session['id']);

        return new CActiveDataProvider($this, array(
            'criteria' => $criteria,
        ));
    }

    /**
     * Returns the static model of the specified AR class.
     * Please note that you should have this exact method in all your CActiveRecord descendants!
     * @param string $className active record class name.
     * @return Compra the static model class
     */
    public static function model($className = __CLASS__) {
        return parent::model($className);
    }

}
