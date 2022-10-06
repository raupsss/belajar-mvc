<?php
class About
{
    public function index($nama = 'Raup', $usia = 18)
    {
        echo "Halo nama saya $nama, saya berusia $usia tahun";
    }
    public function page()
    {
        echo 'about/page';
    }
}
