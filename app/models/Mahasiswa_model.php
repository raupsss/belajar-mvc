<?php

class Mahasiswa_model
{
    private $mhs = [
        [
            "nama" => "Fatha Ghani Al Rauf",
            "nim" => "2204010",
            "email" => "ghani@gmail.com",
            "jurusan" => "TKJ"
        ],
        [
            "nama" => "Aswin Khairu Adnan",
            "nim" => "2204007",
            "email" => "aswin@gmail.com",
            "jurusan" => "TKJ"

        ],
        [
            "nama" => "Adam Musyafa",
            "nim" => "2204001",
            "email" => "adam@gmail.com",
            "jurusan" => "TKJ"

        ],
        [
            "nama" => "Ahmad Djanuardi",
            "nim" => "2204002",
            "email" => "ardi@gmail.com",
            "jurusan" => "TKJ"

        ],
        [
            "nama" => "Anonymous",
            "nim" => "2204000",
            "email" => "unknows@gmail.com",
            "jurusan" => "TKJ"

        ]
    ];

    public function getAllMahasiswa()
    {
        return $this->mhs;
    }
}
