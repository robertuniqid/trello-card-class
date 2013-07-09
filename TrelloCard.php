<?php

/**
 * TrelloCard
 *
 * Access TrelloCard - internal functions
 *
 * @author Robert
 * @depends Trello
 */
class TrelloCard {

  protected $_key;
  protected $_token;
  private $_api_url = 'https://api.trello.com/1/cards';
  private $requestHandler;

  public function __construct($key, $token) {
    $this->_key   = $key;
    $this->_token = $token;
    $this->requestHandler = new TrelloRequest();
  }

  private function getAPIUrl() {
    return $this->_api_url;
  }

  public function create($list_id, $card_name, $card_description) {
    $params = array(
      'key'     =>  $this->_key,
      'token'   =>  $this->_token,
      'idList'  =>  $list_id,
      'name'    =>  $card_name,
      'desc'    =>  $card_description
    );

    return $this->requestHandler->processRequest($this->getAPIUrl(), $params);
  }

  public function assignMemberToCard($card_id, $member_id) {
    $params = array(
      'key'     =>  $this->_key,
      'token'   =>  $this->_token,
      'value'   =>  $member_id
    );

    return $this->requestHandler->processRequest($this->getAPIUrl() . '/' . $card_id . '/members', $params);
  }


}