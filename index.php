<?php
/**
 * Sample php autoload example
 *
 * @author    Ihor Sahaidak <ihorsahaydak@gmail.com>
 * @copyright 2017 ihorsahaydak
 */
error_reporting(E_ALL);
ini_set('display_errors', 1);

require __DIR__ . '/vendor/autoload.php';

$class = new \Aut\Template\Template();