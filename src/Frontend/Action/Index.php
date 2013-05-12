<?php
namespace Frontend\Action;
class Index extends \Ethna\ActionClass
{
  public function perform()
  {
    // kokokara
    $form = \Ethna\DIContainerFactory::getContainer()->get('form');
    $form->setApp('name', 'World');

    return 'index';

  }
}
