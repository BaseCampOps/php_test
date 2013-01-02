<?php
require_once('lib/Chat.php');
class ChatTest extends PHPUnit_Framework_TestCase {
  public function testSimpleMessaging(){
    $chat = new Chat();
    $client1 = $chat->createClient("bob");
    $client2 = $chat->createClient("susan");
    $client2->addListener( function($sender, $room, $content){
      print "RECV: ".$sender.":".$room.": ".$content.PHP_EOL;
    });
    $room = $chat->createChatroom('Bob & Susan');
    $room->addClient($client1);
    $room->addClient($client2);

    $room->send($client1, 'Hey Susan');
  }
}
