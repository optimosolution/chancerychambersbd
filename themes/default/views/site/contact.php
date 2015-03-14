<?php
/* @var $this SiteController */
/* @var $model ContactForm */
/* @var $form TbActiveForm */

$this->pageTitle = Yii::app()->name . ' - Contact Us';
$this->breadcrumbs = array(
    'Contact',
);
?>
<?php if (Yii::app()->user->hasFlash('contact')): ?>

    <?php
    $this->widget('bootstrap.widgets.TbAlert', array(
        'alerts' => array('contact'),
    ));
    ?>
<?php else: ?>
    <div class="form">
        <?php
        $form = $this->beginWidget('bootstrap.widgets.TbActiveForm', array(
            'id' => 'contact-form',
            'enableClientValidation' => true,
            'clientOptions' => array(
                'validateOnSubmit' => true,
            ),
        ));
        ?>
        <?php echo $form->errorSummary($model); ?>
        <div class="form-group">
            <?php echo $form->textFieldControlGroup($model, 'name', array('class' => 'form-control', 'maxlength' => 255)); ?>
        </div>
        <div class="form-group">
            <?php echo $form->textFieldControlGroup($model, 'email', array('class' => 'form-control', 'maxlength' => 255)); ?>
        </div>
        <div class="form-group">
            <?php echo $form->textFieldControlGroup($model, 'subject', array('class' => 'form-control', 'maxlength' => 255)); ?>
        </div>
        <div class="form-group">
            <?php echo $form->textAreaControlGroup($model, 'body', array('rows' => 6, 'class' => 'form-control')); ?>
        </div>
        <div class="form-actions">
            <?php echo TbHtml::submitButton('Submit', array('color' => TbHtml::BUTTON_COLOR_PRIMARY)); ?>
            <?php echo TbHtml::resetButton('Reset', array('color' => TbHtml::BUTTON_COLOR_INFO)); ?>
        </div>
        <?php $this->endWidget(); ?>
    </div><!-- form -->
<?php endif; ?>