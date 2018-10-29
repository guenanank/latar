<?php

defined('BASEPATH') or exit('No direct script access allowed');

/**
 * Description of Home
 *
 * @author nanank
 */
class Home extends CI_Controller
{
    protected $header = [];

    public function __construct()
    {
        parent::__construct();
        $this->header = [
          'site' => $this->repo->site_config(),
          'categories' => $this->repo->category_menu()
        ];
    }

    public function index()
    {
        $products = $this->repo->products();
        $sliders = array_rand($products, 3);
        $header = $this->header;
        $container = [
          'sliders' => array_intersect_key($products, $sliders),
          'latests' => array_diff_key($products, $sliders),
        ];

        $this->load->view('header', $header);
        $this->load->view('home', $container);
        $this->load->view('footer');
    }

}
