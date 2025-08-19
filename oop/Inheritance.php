<?php
class Toaster {
    protected array $slices ;
    protected int $size ;

     public function __construct() {
         $this->size = 2;
         $this->slices = [];
     }

    public function addSlice(string $slice): void {
        var_dump($this);
        exit;
        // Check if the toaster can accommodate more slices
        if (count($this->slices) < $this->size) {
            $this->slices[] = $slice;
        } else {
            echo "Toaster is full, cannot add more slices.<br />";
        }
    }

    public function toast(): void {
        foreach ($this->slices as $i => $slice) {
            echo "Toasting slice " . ($i + 1) . ": $slice<br />";
        }
        $this->slices = []; // Clear slices after toasting
    }
}