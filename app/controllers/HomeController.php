<?php

namespace app\controllers;

use Article;
use Mail;
/**
* \HomeController
*/
class HomeController extends BaseController
{
  
  public function home()
  {
    echo "<h1>控制器成功！</h1>";
  }

  public function model() {
    $res = Article::first();
    print_r($res);
  }

  public function view() {
    $this->view = \View::make('home')->with('article',Article::first())

                                    ->withTitle('MFFC :-D')

                                    ->withFuckMe('OK!');
  }

  public function mail() {
        $this->mail = Mail::to(['1434970057@qq.com', 'u@iyouths.org'])

                    ->from('forevervas <i@iyouths.org>')

                    ->title('Fuck!')

                    ->content('<h1>Hello~~</h1>');
  }
}