<?php

class Flasher {
    public static function setFlash($type, $massage, $action) {
        $_SESSION["flash"] = [
            "type" => $type,
            "massage" => $massage,
            "action" => $action
        ];
    }

    public static function flash() {
        if(isset($_SESSION["flash"])) {
            echo '<div class="flash ' . $_SESSION["flash"]["type"] . '">
            <p>' . $_SESSION["flash"]["massage"] . ' ' . $_SESSION["flash"]["action"] . '</p>
            <div class="icon">
                <i class="fa fa-times"></i>
            </div>
        </div>';
            unset($_SESSION['flash']);
        }
    }
}