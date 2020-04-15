<div class="card card-info">
  <div class="card-header">
    <h3 class="card-title">Profile Perusahaan</h3>
  </div>
  <!-- /.card-header -->
  <!-- form start -->
  <form class="form-horizontal" action="">
    <div class="card-body">
      <div class="form-group row">
        <label for="inputEmail3" class="col-sm-2 col-form-label">Nama Perusahaan</label>
        <div class="col-sm-10">
          <input type="email" class="form-control" readonly="" name="nama" id="inputEmail3" value="<?= $profile->name ?>" placeholder="Nama Perusahaan">
        </div>
      </div>
      <div class="form-group row">
        <label for="inputEmail3" class="col-sm-2 col-form-label">Email</label>
        <div class="col-sm-10">
          <input type="email" class="form-control" readonly="" name="email" id="inputEmail3" value="<?= $profile->email ?>" placeholder="Email">
        </div>
      </div>
      <div class="form-group row">
        <label for="" class="col-sm-2 col-form-label">Website</label>
        <div class="col-sm-10">
          <input type="text" class="form-control" readonly="" name="website" id="" value="<?= $profile->website ?>" placeholder="Website">
        </div>
      </div>
      <div class="form-group row">
        <label for="" class="col-sm-2 col-form-label">No. Handphone</label>
        <div class="col-sm-10">
          <input type="text" class="form-control" name="No. Handphone" readonly="" id="" value="<?= $profile->phone ?>" placeholder="No. Handphone">
        </div>
      </div>
      <div class="form-group row">
        <label for="" class="col-sm-2 col-form-label">Alamat</label>
        <div class="col-sm-10">
        	<textarea readonly="" name="alamat" class="form-control" placeholder="Alamat"><?= $profile->address ?></textarea>
        </div>
      </div>
    </div>
    <!-- /.card-body -->
    <div class="card-footer text-center">
    	<div class="colmd">
    		
    	</div>
      <button type="button" class="btn btn-info">Edit</button>
    </div>
    <!-- /.card-footer -->
  </form>
</div>