<?php

class PageController extends BaseController {

  public function cast() {
    return View::make('site/cast');
  }

  public function content() {
    return View::make('site/content');
  }

  public function contribute() {
    return View::make('site/contribute');
  }

}
