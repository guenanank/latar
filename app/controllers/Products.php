<?php

defined('BASEPATH') or exit('No direct script access allowed');

/**
 * Description of Products
 *
 * @author nanank
 */
class Products extends CI_Controller
{
    public function __construct()
    {
        parent::__construct();
        $this->load->library('repositories');
    }

    public function index()
    {
        debug('here');
    }

    public function view($slug = null)
    {
        // debug('here');
        if (empty($slug)) {
            show_404();
        }

        debug($slug);
    }
}
