<?php

defined('BASEPATH') or exit('No direct script access allowed');

/**
 * Description of Products Credit Model
 *
 * @author nanank
 */
class Product_credit_model extends MY_Model
{
    public $_table = 'product_credits';
    public $after_get = ['get_money', 'get_credit'];

    public function __construct()
    {
        parent::__construct();
    }

    public function get_money($row)
    {
        if (is_object($row)) {
            $row->installment = number_format($row->installment);
        } else {
            $row['installment'] = number_format($row['installment']);
        }
        return $row;
    }

    public function get_credit($row)
    {
        $this->load->model('Credit_model', 'credit');
        if (is_object($row)) {
            $row->credit = $this->credit->get($row->credit_id);
        } else {
            $row['credit'] = $this->credit->get($row['credit_id']);
        }
        return $row;
    }
}
