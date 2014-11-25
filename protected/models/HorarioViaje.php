<?php

/**
 * This is the model class for table "horario_viaje".
 *
 * The followings are the available columns in table 'horario_viaje':
 * @property integer $idhorario_viaje
 * @property string $hora_salida
 * @property string $hora_llegada
 * @property integer $idcatalogo_ruta
 *
 * The followings are the available model relations:
 * @property CatalogoRuta $idcatalogoRuta
 * @property UnidadTransporte[] $unidadTransportes
 */
class HorarioViaje extends CActiveRecord
{
	/**
	 * @return string the associated database table name
	 */
	public function tableName()
	{
		return 'horario_viaje';
	}

	/**
	 * @return array validation rules for model attributes.
	 */
	public function rules()
	{
		// NOTE: you should only define rules for those attributes that
		// will receive user inputs.
		return array(
			array('idcatalogo_ruta', 'required'),
			array('idcatalogo_ruta', 'numerical', 'integerOnly'=>true),
			array('hora_salida, hora_llegada', 'length', 'max'=>45),
			// The following rule is used by search().
			// @todo Please remove those attributes that should not be searched.
			array('idhorario_viaje, hora_salida, hora_llegada, idcatalogo_ruta', 'safe', 'on'=>'search'),
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
			'idcatalogoRuta' => array(self::BELONGS_TO, 'CatalogoRuta', 'idcatalogo_ruta'),
			'unidadTransportes' => array(self::HAS_MANY, 'UnidadTransporte', 'idhorario_viaje'),
		);
	}

	/**
	 * @return array customized attribute labels (name=>label)
	 */
	public function attributeLabels()
	{
		return array(
			'idhorario_viaje' => 'Idhorario Viaje',
			'hora_salida' => 'Hora Salida',
			'hora_llegada' => 'Hora Llegada',
			'idcatalogo_ruta' => 'Idcatalogo Ruta',
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

		$criteria->compare('idhorario_viaje',$this->idhorario_viaje);
		$criteria->compare('hora_salida',$this->hora_salida,true);
		$criteria->compare('hora_llegada',$this->hora_llegada,true);
		$criteria->compare('idcatalogo_ruta',$this->idcatalogo_ruta);

		return new CActiveDataProvider($this, array(
			'criteria'=>$criteria,
		));
	}

	/**
	 * Returns the static model of the specified AR class.
	 * Please note that you should have this exact method in all your CActiveRecord descendants!
	 * @param string $className active record class name.
	 * @return HorarioViaje the static model class
	 */
	public static function model($className=__CLASS__)
	{
		return parent::model($className);
	}
}
