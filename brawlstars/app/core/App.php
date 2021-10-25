<?php

namespace app\core;

class App
{
  private $controller;
  private $method;
  private $params;
  private $URLArray;
  private $startIndexFromUrl;
  private $pageNotFound;

  public function __construct()
  {

    session_start();

    $this->controller = 'Brawler';
    $this->method = 'index';
    $this->params = [];
    $this->startIndexFromUrl = 1; // NO MEU AMBIENTE DE DESENVOLVIMENTO!
    $this->pageNotFound = '';
    $this->parseURL();
    $this->setController();
    $this->setMethodFromUrl();
    $this->setParamsFromUrl();

    call_user_func_array([$this->controller, $this->method], $this->params);
  }

 
  private function parseURL()
  {
    $this->URLArray = explode('/', substr($_SERVER['REQUEST_URI'], 0));
    
  }


  private function setController()
  {
    $controller = $this->URLArray[$this->startIndexFromUrl];
    if (isset($controller) && !empty($controller)) {
      if (file_exists('app/controllers/' . ucfirst($controller) . '.php')) {
        $this->controller = ucfirst($controller);
      } else {
        $this->pageNotFound = true;
      }
    }
    require_once('app/controllers/' . $this->controller . '.php');
    $this->controller = new $this->controller();
  }

  private function setMethodFromUrl()
  {
    $url = $this->URLArray;
    $startIndex = $this->startIndexFromUrl + 1;

    if (!empty($url[$startIndex]) && isset($url[$startIndex])) {
      if (method_exists($this->controller, $url[$startIndex]) && !$this->pageNotFound) {
        $this->method = $url[$startIndex];
      } else {
        $this->method = 'pageNotFound';
      }
    }
  }

  private function setParamsFromUrl()
  {
    $url = $this->URLArray;
    $startIndex = $this->startIndexFromUrl + 2;
    if (count($url) > $startIndex) {
      $this->params = array_slice($url, $startIndex);
    }
  }
}

