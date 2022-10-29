<?= $this->extend("layouts/master") ?>

<?= $this->section("content") ?>

<!-- Main content -->
      <div class="card">
        <div class="card-header">
          <div class="row">
            <div class="col-10 mt-2">
              <h3 class="card-title">member</h3>
            </div>
            <div class="col-2">
              <button type="button" class="btn float-right btn-success" onclick="save()" title="<?= lang("App.new") ?>"> <i class="fa fa-plus"></i>   <?= lang('App.new') ?></button>
            </div>
          </div>
        </div>
        <!-- /.card-header -->
        <div class="card-body">
          <table id="data_table" class="table table-bordered table-striped">
            <thead>
              <tr>
              <th>Id</th>
<th>Nama lengkap</th>
<th>Tempat lahir</th>
<th>Tanggal lahir</th>
<th>Alamat</th>
<th>Skill</th>
<th>No telp</th>
<th>Angkatan</th>
<th>Organisasi</th>
<th>Lencana</th>
<th>Foto</th>
<th>Status</th>

			  <th></th>
              </tr>
            </thead>
          </table>
        </div>
        <!-- /.card-body -->
      </div>
      <!-- /.card -->

<!-- /Main content -->

<!-- ADD modal content -->
<div id="data-modal" class="modal fade" tabindex="-1" role="dialog" aria-hidden="true">
  <div class="modal-dialog modal-dialog-scrollable modal-dialog-centered modal-md">
    <div class="modal-content">
      <div class="text-center bg-info p-3" id="model-header">
        <h4 class="modal-title text-white" id="info-header-modalLabel"></h4>
      </div>
      <div class="modal-body">
        <form id="data-form" class="pl-3 pr-3">
          <div class="row">
<input type="hidden" id="id" name="id" class="form-control" placeholder="Id" maxlength="11" required>
						</div>
						<div class="row">
							<div class="col-md-12">
								<div class="form-group mb-3">
									<label for="nama_lengkap" class="col-form-label"> Nama lengkap: <span class="text-danger">*</span> </label>
									<input type="text" id="nama_lengkap" name="nama_lengkap" class="form-control" placeholder="Nama lengkap" minlength="0"  maxlength="50" required>
								</div>
							</div>
							<div class="col-md-12">
								<div class="form-group mb-3">
									<label for="tempat_lahir" class="col-form-label"> Tempat lahir: <span class="text-danger">*</span> </label>
									<input type="text" id="tempat_lahir" name="tempat_lahir" class="form-control" placeholder="Tempat lahir" minlength="0"  maxlength="50" required>
								</div>
							</div>
