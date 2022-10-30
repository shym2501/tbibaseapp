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
                           <div class="card-body pb-0">
                             <div class="d-flex justify-content-between">
                               <h5 class="align-items-start card-title">Top Selling <span>| Today</span></h5>
                               <div class="my-auto align-items-end">
                               <button type="button" class="btn btn-sm rounded-pill btn-primary px-3 me-2" data-bs-toggle="modal tooltip" data-bs-target="#modalDialogScrollable" data-bs-toggle="tooltip" data-bs-placement="top" title="Add Member"><i class="bi bi-person-plus me-1"></i> Add </button>
                               <button type="button" class="btn btn-sm rounded-pill btn-success px-3" data-bs-toggle="tooltip" data-bs-placement="top" title="Export Excel"><i class="bi bi-file-earmark-spreadsheet"></i></i></button>
                               </div>
                             </div>
                              <table class="table table-borderlesr responsive">
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
 <td><a class="btn badge btn-success" href="https://wa.me/+62<?= $usr['no_telp'] ?>" data-bs-toggle="tooltip" data-bs-placement="top" title="Chat WA"><i class="bi bi-whatsapp me-1"></i><?= $usr['no_telp'] ?></a></td> 
 <td><?= $usr['angkatan'] ?></td>
 <td>
   <button type="button" class="btn btn-sm rounded-pill" data-bs-toggle="tooltip" data-bs-placement="top" title="Detail"><i class="text-info fs-5 fw-bold bi bi-info-circle-fill"></i></button>
   <button type="button" class="btn btn-sm rounded-pill" data-bs-toggle="tooltip" data-bs-placement="top" title="Delete"><i class="text-danger fs-5 bi bi-trash-fill"></i></button>
 </td>
 
                                    </tr>
  <?php endforeach ?>
                                 </tbody>
                              </table>
                           </div>
                        </div>

                 
                        <div class="modal fade" id="modalDialogScrollable" tabindex="-1">
                           <div class="modal-dialog modal-dialog-scrollable">
                              <div class="modal-content">
                                 <div class="modal-header">
                                    <h5 class="modal-title">Input Member Data</h5>
                                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                                 </div>
                                
                                 <div class="modal-body">
                                   <form class="row g-2 needs-validation" novalidate>
                           <div class="col-4">
                            <div class="avatar-upload">
        <div class="avatar-edit">
            <input type='file' id="imageUpload" accept=".png, .jpg, .jpeg" />
            <label for="imageUpload"></label>
        </div>
        <div class="avatar-preview img-thumbnail rounded-circle">
            <div id="imagePreview" style="background-image: url(http://i.pravatar.cc/500?img=7);">
            </div>
        </div>
    </div>
                            <div class="valid-feedback"> Looks good!</div>
                           </div>
                           <div class="col-8">
                             <div class="col-12 mb-2">
                              <label for="validationCustom02" class="form-label">NIM</label> <input type="number" class="form-control" id="validationCustom02" value="Doe" required>
                              <div class="valid-feedback"> Looks good!</div>
                             </div>
                             <div class="col-12">
                              <label for="validationCustom02" class="form-label">Nama Lengkap</label> <input type="text" class="form-control" id="validationCustom02" value="Doe" required>
                              <div class="valid-feedback"> Looks good!</div>
                             </div>
                           </div>
                           <div class="col-6">
                              <label for="validationCustom03" class="form-label">Tempat Lahir</label> <input type="text" class="form-control" id="validationCustom03" required>
                              <div class="invalid-feedback"> Please provide a valid city.</div>
                           </div>
                           <div class="col-6">
                              <label for="validationCustom03" class="form-label">Tanggal Lahir</label> <input type="date" class="form-control" id="validationCustom03" required>
                              <div class="invalid-feedback"> Please provide a valid city.</div>
                           </div>
                           <div class="col-6">
                              <label for="validationCustom05" class="form-label">Alamat</label> <input type="text" class="form-control" id="validationCustom05" required>
                              <div class="invalid-feedback"> Please provide a valid zip.</div>
                           </div>
                           <div class="col-6">
                              <label for="validationCustom05" class="form-label">No Telp/WA</label> <input type="text" class="form-control" id="validationCustom05" required>
                              <div class="invalid-feedback"> Please provide a valid zip.</div>
                           </div>
                           <div class="col-12">
                              <label for="validationCustom05" class="form-label">Hobby/Skill</label> <input type="text" class="form-control" id="validationCustom05" required>
                              <div class="invalid-feedback"> Please provide a valid zip.</div>
                           </div>
                           <div class="col-6">
                              <label for="validationCustom05" class="form-label">Angkatan</label> <input type="text" class="form-control" id="validationCustom05" required>
                              <div class="invalid-feedback"> Please provide a valid zip.</div>
                           </div>
                           <div class="col-6">
                              <label for="validationCustom05" class="form-label">Organisasi</label> <input type="text" class="form-control" id="validationCustom05" required>
                              <div class="invalid-feedback"> Please provide a valid zip.</div>
                           </div>
                           <div class="col-12">
                              <div class="form-check">
                                 <input class="form-check-input" type="checkbox" value="" id="invalidCheck" required> <label class="form-check-label" for="invalidCheck"> Agree to terms and conditions </label>
                                 <div class="invalid-feedback"> You must agree before submitting.</div>
                              </div>
                           </div>
                           <div class="col-12"> <button class="btn btn-primary" type="submit">Submit form</button></div>
                        </form>
                                 </div>
                                
                                 <div class="modal-footer"> <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button> <button type="button" class="btn btn-primary">Save changes</button></div>
                              </div>
                           </div>
                        </div>
                 
               </div>
            </div>
         </section>
      </main>

<?= $this->endSection();  ?> 