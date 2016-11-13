<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Creditcardlist extends CI_Controller {

	public function index()
	{
            
            $crud = new grocery_CRUD();

            $crud->set_table('creditcard');
            $crud->columns('id', 'cardholder');
            $crud->unset_add();
            $crud->unset_export();
            $crud->unset_print();
            $crud->unset_read();
            $crud->unset_edit();
            //$crud->unset_delete();
            $crud->add_action('Edit', '', '', 'edit-icon', array($this,'editSeo'));
            $crud->add_action('View', '', '', 'read-icon', array($this,'viewSeo'));
            $output = $crud->render();
                        
            $this->load->view('list',$output);
            
	}
        
        function editSeo($primary_key , $row)
        {
            return site_url('input/edit/'.$primary_key);
        }
        function viewSeo($primary_key , $row)
        {
            return site_url('input/view/'.$primary_key);
        }
}
