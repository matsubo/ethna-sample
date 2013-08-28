<?php
namespace Frontend\Action\Login;
class Execute extends \Ethna\ActionClass
{
  public function perform()
  {
    $form = \Ethna\DIContainerFactory::getContainer()->get('form');
    $login    = $form->get('login');
    $password = $form->get('password');

    $view = \Ethna\DIContainerFactory::getContainer()->get('view');
    $view->redirect('index.php');
  }
}
