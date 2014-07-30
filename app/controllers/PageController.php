<?php

class PageController extends BaseController {

  public function staff() {
    return View::make('site/staff');
  }

  public function donate() {
    return View::make('site/donate');
  }

  public function contact() {
    return View::make('site/contact');
  }

  public function legal() {
    return View::make('site/legal');
  }

}
