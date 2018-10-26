<?php defined('BASEPATH') or exit('No direct script access allowed');

/**
 * Homepage Data Repositories
 *
 * @package     CodeIgniter
 * @subpackage  Libraries
 * @category    Data Repositories
 * @author      Nanank <http://guenanank.com>
 */

class Repositories
{
    private $ci;
    public $configuration = [];
    public $products;
    public $product_sliders;
    public $product_latests;

    public function __construct()
    {
        $this->ci =& get_instance();
        // $this->ci->load->library('database');
        $this->ci->load->model('Config_model', 'configs');
        $this->ci->load->model('Product_model', 'products');
        $this->ci->load->model('Post_model', 'posts');

        $this->ci->load->driver('cache', [
          'adapter' => 'file',
          'backup' => 'apc'
        ]);

        $this->configuration = $this->ci->cache->get('configs');
        if ($this->configuration == false) {
            foreach ($this->ci->configs->get_all() as $config) {
                $this->configuration[$config->key] = $config->value;
            }

            $this->ci->cache->save('configuration', $this->configuration, 86400);
        }


        $this->_products();
    }

    public function category_menu()
    {
        $categories = [];
        $categories[] = anchor('unitKendaraan', 'Unit kendaraan', ['class' => 'nav-link']);

        foreach ($this->ci->posts->category() as $alias => $name) {
            $categories[] = anchor($alias, $name, ['class' => 'nav-link']);
        }

        return $categories;
    }

    private function _products()
    {
        $this->products = $this->ci->cache->get('products');
        if ($this->products == false) {
            $this->products = $this->ci->products
              ->with('brand')->with('lease')
              ->order_by('created_at', 'desc')
              ->get_many_by('sold', false);

            $this->ci->cache->save('products', $this->products, 600);
        }

        $sliders = array_rand($this->products, 3);
        $this->product_sliders = array_intersect_key($this->products, $sliders);
        $this->product_latests = array_diff_key($this->products, $sliders);
    }
}
