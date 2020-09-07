<?php

namespace board;

class PlayerBoard {
    private $tileQuantity;
    private $tilesHTML;

    public function __construct(int $tileQuantity) {
            $this->tileQuantity = $tileQuantity;
    }

    public function createBoard() {
        for ($i = 0; $i < $this->tileQuantity; $i++) {
            //if($this->boxNotTaken($i)) {
                $this->tilesHTML .= "<a id='$i' class ='box' href ='index.php?tile=$i'></a>";
            //} else {
             //   $this->tilesHTML .= "<a id='$i' class ='box'>O</a>";
           // }
        }
    }
    //private function boxNotTaken($index) {
      //  for($i = 0; $i < count($_SESSION['gameBoard']); $i++ ) {
        //    if($i === $index) {
          //      return true;
           // } else {
             //   return false;
           // }
       // }
   // }

    public function echoHTML() {
        echo "
        <div class=game-board>
                $this->tilesHTML
        </div>
                ";
	}
}