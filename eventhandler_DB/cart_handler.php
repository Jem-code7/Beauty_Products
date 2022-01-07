<?php

class cart
{
      public $db = null;

      public function __construct(connection_handler $db)
      {
            if(!isset($db->con)) return null;
            $this->db = $db;
      }

      public function getCart($user_id)
      {
            $result = $this->db->con->query("SELECT tbl_cart.cart_id, tbl_cart.quantity, tbl_products.*
                                                FROM tbl_cart 
                                                INNER JOIN tbl_products
                                                ON tbl_cart.item_id=tbl_products.item_id
                                                WHERE user_id=$user_id");

            $resultArray = array();

            while ($item = mysqli_fetch_array($result, MYSQLI_ASSOC))
            {
                  $resultArray[] = $item;
            }

            return $resultArray;
            
      }
      
      public function addCart($user_id, $item_id, $quantity = 1)
      {
            return ($this->db->con->query("INSERT INTO tbl_cart
                                                SET
                                                      user_id=$user_id,
                                                      item_id=$item_id,
                                                      quantity=$quantity,
                                                      active=1"))? "a" : "b";

}

      public function getCartCount($user_id)
      {
      
            $result = $this->db->con->query("SELECT COUNT(active)
                                                FROM tbl_cart 
                                                WHERE user_id=$user_id & active=1");
            
            return mysqli_fetch_assoc($result);

      }
}