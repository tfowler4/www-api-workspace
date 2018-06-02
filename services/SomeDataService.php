<?php

require dirname(__DIR__) . '/models/SomeDataModel.php';

class SomeDataService extends ApiService {
    public static function get() {
        echo "SomeDataService get() called";
    }
}