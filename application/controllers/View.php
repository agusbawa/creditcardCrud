<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class View extends CI_Controller {

	public function index($id = false)
	{           
            $dataOut['data'] = false;
            if($id){
                $pid = $id;
                $dataOut = $this->card->get($pid);
            }else{
                redirect('/creditcardlist', 'refresh');
            }
            
            $this->load->view('head');
            $this->load->view('view',$dataOut);
            $this->load->view('footer');
	}
}
