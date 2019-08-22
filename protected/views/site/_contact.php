<?php
/* @var $this SiteController */
/* @var $model ContactForm */
/* @var $form CActiveForm */
// Yii::app()->clientScript->registerScriptFile('https://www.google.com/recaptcha/api.js',CClientScript::POS_END);
?>

<h2>Contacto</h2>

<div class="form">
	<?php $form=$this->beginWidget('CActiveForm', array(
		'id'=>'contact-form',
		'enableClientValidation'=>true,
		'clientOptions'=>array(
			'validateOnSubmit'=>true,
		),
	)); ?>
			
		<?php if(Yii::app()->user->hasFlash('contact')): ?>
			<div class="flash-success">
				<?php echo Yii::app()->user->getFlash('contact'); ?>
			</div>
		<?php else: ?>

			<?php //echo $form->errorSummary($model); ?>
			<div class="contact">
				<div class="col phone"><span class="icon"></span>+57 321 379 0482</div>
				<div class="col email"><span class="icon"></span>contact@ytaborda.com</div>
			</div>
			<div class="clear"></div>
			<div class="col">
				<div class="row">
					<?php echo $form->textField($model,'name',array('placeholder'=>'Nombre (*)','title'=>'Nombre')); ?>
					<?php echo $form->error($model,'name'); ?>
				</div>

				<div class="row">
					<?php echo $form->textField($model,'email',array('placeholder'=>'Email (*)','title'=>'Email')); ?>
					<?php echo $form->error($model,'email'); ?>
				</div>

				<div class="row">
					<?php echo $form->textField($model,'subject',array('size'=>60,'maxlength'=>128,'placeholder'=>'Asunto (*)','title'=>'Asunto')); ?>
					<?php echo $form->error($model,'subject'); ?>
				</div>

				<div class="row">
					<?php echo $form->textArea($model,'body',array('rows'=>6, 'cols'=>50, 'placeholder'=>'Mensaje (*)', 'title'=>'Mensaje')); ?>
					<?php echo $form->error($model,'body'); ?>
				</div>
				
				<div class="row captcha">
					<div class="g-recaptcha" data-sitekey="<?php echo Yii::app()->params['grecaptcha']['data-sitekey']; ?>"></div>
					<?php echo $form->error($model,'verifyCode'); ?>
					<div class="submit button"><?php echo CHtml::submitButton('Enviar'); ?></div>
				</div>
			</div>
			<div class="col">
				<div class="row">
					<iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d15908.238931806649!2d-74.1087952809621!3d4.583298746723079!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x8e3f98e0a45fc049%3A0x370b7884cc99e288!2sCdad.+Jardin%2C+Bogot%C3%A1!5e0!3m2!1sen!2sco!4v1457066462036" width="100%" height="340" frameborder="0" style="border:0" allowfullscreen></iframe>
				</div>
			</div>

		<?php endif; ?>

	<?php $this->endWidget(); ?>
</div>