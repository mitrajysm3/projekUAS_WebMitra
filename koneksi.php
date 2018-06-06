<?php
class koneksi {
   private $server = "localhost";
   private $username = "id6084935_uaswebpro";
   private $password = "mitra31";
   private $db = "id6084935_uaswebpro";

    function getKoneksi() {
        return new mysqli($this->server, $this->username,$this->password,$this->db);
    }
}

?>