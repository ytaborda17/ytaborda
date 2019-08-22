<?php
/* @var $this SiteController */
?>


<h2>Proyectos</h2>
<div class="projects">
	
	<div class="item">
		<?php echo CHtml::image(Yii::app()->theme->baseUrl.'/img/projects/noria.png','Noria') ?>
		<div class="caption">
			<h3>Noria</h3>
			<!-- <p>Proyecto final de Diplomado de Diseño de Medios Web, el diseño de las imagenes se hizo con el uso de software libre como Inkscape y GIMP.</p> -->
			<p>
				<?php echo CHtml::link('Demo','http://demo.ytaborda.com/noria/', array('target'=>'_blank')); ?> 
			</p>
			<small>Diseño propio</small>
		</div>
	</div>
	<div class="item">
		<?php echo CHtml::image(Yii::app()->theme->baseUrl.'/img/projects/mundosalud.png','Mundo Salud') ?>
		<div class="caption">
			<h3>Mundo Salud</h3>
			<!-- <p>...</p> -->
			<p>
				<?php echo CHtml::link('Sitio Oficial','http://mundosalud.com.ve', array('target'=>'_blank')); ?> |
				<?php echo CHtml::link('Demo','http://demo.ytaborda.com/mundosalud/', array('target'=>'_blank')); ?> 
			</p>
			<small>Diseñado por <?php echo CHtml::link('Anaisa Mendez','https://www.linkedin.com/in/anaisa-mendez-778b80117', array('target'=>'_blank')); ?></small>
		</div>
	</div>
	<div class="item">
		<?php echo CHtml::image(Yii::app()->theme->baseUrl.'/img/projects/promedca.png','Promedca') ?>
		<div class="caption">
			<h3>Promedca</h3>
			<!-- <p>Primeros pasos en el desarrollo de un gestor de contenidos. El <em>demo</em> del sitio aplica normas SEO sobre las URL del sitio web, estos cambios quedron pendientes por aplicar.</p> -->
			<p>
				<?php echo CHtml::link('Sitio Oficial','http://promedca.com', array('target'=>'_blank')); ?> |
				<?php echo CHtml::link('Demo','http://demo.ytaborda.com/promedca/', array('target'=>'_blank')); ?> |
				<?php echo CHtml::link('Demo/Gestor','http://demo.ytaborda.com/promedca/gestor/', array('target'=>'_blank')); ?> 
			</p>
			<small>Diseñado por <?php echo CHtml::link('Daniel Cabrera','https://www.linkedin.com/in/daniel-cabrera-guedez-86186882', array('target'=>'_blank')); ?></small>
		</div>
	</div>
	<div class="item">
		<?php echo CHtml::image(Yii::app()->theme->baseUrl.'/img/projects/voxte.png','Voxte') ?>
		<div class="caption">
			<h3>Voxte</h3>
			<!-- <p>Esta aplicación fue creada para administrar información electoral de múltiples clientes, por dicha razón fué necesario mantener una única fuente de archivos con diversas bases de datos, de ahí que el sistema requiera del uso de subdominios para su correcto funcionamiento.</p> -->
			<p>
				<?php echo CHtml::link('Sitio Oficial','http://voxte.voxte.com', array('target'=>'_blank')); ?> |
				<?php echo CHtml::link('Demo #1','http://demo.ytaborda.com/voxte/voxte/', array('target'=>'_blank')); ?> |
				<?php echo CHtml::link('Demo #2','http://demo.ytaborda.com/voxte/voxte-pruebas/', array('target'=>'_blank')); ?> 
			</p>
			<small>Diseñado por <?php echo CHtml::link('Joselin Grisel','http://www.dribbble.com/joselingrisel', array('target'=>'_blank')); ?></small>
		</div>
	</div>
	<div class="item">
		<?php echo CHtml::image(Yii::app()->theme->baseUrl.'/img/projects/gazebo.png','Gazebo Cocinas') ?>
		<div class="caption">
			<h3>Gazebo Cocinas</h3>
			<!-- <p>Sitio Web responsivo, al mismo se aplicaron normas SEO para posicionamiento Web. Incluye gestor de contenidos con control de permisos, auditoria y otras utilidades que le permite al cliente editar data puntual del sitio web respetanto la integridad del código escrito.</p> -->
			<p>
				<?php echo CHtml::link('Sitio Oficial','http://www.gazebo.com.ve', array('target'=>'_blank')); ?> |
				<?php echo CHtml::link('Demo','http://demo.ytaborda.com/gazebo/', array('target'=>'_blank')); ?> |
				<?php echo CHtml::link('Demo/Gestor','http://demo.ytaborda.com/gazebo/gestor/', array('target'=>'_blank')); ?> 
			</p>
			<small>Diseñado por <?php echo CHtml::link('Stiven Ferrer','http://sferrer.com/', array('target'=>'_blank'));  ?></small>
		</div>
	</div>
</div>


<div class="note">NOTA: El Gestor de Contenidos de cada proyecto es independiente y creado en base a las necesidades de cada cliente, para pruebas, puede ingresar con 
	el usuario <em>demo</em> y la clave <em>123456</em>.</div>
