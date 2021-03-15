<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Bateau extends CI_Controller
{
    public function mentionsLegales()
    {
        $this->load->view('template/header');
        $this->load->view('footer/mentions');
        $this->load->view('template/footer');
    }
    public function planDuSite()
    {
        $this->load->view('template/header');
        $this->load->view('footer/plandusite');
        $this->load->view('template/footer');
    }
    public function cguetc()
    {
        $this->load->view('template/header');
        $this->load->view('footer/cguetco');
        $this->load->view('template/footer');
    }
    public function cookies()
    {
        $this->load->view('template/header');
        $this->load->view('footer/cookies');
        $this->load->view('template/footer');
    }
}
