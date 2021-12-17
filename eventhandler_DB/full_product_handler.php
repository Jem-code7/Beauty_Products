<?php

class f_product
{
      public $db = null;

      public function __construct(connection_handler $db)
      {
            if(!isset($db->con)) return null;
            $this->db = $db;
      }

      public function getFromProducts()
      {
            $result = $this->db->con->query("SELECT * FROM tbl_products");

            $resultArray = array();

            while ($item = mysqli_fetch_array($result, MYSQLI_ASSOC))
            {
                  $resultArray[] = $item;
            }

            return $resultArray;

      }

      public function getFromProductsBrands()
      {
            $result = $this->db->con->query("SELECT tbl_products.*, tbl_brands.brand_name FROM tbl_products INNER JOIN tbl_brands ON tbl_products.brand_id=tbl_brands.brand_id ORDER BY tbl_products.name");

            $resultArray = array();

            while ($item = mysqli_fetch_array($result, MYSQLI_ASSOC))
            {
                  $resultArray[] = $item;
            }

            return $resultArray;

      }

      public function getFromProductsBrandsHighlight()
      {
            $result = $this->db->con->query("SELECT tbl_products.*, tbl_brands.brand_name FROM tbl_products INNER JOIN tbl_brands ON tbl_products.brand_id=tbl_brands.brand_id WHERE highlight=1 ORDER BY tbl_products.name");

            $resultArray = array();

            while ($item = mysqli_fetch_array($result, MYSQLI_ASSOC))
            {
                  $resultArray[] = $item;
            }

            return $resultArray;

      }

      public function getFromBrands()
      {
            $result = $this->db->con->query("SELECT * FROM tbl_brands");

            $resultArray = array();

            while ($item = mysqli_fetch_array($result, MYSQLI_ASSOC))
            {
                  $resultArray[] = $item;
            }

            return $resultArray;

      }
      
      public function getFromBrandsSorted()
      {
            $result = $this->db->con->query("SELECT * FROM tbl_brands ORDER BY brand_name");

            $resultArray = array();

            while ($item = mysqli_fetch_array($result, MYSQLI_ASSOC))
            {
                  $resultArray[] = $item;
            }

            return $resultArray;

      }
      
      
}