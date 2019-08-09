<?php

defined('BASEPATH') OR exit('No direct script access allowed');

class WithTemplate extends CI_Controller {

    public function index()
    {
        $this->load->view('admin/dashboard','',FALSE);
    }

}

/* End of file Template.php */

?>