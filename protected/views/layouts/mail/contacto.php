<html>
<head>
	<meta content="text/html; charset=UTF-8" http-equiv="content-type">
</head>
<body>
	<table cellspacing="0" cellpadding="10" style="color:#666; font:13px Arial; line-height:1.4em; width:100%;">
		<thead>
			<tr>
				<td style="color:#fff; font-size:22px; background-color:#1A1F1E;">
					<a href="<?php echo Yii::app()->getBaseUrl(true); ?>" title="<?php CHtml::encode(Yii::app()->name)?>">
						<?php echo Yii::app()->name; ?>
					</a>
				</td>
			</tr>
		</thead>
		<tbody>
			<tr>
				<td style="color:#1A1F1E; font-size:12px; padding:10px 0px; border-bottom:1px solid #1A1F1E;">
					<?php if(isset($data['description'])) echo CHtml::encode(strtoupper($data['description']));  ?>
				</td>
			</tr>
			<tr>
				<td>
					<?php echo nl2br($data['message']) ?>
				</td>
			</tr>
			<tr>
				<td style="padding:15px 20px; text-align:center; padding-top:5px; border-top:1px solid #1A1F1E;">
					<br>
					<br>
					<a href="<?php echo Yii::app()->getBaseUrl(true); ?>" title="<?php CHtml::encode(Yii::app()->name)?>">
						<?php echo Yii::app()->name; ?>
					</a>
				</td>
			</tr>
		</tbody>
	</table>
</body>
</html>