<?php

/**
 * This is the model class for table "boleto".
 *
 * The followings are the available columns in table 'boleto':
 * @property integer $idboleto
 * @property string $numero_boleto
 * @property string $tipo
 * @property string $estado
 * @property integer $transaporte
 * @property integer $idventa
 * @property integer $idreserva_oficina
 * @property integer $idcompra
 * @property integer $idreserva
 *
 * The followings are the available model relations:
 * @property UnidadTransporte $transaporte0
 * @property Venta $idventa0
 * @property ReservaOficina $idreservaOficina
 * @property Compra $idcompra0
 * @property Reserva $idreserva0
 */
class Boleto extends CActiveRecord {

    /**
     * @return string the associated database table name
     */
    public function tableName() {
        return 'boleto';
    }

    /**
     * @return array validation rules for model attributes.
     */
    public function rules() {
        // NOTE: you should only define rules for those attributes that
        // will receive user inputs.
        return array(
            array('numero_boleto, tipo, estado, transaporte, idventa, idreserva_oficina, idcompra, idreserva', 'required'),
            array('transaporte, idventa, idreserva_oficina, idcompra, idreserva', 'numerical', 'integerOnly' => true),
            array('numero_boleto, tipo, estado', 'length', 'max' => 45),
            // The following rule is used by search().
            // @todo Please remove those attributes that should not be searched.
            array('idboleto, numero_boleto, tipo, estado, transaporte, idventa, idreserva_oficina, idcompra, idreserva', 'safe', 'on' => 'search'),
        );
    }

    /**
     * @return array relational rules.
     */
    public function relations() {
        // NOTE: you may need to adjust the relation name and the related
        // class name for the relations automatically generated below.
        return array(
            'transaporte0' => array(self::BELONGS_TO, 'UnidadTransporte', 'transaporte'),
            'idventa0' => array(self::BELONGS_TO, 'Venta', 'idventa'),
            'idreservaOficina' => array(self::BELONGS_TO, 'ReservaOficina', 'idreserva_oficina'),
            'idcompra0' => array(self::BELONGS_TO, 'Compra', 'idcompra'),
            'idreserva0' => array(self::BELONGS_TO, 'Reserva', 'idreserva'),
        );
    }

    /**
     * @return array customized attribute labels (name=>label)
     */
    public function attributeLabels() {
        return array(
            'idboleto' => 'Idboleto',
            'numero_boleto' => 'Numero Boleto',
            'tipo' => 'Tipo',
            'estado' => 'Estado',
            'transaporte' => 'Transaporte',
            'idventa' => 'Idventa',
            'idreserva_oficina' => 'Idreserva Oficina',
            'idcompra' => 'Idcompra',
            'idreserva' => 'Idreserva',
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

        $criteria->compare('idboleto', $this->idboleto);
        $criteria->compare('numero_boleto', $this->numero_boleto, true);
        $criteria->compare('tipo', $this->tipo, true);
        $criteria->compare('estado', $this->estado, true);
        $criteria->compare('transaporte', $this->transaporte);
        $criteria->compare('idventa', $this->idventa);
        $criteria->compare('idreserva_oficina', $this->idreserva_oficina);
        $criteria->compare('idcompra', $this->idcompra);
        $criteria->compare('idreserva', $this->idreserva);

        return new CActiveDataProvider($this, array(
            'criteria' => $criteria,
        ));
    }

    /**
     * Returns the static model of the specified AR class.
     * Please note that you should have this exact method in all your CActiveRecord descendants!
     * @param string $className active record class name.
     * @return Boleto the static model class
     */
    public static function model($className = __CLASS__) {
        return parent::model($className);
    }

}
