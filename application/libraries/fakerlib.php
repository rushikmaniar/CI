<?php
/**
 * Created by PhpStorm.
 * User: rushik
 * Date: 002 02-03-2018
 * Time: 05:47 PM
 */
// require the Faker autoloader
require_once base_url().'vendor/fzaninotto/faker/src/autoload.php';
class fakerlib {
    public $faker;
    public function __construct()
    {

        // use the factory to create a Faker\Generator instance
        $this->faker = Faker\Factory::create();

    }
}