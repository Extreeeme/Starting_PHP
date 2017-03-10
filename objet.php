<?php
class Personnage{
	public $nom;
	public $pv = 100;
	public $atk = 20;
}
$martin = new Personnage();
$martin->nom = "Martin";
var_dump($martin);



?>