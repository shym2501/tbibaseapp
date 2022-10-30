<?= $this->extend('layout/main_tmp');  ?>


<?= $this->section('content');  ?>

<main id="main" class="main">
         <div class="pagetitle">
            <h1><?= $title; ?></h1>
            <nav>
               <ol class="breadcrumb">
                  <li class="breadcrumb-item"><a href="index.html">Home</a></li>
                  <li class="breadcrumb-item active">Member</li>
               </ol>
            </nav>
         </div>
         <section class="section dashboard">
            <div class="row">
               <div class="col-lg-12">
                  <div class="card top-selling overflow-auto">
                           <div class="filter">
                              <a class="icon" href="#" data-bs-toggle="dropdown"><i class="bi bi-three-dots"></i></a>
                              <ul class="dropdown-menu dropdown-menu-end dropdown-menu-arrow">
                                 <li class="dropdown-header text-start">
                                    <h6>Filter</h6>
                                 </li>
                                 <li><a class="dropdown-item" href="#">Today</a></li>
                                 <li><a class="dropdown-item" href="#">This Month</a></li>
                                 <li><a class="dropdown-item" href="#">This Year</a></li>
                              </ul>
                           </div>
                           <div class="card-body pb-0">
                              <h5 class="card-title">Top Selling <span>| Today</span></h5>
                              <table class="table table-borderless">
                                 <thead>
                                    <tr class="align-text text-center">
                                     <th scope="col">Foto</th>
<th scope="col">NIM</th>           
<th scope="col">Nama Lengkap</th>
<th scope="col">TTL</th>
<th scope="col">No Telp</th>
<th scope="col">Angkatan</th>
<th scope="col">Action</th>
                                    </tr>
                                 </thead>
                                 <tbody>
                                    
<?php foreach ($users as $usr) : ?>
  <tr class="text-center">
    <th scope="row"><a href="#"><img src="img/product-1.jpg" alt=""></a></th>
    <td><?= $usr['NIM'] ?></td>
 <td><?= $usr['nama_lengkap'] ?></td>
 <td><?= $usr['tempat_lahir'] ?>, <?= $usr['tanggal_lahir'] ?></td>
 <td><a href="https://wa.me/+62<?= $usr['no_telp'] ?>"><?= $usr['no_telp'] ?></a></td> 
 <td><?= $usr['angkatan'] ?></td>
 <td>
   <button type="button" class="btn btn-primary rounded-pill"><i class="bi bi-star"></i></button>
 </td>
 
                                    </tr>
  <?php endforeach ?>
                                 </tbody>
                              </table>
                           </div>
                        </div>

                 <button type="button" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#modalDialogScrollable"> Modal Dialog Scrollable </button>
                        <div class="modal fade" id="modalDialogScrollable" tabindex="-1">
                           <div class="modal-dialog modal-dialog-scrollable">
                              <div class="modal-content">
                                 <div class="modal-header">
                                    <h5 class="modal-title">Modal Dialog Scrollable</h5>
                                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                                 </div>
                                 <div class="modal-body"> Non omnis incidunt qui sed occaecati magni asperiores est mollitia. Soluta at et reprehenderit. Placeat autem numquam et fuga numquam. Tempora in facere consequatur sit dolor ipsum. Consequatur nemo amet incidunt est facilis. Dolorem neque recusandae quo sit molestias sint dignissimos. <br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br> This content should appear at the bottom after you scroll.</div>
                                 <div class="modal-footer"> <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button> <button type="button" class="btn btn-primary">Save changes</button></div>
                              </div>
                           </div>
                        </div>
                 
               </div>
            </div>
         </section>
      </main>

<?= $this->endSection();  ?> 