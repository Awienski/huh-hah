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

          		<a href="" class="btn btn-primary mb-2" data-toggle="modal" data-target="#newSayurModal">Add New Sayur</a>
          		
          		<table class="table table-hover">
					  <thead>
					    <tr>
					      <th scope="col">No.</th>
					      <th scope="col">Image</th>
					      <th scope="col">Name</th>
					      <th scope="col">Price</th>
					      <th scope="col">Status</th>
					      <th scope="col">Action</th>
					    </tr>
					  </thead>
					  <tbody>
					  	<?php $i = 0 ?>
					  	<?php foreach ($sayur as $s): ?>
					  		<tr>
						      <th scope="row"><?= $i+=1 ?></th>
						      <td><?= $s['image'] ?></td>
						      <td><?= $s['nama_barangjual'] ?></td>
						      <td><?= $s['harga_jual'] ?></td>
						      <td><?php if ($s['is_available'] == 1) {
						      	echo "Active";
						      }else{
						      	echo "Non-active";
						      } ?></td>
						      <td>
						      	<a href="<?= base_url() ?>hidangan/edit_sayur/<?php echo $s['id_barangjual'] ?>" class="badge badge-success">Edit</a>
						      	<a href="<?= base_url() ?>hidangan/delete_sayur/<?php echo $s['id_barangjual'] ?>" class="badge badge-danger" onclick="return confirm('Are you sure?')">Delete</a>
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
		<div class="modal fade" id="newSayurModal" tabindex="-1" role="dialog" aria-labelledby="newSayurModalLabel" aria-hidden="true">
		  <div class="modal-dialog" role="document">
		    <div class="modal-content">
		      <div class="modal-header">
		        <h5 class="modal-title" id="newSayurModalLabel">Tambah Sayur</h5>
		        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
		          <span aria-hidden="true">&times;</span>
		        </button>
		      </div>

		      <form action="<?= base_url('hidangan/sayur') ?>" method="post">

		      <div class="modal-body">
		        <div class="form-group">
		        	<input type="hidden" name="jenis" value="3">
				   <input name="image" type="text" class="form-control" id="title" placeholder="Foto Sayur">
				</div>

				<div class="form-group">
				   <input name="name" type="text" class="form-control" id="url" placeholder="Nama Sayur">
				</div>

				<div class="form-group">
				   <input name="price" type="text" class="form-control" id="icon" placeholder="Harga">
				</div>

				<div class="form-group">
                   <select name="is_available" id="is_available" class="form-control">
                    <option selected="" value="1">Available</option>
                    <option value="0">Unavailable</option>
                   </select>
                </div>

		      </div>

		      <div class="modal-footer">
		        <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
		        <button type="submit" class="btn btn-primary">Tambah</button>
		      </div>

		      </form>

		    </div>
		  </div>
		</div>

      
