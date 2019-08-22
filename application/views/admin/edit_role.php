<!-- Begin Page Content -->
        <div class="container-fluid">

          <!-- Page Heading -->
          <h1 class="h3 mb-4 text-gray-800"><?= $title ?></h1>

          	

          

          <div class="row">
          	<div class="col-lg-6">

          		<?= form_error('menu_name', '<div class="alert alert-danger" role="alert">', '</div>') ?>

          		<?= $this->session->flashdata('message') ?>
          		

          		<form method="post" action="<?= base_url('admin/edit_role') ?>">
                <input type="hidden" name="id" value="<?= $role['id'] ?>">

                <div class="form-group">
                   <input name="role_id" type="text" class="form-control" id="role" placeholder="Role name" 
                   value="<?= $role['role'] ?>">
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