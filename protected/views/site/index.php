 
<?php
         Yii::app()->clientScript->registerCoreScript('jquery'); //if you do not set yet
 
  //you have to put this code in your view file
  $this->widget('ext.FlexPictureSlider.FlexPictureSlider',
  array('imageBlockSelector' => '#myslider',));
 
 
  //or with full custom parameters
  $this->widget('ext.FlexPictureSlider.FlexPictureSlider',
  array(
    'imageBlockSelector' => '#myslider', //the jquery selector
    'widthSlider' => '1250', //or you can use jquery '$(window).width()/1.6',
    'heightSlider' => '350', //or you can use jquery '$(window).height()/1.6',
    'slideUnitSize' => 'px', //px or %
    'timeBetweenChangeSlider' => 4000,
    'timeDelayAnimation' => 1000, //the time before slider starts in miliseconds
    'sliderStartFrom' => 0, //if sliderSuffle is set false, only for version 1.1
    'sliderSuffle' => true, //suffle the pictures for random display, only for version 1.1
 
   )); 
  ?>
 
  <div id="myslider">
  <?php
  echo CHtml::image(Yii::app()->request->baseUrl . '/images/cariamanga2.png', 'alt 1');
  echo CHtml::image(Yii::app()->request->baseUrl . '/images/02.jpg', 'alt 2');
  echo CHtml::image(Yii::app()->request->baseUrl . '/images/03.jpg', 'alt 3');

  ?>
