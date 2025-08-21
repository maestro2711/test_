<?php
 class Home {
    public function index():string {
        echo '<pre>';
        var_dump($_REQUEST);
        echo '</pre>';

        echo '<pre>';
        var_dump($_POST);
        echo '</pre>';

        return '<form method="post" action="/home">
                    <label for="name">amount:</label>
                    <input type="text" name="name" placeholder="Enter your name" />
                    <input type="submit" value="Submit" />
                </form>';
    }
 }