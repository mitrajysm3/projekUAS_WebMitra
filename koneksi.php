<?php
class koneksi {
   private $server = "localhost";
   private $username = "uaswebpro";
   private $password = "mitra31";
   private $db = "webproUAS";

    function getKoneksi() {
        return new mysqli($this->server, $this->username,$this->password,$this->db);
    }
}

?>