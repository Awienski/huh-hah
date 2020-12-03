<!-- Begin Page Content -->
        <div class="container-fluid">

          <!-- Page Heading -->
          <h1 class="h3 mb-4 text-gray-800"><?= $title ?></h1>	
          

          <div class="row">
          	<div class="col-lg-6">

          		<?= form_error('menu_name', '<div class="alert alert-danger" role="alert">', '</div>') ?>

          		<?= $this->session->flashdata('message') ?>
          		

          		<form method="post" action="<?= base_url('hidangan/edit_sambal/'.$sambal['id_barangjual']) ?>">
                <input type="hidden" name="id_barangjual" value="<?= $sambal['id_barangjual'] ?>">
                <input type="hidden" name="jenis" value="1">

      			   <div class="form-group">
                   <input name="image" type="text" class="form-control" id="title" placeholder="Nama gambar" 
                   value="<?= $sambal['image'] ?>">
                </div>

                <div class="form-group">
                   <input name="name" type="text" class="form-control" id="name" placeholder="Nama Sambal" value="<?= $sambal['nama_barangjual'] ?>">
                </div>

                <div class="form-group">
                   <input name="price" type="text" class="form-control" id="price" placeholder="Price" value="<?= $sambal['harga_jual'] ?>">
                </div>

                <div class="form-group">
                   <select name="is_available" id="is_available" class="form-control">
                    <option <?php if($sambal['is_available'] == 1){echo 'selected';} ?> value="1">Available</option>
                    <option <?php if($sambal['is_available'] == 0){echo 'selected';} ?> value="0">Unavailable</option>
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