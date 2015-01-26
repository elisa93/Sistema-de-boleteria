<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="en" lang="en">
<head>
	<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
	<meta name="language" content="en" />

	<!-- blueprint CSS framework -->
	<link rel="stylesheet" type="text/css" href="<?php echo Yii::app()->theme->baseUrl; ?>/css/screen.css" media="screen, projection" />
	<link rel="stylesheet" type="text/css" href="<?php echo Yii::app()->theme->baseUrl; ?>/css/print.css" media="print" />
	<!--[if lt IE 8]>
	<link rel="stylesheet" type="text/css" href="<?php echo Yii::app()->theme->baseUrl; ?>/css/ie.css" media="screen, projection" />
	<![endif]-->

	<link rel="stylesheet" type="text/css" href="<?php echo Yii::app()->theme->baseUrl; ?>/css/main.css" />
	<link rel="stylesheet" type="text/css" href="<?php echo Yii::app()->theme->baseUrl; ?>/css/form.css" />
	<link rel="stylesheet" type="text/css" href="<?php echo Yii::app()->theme->baseUrl; ?>/css/buttons.css" />
        <link rel="stylesheet" type="text/css" href="<?php echo Yii::app()->theme->baseUrl; ?>/css/icons.css" />
	<link rel="stylesheet" type="text/css" href="<?php echo Yii::app()->theme->baseUrl; ?>/css/tables.css" />
    
    <link rel="stylesheet" type="text/css" href="<?php echo Yii::app()->theme->baseUrl; ?>/css/mbmenu.css" />
    <link rel="stylesheet" type="text/css" href="<?php echo Yii::app()->theme->baseUrl; ?>/css/mbmenu_iestyles.css" />
	

	<title><?php echo CHtml::encode($this->pageTitle); ?></title>
</head>

<body>

<div class="container" id="page">
	<div id="topnav">
		<div class="topnav_text"><a href='#'>My Account</a> | <a href='#'>Settings</a> </div>
	</div>
	<div id="header">
            
		<div id="logo"> <h1>Cooperativa Union Cariamanga</h1><img src="<?php echo Yii::app()->theme->baseUrl; ?>/images/logo.png"></img><?php //echo CHtml::encode(Yii::app()->name); ?></div>-->
	</div><!-- header
    <!--
<?php /*$this->widget('application.extensions.mbmenu.MbMenu',array(
            'items'=>array(
                array('label'=>'Dashboard', 'url'=>array('/site/index'),'itemOptions'=>array('class'=>'test')),
                array('label'=>'Theme Pages',
                  'items'=>array(
                    array('label'=>'Graphs & Charts', 'url'=>array('/site/page', 'view'=>'graphs'),'itemOptions'=>array('class'=>'icon_chart')),
					array('label'=>'Form Elements', 'url'=>array('/site/page', 'view'=>'forms')),
					array('label'=>'Interface Elements', 'url'=>array('/site/page', 'view'=>'interface')),
					array('label'=>'Error Pages', 'url'=>array('/site/page', 'view'=>'Demo 404 page')),
					array('label'=>'Calendar', 'url'=>array('/site/page', 'view'=>'calendar')),
					array('label'=>'Buttons & Icons', 'url'=>array('/site/page', 'view'=>'buttons_and_icons')),
                  ),
                ),
                array('label'=>'Gii Generated Module',
                  'items'=>array(
                    array('label'=>'Items', 'url'=>array('/theme/index')),
                    array('label'=>'Create Item', 'url'=>array('/theme/create')),
					array('label'=>'Manage Items', 'url'=>array('/theme/admin')),
                  ),
                ),
				array('label'=>'Contact', 'url'=>array('/site/contact')),
				array('label'=>'Login', 'url'=>array('/site/login'), 'visible'=>Yii::app()->user->isGuest),
				array('label'=>'Logout ('.Yii::app()->user->name.')', 'url'=>array('/site/logout'), 'visible'=>!Yii::app()->user->isGuest),
            ),
    )); */?> --->
	<div id="mainmenu">
    
		<?php $this->widget('zii.widgets.CMenu',array(
			'items'=>array(
                                   array('label' => 'Inicio', 'url' => array('/site/index')),
                        array('label' => 'Acerca de', 'url' => array('/site/page', 'view' => 'about')),
                        array('label' => 'Sugerencias', 'url' => array('/site/contact')),
                        array('label' => 'Login', 'url' => array('/site/login'), 'visible' => Yii::app()->user->isGuest),
                        array('label' => 'Catalogo Rutas', 'url' => array('/CatalogoRutaCliente/admin'), 'visible' => !Yii::app()->user->isGuest),
                        array('label' => 'Compras', 'url' => array('/compra/admin'), 'visible' => !Yii::app()->user->isGuest),
                        array('label' => 'Reservas', 'url' => array('/Reserva/admin'), 'visible' => !Yii::app()->user->isGuest),
                        array('label' => 'Logout (' . Yii::app()->user->name . ')', 'url' => array('/site/logout'), 'visible' => !Yii::app()->user->isGuest),
			
			),
		)); ?>
	</div> <!--mainmenu -->
	<?php if(isset($this->breadcrumbs)):?>
		<?php $this->widget('zii.widgets.CBreadcrumbs', array(
			'links'=>$this->breadcrumbs,
		)); ?><!-- breadcrumbs hhyyyyyymmmm -->
	<?php endif?>

	<?php echo $content; ?>
         <?php
         Yii::app()->clientScript->registerCoreScript('jquery'); //if you do not set yet
 
  //you have to put this code in your view file
  $this->widget('ext.FlexPictureSlider.FlexPictureSlider',
  array('imageBlockSelector' => '#myslider',));
 
 
  //or with full custom parameters
  $this->widget('ext.FlexPictureSlider.FlexPictureSlider',
  array(
    'imageBlockSelector' => '#myslider', //the jquery selector
    'widthSlider' => '900', //or you can use jquery '$(window).width()/1.6',
    'heightSlider' => '275', //or you can use jquery '$(window).height()/1.6',
    'slideUnitSize' => 'px', //px or %
    'timeBetweenChangeSlider' => 4000,
    'timeDelayAnimation' => 1000, //the time before slider starts in miliseconds
    'sliderStartFrom' => 0, //if sliderSuffle is set false, only for version 1.1
    'sliderSuffle' => true, //suffle the pictures for random display, only for version 1.1
 
   )); 
  ?>
 
  <div id="myslider">
  <?php
  echo CHtml::image(Yii::app()->request->baseUrl . '/images/01.png', 'alt 1');
  echo CHtml::image(Yii::app()->request->baseUrl . '/images/02.png', 'alt 2');
  echo CHtml::image(Yii::app()->request->baseUrl . '/images/00.png', 'alt 3');

  ?>
  </div>
         ?>
                
                
	<div id="footer">
		Copyright &copy; <?php echo date('Y'); ?> by webapplicationthemes.com<br/>
		All Rights Reserved.<br/>
		<?php echo Yii::powered(); ?>
	</div><!-- footer -->

</div><!-- page -->

</body>
</html>