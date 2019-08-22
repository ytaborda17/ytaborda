<?php
/* @var $this SiteController */
$this->pageTitle=Yii::app()->name;

Yii::app()->clientScript->registerScript('scroll', "

	var main = function() {
		var menu = function() {
	   	$('.menu a').removeClass('active');
	   	$(this).addClass('active');

	   	var offset = 0;
	   	if ($(this.hash).selector !== '#home') offset = $(this.hash).offset().top;

	      $('html, body').animate({ scrollTop: offset }, 1000);
	      return false;
	   }

		var resize = function(){
			var w = $('#projects .scroll').width();
			$('#projects .scroll .box').width(w);
		};

	   $('.menu a').click(menu);

		$(window).resize(resize);

		$('#projects .scroll .box').width($('#projects .scroll').width());
	}

	$(document).ready(main);
");


echo CHtml::openTag('div', array(
	'class' => 'page',
	'id' => 'home',
	));
	echo CHtml::openTag('div');
		$this->renderPartial("_home", array(/*'model'=>$model,'form'=>$form,'zona'=>$zona,*/),false);
	echo CHtml::closeTag('div');
echo CHtml::closeTag('div');


echo CHtml::openTag('div', array(
	'class' => 'page',
	'id' => 'skills',
	));
	echo CHtml::openTag('div');
		$this->renderPartial("_skills", array(/*'model'=>$model,'form'=>$form,'zona'=>$zona,*/),false);
	echo CHtml::closeTag('div');
echo CHtml::closeTag('div');


echo CHtml::openTag('div', array(
	'class' => 'page',
	'id' => 'projects',
	));
	echo CHtml::openTag('div');
		$this->renderPartial("_projects", array(/*'model'=>$model,'form'=>$form,'zona'=>$zona,*/),false);
	echo CHtml::closeTag('div');
echo CHtml::closeTag('div');


echo CHtml::openTag('div', array(
	'class' => 'page',
	'id' => 'contact',
	));
	echo CHtml::openTag('div');
		$this->renderPartial("_contact", array('model'=>$model),false);
	echo CHtml::closeTag('div');
echo CHtml::closeTag('div');