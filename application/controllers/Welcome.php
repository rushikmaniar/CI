<?php
defined('BASEPATH') OR exit('No direct script access allowed');
use DebugBar\StandardDebugBar;

class Welcome extends CI_Controller {
	/**
	 * Index Page for this controller.
	 *
	 * Maps to the following URL
	 * 		http://example.com/index.php/welcome
	 *	- or -
	 * 		http://example.com/index.php/welcome/index
	 *	- or -
	 * Since this controller is set as the default controller in
	 * config/routes.php, it's displayed at http://example.com/
	 *
	 * So any other public methods not prefixed with an underscore will
	 * map to /index.php/welcome/<method_name>
	 * @see https://codeigniter.com/user_guide/general/urls.html
	 */
	public function __construct()
    {
        parent::__construct();
        $this->load->library('fakerlib');
    }

    public function index()
	{

	    /*

        $debugbar = new StandardDebugBar();



        $debugbarRenderer = $debugbar->getJavascriptRenderer();

        $data = array('debugbar'=>$debugbar,'debugbarRenderer'=>$debugbarRenderer);

*/


// alternatively, use another PSR-0 compliant autoloader (like the Symfony2 ClassLoader for instance)


// generate data by accessing properties



        $name =  array();
        // Cartwrightshire, SC 88120-6700"
        $address = array();

        for ($i=0;$i < 10 ;$i++){
                $name[] = $this->fakerlib->faker->name;
                $address[] = $this->fakerlib->faker->country;
        }


        // Dolores sit sint laboriosam dolorem culpa et autem. Beatae nam sunt fugit
        // et sit et mollitia sed.
        // Fuga deserunt tempora facere magni omnis. Omnis quia temporibus laudantium
        // sit minima sint.

        $data = array('user'=>array('name'=>$name,'address'=>$address));
		$this->load->view('welcome_message',$data);

	}
}
