<div id="page-wrapper">
            <div class="row">
                <div class="col-lg-12">
                    <h1 class="page-header">Form Penjualan Obat</h1>
                </div>
                <!-- /.col-lg-12 -->
            </div>
            <!-- /.row -->
            <div class="row">
                <div class="col-lg-12">
                    <div class="panel panel-default">
                        
                        <div class="panel-body">
                            <div class="row">
                                <div class="col-lg-12">

                                <?php
                                    if (!empty($notif)) {
                                        echo '<div class="alert alert-danger">';
                                        echo $notif;
                                        echo '</div>';
                                    }
                                
                                    $datestring = '%Y - %m - %d'; 
                                    $time = time();
                                ?>

                                    <form role="form" method="post" action="<?php echo base_url(); ?>index.php/transaksi/do_jual">
                                        <div class="form-group col-lg-12">
                                            <label>Kode Penjualan</label>
                                            <input type="text" name="id_jual" value="<?php echo $idjualacak;?>" readonly class="form-control">
                                        </div>
                                        <div class="form-group col-lg-12">
                                            <label>Tanggal Beli</label>
                                            <input type="text" name="tgl_jual" class="form-control" value="<?php  echo mdate($datestring, $time);  ?>" readonly>
                                        </div>
                                        <div class="form-group col-lg-12">
                                        <label>Nama Obat</label>
                                        <select class="form-control" name="nama_obat">
                                            <?php
                                                foreach ($obat as $o) { ?>
                                                    <option value="<?php echo $o->kode_obat; ?>"> <?php echo $o->nama_obat; ?></option>
                                                
                                            <?php } ?>
                                        </select>
                                        </div>
                                        <div class="form-group col-lg-12">
                                            <label>Banyak Obat</label>
                                            <input type="number" name="qty" class="form-control">
                                        </div>
                                        <div class="form-group col-lg-12">
                                            <label>Keterangan</label>
                                            <select class="form-control" name="keterangan">
                                                <option value="resep">Resep</option>
                                                <option value="non_resep">Non Resep</option>
                                            </select>
                                        </div>

                                        <div class="form-group col-lg-6">
                                            <input type="submit" name="jual" value="Jual" class="btn btn-primary btn-block">
                                        </div>
                                        <div class="form-group col-lg-6">
                                            <input type="reset" name="reset" value="Clear" class="btn btn-danger btn-block">
                                        </div>

                                        <div class="form-group col-lg-12">
                                            <label>Total</label>
                                            <input type="text" name="total_jual" class="form-control" <?php echo $total_jual; ?> readonly>
                                        </div>
                                        
                                    </form>
                                </div>
                                
                            </div>
                            <!-- /.row (nested) -->
                        </div>
                        <!-- /.panel-body -->
                    </div>
                    <!-- /.panel -->
                </div>
                <!-- /.col-lg-12 -->
            </div>
            <!-- /.row -->

        </div>
        <!-- /#page-wrapper -->
