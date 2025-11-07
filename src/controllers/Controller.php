<?php
/**
 * Controller: base class of controllers, instantiation forbidden
 */
abstract class Controller
{
    protected $model;
    protected $view;
    public function __construct($model, $view)
    {
        $this->model = $model;
        $this->view = $view;
    }
    public function model()
    {
        return $this->model;
    }
    public function view()
    {
        return $this->view;
    }    
}

/**
 * UserController: controller class for user accounts 
 */
class UserController extends Controller
{
    public function listAction()
    {
        $list = $this->model()->getList();
        return $this->view()->render('usr_list', ['users'=>$list]);
    }
}