      <!-- Begin Page Content -->
        <div class="container-fluid">

          <!-- Page Heading -->
          <h1 class="h3 mb-4 text-gray-800"><?= $title ?></h1>

          <?= $this->session->flashdata('message') ?>

          <div class="row">
          	<div class="col-lg-8">
          		<table class="table table-hover">
					  <thead>
					    <tr>
					      <th scope="col">No.</th>
					      <th scope="col">Name</th>
					      <th scope="col">Role</th>
					      <th scope="col">Status</th>
					      <th scope="col">Password</th>
					      <th scope="col">Action</th>
					    </tr>
					  </thead>
					  <tbody>
					  	<?php $i = 0 ?>
					  	<?php foreach ($userall as $u): ?>
					  		<tr>
						      <th scope="row"><?= $i+=1 ?></th>
						      <td><?= $u['name'] ?></td>
						      <td><?= $u['role'] ?></td>
						      <td><?php if ($u['is_active'] == 1): ?>
						      	<?= 'Active' ?>
						      	<?php else: ?>
						      	<?= 'Non-active' ?>
						      <?php endif ?></td>
						      <td>
						      	<a class="badge badge-warning" href="<?=base_url() ?>admin/reset_password/<?= $u['id_user'] ?>">Reset Password
						      	</a>
						      </td>
						      <td>
						      	<a href="<?= base_url() ?>admin/edit_user/<?= $u['id_user'] ?>" class="badge badge-success">Edit</a>
						      	<a href="<?= base_url() ?>admin/delete_user/<?= $u['id_user'] ?>" class="badge badge-danger" onclick="return confirm('Are you sure?')">Delete</a>
						      </td>
						    </tr>
					  	<?php endforeach ?>
					  </tbody>
					</table>


          	</div>
          </div>


        </div>
        <!-- /.container-fluid -->

      </div>
      <!-- End of Main Content -->

      
