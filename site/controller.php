<?php

class HelloController extends JControllerBase
{
  public function execute()
  {
    require_once(JPATH_COMPONENT . '/views/hello/view.html.php');
    require_once(JPATH_COMPONENT . '/models/hello.php');
    
    $model = new HelloModelHello;
    $view = new HelloViewHelloHtml($model);

    $view->setLayout('hello');

    $output = $view->render();
  }
}
