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
    public $products_repo;

    public function __construct()
    {
        parent::__construct();
        $this->header = [
          'site' => $this->repo->site_config(),
          'styles' => ['reset-carousel'],
          'categories' => $this->repo->category_menu()
        ];

        $this->load->model('Product_model', 'products');
        $this->products_repo = $this->repo->products();
    }

    public function index()
    {
        $header = $this->header;
        $products = $this->products_repo;
        $this->load->view('header', $header);
        $this->load->view('products', compact('products'));
        $this->load->view('footer');
    }

    public function view($slug = null)
    {
        $header = $this->header;
        $product = $this->cache->get(md5($slug));
        if ($product == false) {
            $product = $this->products
                ->with('brand')->with('lease')->with('product_credit')
                ->order_by('created_at', 'desc')
                ->get_by('slug', $slug);

            $this->cache->save('product', $product, 600);
        }

        $unset = array_search($product->id, array_column($this->products_repo, 'id'));
        unset($this->products_repo[$unset]);
        $related = array_intersect_key($this->products_repo, array_rand($this->products_repo, 4));

        $this->load->view('header', $header);
        $this->load->view('product', compact('product', 'related'));
        $this->load->view('footer');
    }
}
