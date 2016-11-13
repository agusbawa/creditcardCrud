<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Input extends CI_Controller {

	public function index($id = false)
	{
            if(!empty($this->input->post('cardNumber'))){
                $data = array(
                    'id' => $this->input->post('pid'),
                    'number' => $this->input->post('cardNumber'),
                    'month_expired' => $this->input->post('expiry-month'),
                    'year_expired' => $this->input->post('expiry-year'),
                    'vcc' => $this->input->post('ccv'),
                    'cardholder' => $this->input->post('nameoncard')
                );
                if(!empty($data['id'])){
                    $this->card->input($data,false);
                }else{
                    $this->card->input($data);
                }
                redirect('/creditcardlist', 'refresh');
            }
            $dataOut['data'] = false;
            if($id){
                $pid = $id;
                $dataOut = $this->card->get($pid);
            }
            
            $this->load->view('head');
            $this->load->view('input',$dataOut);
            $this->load->view('footer');
	}
        public function view($id = false)
	{           
            $dataOut['data'] = false;
            if($id){
                $pid = $id;
                $dataOut['data'] = $this->card->get($pid);
            }else{
                redirect('/creditcardlist', 'refresh');
            }
            
            $this->load->view('head');
            $this->load->view('view',$dataOut);
            $this->load->view('footer');
	}
        public function edit($id = false)
	{
            if(!empty($this->input->post('cardNumber'))){
                $data = array(
                    'id' => $this->input->post('pid'),
                    'number' => $this->input->post('cardNumber'),
                    'month_expired' => $this->input->post('expiry-month'),
                    'year_expired' => $this->input->post('expiry-year'),
                    'vcc' => $this->input->post('ccv'),
                    'cardholder' => $this->input->post('nameoncard')
                );
                if(!empty($data['id'])){
                    $this->card->input($data,false);
                }else{
                    $this->card->input($data);
                }
                redirect('/creditcardlist', 'refresh');
            }
            $dataOut['data'] = false;
            if($id){
                $pid = $id;
                $dataOut['data'] = $this->card->get($pid);
            }
            
            $this->load->view('head');
            $this->load->view('input',$dataOut);
            $this->load->view('footer');
	}
}
