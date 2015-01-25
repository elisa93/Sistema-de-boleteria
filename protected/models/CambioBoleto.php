<?php

/**
 * This is the model class for table "cambio_boleto".
 *
 * The followings are the available columns in table 'cambio_boleto':
 * @property integer $idcambio_boleto
 * @property string $fecha
 * @property string $hora
 * @property double $total_anterior
 * @property double $total_nuevo
 * @property integer $idcajero
 * @property integer $idventa
 *
 * The followings are the available model relations:
 * @property Cajero $idcajero0
 * @property Venta $idventa0
 */
class CambioBoleto extends CActiveRecord {

    /**
     * @return string the associated database table name
     */
    public function tableName() {
        return 'cambio_boleto';
    }

    /**
     * @return array validation rules for model attributes.
     */
    public function rules() {
        // NOTE: you should only define rules for those attributes that
        // will receive user inputs.
        return array(
            array('fecha, hora, total_anterior, total_nuevo, idcajero, idventa', 'required'),
            array('idcajero, idventa', 'numerical', 'integerOnly' => true),
            array('total_anterior, total_nuevo', 'numerical'),
            array('fecha, hora', 'length', 'max' => 45),
            // The following rule is used by search().
            // @todo Please remove those attributes that should not be searched.
            array('idcambio_boleto, fecha, hora, total_anterior, total_nuevo, idcajero, idventa', 'safe', 'on' => 'search'),
        );
    }

    /**
     * @return array relational rules.
     */
    public function relations() {
        // NOTE: you may need to adjust the relation name and the related
        // class name for the relations automatically generated below.
        return array(
            'idcajero0' => array(self::BELONGS_TO, 'Cajero', 'idcajero'),
            'idventa0' => array(self::BELONGS_TO, 'Venta', 'idventa'),
        );
    }

    /**
     * @return array customized attribute labels (name=>label)
     */
    public function attributeLabels() {
        return array(
            'idcambio_boleto' => 'Idcambio Boleto',
            'fecha' => 'Fecha',
            'hora' => 'Hora',
            'total_anterior' => 'Total Anterior',
            'total_nuevo' => 'Total Nuevo',
            'idcajero' => 'Idcajero',
            'idventa' => 'Idventa',
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

        $criteria->compare('idcambio_boleto', $this->idcambio_boleto);
        $criteria->compare('fecha', $this->fecha, true);
        $criteria->compare('hora', $this->hora, true);
        $criteria->compare('total_anterior', $this->total_anterior);
        $criteria->compare('total_nuevo', $this->total_nuevo);
        $criteria->compare('idcajero', Yii::app()->session['id']);
        $criteria->compare('idventa', $this->idventa);

        return new CActiveDataProvider($this, array(
            'criteria' => $criteria,
        ));
    }

    /**
     * Returns the static model of the specified AR class.
     * Please note that you should have this exact method in all your CActiveRecord descendants!
     * @param string $className active record class name.
     * @return CambioBoleto the static model class
     */
    public static function model($className = __CLASS__) {
        return parent::model($className);
    }

}
