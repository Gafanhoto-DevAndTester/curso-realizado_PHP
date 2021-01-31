<?php


namespace App\Interfaces;

interface LogInterface
{
    public static function getInstance();
    public function writeToFile($message);
    static public function log($message, $level);
}