<div class="col-md-12">
								<div class="form-group mb-3">
									<label for="tanggal_lahir" class="col-form-label"> Tanggal lahir: <span class="text-danger">*</span> </label>
									<input type="date" id="tanggal_lahir" name="tanggal_lahir" class="form-control" dateISO="true" required>
								</div>
							</div>
							<div class="col-md-12">
								<div class="form-group mb-3">
									<label for="alamat" class="col-form-label"> Alamat: <span class="text-danger">*</span> </label>
									<input type="text" id="alamat" name="alamat" class="form-control" placeholder="Alamat" minlength="0"  maxlength="255" required>
								</div>
							</div>
							<div class="col-md-12">
								<div class="form-group mb-3">
									<label for="skill" class="col-form-label"> Skill: <span class="text-danger">*</span> </label>
									<input type="text" id="skill" name="skill" class="form-control" placeholder="Skill" minlength="0"  maxlength="255" required>
								</div>
							</div>
							<div class="col-md-12">
								<div class="form-group mb-3">
									<label for="no_telp" class="col-form-label"> No telp: <span class="text-danger">*</span> </label>
									<input type="text" id="no_telp" name="no_telp" class="form-control" placeholder="No telp" minlength="0"  maxlength="20" required>
								</div>
							</div>
							<div class="col-md-12">
								<div class="form-group mb-3">
									<label for="angkatan" class="col-form-label"> Angkatan: <span class="text-danger">*</span> </label>
									<input type="text" id="angkatan" name="angkatan" class="form-control" placeholder="Angkatan" minlength="0"  maxlength="20" required>
								</div>
							</div>
							<div class="col-md-12">
								<div class="form-group mb-3">
									<label for="organisasi" class="col-form-label"> Organisasi: <span class="text-danger">*</span> </label>
									<textarea cols="40" rows="5" id="organisasi" name="organisasi" class="form-control" placeholder="Organisasi" minlength="0"  required></textarea>
								</div>
							</div>
							<div class="col-md-12">
								<div class="form-group mb-3">
									<label for="lencana" class="col-form-label"> Lencana: <span class="text-danger">*</span> </label>
									<textarea cols="40" rows="5" id="lencana" name="lencana" class="form-control" placeholder="Lencana" minlength="0"  required></textarea>
								</div>
							</div>
							<div class="col-md-12">
								<div class="form-group mb-3">
									<label for="foto" class="col-form-label"> Foto: <span class="text-danger">*</span> </label>
									<input type="text" id="foto" name="foto" class="form-control" placeholder="Foto" minlength="0"  maxlength="255" required>
								</div>
							</div>
						</div>
						<div class="row">
							<div class="col-md-12">
								<div class="form-group mb-3">
									<label for="status" class="col-form-label"> Status: <span class="text-danger">*</span> </label>
									<input type="number" id="status" name="status" class="form-control" placeholder="Status" minlength="0"  maxlength="11" required>
								</div>
							</div>
						</div>

          <div class="form-group text-center">
            <div class="btn-group">
              <button type="submit" class="btn btn-success mr-2" id="form-btn"><?= lang("App.save") ?></button>
              <button type="button" class="btn btn-danger" data-bs-dismiss="modal"><?= lang("App.cancel") ?></button>
            </div>
          </div>
        </form>
      </div>
    </div><!-- /.modal-content -->
  </div><!-- /.modal-dialog -->
</div>
<!-- /ADD modal content -->



<?= $this->endSection() ?>
<!-- /.content -->


