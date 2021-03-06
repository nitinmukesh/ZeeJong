<?php
/*
Events Controller

Created March 2014
*/


namespace Controller {

require_once(dirname(__FILE__) . '/Controller.php');


    class TopPlayers extends Controller {

        public $page = 'players';
        public $players;
        public $title;

        public function __construct() {
            global $database;
            $this->theme = 'players.php';
            $this->players = $database->getPlayersWithMostMatches(0,30);
            $this->title = 'Top Players - ' . Controller::siteName;
        }


        /**
        Call GET methode with parameters

        @param params
        */
        public function GET($args) {
        }


    }

}

?>
