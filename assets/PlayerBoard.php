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
            if($this->boxNotTaken()) {
                $this->tilesHTML .= "<a id='$i' class ='box' href ='index.php?tile=$i'></a>";
            } else {
                $this->tilesHTML .= "<a id='$i' class ='box'>O</a>";
            }
        }
    }
    private function boxNotTaken() {
        return false;
    }

    public function echoHTML() {
        echo "
        <div class=game-board>
                $this->tilesHTML
        </div>
                ";
	}
}