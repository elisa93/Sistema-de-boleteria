<?php

/**
 * This is the model class for table "reserva_oficina".
 *
 * The followings are the available columns in table 'reserva_oficina':
 * @property integer $idreserva_oficina
 * @property string $fecha
 * @property string $hora
 * @property string $total
 * @property integer $idcajero
 *
 * The followings are the available model relations:
 * @property Boleto[] $boletos
 * @property Cajero $idcajero0
 */
class ReservaOficina extends CActiveRecord
{
	/**
	 * @return string the associated database table name
	 */
	public function tableName()
	{
		return 'reserva_oficina';
	}

	/**
	 * @return array validation rules for model attributes.
	 */
	public function rules()
	{
		// NOTE: you should only define rules for those attributes that
		// will receive user inputs.
		return array(
			array('fecha, hora, total, idcajero', 'required'),
			array('idcajero', 'numerical', 'integerOnly'=>true),
			array('fecha, hora, total', 'length', 'max'=>45),
			// The following rule is used by search().
			// @todo Please remove those attributes that should not be searched.
			array('idreserva_oficina, fecha, hora, total, idcajero', 'safe', 'on'=>'search'),
		);
	}

	/**
	 * @return array relational rules.
	 */
	public function relations()
	{
		// NOTE: you may need to adjust the relation name and the related
		// class name for the relations automatically generated below.
		return array(
			'boletos' => array(self::HAS_MANY, 'Boleto', 'idreserva_oficina'),
			'idcajero0' => array(self::BELONGS_TO, 'Cajero', 'idcajero'),
		);
	}

	/**
	 * @return array customized attribute labels (name=>label)
	 */
	public function attributeLabels()
	{
		return array(
			'idreserva_oficina' => 'Idreserva Oficina',
			'fecha' => 'Fecha',
			'hora' => 'Hora',
			'total' => 'Total',
			'idcajero' => 'Idcajero',
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
	public function search()
	{
		// @todo Please modify the following code to remove attributes that should not be searched.

		$criteria=new CDbCriteria;

		$criteria->compare('idreserva_oficina',$this->idreserva_oficina);
		$criteria->compare('fecha',$this->fecha,true);
		$criteria->compare('hora',$this->hora,true);
		$criteria->compare('total',$this->total,true);
		$criteria->compare('idcajero',Yii::app()->session['id']);

		return new CActiveDataProvider($this, array(
			'criteria'=>$criteria,
		));
	}

	/**
	 * Returns the static model of the specified AR class.
	 * Please note that you should have this exact method in all your CActiveRecord descendants!
	 * @param string $className active record class name.
	 * @return ReservaOficina the static model class
	 */
	public static function model($className=__CLASS__)
	{
		return parent::model($className);
	}
}
