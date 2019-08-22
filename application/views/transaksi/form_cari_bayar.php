      <!-- Begin Page Content -->
        <div class="container-fluid">

          <!-- Page Heading -->
          <h1 class="h3 mb-4 text-gray-800"><?= $title ?></h1>


          <form class="form-inline" action="<?= base_url('kasir') ?>" method="post">
			  <div class="form-group mb-2">
			    <label for="no_nota" class="sr-only">No.Nota</label>
			    <input type="text" readonly class="form-control-plaintext" id="no_nota" value="Masukkan No. Nota">
			  </div>
			  <div class="form-group mx-sm-3 mb-2">
			    <label for="nota" class="sr-only">No.Nota</label>
			    <input name="nota" autofocus="" type="text" class="form-control" id="nota">
			  </div>
			  <button name="submit" type="submit" class="btn btn-primary mb-2">Bayar</button>
			</form>
			

        </div>
        <!-- /.container-fluid -->

      </div>
      <!-- End of Main Content -->

      
