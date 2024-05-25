<?php
require_once "Security.class.php";

class Request {
  private $_params;

  public function __construct($param) {
    $param = explode('/', $param);

    $this->_params['module'] = (isset($param[0]) ? Security::antiInjection($param[0]) : '');
    $this->_params['action'] = (isset($param[1]) ? Security::antiInjection($param[1]) : '');

    for ($i=2; $i<count($param); $i++) {
      $this->_params[$param[$i]] = (isset($param[$i+1]) ? Security::antiInjection($param[$i+1]) : '');
    }
  }

  public function get($key) {
    return (isset($this->_params[$key]) ? $this->_params[$key] : '');
  }

}


?>
