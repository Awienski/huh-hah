      <!-- Begin Page Content -->
        <div class="container-fluid">

          <!-- Page Heading -->
          <h1 class="h3 mb-4 text-gray-800"><?= $title ?></h1>

          <div class="row">
                    <div class="col-md-12">
                        <div class="panel panel-default">
                            <div class="panel-body form-horizontal">

                                <?php echo form_open('pemesanan/pesan'); ?>
                                <form>
                                    <div class="form-group">
                                        <label class="col-sm-2 control-label">Nama Hidangan</label>
                                        <div class="col-sm-4">
                                        <input list="barang" name="barang" placeholder="masukan nama hidangan" class="form-control">
                                        </div>
                                    </div>
                                    <div class="form-group">
                                        <label class="col-sm-2 control-label">Jumlah</label>
                                        <div class="col-sm-4">
                                        <input type="text" name="jumlah" placeholder="jumlah" class="form-control" required="" >
                                        </div>
                                    </div>
                                    <div class="form-group">
                                        <div class="col-sm-offset-2 col-sm-10">
                                        <button type="submit" name="submit" class="btn btn-primary btn-sm">TAMBAH</button>  
                                        </div>
                                    </div>
                                </form>
                                <datalist id="barang">
                                <?php foreach ($barang->result() as $b) {
                                echo "<option value='$b->nama_barangjual'>";
                                } ?>
                                                        
                                </datalist>
                                <div class="panel-body">
                                    <div class="table-responsive">
                                    <table class="table table-striped table-bordered">
                                        <thead>
                                            <tr>
                                                <th>No.</th>
                                                <th>Nama Hidangan</th>
                                                <th>jumlah</th>
                                                <th>Harga</th>
                                                <th>Sub Total</th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                        <?php 
                                            $user = $this->db->get_where('user', ['email' => $this->session->userdata('email')])->row_array();
                                            $tanggal = date('Ymd'); 
                                            ?>
                                        <?php $no=1; $total=0; foreach ($detail as $r){ ?>
                                            <tr class="gradeU">
                                                <td><?php echo $no ?></td>
                                                <td><?php echo $r->nama_barangjual.' - '.anchor('pemesanan/hapusitem/'.$r->id_transaksijual,'Hapus',array('style'=>'color:red;')) ?></td>
                                                <td><?php echo $r->jumlah ?></td>
                                                <td>Rp. <?php echo number_format($r->harga_jual) ?></td>
                                                <td>Rp. <?php echo number_format($r->jumlah*$r->harga_jual) ?>
                                                </td>
                                            </tr>
                                            <?php $total=$total+($r->jumlah*$r->harga_jual);
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
                                    <a href="<?= base_url().'pemesanan/pesanmenu/'.$total.'/'.$user['name'].'/'.$tanggal?>" class="badge badge-primary" onclick="return confirm('Apakah Pesanan Anda Sudah Benar?')">ORDER</a>
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

      
