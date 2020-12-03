      <!-- Begin Page Content -->
        <div class="container-fluid">

          <!-- Page Heading -->
          <h1 class="h3 mb-4 text-gray-800"><?= $title ?></h1>

          <form method="post" action="<?= base_url('pemesanan') ?>">

			  <div class="form-group row">
			    <label for="nama_pemesan" class="col-sm-2 col-form-label">Nama Pelanggan</label>
			    <div class="col-sm-10">
			      <input autofocus="" name="nama_pelanggan" type="text" class="form-control" id="nama_pemesan">
			    </div>
			  </div>

			  <div class="form-group row">
			    <label for="jumlah_pemesan" class="col-sm-2 col-form-label">Jumlah Pemesan</label>
			    <div class="col-sm-10">
			      <input name="jumlah_nasi" type="text" class="form-control" id="jumlah_pemesan">

			      <input name="nama_pelayan" type="hidden" class="form-control" id="nama_pelayan" value="<?= $user['name'] ?>">
			      <input name="no_nota" type="hidden" class="form-control" id="no_nota" value="<?= $no_nota ?>">

			      <div class="text-danger">
			        Data jumlah pemesan digunakan sebagai acuan jumlah porsi nasi yang dipesan.
			      </div>
			    </div>
			  </div>
			  <div class="form-group row">
			    <div class="col-sm-10">
			      <button name="submit" type="submit" class="btn btn-primary">Lanjutkan</button>
			    </div>
			  </div>
			</form>
        </div>
        <!-- /.container-fluid -->
      </div>
      <!-- End of Main Content -->

      
