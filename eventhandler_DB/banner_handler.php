<?php

class Banner
{
      public $db = null;

      public function __construct(connection_handler $db)
      {
            if(!isset($db->con)) return null;
            $this->db = $db;
      }

      public function txt_link($initial)
      {
            $afile = fopen("./txt/banner.txt", "r");
            $file = fread($afile,filesize("./txt/banner.txt"));
            $end_sign = $initial . "end";
            fclose($afile);

            $start = stripos($file, $initial);
            $start += 3;
            
            $end = strpos(substr($file, $start, strlen($file)), $end_sign);

            return substr($file, $start, $end);
      }
}