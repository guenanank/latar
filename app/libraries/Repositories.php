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

    public function __construct()
    {
        $this->ci =& get_instance();
        $this->ci->load->model('Config_model', 'configs');
        $this->configuration = $this->ci->cache->get('configs');
        if ($this->configuration == false) {
            foreach ($this->ci->configs->get_all() as $config) {
                $this->configuration[$config->key] = $config->value;
            }

            $this->ci->cache->save('configuration', $this->configuration, 60 * 60 * 24);
        }
    }

    public function site_config()
    {
        return [
            'name' => $this->configuration['SITE_NAME'],
            'title' => sprintf('%s - %s', $this->configuration['SITE_NAME'], $this->configuration['SITE_TAGLINE']),
            'desc' => $this->configuration['SITE_DESC'],
            'keywords' => $this->configuration['SITE_KEYWORDS'],
            'logo' => $this->configuration['SITE_LOGO'],
            'address' => $this->configuration['ADDRESS'],
            'phone' => $this->configuration['PHONE']
        ];
    }

    public function category_menu()
    {
        $this->ci->load->model('Post_model', 'posts');
        $post_category = $this->ci->posts->category();
        $categories[] = anchor('unit_kendaraan', 'Unit Kendaraan', ['class' => 'nav-link']);
        foreach ($this->ci->posts->category() as $alias => $name) {
            $categories[] = anchor($alias, $name, ['class' => 'nav-link']);
        }

        return $categories;
    }

    public function products()
    {
        $this->ci->load->model('Product_model', 'products');
        $products = $this->ci->cache->get(md5('products'));
        if ($products == false) {
            $products = $this->ci->products
                ->with('brand')->with('lease')->with('product_credit')
                ->order_by('created_at', 'desc')
                ->get_many_by('sold', false);

            $this->ci->cache->save('products', $products, 600);
        }

        return $products;
    }
}
