<?php

/**
 * This is the model class for table "unidad_transporte".
 *
 * The followings are the available columns in table 'unidad_transporte':
 * @property integer $idunidad_transaporte
 * @property string $placa
 * @property string $numero_unidad
 * @property string $capacidad
 * @property string $estado
 * @property integer $idhorario_viaje
 * @property integer $idadministrador
 *
 * The followings are the available model relations:
 * @property Boleto[] $boletos
 * @property HorarioViaje $idhorarioViaje
 * @property Administrador $idadministrador0
 */
class UnidadTransporte extends CActiveRecord {

    /**
     * @return string the associated database table name
     */
    public function tableName() {
        return 'unidad_transporte';
    }

    /**
     * @return array validation rules for model attributes.
     */
    public function rules() {
        // NOTE: you should only define rules for those attributes that
        // will receive user inputs.
        return array(
            array('placa, numero_unidad, capacidad, estado, idadministrador', 'required'),
            array('idhorario_viaje, idadministrador', 'numerical', 'integerOnly' => true),
            array('placa, numero_unidad, capacidad, estado', 'length', 'max' => 45),
            // The following rule is used by search().
            // @todo Please remove those attributes that should not be searched.
            array('idunidad_transaporte, placa, numero_unidad, capacidad, estado, idhorario_viaje, idadministrador', 'safe', 'on' => 'search'),
        );
    }

    /**
     * @return array relational rules.
     */
    public function relations() {
        // NOTE: you may need to adjust the relation name and the related
        // class name for the relations automatically generated below.
        return array(
            'boletos' => array(self::HAS_MANY, 'Boleto', 'transaporte'),
            'idhorarioViaje' => array(self::BELONGS_TO, 'HorarioViaje', 'idhorario_viaje'),
            'idadministrador0' => array(self::BELONGS_TO, 'Administrador', 'idadministrador'),
        );
    }

    /**
     * @return array customized attribute labels (name=>label)
     */
    public function attributeLabels() {
        return array(
            'idunidad_transaporte' => 'Idunidad Transaporte',
            'placa' => 'Placa',
            'numero_unidad' => 'Numero Unidad',
            'capacidad' => 'Capacidad',
            'estado' => 'Estado',
            'idhorario_viaje' => 'Idhorario Viaje',
            'idadministrador' => 'Idadministrador',
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

        $criteria->compare('idunidad_transaporte', $this->idunidad_transaporte);
        $criteria->compare('placa', $this->placa, true);
        $criteria->compare('numero_unidad', $this->numero_unidad, true);
        $criteria->compare('capacidad', $this->capacidad, true);
        $criteria->compare('estado', $this->estado, true);
        $criteria->compare('idhorario_viaje', $this->idhorario_viaje);
        $criteria->compare('idadministrador', Yii::app()->session['id']);

        return new CActiveDataProvider($this, array(
            'criteria' => $criteria,
        ));
    }

    /**
     * Returns the static model of the specified AR class.
     * Please note that you should have this exact method in all your CActiveRecord descendants!
     * @param string $className active record class name.
     * @return UnidadTransporte the static model class
     */
    public static function model($className = __CLASS__) {
        return parent::model($className);
    }

}
