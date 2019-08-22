      <!-- Begin Page Content -->
        <div class="container-fluid">

          <!-- Page Heading -->
          <h1 class="h3 mb-4 text-gray-800"><?= $title ?></h1>


          <div class="row">
          	<div class="col-lg-6">

          		<?= form_error('menu_name', '<div class="alert alert-danger" role="alert">', '</div>') ?>

          		<?= $this->session->flashdata('message') ?>
          		
          		<table class="table table-hover">
					  <thead>
					    <tr>
					      <th scope="col">No.</th>
					      <th scope="col">Nama Hidangan</th>
					      <th scope="col">Jumlah</th>
					      <th scope="col">Action</th>
					    </tr>
					  </thead>
					  <tbody>
					  	<?php $i = 0 ?>
					  	<?php foreach ($daftarmasak as $dm): ?>
					  		<tr>
						      <th scope="row"><?= $i+=1 ?></th>
						      <td><?= $dm['nama_barangjual'] ?></td>
						      <td><?= $dm['jumlah'] ?></td>
						      <td>
						      	<a href="<?= base_url() ?>kitchen/sudah_dimasak/<?php echo $dm['id_transaksijual'] ?>" class="badge badge-danger" onclick="return confirm('Yakin Hidangan Sudah Siap?')">Dimasak</a>
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

      
