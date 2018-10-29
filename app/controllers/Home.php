<?php

defined('BASEPATH') or exit('No direct script access allowed');

/**
 * Description of Home
 *
 * @author nanank
 */
class Home extends CI_Controller
{
    public function __construct()
    {
        parent::__construct();
        $this->load->library('repositories');
    }

    public function index()
    {
        $container = [
          'sliders' => $this->repositories->product_sliders,
          'latests' => $this->repositories->product_latests,
        ];

        $data = [
          'sitename' => $this->repositories->configuration['SITE_NAME'],
          'sitetitle' => sprintf('%s - %s', $this->repositories->configuration['SITE_NAME'], $this->repositories->configuration['SITE_TAGLINE']),
          'sitedesc' => $this->repositories->configuration['SITE_DESC'],
          'sitekeywords' => $this->repositories->configuration['SITE_KEYWORDS'],
          'sitelogo' => $this->repositories->configuration['SITE_LOGO'],
          'categories' => $this->repositories->category_menu(),
          'container' => $this->load->view('home', $container, true),

        ];

        $this->parser->parse('template', $data);
    }
}
