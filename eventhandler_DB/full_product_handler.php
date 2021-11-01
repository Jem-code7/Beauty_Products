<?php

class f_product
{
      public $db = null;

      public function __construct(connection_handler $db)
      {
            if(!isset($db->con)) return null;
            $this->db = $db;
      }

      public function getFromProducts($table="tbl_products")
      {
            $result = $this->db->con->query("SELECT * FROM {$table}");

            $resultArray = array();

            while ($item = mysqli_fetch_array($result, MYSQLI_ASSOC))
            {
                  $resultArray[] = $item;
            }

            return $resultArray;

      }

      public function getFromBrands($table='tbl_brands')
      {
            $result = $this->db->con->query("SELECT * FROM {$table}");

            $resultArray = array();

            while ($item = mysqli_fetch_array($result, MYSQLI_ASSOC))
            {
                  $resultArray[] = $item;
            }

            return $resultArray;

      }

}