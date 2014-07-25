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

  public function server() {
    return View::make('site/server');
  }

  public function jobs() {
    return View::make('site/jobs');
  }

}
