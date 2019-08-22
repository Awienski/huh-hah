<!-- Begin Page Content -->
        <div class="container-fluid">

          <!-- Page Heading -->
          <h1 class="h3 mb-4 text-gray-800"><?= $title ?></h1>	
          

          <div class="row">
          	<div class="col-lg-6">

          		<?= form_error('menu_name', '<div class="alert alert-danger" role="alert">', '</div>') ?>

          		<?= $this->session->flashdata('message') ?>
          		

          		<form method="post" action="<?= base_url('admin/edit_user/'.$user_data['id_user']) ?>">
                <input type="hidden" name="id" value="<?= $user_data['id_user'] ?>">
      				  <div class="form-group">
                   <input name="name" type="text" class="form-control" id="title" placeholder="Name" value="<?= $user_data['name'] ?>" readonly>
                </div>

                <div class="form-group">
                   <select name="role_id" id="role_id" class="form-control">
                    
                    <?php foreach ($role as $r): ?>
                      <?php if ($user_data['role_id']== $r['id']){ 
                        ?>
                        <option selected value="<?= $r['id'] ?>"><?= $r['role'] ?></option>
                      <?php }else{

                        ?>
                            <option value="<?= $r['id'] ?>"><?= $r['role'] ?></option>
                        <?php

                      } ?>
                      
                    <?php endforeach ?>
                   </select>
                </div>

                <div class="form-group">
                   <select name="is_active" id="is_active" class="form-control">
                    <option <?php if($user_data['is_active'] == 1){echo 'selected';} ?> value="1">Active</option>
                    <option <?php if($user_data['is_active'] == 0){echo 'selected';} ?> value="0">Non-active</option>
                   </select>
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