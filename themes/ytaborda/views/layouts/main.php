<?php /* @var $this Controller */ ?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//ES" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="es" lang="es">
<head>
	<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
	<meta name="language" content="es" />
	<link type="image/ico" href="<?php echo Yii::app()->theme->baseUrl ;?>/img/favicon.png" rel="icon">
	<title><?php echo CHtml::encode($this->pageTitle); ?></title>
	<meta name="p:domain_verify" content="3c26fff7e0f038c2bc17baf8a378036c"/>
	<script src='https://www.google.com/recaptcha/api.js'></script>

	<?php 
		Yii::app()->getClientScript()->registerCssFile(Yii::app()->theme->baseUrl.'/css/main.css'); 
		Yii::app()->getClientScript()->registerCoreScript('jquery');
		// Yii::app()->getClientScript()->registerCoreScript('jquery.ui');
		// <!-- <div class="copy">&copy; 2015 by Y. Taborda<span class="icon"></span></div> -->
	?>
</head>

<body>
	<div id="main-container">
		<div id="ctop">
			<div class="content">
				<div class="nav">
					<div class="name">
						<?php echo CHtml::link('Y. Taborda','http://ytaborda.com/', array('target'=>'_self')); ?> 
					</div>
					<div class="menu">
						<?php $this->widget('zii.widgets.CMenu',array('activateParents'=>false,'encodeLabel' => false,'items'=> $this->menu )); ?>
					</div>
					
				</div>
			</div>
		</div>
		<div id="cbottom" class="cright">
			<div class="content">
				<?php echo $content; ?>
			</div>
		</div>
	</div>
	<?php //echo Yii::app()->user->ui->displayErrorConsole(); ?> 
</body>
</html>
