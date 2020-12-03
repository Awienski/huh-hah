      <!-- Begin Page Content -->
        <div class="container-fluid">

          <!-- Page Heading -->
          <h1 class="h3 mb-4 text-gray-800"><?= $title ?></h1>


          <div class="d-flex">
			  <div class="dropdown mr-1">
			    <button type="button" class="btn btn-secondary dropdown-toggle" id="dropdownMenuOffset" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" data-offset="10,20">
			      Pilih Jenis Hidangan
			    </button>
			    <div class="dropdown-menu" aria-labelledby="dropdownMenuOffset">
			      <a class="dropdown-item" href="<?= base_url('Kitchen/ketersediaan') ?>">Sambal</a>
			      <a class="dropdown-item" href="<?= base_url('Kitchen/ketersediaan_lauk') ?>">Lauk</a>
			      <a class="dropdown-item" href="<?= base_url('Kitchen/ketersediaan_sayur') ?>">Sayur</a>
			      <a class="dropdown-item" href="<?= base_url('Kitchen/ketersediaan_minum') ?>">Minum</a>
			      <a class="dropdown-item" href="<?= base_url('Kitchen/ketersediaan_buah') ?>">Buah</a>
			      <div class="dropdown-divider"></div>
      				<a class="dropdown-item" href="<?= base_url('Kitchen/unavailable_list') ?>">Unavailable List</a>
			    </div>
			  </div>
			</div>

			<h1 class="h3 mt-4 mb-4 text-gray-800"><?= $title2 ?></h1>

			<div class="row">
          	<div class="col-lg-8">

          		<?= form_error('menu_name', '<div class="alert alert-danger" role="alert">', '</div>') ?>

          		<?= $this->session->flashdata('message') ?>

          		<table class="table table-hover">
					  <thead>
					    <tr>
					      <th scope="col">No.</th>
					      <th scope="col">Hidangan</th>
					      <th scope="col">Status</th>
					      <th scope="col">Stok Hidangan</th>
					      <th scope="col">Aksi</th>
					    </tr>
					  </thead>
					  <tbody>
					  	<?php $i = 0 ?>
					  	<?php foreach ($sambal as $s): ?>
					  		<tr>
						      <th scope="row"><?= $i+=1 ?></th>
						      <td><?= $s['nama_barangjual'] ?></td>
						      <td><?php if ($s['stok'] >= 1) {
						      	echo "<span class='badge badge-success'>Available</span>";
						      }else{
						      	echo "<span class='badge badge-danger'>Unavailable</span>";
						      } ?></td>
						      <td align="center"><?= $s['stok'] ?></td>
						      <td>
						      	<a href="<?= base_url() ?>kitchen/edit_ketersediaan_sambal/<?php echo $s['id_barangjual'] ?>" class="badge badge-primary">Update Stok</a>
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

      
