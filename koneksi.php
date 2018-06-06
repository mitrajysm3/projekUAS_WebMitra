<?php
class koneksi {
   private $server = "localhost";
   private $username = "root";
   private $password = "";
   private $db = "webproUAS";

    function getKoneksi() {
        return new mysqli($this->server, $this->username,$this->password,$this->db);
    }
}

?>