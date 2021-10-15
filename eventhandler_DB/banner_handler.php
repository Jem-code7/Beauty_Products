<?php

class banner
{
      public $db = null;

      public function __construct(DbConnection $db)
      {
            if(!isset($db->con)) return null;
            $this->db = $db;
      }

      public function getW_Banner($a_id = ['1', '2', '3'])
      {
            
      }
}