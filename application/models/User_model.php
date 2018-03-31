<?php
	class User_model extends CI_Model{
		public function register($enc_password){
			// User data array
			$data = array(
				"name" => $this->input->post('name'),
				"email" => $this->input->post('email'),
				"username" => $this->input->post('username'),
				"password" => $enc_password,
				"zipcode" => $this->input->post('zipcode')
			);

			//print_r($data);
			//exit;

			//Insert user into database
			$connection = new MongoClient();
			$collection = $connection->pcrepairutah->customer;
			return $collection->insert($data);
			//return $this->mongo_db->insert('customer', $data);
		}

		//Log in user
		public function login($username, $password){
			//Validate login info
			$connection = new MongoClient();
			$collection = $connection->pcrepairutah->customer;

			$cursor = $collection->find(array(), array("username" => $username, "password" => $password));
			$result = iterator_to_array($cursor);
			var_dump($result);
			exit;

			//$this->db->where('username', $username);
			//$this->db->where('password', $password);

			//$result = $this->db->get('users');

			if($result->num_rows() === 1){
				return $result->row(0)->id;
			} else {
				return false;
			}
		}

		//check if the username is already in the database
		public function check_username_exists($username){
			$query = $this->db->get_where('users', array('username' => $username));
			if(empty($query->row_array())){
				return true;
			} else {
				return false;
			}
		}

		//check if the email is already in the database
		public function check_email_exists($email){
			$query = $this->db->get_where('users', array('email' => $email));
			if(empty($query->row_array())){
				return true;
			} else {
				return false;
			}
		}
	}