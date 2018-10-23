<?php

defined('BASEPATH') or exit('No direct script access allowed');

/**
 * Description of Products Model
 *
 * @author nanank
 */
class Product_model extends MY_Model
{
    public $belongs_to = ['brand', 'lease' => ['primary_key' => 'lease_id', 'model' => 'lease_model']];
    public $after_get = ['get_photo', 'get_money'];
    public $before_create = ['set_money', 'created_at'];
    public $before_update = ['set_money', 'updated_at'];

    public function __construct()
    {
        parent::__construct();
    }

    public function get_photo($row)
    {
        if (is_object($row)) {
            $row->photos = json_decode($row->photos, true);
        } else {
            $row['photos'] = json_decode($row['photos'], true);
        }
        return $row;
    }

    public function get_money($row)
    {
        if (is_object($row)) {
            $row->price = number_format($row->price);
            $row->down_payment = number_format($row->down_payment);
        } else {
            $row['price'] = number_format($row['price']);
            $row['down_payment'] = number_format($row['down_payment']);
        }
        return $row;
    }

    public function set_money($row)
    {
        if (is_object($row)) {
            $row->price = str_replace(',', null, $row->price);
            $row->down_payment = str_replace(',', null, $row->down_payment);
        } else {
            $row['price'] = str_replace(',', null, $row['price']);
            $row['down_payment'] = str_replace(',', null, $row['down_payment']);
        }
        return $row;
    }

    public function years($start = null, $end = null)
    {
        if (is_null($end)) {
            $end = date('Y');
        }

        if (is_null($start)) {
            $start = $end - 25;
        }

        foreach (range($end, $start) as $year) {
            $years[$year] = $year;
        }

        return $years;
    }
}
