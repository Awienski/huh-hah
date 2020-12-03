      <!-- Begin Page Content -->
        <div class="container-fluid">

          <!-- Page Heading -->
          <h1 class="h3 mb-4 text-gray-800"><?= $title ?></h1>

          	

          

          <div class="row">
          	<div class="col-lg-11">

          		<?php if (validation_errors()): ?>
          			<div class="alert alert-danger" role="alert">
          				<?= validation_errors() ?>
          			</div>
          		<?php endif ?>

          		<?= form_error('menu_name', '<div class="alert alert-danger" role="alert">', '</div>') ?>

          		<?= $this->session->flashdata('message') ?>

          		<a href="" class="btn btn-primary mb-2" data-toggle="modal" data-target="#newSubmenuModal">Add New Submenu</a>
          		
          		<table class="table table-hover">
					  <thead>
					    <tr>
					      <th scope="col">No.</th>
					      <th scope="col">Title</th>
					      <th scope="col">Menu</th>
					      <th scope="col">Url</th>
					      <th scope="col">Icon</th>
					      <th scope="col">Status</th>
					      <th scope="col">Action</th>
					    </tr>
					  </thead>
					  <tbody>
					  	<?php $i = 0 ?>
					  	<?php foreach ($submenu as $sm): ?>
					  		<tr>
						      <th scope="row"><?= $i+=1 ?></th>
						      <td><?= $sm['title'] ?></td>
						      <td><?= $sm['menu'] ?></td>
						      <td><?= $sm['url'] ?></td>
						      <td><?= $sm['icon'] ?></td>
						      <td><?php if ($sm['is_active'] == 1) {
						      	echo "Active";
						      }else{
						      	echo "Non-active";
						      } ?></td>
						      <td>
						      	<a href="<?= base_url() ?>menu/edit_submenu/<?php echo $sm['id'] ?>" class="badge badge-success">Edit</a>
						      	<a href="<?= base_url() ?>menu/delete_submenu/<?php echo $sm['id'] ?>" class="badge badge-danger" onclick="return confirm('Are you sure?')">Delete</a>
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


      <!-- Modal -->
		<!-- Modal Add New Menu -->
		<div class="modal fade" id="newSubmenuModal" tabindex="-1" role="dialog" aria-labelledby="newSubmenuModalLabel" aria-hidden="true">
		  <div class="modal-dialog" role="document">
		    <div class="modal-content">
		      <div class="modal-header">
		        <h5 class="modal-title" id="newSubmenuModalLabel">Add New Submenu</h5>
		        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
		          <span aria-hidden="true">&times;</span>
		        </button>
		      </div>

		      <form action="<?= base_url('menu/submenu') ?>" method="post">

		      <div class="modal-body">

		        <div class="form-group">
				   <input name="title" type="text" class="form-control" id="title" placeholder="Submenu name">
				</div>

				<div class="form-group">
				   <select name="menu_id" id="menu_id" class="form-control">
				   	<option value="">Select Menu</option>
				   	<?php foreach ($menu as $m): ?>
				   		<option value="<?= $m['id'] ?>"><?= $m['menu'] ?></option>
				   	<?php endforeach ?>
				   </select>
				</div>

				<div class="form-group">
				   <input name="url" type="text" class="form-control" id="url" placeholder="Url">
				</div>

				<div class="form-group">
				   <input name="icon" type="text" class="form-control" id="icon" placeholder="Icon">
				</div>

				<div class="form-group">
                   <select name="is_active" id="is_active" class="form-control">
                    
                    <option value="1">Active</option>
            
                    <option value="0">Non-active</option>
                    
                   </select>
                </div>

		      </div>

		      <div class="modal-footer">
		        <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
		        <button type="submit" class="btn btn-primary">Add</button>
		      </div>

		      </form>

		    </div>
		  </div>
		</div>

		

      
