<!-- Begin Page Content -->
        <div class="container-fluid">

          <!-- Page Heading -->
          <h1 class="h3 mb-4 text-gray-800"><?= $title ?></h1>	
          

          <div class="row">
          	<div class="col-lg-6">

          		<?= form_error('menu_name', '<div class="alert alert-danger" role="alert">', '</div>') ?>

          		<?= $this->session->flashdata('message') ?>
          		

          		<form method="post" action="<?= base_url('menu/edit_submenu/'.$editsub['id']) ?>">
                <input type="hidden" name="id" value="<?= $editsub['id'] ?>">
      				  <div class="form-group">
                   <input name="title" type="text" class="form-control" id="title" placeholder="Submenu name" 
                   value="<?= $editsub['title'] ?>">
                </div>

                <div class="form-group">
                   <select name="menu_id" id="menu_id" class="form-control">
                    <option value="">Select Menu</option>
                    <?php foreach ($menu as $m): ?>
                      <?php if ($editsub['menu_id']== $m['id']){ 
                        ?>
                        <option selected value="<?= $m['id'] ?>"><?= $m['menu'] ?></option>
                      <?php }else{

                        ?>
                            <option value="<?= $m['id'] ?>"><?= $m['menu'] ?></option>
                        <?php

                      } ?>
                      
                    <?php endforeach ?>
                   </select>
                </div>

                <div class="form-group">
                   <input name="url" type="text" class="form-control" id="url" placeholder="Url" value="<?= $editsub['url'] ?>">
                </div>

                <div class="form-group">
                   <input name="icon" type="text" class="form-control" id="icon" placeholder="Icon" value="<?= $editsub['icon'] ?>">
                </div>

                <div class="form-group">
                   <select name="is_active" id="is_active" class="form-control">
                    
                    <option <?php if($editsub['is_active'] == 1){echo 'selected';} ?> value="1">Active</option>
            
                    <option <?php if($editsub['is_active'] == 0){echo 'selected';} ?> value="0">Non-active</option>
                    
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