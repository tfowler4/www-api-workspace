<?php

require dirname(__DIR__) . '/models/OtherDataModel.php';

class OtherDataService extends ApiService {
    public static function get() {
        echo "OtherDataService get() called";
    }

    public static function add() {
        echo "OtherDataService add() called";
    }
}