<?php
/* Author : Tsotets Thapelo
 * Contact : me@tsotetesithapelo.co.za
 * Copyright : GNU GPL*/

	/**
	* PostgreSQL DB Model
	*/
	class DB
	{
		var $hostname;
		var $db_username;
		var $db_password;
		var $db_name;
		var $port;
		var $con_str = "";

		function __construct()
		{
			$db_settings = include_once 'config.php';

			$this->hostname=$db_settings['hostname'];
			$this->db_username=$db_settings['db_username'];
			$this->db_password=$db_settings['db_password'];
			$this->db_name=$db_settings['db_name'];
			$this->port=$db_settings['port'];
			$this->con_str = "pgsql:host=$this->hostname;port=5432;dbname=$this->db_name;user=$this->db_username;password=$this->db_password";
		}

		function connect()
		{
			$db = new DB();

			try{

				$pdo = new PDO("pgsql:host=154.127.59.170;port=5432;dbname=db_myres_lbg_2017_live;user=myres;password=57dse0IfU2@nd_=enx2(ndf{J%!3");
				$pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
				$pdo->setAttribute(PDO::ATTR_EMULATE_PREPARES, false);
				
				if($pdo)
					return $pdo;
			}
			catch(PDOException $ex){
				echo $ex->getMessage();
			}
		}

		//Whe using pg_pconnect function
		function connString(){
			$this->con_str = "host=$this->hostname dbname=$this->db_name user=myres password=$this->db_password";
			return $this->con_str;
		}
	}
?>
