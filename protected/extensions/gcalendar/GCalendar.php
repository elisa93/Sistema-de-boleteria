<?php
/*
 * GCalendar is a calendar based on the JS Calendar (version 2.1) Calendar -
 * http://www.dhtmlgoodies.com/index.html?page=calendarScripts
 * Information and documentation can be found on this site
 *
 */
class GCalendar extends CWidget {
  
    /* @var $inputField String */
    private $_inputField;  
    /* @var $daFormat String */
    private $_daFormat; 
    /* @var $_model String */
    private $_model;
    /* @var $_attribute String */
    private $_attribute;
    /* @var $_languageCode String */
    private $_languageCode="en";
    /* @var $_calButton Boolean */
    private $_calButton=false;
    /* @var $_displayTime String */
    private $_displayTime=false;
    /* @var $this->_theme String */
    private $_theme;
    
    public function setAttribute($attribute) {
        $this->_attribute = $attribute;
    }
     
     /**
     * The ID of your input field.
     * @param String $inputField
     */
    public function setInputField($inputField) {
        $this->_inputField = $inputField;
    }
    
    /**
     * Format of the date displayed in textbox
     * @param String $daFormat
     */
    public function setDaFormat($daFormat) {
        $this->_daFormat = $daFormat;
    }
    
    /**
    * The Model of the form
    * @param String $model
    */
    public function setModel($model) {
        $this->_model = $model;
    }
    
     /**
     * The languageCode of JS calendar
     * @param String $languagecode
     */
    public function setLanguageCode($languageCode) {
        $this->_languageCode = $languageCode;
    }
    
    /**
     * The Calendar button 
     * @param Bollean (true/false) $calButton
     */
    public function setCalButton($calButton) {
        $this->_calButton = $calButton;
    }
    
    /**
     * The Calendar button 
     * @param Bollean (true/false) $calButton
     */
    public function setDisplayTime($displayTime) {
        $this->_displayTime = $displayTime;
    }
    
    /**
   * Set the theme of the calendar (blue, grey, light-cyan,zune)
   * @param String $theme
   */
   public function setTheme($theme) {
        $this->_theme = $theme;
   }
    
    /**
    * Execute the widget
    * This method registers necessary javascript and renders the needed HTML code.
    */
    public function run() {
        
        $this->registerClientScripts();
        
        echo CHtml::button('Pick Date', array(
                                     'onclick' => 'pickDate(this,'. $this->_inputField . '
                                                            ,"' . $this->_daFormat . '"
                                                            ,"' . $this->_languageCode . '"   
                                                           )',  
                                    )
                               );
        
    }

    /**
    * Registers the clientside widget files (css & js)
    */
    protected function registerClientScripts()
    {
        // Get the resources path
        $resources = dirname(__FILE__).DIRECTORY_SEPARATOR.'resources';
        $cs=Yii::app()->clientScript;
          
        // publish the files
        $baseUrl = Yii::app()->getAssetManager()->publish($resources);
        
        ////pass asset folder path to a javascript
        $script = 'gcalendarAssetUrl = "' . $baseUrl . '"; ';
         
        //Pass asset folder path to a javascript of a widget
        if(isset($this->_theme) && $this->_theme != "" ) {
            if(is_file($resources.'/themes/'.$this->_theme.'/css/calendar.css')) { 
                $script .= 'gcalendarTheme = "' . $this->_theme . '"; ';
                echo $this->_theme;
            } else {
                $script .= 'gcalendarTheme = "blue"; ';
            }
        }
        else{
            $script .= 'gcalendarTheme = "blue"; ';
        } 
        
        //Pass asset folder path to a javascript of a widget
        if(isset($this->_languageCode) && $this->_languageCode != "" ) {
            $script .= 'gcalendarlanguageCode ="' .$this->_languageCode. '"; ';
        }
        else{
            $script .= 'gcalendarlanguageCode = "en"; ';
        } 
    
        
        Yii::app()->getClientScript()->registerScript('_', $script, CClientScript::POS_HEAD);
        
        $scripts = array(
                        '/js/dhtmlSuite-common.js',
                        '/js/dhtmlSuite-constructor.js',
                        '/js/config.js',
                       ); 
        
        foreach ($scripts as $file)
            $cs->registerScriptFile($baseUrl.$file,CClientScript::POS_END);
            
     }
     
    
}
?>
