<div class="container mt-5">
    <div class="row">
        <div class="col">
            <h3>Daftar Mahasiswa</h3>
            <div class="d-flex justify-content-between mt-5 flex-wrap">

                <?php
                foreach ($data['mhs'] as $mhs) : ?>

                    <ul class="list-group text-center">
                        <li class="list-group-item bg-warning"><?= $mhs['nama']; ?></li>
                        <li class="list-group-item"><?= $mhs['nim']; ?></li>
                        <li class="list-group-item"><?= $mhs['email']; ?></li>
                        <li class="list-group-item"><?= $mhs['jurusan']; ?></li>
                    </ul>
                <?php endforeach; ?>
            </div>
        </div>
    </div>
</div>