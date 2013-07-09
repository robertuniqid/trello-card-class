<?php

/**
 * TrelloRequest
 *
 * Access TrelloRequest - internal functions
 *
 * @author Robert
 */
class TrelloRequest {

  public function processRequest($url, $params) {
    $response = $this->_processRequest($url, $params);

    $response = $this->_parseResponse($response);

    return $response;
  }

  private function _processRequest($url, $params) {
    $ch = curl_init($url);

    curl_setopt_array($ch, array(
                            CURLOPT_SSL_VERIFYPEER  => false,
                            CURLOPT_RETURNTRANSFER  => true,
                            CURLOPT_POST            => true,
                            CURLOPT_POSTFIELDS      => http_build_query($params),
                          ));

    $result = curl_exec($ch);

    return $result;
  }

  private function _parseResponse($response) {
    return is_string($response) ? json_decode($response) : $response;
  }
}