<?php
    function submitted() {
        return array_key_exists('theme', $_POST)
                && array_key_exists('pictureURL', $_POST);
    }

    function theme_submitted() {
        return array_key_exists('theme', $_POST);
    }

    function duplicates($db, $theme) {
        foreach ($db as $data) {
            if ($data['theme'] == $theme) {
                return true;
            }
        }
        return false;
    }

    function account_duplicates($db, $username) {
        foreach ($db as $data) {
            if ($data['username'] == $username) {
                return true;
            }
        }
        return false;
    }

    function getId($db, $theme) {
        foreach ($db as $data) {
            if ($data['theme'] == $theme) {
                return $data['themeID'];
            }
        }
    }

    function user_submitted() {
        return array_key_exists('username', $_POST) 
                && array_key_exists('password', $_POST);
    }
?>