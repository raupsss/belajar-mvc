<div class="container mt-5">
    <div class="row">
        <div class="col">
            <h3>Daftar Mahasiswa</h3>
            <form class="form-inline">
                <input class="form-control mr-sm-2 " type="search" placeholder="Search" aria-label="Search">
                <button class="btn btn-outline-success my-2 my-sm-0" type="submit">Search</button>
            </form>
            <div class="d-flex justify-content-between mt-5 flex-wrap">

                <?php
                foreach ($data['mhs'] as $mhs) : ?>

                    <ul class="list-group text-center">
                        <li class="list-group-item bg-success ">

                            <a class="text-white" href="<?= BASEURL; ?>/mahasiswa/detail/<?= $mhs['id']; ?>"><?= $mhs['nama']; ?></a>
                        </li>
                        <li class="list-group-item"><?= $mhs['nim']; ?></li>
                        <li class="list-group-item"><?= $mhs['email']; ?></li>
                        <li class="list-group-item"><?= $mhs['jurusan']; ?></li>
                    </ul>
                <?php endforeach; ?>
            </div>
        </div>
    </div>
</div>