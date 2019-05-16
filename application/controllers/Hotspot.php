<?php 
defined('BASEPATH') OR exit('No direct script access allowed');

 class Hotspot extends CI_Controller{
 	
 	function __construct()
 	{
		parent::__construct();
 		$this->load->model('mikrotik_connect','mikrotik');
 	}

 	public function index()
	{
		$this->load->view('templates/user_view');
	}

/**
$neighbors = $this->mikrotik->getNeighbours();
 		// print_r($neighbors);
 		$connect = array();
 		$devices = array();
 		foreach ($neighbors as $neighbor) {
 					$devID = $this->mac_id($neighbor['mac-address']);
 					if ($this->regDevice($devID)) {
 						$connect['device_id'] = $devID;
						$connect['device_identity'] = $neighbor['identity'];
						$connect['device_MAC'] = $neighbor['mac-address'];
						$connect['device_IPv4'] = $neighbor['address'];
						$connect['device_OSVersion'] = $neighbor['version'];
						$device = $connect;
						$connect['action']= '<a class="add_device btn btn-sm btn-primary" href="javascript:void(0)" title="addDevice" data-id='."'".$connect['device_id']."'".' data-identity='."'".$connect['device_identity']."'".' data-mac='."'".$connect['device_MAC']."'".' data-ip='."'".$connect['device_IPv4']."'".' data-version='."'".$connect['device_OSVersion']."'".'><i class="glyphicon glyphicon-k"><i>..<a>';
						$devices[]=$connect;
 					}
				}

		$output = array(
				"draw" => $this->input->post('draw'),
				"data" => $devices,
			);
		// print_r($output);
		echo json_encode($output);
**/

 	public function usersJSON(){
 		$users = $this->mikrotik->getUsers();
 		foreach ($users as $user) {
 						$data['user_id'] = $user['.id'];
						// $data['user_server'] = $user['server'];
						$data['user_name'] = $user['name'];
						// $data['user_address'] = $user['address'];
						// $data['user_mac'] = $user['mac-address'];
						// $data['user_profile'] = $user['profile'];
						$data['user_uptime'] = $user['uptime'];
						// $device = $user;
						// $user['action']= '<a class="add_device btn btn-sm btn-primary" href="javascript:void(0)" title="addDevice" data-id='."'".$connect['device_id']."'".' data-identity='."'".$connect['device_identity']."'".' data-mac='."'".$connect['device_MAC']."'".' data-ip='."'".$connect['device_IPv4']."'".' data-version='."'".$connect['device_OSVersion']."'".'><i class="glyphicon glyphicon-k"><i>..<a>';
						$allUser[]=$data;
 					}


		$output = array(
				"draw" => $this->input->post('draw'),
				"data" => $allUser,
			);
		// print_r($output);
		echo json_encode($output);
 		// print_r($users);
 	}

 	public function userProfilesJSON(){
 		$profile = $this->mikrotik->getUserProfiles();
 		print_r($profile);
 	}

 	public function userActiveJSON(){
 		$active = $this->mikrotik->getUserActive();
 		print_r($active);
 	}

 } ?>