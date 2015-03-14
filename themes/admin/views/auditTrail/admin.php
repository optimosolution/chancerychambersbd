<?php

/* @var $this AuditTrailController */
/* @var $model AuditTrail */
$this->pageTitle = 'Audit Trail - ' . Yii::app()->name;
$this->breadcrumbs = array(
    'Audit Trails' => array('admin'),
    'Manage',
);

$this->menu = array(
    array('label' => 'Manage', 'url' => array('admin'), 'active' => true, 'icon' => 'icon-home'),
);
?>

<?php

$this->widget('bootstrap.widgets.TbGridView', array(
    'id' => 'audit-trail-grid',
    'dataProvider' => $model->search(),
    'filter' => $model,
    'columns' => array(
        array(
            'name' => 'user_id',
            'type' => 'raw',
            'value' => 'CHtml::link(CHtml::encode(UserAdmin::get_name($data->user_id)), array("/userAdmin/view","id"=>$data->user_id))',
            'filter' => CHtml::activeDropDownList($model, 'user_id', CHtml::listData(UserAdmin::model()->findAll(array('condition' => '', "order" => "name")), 'id', 'name'), array('empty' => 'All')),
            'htmlOptions' => array('style' => "text-align:left;width:250px;", 'title' => 'Name'),
        ),
        array(
            'name' => 'login_time',
            'type' => 'raw',
            'value' => 'AuditTrail::get_date_time($data->login_time)',
            'htmlOptions' => array('style' => "text-align:left;width:250px;", 'title' => 'Login time'),
        ),
        array(
            'name' => 'logout_time',
            'type' => 'raw',
            'value' => 'AuditTrail::get_date_time($data->logout_time)',
            'htmlOptions' => array('style' => "text-align:left;width:250px;", 'title' => 'Logout time'),
        ),
        array(
            'header' => 'Duration',
            'type' => 'raw',
            'value' => 'AuditTrail::returnInterval($data->login_time,$data->logout_time)',
        ),
        array(
            'name' => 'user_type',
            'value' => '$data->user_type?Yii::t(\'app\',\'Backend\'):Yii::t(\'app\', \'Fontend\')',
            'filter' => array('' => Yii::t('app', 'All'), '0' => Yii::t('app', 'Fontend'), '1' => Yii::t('app', 'Backend')),
            'htmlOptions' => array('style' => "text-align:center;"),
        ),
        array(
            'header' => 'Actions',
            'template' => '{delete}',
            'class' => 'bootstrap.widgets.TbButtonColumn',
            'htmlOptions' => array('style' => "text-align:center;width:80px;", 'title' => 'Actions',),
        ),
    ),
));
?>                