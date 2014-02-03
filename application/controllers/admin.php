<?php 

/*
*	Filename: admin.php
*	Project Name: ICS Library System
*	Date Created: 23 January 2014
*	Created by: Julius M. Iglesia
*
*/

if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Admin extends CI_Controller {

	/*
	*	Controls the view of reservations in the system
	*/
	public function reservation_queue() { 
		// loads the model php file which will interact with the database
		$this->load->model('admin/reservation_queue_model'); 
		// calls the function get_reservation_array(), and store it to the data array
		//$array['reservation']=$this->reservation_queue_model->get_reservation_array();
		$array['reservations'] = $this->reservation_queue_model->get_reservations();
		// views the result by passing the data to the view php file
		$this->load->view('admin/reservation_queue_view', $array);
	}

	public function index(){
		echo "Admin!";
		echo "Welcome to ICSLIB!";
	}
}

?>