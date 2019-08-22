      <!-- Begin Page Content -->
        <div class="container-fluid">

          <!-- Page Heading -->
          <h1 class="h3 mb-4 text-gray-800"><?= $title ?></h1>

          <div class="row">
                    <div class="col-md-12">
                        <div class="panel panel-default">
                            <div class="panel-body form-horizontal">
                                <div class="panel-body">
                                    <div class="table-responsive">
                                    <table class="table table-striped table-bordered">
                                        <thead>
                                            <tr>
                                                <th>No.</th>
                                                <th>Nama Barang</th>
                                                <th>jumlah</th>
                                                <th>Harga</th>
                                                <th>Sub Total</th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                        <?php $nota = $this->uri->segment(3);$no=1; $total=0; foreach ($detail as $r){ ?>
                                            <tr class="gradeU">
                                                <td><?php echo $no ?></td>
                                                <td><?php echo $r['nama_barangjual'] ?></td>
                                                <td><?= $r['jumlah'] ?></td>
                                                <td>Rp. <?= number_format($r['harga_jual']) ?></td>
                                                <td>Rp. <?php echo number_format($r['jumlah']*$r['harga_jual']) ?>
                                                </td>
                                            </tr>
                                            <?php $total=$total+($r['jumlah']*$r['harga_jual']);
                                            $no++; } ?>
                                            <tr class="gradeA">
                                                <td colspan="4" align="right">T O T A L</td>
                                                <td>Rp. <?php echo number_format($total);?></td>
                                                <input type="hidden" id="total" value="<?php echo $total ?>">
                                            </tr>
                                        </tbody>
                                    </table>
                                </div> 

                                <form class="col-sm-6">
                                <?php echo form_open('transaksijual/selesai_belanja'); ?>
                                <div class="form-group">
                                    <label class="col-sm-2 control-label">Bayar</label>
                                    <div class="col-sm-4">
                                    <input type='text' name='cash' id='UangCash' class='form-control' required="" onkeyup='kembalian(this.value)'>
                                    
                                    </div>
                                </div>
                                                            
                               
                                <div class="form-group">
                                    <label class="col-sm-2 control-label">Kembali</label>
                                    <div class="col-sm-4">
                                    <input type='text' id='UangKembali' class='form-control' disabled>
                                    </div>
                                </div>
                                <div class="form-group">
                                    <div class="col-sm-offset-2 col-sm-10">
                                        
                                        <?php echo anchor('kasir/selesai_belanja/'.$nota,'SIMPAN',array('class'=>'btn btn-success btn-sm'))?>
                                    </div>
                                </div>
                                </form>      
                             </div>
                        </div>
                    </div>
                </div>
                        
                                    
                   <script>
                        function kembalian(kembalian)  {
                          var total = document.getElementById("total").value;

                          var kembalian = kembalian - total;
                                
                            if (kembalian > total) {
                                alert('Masukan Jumlah uang lebih dari total');
                                document.getElementById("UangKembali").value = '';
                                document.getElementById("UangCash").focus();
                            }else{
                             document.getElementById("UangKembali").value = kembalian;
                            }
                        }



                        function diskon(diskon)  {
                          var total = document.getElementById("total").value;

                          var diskon = diskon - total;
                                
                            if (kembaliandiskon > total) {
                                alert('Masukan Jumlah uang lebih dari total');
                                document.getElementById("Diskon").value = '';
                                document.getElementById("UangCash").focus();
                            }else{
                             document.getElementById("UangKembalidiskon").value = kembaliandiskon;
                            }
                        }
                    </script>
                    </div>


        </div>
        
        <!-- /.container-fluid -->

      </div>
      <!-- End of Main Content -->

      
