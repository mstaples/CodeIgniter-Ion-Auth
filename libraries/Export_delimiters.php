<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Export_delimiters extends CI_Form_validation {

    public $message_prefix = '<p style="color:blue;">';
    public $message_suffix = '</p>';

    public function __construct()
    {
        parent::__construct();

        $this->_error_prefix = '<p style="color:green;">';
        $this->_error_suffix = '</p>';
    }

    public function getErrorPrefix() {

        return $this->_error_prefix;
    }

    public function getErrorSuffix() {

        return $this->_error_suffix;

    }

    public function getMessagePrefix() {

        return $this->message_prefix;
    }

    public function getMessageSuffix() {

        return $this->message_suffix;
    }
}
