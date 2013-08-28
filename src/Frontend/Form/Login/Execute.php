<?php
namespace Frontend\Form\Login;
use \Ethna\ActionForm;

class Execute extends ActionForm
{
  public function __construct()
  {
    $this->form = array(
      'login' => array(
        'name' => 'ログイン名',
        'type' => ActionForm::TEXT,
        'require' => true,
      ),
      'password' => array(
        'name' => 'パスワード',
        'type' => ActionForm::PASSWORD,
        'require' => true,
      ),
    );
  }
}

