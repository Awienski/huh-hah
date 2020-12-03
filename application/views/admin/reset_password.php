      <!-- Begin Page Content -->
        <div class="container-fluid">

          <!-- Page Heading -->
          <h1 class="h3 mb-4 text-gray-800"><?= $title ?></h1>

          <div class="row">
          	<div class="col-lg-6">
          		<?= $this->session->flashdata('message')  ?>
          	</div>
          </div>

          

          <div class="row">
          	<div class="col-lg-6">
          		

          		<form method="post" action="<?= base_url('admin/reset_password/').$user_pass['id_user'] ?>">
          			
          			<div class="form-group">
          				<input type="hidden" name="id" value="<?= $user_pass['id_user'] ?>">
					    <label for="name">Name</label>
					    <input type="text" class="form-control" id="name" name="name" value="<?= $user_pass['name'] ?>" readonly>
					</div>

					<div class="form-group">
					    <label for="new_password1">New Password</label>
					    <input type="password" class="form-control" id="new_password1" name="new_password1">
					    <?= form_error('new_password1', '<small class="text-danger pl-3">', '</small>' ) ?>
					</div>

					<div class="form-group">
					    <label for="new_password2">Repeat Password</label>
					    <input type="password" class="form-control" id="new_password2" name="new_password2">
					    <?= form_error('new_password2', '<small class="text-danger pl-3">', '</small>' ) ?>
					</div>

					<div class="form-group row">
					   	<div class="col-sm-10">
					    	<button type="submit" class="btn btn-warning">Reset Password</button>
					    </div>
					</div>

          		</form>


          	</div>
          </div>


        </div>
        <!-- /.container-fluid -->

      </div>
      <!-- End of Main Content -->

      
