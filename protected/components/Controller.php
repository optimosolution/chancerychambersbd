<?php

/**
 * Controller is the customized base controller class.
 * All controller classes for this application should extend from this base class.
 */
class Controller extends CController {

    public $userData;

    /**
     * @var string the default layout for the controller view. Defaults to '//layouts/column1',
     * meaning using a single column layout. See 'protected/views/layouts/column1.php'.
     */
    public $layout = 'application.views.layouts.column1';

    /**
     * @var array context menu items. This property will be assigned to {@link CMenu::items}.
     */
    public $menu = array();

    /**
     * @var array the breadcrumbs of the current page. The value of this property will
     * be assigned to {@link CBreadcrumbs::links}. Please refer to {@link CBreadcrumbs::links}
     * for more details on how to specify this property.
     */
    public $breadcrumbs = array();

    public function filters() {
        return array(
            'accessControl',
        );
    }

    public function accessRules() {
        return array(
            array('allow',
                'users' => array('*'),
                'actions' => array('login'),
            ),
            array('allow',
                'users' => array('@'),
            ),
            array('deny',
                'users' => array('*'),
            ),
        );
    }

    public function init() {
        /*
          //if you want to use reflection
          $reflection = new ReflectionClass('scholarshipController');
          $methods = $reflection->getMethods();
          //uncomment this if you want to get the class methods with more details
          print "<pre>";
          print_r($methods);
          print "</pre>";
          //uncomment this if you want to get the class methods
          //print_r(get_class_methods($class));

         */
        //Yii::app()->theme = Yii::app()->user->getCurrentTheme();
        //Yii::app()->theme = 'teacher';
        //parent::init();
    }

    public function checkAccess($controller, $action) {
        $val = Yii::app()->db->createCommand()
                ->select('access')
                ->from('{{acl}}')
                ->where('LOWER(controller)="' . $controller . '" AND LOWER(actions)="' . $action . '" AND group_id=' . Yii::app()->user->group . ' AND controller_type=0')
                ->queryScalar();
        if (empty($val)) {
            $val = 1;
        } else {
            $val = $val;
        }
        return $val;
    }

}