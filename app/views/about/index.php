 <div class="container">

     <div class="jumbotron mt-4">
         <h1 class="display-4">About Me!</h1>
         <img src="<?= BASEURL; ?>/img/profile.jpg" alt="Profile" width="200" class="rounded-circle shadow mb-4 mt-2">
         <p class="lead">This is <?= $data['nama']; ?>'s Web, I am <?= $data['umur'] . ' Years old'; ?>, I am <?= $data['pekerjaan']; ?></p>
         <hr class="my-4">
         <p>Back to :</p>
         <a class="btn btn-success btn-lg" href="<?= BASEURL; ?>/home" role="button">Home</a>
     </div>

 </div>