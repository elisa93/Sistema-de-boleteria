<?php

/**
 * This is the model class for table "administrador".
 *
 * The followings are the available columns in table 'administrador':
 * @property integer $idadministrador
 * @property string $nombre
 * @property string $email
 * @property string $clave
 * @property string $cedula
 * @property string $telefono
 *
 * The followings are the available model relations:
 * @property Cajero[] $cajeros
 * @property CatalogoRuta[] $catalogoRutas
 * @property UnidadTransporte[] $unidadTransportes
 */
class Administrador extends CActiveRecord {

    /**
     * @return string the associated database table name
     */
    public function tableName() {
        return 'administrador';
    }

    /**
     * @return array validation rules for model attributes.
     */
    public function rules() {
        // NOTE: you should only define rules for those attributes that
        // will receive user inputs.
        return array(
            array('nombre, email, clave, cedula, telefono', 'required'),
            array('nombre, email, cedula, telefono', 'length', 'max' => 45),
            array('clave', 'length', 'max' => 100),
            // The following rule is used by search().
            // @todo Please remove those attributes that should not be searched.
            array('idadministrador, nombre, email, clave, cedula, telefono', 'safe', 'on' => 'search'),
        );
    }

    /**
     * @return array relational rules.
     */
    public function relations() {
        // NOTE: you may need to adjust the relation name and the related
        // class name for the relations automatically generated below.
        return array(
            'cajeros' => array(self::HAS_MANY, 'Cajero', 'idadministrador'),
            'catalogoRutas' => array(self::HAS_MANY, 'CatalogoRuta', 'idadministrador'),
            'unidadTransportes' => array(self::HAS_MANY, 'UnidadTransporte', 'idadministrador'),
        );
    }

    /**
     * @return array customized attribute labels (name=>label)
     */
    public function attributeLabels() {
        return array(
            'idadministrador' => 'Idadministrador',
            'nombre' => 'Nombre',
            'email' => 'Email',
            'clave' => 'Clave',
            'cedula' => 'Cedula',
            'telefono' => 'Telefono',
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

        $criteria->compare('idadministrador', $this->idadministrador);
        $criteria->compare('nombre', $this->nombre, true);
        $criteria->compare('email', $this->email, true);
        $criteria->compare('clave', $this->clave, true);
        $criteria->compare('cedula', $this->cedula, true);
        $criteria->compare('telefono', $this->telefono, true);

        return new CActiveDataProvider($this, array(
            'criteria' => $criteria,
        ));
    }

    /**
     * Returns the static model of the specified AR class.
     * Please note that you should have this exact method in all your CActiveRecord descendants!
     * @param string $className active record class name.
     * @return Administrador the static model class
     */
    public static function model($className = __CLASS__) {
        return parent::model($className);
    }
    public function beforeUpdate() {
        if ($this->isNewRecord) {
            $this->clave = hash_hmac('sha256', $this->clave, Yii::app()->params['encryptionKey']);
        }
        return parent::beforeSave();
    }

    public function beforeSave() {

        $this->clave = hash_hmac('sha256', $this->clave, Yii::app()->params['encryptionKey']);

        return parent::beforeSave();
    }


}
