<?php
 class koneksi{
    function getKoneksi(){
        return new PDO("mysql:host=localhost;dbname=rumah_sakit",'root','');
    }
 }