<?php
/* @var $this PostsController */
/* @var $model Posts */
/* @var $form CActiveForm */
?>

<div class="form">

<?php $form=$this->beginWidget('CActiveForm', array(
	'id'=>'posts-form',
	// Please note: When you enable ajax validation, make sure the corresponding
	// controller action is handling ajax validation correctly.
	// There is a call to performAjaxValidation() commented in generated controller code.
	// See class documentation of CActiveForm for details on this.
	'enableAjaxValidation'=>false,
)); ?>

	<p class="note">Fields with <span class="required">*</span> are required.</p>

	<?php echo $form->errorSummary($model); ?>

	<div class="row">
		<?php echo $form->labelEx($model,'category_id'); ?>
<!--		--><?php //echo $form->textField($model,'category_id',array('size'=>20,'maxlength'=>maxlength20)); ?>
		<?php echo $form->dropDownList($model,'category_id', CHtml::listData(Categories::model()->findAll(), 'id', 'name'), ['prompt' => 'Select', 'class' => '', 'style']); ?>
		<?php echo $form->error($model,'category_id'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'title'); ?>
		<?php echo $form->textArea($model,'title',array('rows'=>6, 'cols'=>50)); ?>
		<?php echo $form->error($model,'title'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'shortdesc'); ?>
		<?php echo $form->textArea($model,'shortdesc',array('rows'=>6, 'cols'=>50)); ?>
		<?php echo $form->error($model,'shortdesc'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'longdesc'); ?>
		<?php echo $form->textArea($model,'longdesc',array('rows'=>6, 'cols'=>50)); ?>
		<?php echo $form->error($model,'longdesc'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'image'); ?>
		<?php echo $form->fileField($model,'image',array('rows'=>6, 'cols'=>50)); ?>
		<?php echo $form->error($model,'image'); ?>
	</div>


	<div class="row">
		<?php echo $form->labelEx($model,'is_featured'); ?>
		<?php echo $form->textField($model,'is_featured'); ?>
		<?php echo $form->error($model,'is_featured'); ?>
	</div>

	<div class="row buttons">
		<?php echo CHtml::submitButton($model->isNewRecord ? 'Create' : 'Save'); ?>
	</div>

<?php $this->endWidget(); ?>

</div><!-- form -->