<?php

/**
 * Trello
 *
 * Access Trello - internal functions
 *
 * @author Robert
 *
 */
class Trello {

  private $_base_directory = '';

  protected $_key;
  protected $_token;

  public $card;

  public function __construct($key, $token) {
    $this->_key   = $key;
    $this->_token = $token;

    $this->_base_directory = dirname(__FILE__);
    $this->_includeRequiredClasses();

    $this->card = new TrelloCard($this->_key, $this->_token);
  }

  private function _includeRequiredClasses() {
    if(!class_exists('TrelloCard'))
      require_once($this->_base_directory . DIRECTORY_SEPARATOR . 'TrelloCard.php');

    if(!class_exists('TrelloRequest'))
      require_once($this->_base_directory . DIRECTORY_SEPARATOR . 'TrelloRequest.php');
  }


}