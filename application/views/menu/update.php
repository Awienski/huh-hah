<!-- Begin Page Content -->
        <div class="container-fluid">

          <!-- Page Heading -->
          <h1 class="h3 mb-4 text-gray-800"><?= $title ?></h1>

          	

          

          <div class="row">
          	<div class="col-lg-6">

          		<?= form_error('menu_name', '<div class="alert alert-danger" role="alert">', '</div>') ?>

          		<?= $this->session->flashdata('message') ?>
          		

          		<form method="post" action="<?= base_url('menu/edit') ?>">
				  <div class="form-group">
				  	<input type="hidden" name="id" value="<?= $edit_menu['id'] ?>">
				    <label for="menu">Menu Name</label>
				    <input name="menu_name" type="text" class="form-control" id="menu" value="<?= $edit_menu['menu'] ?>">
				  </div>
				  <div class="form-group">
				  	<input type="submit" name="submit" value="Save">
				  </div>
				</form>
          		
          		
          	</div>
          </div>


        </div>
        <!-- /.container-fluid -->

      </div>
      <!-- End of Main Content -->