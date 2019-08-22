      <!-- Begin Page Content -->
        <div class="container-fluid">

          <!-- Page Heading -->
          <h1 class="h3 mb-4 text-gray-800"><?= $title ?></h1>

          <svg class="barcode"
			  		jsbarcode-format="auto"
			  		jsbarcode-value="<?= $nota_no ?>"
			  		jsbarcode-textmargin="0"
			  		jsbarcode-fontoptions="bold">
				  </svg>

          <form method="post" action="<?= base_url('pemesanan') ?>">
            <div class="form-group row">
              <div class="col-sm-10">
                <button name="submit" type="submit" class="btn btn-primary">Pesan Lagi</button>
              </div>
            </div>
          </form>



        </div>
        <!-- /.container-fluid -->

      </div>
      <!-- End of Main Content -->

      <script type="text/javascript">
      	JsBarcode(".barcode").init();
      </script>
      
