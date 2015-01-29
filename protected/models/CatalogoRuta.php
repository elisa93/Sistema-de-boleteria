<?php

/**
 * This is the model class for table "catalogo_ruta".
 *
 * The followings are the available columns in table 'catalogo_ruta':
 * @property integer $idcatalogo_ruta
 * @property string $ciudad_origen
 * @property string $catalogo_rutacol
 * @property string $costo
 * @property integer $idadministrador
 *
 * The followings are the available model relations:
 * @property Administrador $idadministrador0
 * @property HorarioViaje[] $horarioViajes
 */
class CatalogoRuta extends CActiveRecord {

    /**
     * @return string the associated database table name
     */
    public function tableName() {
        return 'catalogo_ruta';
    }

    /**
     * @return array validation rules for model attributes.
     */
    public function rules() {
        // NOTE: you should only define rules for those attributes that
        // will receive user inputs.
        return array(
            array('ciudad_origen, ciudad_destino, costo', 'required'),
            array('idadministrador', 'numerical', 'integerOnly' => true),
            array('ciudad_origen, ciudad_destino, costo', 'length', 'max' => 45),
            // The following rule is used by search().
            // @todo Please remove those attributes that should not be searched.
            array('idcatalogo_ruta, ciudad_origen, ciudad_destino, costo, idadministrador', 'safe', 'on' => 'search'),
        );
    }

    /**
     * @return array relational rules.
     */
    public function relations() {
        // NOTE: you may need to adjust the relation name and the related
        // class name for the relations automatically generated below.
        return array(
            'idadministrador0' => array(self::BELONGS_TO, 'Administrador', 'idadministrador'),
            'horarioViajes' => array(self::HAS_MANY, 'HorarioViaje', 'idcatalogo_ruta'),
        );
    }

    /**
     * @return array customized attribute labels (name=>label)
     */
    public function attributeLabels() {
        return array(
            'idcatalogo_ruta' => 'Idcatalogo Ruta',
            'ciudad_origen' => 'Ciudad Origen',
            'ciudad_destino' => 'Ciudad de destino',
            'costo' => 'Costo(Dólares)',
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

        $criteria->compare('idcatalogo_ruta', $this->idcatalogo_ruta);
        $criteria->compare('ciudad_origen', $this->ciudad_origen, true);
        $criteria->compare('ciudad_destino', $this->ciudad_destino, true);
        $criteria->compare('costo', $this->costo, true);
        $criteria->compare('idadministrador',$this->idadministrador); 

        return new CActiveDataProvider($this, array(
            'criteria' => $criteria,
        ));
    }
    public function searchAdmin() {
        // @todo Please modify the following code to remove attributes that should not be searched.

        $criteria = new CDbCriteria;

        $criteria->compare('idcatalogo_ruta', $this->idcatalogo_ruta);
        $criteria->compare('ciudad_origen', $this->ciudad_origen, true);
        $criteria->compare('ciudad_destino', $this->ciudad_destino, true);
        $criteria->compare('costo', $this->costo, true);
        $criteria->compare('idadministrador', Yii::app()->session['id']);

        return new CActiveDataProvider($this, array(
            'criteria' => $criteria,
        ));
    }

    /**
     * Returns the static model of the specified AR class.
     * Please note that you should have this exact method in all your CActiveRecord descendants!
     * @param string $className active record class name.
     * @return CatalogoRuta the static model class
     */
    public static function model($className = __CLASS__) {
        return parent::model($className);
    }

}
