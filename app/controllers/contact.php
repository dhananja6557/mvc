<?php

class Contact extends Controller
{
    public function index()
    {
        require_once('view.header.php');
    }

    public function phone()
    {
        echo 'contact by phone';
    }
}