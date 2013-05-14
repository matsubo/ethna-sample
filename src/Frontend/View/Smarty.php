<?php
namespace Frontend\View;
class Smarty extends \Ethna\View
{
  public function __construct()
  {
    $this->smarty = new \Smarty();

    $this->smarty->template_dir = '/tmp/';
    $this->smarty->compile_dir = '/tmp/';
  }
  public function defaultOutput($forward_name)
  {
    // remove relative path to go upper directory for security.
    $forward_name = str_replace('..', '', $forward_name);
    $relative_file = str_replace('_', '/', $forward_name);


    $form = \Ethna\DIContainerFactory::getContainer()->get('form');

    // set $app
    $this->smarty->assign('app', $form->getAppArray($escape = true));

    // set $app
    $this->smarty->assign('app_ne', $form->getAppArray($escape = false));

    // set $form
    $this->smarty->assign('form', $form->getArray($escape = true));


    $file = \Ethna\DIContainerFactory::getContainer()->get('app_root') . DIRECTORY_SEPARATOR . 'template' . DIRECTORY_SEPARATOR. $relative_file . '.tpl';


    $this->smarty->error_reporting = E_ALL & E_STRICT & ~E_NOTICE;

    $this->smarty->display($file);

  }
}