<!-- page script -->
<?= $this->section("pageScript") ?>
<script>
  // dataTables
  $(function() {
    var table = $('#data_table').removeAttr('width').DataTable({
      "paging": true,
      "lengthChange": false,
      "searching": true,
      "ordering": true,
      "info": true,
      "autoWidth": false,
      "scrollY": '45vh',
      "scrollX": true,
      "scrollCollapse": false,
      "responsive": false,
      "ajax": {
        "url": '<?php echo base_url($controller . "/getAll") ?>',
        "type": "POST",
        "dataType": "json",
        async: "true"
      }
    });
  });

  var urlController = '';
  var submitText = '';

  function getUrl() {
    return urlController;
  }

  function getSubmitText() {
    return submitText;
  }

  function save(id) {
    // reset the form 
    $("#data-form")[0].reset();
    $(".form-control").removeClass('is-invalid').removeClass('is-valid');
    if (typeof id === 'undefined' || id < 1) { //add
      urlController = '<?= base_url($controller . "/add") ?>';
      submitText = '<?= lang("App.save") ?>';
      $('#model-header').removeClass('bg-info').addClass('bg-success');
      $("#info-header-modalLabel").text('<?= lang("App.add") ?>');
      $("#form-btn").text(submitText);
      $('#data-modal').modal('show');
    } else { //edit
      urlController = '<?= base_url($controller . "/edit") ?>';
      submitText = '<?= lang("App.update") ?>';
      $.ajax({
        url: '<?php echo base_url($controller . "/getOne") ?>',
        type: 'post',
        data: {
          id: id
        },
        dataType: 'json',
        success: function(response) {
          $('#model-header').removeClass('bg-success').addClass('bg-info');
          $("#info-header-modalLabel").text('<?= lang("App.edit") ?>');
          $("#form-btn").text(submitText);
          $('#data-modal').modal('show');
          //insert data to form
          			$("#data-form #id").val(response.id);
			$("#data-form #nama_lengkap").val(response.nama_lengkap);
			$("#data-form #tempat_lahir").val(response.tempat_lahir);
			$("#data-form #tanggal_lahir").val(response.tanggal_lahir);
			$("#data-form #alamat").val(response.alamat);
			$("#data-form #skill").val(response.skill);
			$("#data-form #no_telp").val(response.no_telp);
			$("#data-form #angkatan").val(response.angkatan);
			$("#data-form #organisasi").val(response.organisasi);
			$("#data-form #lencana").val(response.lencana);
			$("#data-form #foto").val(response.foto);
			$("#data-form #status").val(response.status);

        }
      });
    }
    $.validator.setDefaults({
      highlight: function(element) {
        $(element).addClass('is-invalid').removeClass('is-valid');
      },
      unhighlight: function(element) {
        $(element).removeClass('is-invalid').addClass('is-valid');
      },
      errorElement: 'div ',
      errorClass: 'invalid-feedback',
      errorPlacement: function(error, element) {
        if (element.parent('.input-group').length) {
          error.insertAfter(element.parent());
        } else if ($(element).is('.select')) {
          element.next().after(error);
        } else if (element.hasClass('select2')) {
          //error.insertAfter(element);
          error.insertAfter(element.next());
        } else if (element.hasClass('selectpicker')) {
          error.insertAfter(element.next());
        } else {
          error.insertAfter(element);
        }
      },
      submitHandler: function(form) {
        var form = $('#data-form');
        $(".text-danger").remove();
        $.ajax({
          // fixBug get url from global function only
          // get global variable is bug!
          url: getUrl(),
          type: 'post',
          data: form.serialize(),
          cache: false,
          dataType: 'json',
          beforeSend: function() {
            $('#form-btn').html('<i class="fa fa-spinner fa-spin"></i>');
          },
          success: function(response) {
            if (response.success === true) {
              Swal.fire({
                toast: true,
                position: 'top-end',
                icon: 'success',
                title: response.messages,
                showConfirmButton: false,
                timer: 1500
              }).then(function() {
                $('#data_table').DataTable().ajax.reload(null, false).draw(false);
                $('#data-modal').modal('hide');
              })
            } else {
              if (response.messages instanceof Object) {
                $.each(response.messages, function(index, value) {
                  var ele = $("#" + index);
                  ele.closest('.form-control')
                    .removeClass('is-invalid')
                    .removeClass('is-valid')
                    .addClass(value.length > 0 ? 'is-invalid' : 'is-valid');
                  ele.after('<div class="invalid-feedback">' + response.messages[index] + '</div>');
                });
              } else {
                Swal.fire({
                  toast: false,
                  position: 'bottom-end',
                  icon: 'error',
                  title: response.messages,
                  showConfirmButton: false,
                  timer: 3000
                })

              }
            }
            $('#form-btn').html(getSubmitText());
          }
        });
        return false;
      }
    });

    $('#data-form').validate({

      //insert data-form to database

    });
  }



  function remove(id) {
    Swal.fire({
      title: "<?= lang("App.remove-title") ?>",
      text: "<?= lang("App.remove-text") ?>",
      icon: 'warning',
      showCancelButton: true,
      confirmButtonColor: '#3085d6',
      cancelButtonColor: '#d33',
      confirmButtonText: '<?= lang("App.confirm") ?>',
      cancelButtonText: '<?= lang("App.cancel") ?>'
    }).then((result) => {

      if (result.value) {
        $.ajax({
          url: '<?php echo base_url($controller . "/remove") ?>',
          type: 'post',
          data: {
            id : id
          },
          dataType: 'json',
          success: function(response) {

            if (response.success === true) {
              Swal.fire({
                toast:true,
                position: 'top-end',
                icon: 'success',
                title: response.messages,
                showConfirmButton: false,
                timer: 1500
              }).then(function() {
                $('#data_table').DataTable().ajax.reload(null, false).draw(false);
              })
            } else {
              Swal.fire({
                toast:false,
                position: 'bottom-end',
                icon: 'error',
                title: response.messages,
                showConfirmButton: false,
                timer: 3000
              })
            }
          }
        });
      }
    })
  }
</script>


<?= $this->endSection() ?>
