<?php
$this->pageTitle = 'New document - ' . Yii::app()->name;
$this->breadcrumbs = array(
    'Documents' => array('admin'),
    'Create',
);

$this->menu = array(
    array('label' => 'Manage', 'url' => array('admin'), 'active' => true, 'icon' => 'icon-home'),
);
?>
<fieldset>
    <legend>New</legend>
    <?php echo $this->renderPartial('_form', array('model' => $model)); ?>
</fieldset>