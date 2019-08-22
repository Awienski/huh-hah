      <!-- Begin Page Content -->
        <div class="container-fluid">

          <!-- Page Heading -->
          <h1 class="h3 mb-4 text-gray-800"><?= $title ?></h1>

                <div class="row">
                    <div class="col-md-12">
                        <div class="panel panel-default">
                            <div class="panel-body">
                                <?php echo form_open('admin/laporan', array('class'=>'form-inline')); ?>
                                    <div class="form-group">
                                        <label for="tanggal1">Tanggal</label>
                                        <input type="date" name="tanggal1" id="tanggal1" class="form-control" placeholder="Tanggal Mulai">
                                    </div>
                                    <div class="form-group">
                                        <label for="tanggal2"> - </label>
                                        <input type="date" name="tanggal2" id="tanggal2" class="form-control" placeholder="Tanggal Selesai">
                                    </div>
                                    <button class="btn btn-primary btn-sm" type="submit" name="submit"> Tampilkan</button>
                                </form>
                            </div>
                        </div>
                        <!-- /. PANEL  -->
                    </div>


                    <div class="col-md-12 mt-4">
                        <div class="panel panel-default">
                            <div class="panel-body">
                                <div class="table-responsive">
                                    <table class="table table-striped table-bordered " id="dataTables-example">
                                        <thead>
                                            <tr>
                                                <th>No.</th>
                                                <th>No Transaksi</th>
                                                <th>Tanggal Transaksi</th>
                                                <th>Nama Kasir</th>
                                                <th>Nama Pelanggan</th>
                                                <th>Total Transaksi</th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                        <?php $no=1; $total=0; foreach ($record->result() as $r){ ?>
                                            <tr class="gradeU">
                                                <td><?php echo $no ?></td>
                                                <td><?php echo $r->id_invoice ?></td>
                                                <td><?php echo $r->tanggal ?></td>
                                                <td><?php echo $r->nama_user ?></td>
                                                <td><?php echo $r->nama_pelanggan ?></td>
                                                <td>Rp. <?php echo number_format($r->total) ?>
                                            </tr>
                                        <?php $total += $r->total;
                                        $no++; } ?>
                                        </tbody>
                                        <td colspan="5" align="left">T O T A L</td>
                                        <td>Rp. <?php echo number_format($total);?></td>
                                         
                                    </table>
                                            <a href="<?= base_url('admin/pdf') ?>" class="btn btn-danger btn-sm active" role="button">Laporan PDF</a>
                                </div>
                                <!-- /. TABLE  -->
                            </div>
                        </div>
                    </div>
                </div>
                <!-- /. ROW  -->
        </div>
        <!-- /.container-fluid -->
      </div>
      <!-- End of Main Content -->

      
