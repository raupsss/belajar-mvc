<?php
class About extends Controller
{
    public function index($nama = 'Raup', $pekerjaan = 'programmer', $umur = 18)
    {
        $data['nama'] = $nama;
        $data['pekerjaan'] = $pekerjaan;
        $data['umur'] = $umur;
        $this->view('templates/header');
        $this->view('about/index', $data);
        $this->view('templates/footer');
    }
    public function page()
    {
        $this->view('about/page');
    }
}
