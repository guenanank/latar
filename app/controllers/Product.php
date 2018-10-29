<?php

defined('BASEPATH') or exit('No direct script access allowed');

/**
 * Description of Product
 *
 * @author nanank
 */
class Product extends CI_Controller
{
    protected $header = [];
    public $products;

    public function __construct()
    {
        parent::__construct();
        $this->header = [
          'site' => $this->repo->site_config(),
          'categories' => $this->repo->category_menu()
        ];

        $this->load->model('Product_model', 'products');
        $this->products = $this->repo->products();
    }

    public function index()
    {
        $header = $this->header;
        $products = $this->products;
        $this->load->view('header', $header);
        $this->load->view('products', compact('products'));
        $this->load->view('footer');
    }

    public function view($slug = null)
    {
        $product = array_search($slug, array_column($this->products, 'slug'), true);
        $container = [
          'product' => $this->products[$product],
          'related' => []
        ];

        $data = [
          'categories' => $this->repo->category_menu(),
          'container' => $this->load->view('product', $container, true),
        ];

        $this->parser->parse('template', array_merge($this->repo->site_config(), $data));
    }
}
