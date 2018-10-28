<?php

if ( ! defined('BASEPATH')) exit('No direct script access allowed');
require_once(dirname(__FILE__)."/../../../UMS_Controller.php");

class Hackaday_controller extends CI_Controller {

  public function __construct(){
    $this->hack_aday = 'sar/documents/Hackaday/'; // ที่อยู่ไฟล์งาน
    parent::__construct();
    // Your own constructor code
  } // End Function

  public function index(){
  //  echo "<h1> Hack a day</h1>";
    $this->load->view($this->hack_aday."v_hack_a_day");
  }
  public function MenuBar($html){
	$data['html']=$html;
    $this->load->view($this->hack_aday."v_hack_a_day",$data);
  }
  public function home(){
	  $this->MenuBar($this->load->view($this->hack_aday."v_home"));
  }

  public function movie_chapter_edit(){
	  $this->MenuBar($this->load->view($this->hack_aday."v_movie_chapter_edit"));
  }

  public function movie_description(){
	  $this->load->view($this->hack_aday."v_movie_description");
  }

  public function movie_edit(){
	  $this->load->view($this->hack_aday."v_movie_edit");
  }

  public function movie_video(){
	  $this->load->view($this->hack_aday."v_movie_video");
  }

  public function movie_search(){
	 // $this->load->view($this->hack_aday."v_movie_search");
     $this->MenuBar($this->load->view($this->hack_aday."v_movie_search"));
  }

  public function movie_select(){
	  $this->load->view($this->hack_aday."v_movie_select");
  }


}
?>
