<?php 
    Class House {
        public function introduce() {
            echo "House ".$this->getHouseName()." of ".$this->getHouseSeat()." : \"".$this->getHouseMotto()."\"\n";
        }
    }
?>