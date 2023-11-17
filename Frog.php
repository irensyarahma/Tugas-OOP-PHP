<?php
require_once('animal.php');

class Frog extends Animal {
    public function __construct($name = "budak") {
        parent::__construct($name, 4, 'no');
    }

    public function jump() {
        echo "hop hop";
    }
}
?>
