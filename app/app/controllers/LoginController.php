<?php

class LoginController extends ControllerBase
{

    public function indexAction()
    {
      $this->view->setTemplateAfter('login');
    }

}
