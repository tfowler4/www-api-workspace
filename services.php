<?php

require 'services/ApiService.php';
require 'services/SomeDataService.php';
require 'services/OtherDataService.php';


class Services {
    const VALID_SERVICES  = ['somedata', 'otherdata'];
    const VALID_DATATYPES = ['json', 'php'];

    public $service  = '';
    public $function = '';
    public $dataType = '';
    public $class    = '';

    public function verifyCall($parameters) {
        if ( !empty($parameters['service']) ) {
            $this->service = $parameters['service'];
            $this->class  = $this->service . 'service';
        }

        if ( !empty($parameters['func']) ) {
            $this->function = $parameters['func'];
        }

        if ( !empty($parameters['data']) ) {
            $this->dataType = $parameters['data'];
        }
    }

    public function makeCall() {
        if ( !class_exists($this->class) ) {
            return 'invalid class. meh';
        }

        $this->class = new $this->class;

        if ( !in_array($this->service, self::VALID_SERVICES) ) {
            return 'invalid service. Avaliable services: ' . implode('|', self::VALID_SERVICES);
        }

        if ( !in_array($this->dataType, self::VALID_DATATYPES) ) {
            return 'invalid dataType. Avaliable datatypes: ' . implode('|', self::VALID_DATATYPES);
        }

        if ( !method_exists($this->class, $this->function) ) {
            return 'invalid function. Avaliable functions: ' . implode('|' , get_class_methods($this->class));
        }

        $this->class->{$this->function}();
    }

    public function makeBackendCall($parameters = array()) {
        $this->verifyCall($parameters);

        return $this->makeCall();
    }

    public function makeFrontendCall() {
        $this->verifyCall($_GET);

        return $this->makeCall();

    }
}