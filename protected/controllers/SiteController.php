<?php

class SiteController extends Controller
{
	public $pageTitle = "";
	public $metaKeywords = "";
	public $metaDescription = "";


	/**
	 * Este metodo se ejecuta justo antes de cargar la accion solicitada, util para precargar variables.
	 * @return $this->empresa con los datos de la empresa
	 * @return Yii::app()->session['menuItems'] => Menu del sitio
	 * @return Yii::app()->session['flinks'] => Links del footer
	 */
	public function beforeAction($action) {

		# MENU
		$activeItem = Yii::app()->request->getParam('page') != "" ? '/'.Yii::app()->request->getParam('page') : $this->route;

		$menuList = Menu::model()->findAll('parent=0');

		$items=array();
		foreach ($menuList as $i => $menu) {
			$model = Menu::model()->findByPk($menu->id);
			array_push($items, $model->getListed($activeItem));
		}
		
		// Yii::app()->session['menuItems'] = $items;
		$this->menu = $items;
		
		$flinks = "";
		foreach ($items as $i => $link) if($link['visible']) {
			$flinks .= ' | '.CHtml::link($link['label'],array($link['url'][0]));
		}
		Yii::app()->session['flinks'] = substr($flinks, 3).' | '.CHtml::link('Mapa del sitio',array('site/map'));
		


		return true;
	}

	/**
	 * Declares class-based actions.
	 */
	public function actions()
	{
		return array(
			// captcha action renders the CAPTCHA image displayed on the contact page
			'captcha'=>array(
				'class'=>'CCaptchaAction',
				'backColor'=>0xFFFFFF,
			),
			// page action renders "static" pages stored under 'protected/views/site/pages'
			// They can be accessed via: index.php?r=site/page&view=FileName
			'page'=>array(
				'class'=>'CViewAction',
			),
		);
	}

	/**
	 * This is the default 'index' action that is invoked
	 * when an action is not explicitly requested by users.
	 */
	public function actionIndex()
	{
		$model=new ContactForm;
		if(isset($_POST['ContactForm']))
		{
			$model->attributes=$_POST['ContactForm'];
			if($model->validate())
			{
				//use 'contact' view from views/mail
				$mail = new YiiMailer();
				$mail->setView('standard');
				$mail->setLayout('contacto');
				$mail->setData(array(
					'message' => $model->body, 
					'name' => $model->name, 
					'description' => 'Enviado desde '.Yii::app()->name.'/Contacto',
				));
				
				//set properties
				$mail->setFrom($model->email, $model->name);
				$mail->setSubject('Contacto - '.$model->subject);
				$mail->setTo(Yii::app()->params['adminEmail']);
				//send
				if ($mail->send()) {
					Yii::app()->user->setFlash('contact','Gracias por contactar conmigo. Le responderé a la brevedad posible.');
				} else {
					Yii::app()->user->setFlash('error','Error al tratar de enviar el mensaje: '.$mail->getError());
				}

				$this->refresh();
			}
		}
		$this->render('index',array('model'=>$model));
		
	}



	/**
	 * This is the action to handle external exceptions.
	 */
	public function actionError()
	{
		if($error=Yii::app()->errorHandler->error)
		{
			if(Yii::app()->request->isAjaxRequest)
				echo $error['message'];
			else
				$this->render('error', $error);
		}
	}

	/**
	 * Displays the contact page
	 */
	/*public function actionContact()
	{
		$model=new ContactForm;
		if(isset($_POST['ContactForm']))
		{
			$model->attributes=$_POST['ContactForm'];
			if($model->validate())
			{
				$name='=?UTF-8?B?'.base64_encode($model->name).'?=';
				$subject='=?UTF-8?B?'.base64_encode($model->subject).'?=';
				$headers="From: $name <{$model->email}>\r\n".
					"Reply-To: {$model->email}\r\n".
					"MIME-Version: 1.0\r\n".
					"Content-Type: text/plain; charset=UTF-8";

				mail(Yii::app()->params['adminEmail'],$subject,$model->body,$headers);
				Yii::app()->user->setFlash('contact','Thank you for contacting us. We will respond to you as soon as possible.');
				$this->refresh();
			}
		}
		$this->render('contact',array('model'=>$model));
	}*/

}