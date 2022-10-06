<?php
class About extends Controller
{
    public function index($nama = 'Raup', $usia = 18)
    {
        $this->view('about/index');
    }
    public function page()
    {
        $this->view('about/page');
    }
}
