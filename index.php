<?php

require_once 'Trello.php';

$trello = new Trello('trello_key', 'trello_token');

$response = $trello->card->create('list-id', 'list-name', 'list-description');

?>

