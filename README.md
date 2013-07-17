trello-card-class
=================

Trello Cards PHP Class, Easy Integration.

You can create cards, and also you can assign people to the cards using the method.

Just open the index.php file, and you will easily know what to do.

All you need is your Trello key and API key.

And of course, your board ID.

You can find this same code in the index.php file :

$trello = new Trello('trello_key', 'trello_token');

$response = $trello->card->create('list-id', 'list-name', 'list-description');

And you can assign people :

$trello->card->assignMemberToCard('card-id', 'member-i'd);
