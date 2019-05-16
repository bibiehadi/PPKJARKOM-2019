<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Mikrotik_connect extends CI_Model {

	public function __construct()
	{
		parent::__construct();

	}

	public function connect($ip='192.168.1.1',$username='bibie',$password='66027822hadikusuma',$port='9999'){
		if ($this->routerosapi->connect($ip,$username,$password,$port)) {
			return true;
		}else{
			return false;
		}
	}
// >>>>> HOTSPOT 
	public function getUsers()
	{
		if ($this->connect()) {
			$API = $this->routerosapi;
			$API->write('/ip/hotspot/user/print');
			$users = $API->read();
			$API->disconnect();
			return $users;
		}else{
			return false;
		}
	}

	public function getUserProfiles()
	{
		if ($this->connect()) {
			$API = $this->routerosapi;
			$API->write('/ip/hotspot/user/profile/print');
			$profiles = $API->read();
			$API->disconnect();
			return $profiles;
		}else{
			return false;
		}
	}

	public function getUserActive()
	{
		if ($this->connect()) {
			$API = $this->routerosapi;
			$API->write('/ip/hotspot/active/print');
			$active = $API->read();
			$API->disconnect();
			return $active;
		}else{
			return false;
		}
	}


}

/* End of file Mikrotik_connect.php */
/* Location: ./application/models/Mikrotik_connect.php */
?>