<?php
class ToasterPro extends Toaster {
   
    public function __construct() {
        parent::__construct();  #call parent constructor
       # $this->slices = []; // Initialize slices for ToasterPro
        $this->size = 4; // Increase size for ToasterPro
    }
        

    
    public function toastbagel(){
        foreach ($this->slices as $i => $slice) {
            echo "Toasting bagel slices " . ($i + 1) . ": $slice<br />";
        }
        $this->slices = []; // Clear slices after toasting
    }
}