<div id="page-wrapper">
            <div class="row">
                <div class="col-lg-12">
                    <h1 class="page-header">Form Pembelian Obat</h1>
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

                                <!-- <?php
                                    if (!empty($notif)) {
                                        echo '<div class="alert alert-danger">';
                                        echo $notif;
                                        echo '</div>';
                                    }

                                ?> -->

                                <?php 
                                    $datestring = '%Y - %m - %d'; 
                                    $time = time();
                                ?>

                                    <!-- <form role="form" method="post" action="<?php echo base_url(); ?>index.php/transaksi/do_jual"> -->
                                    <form role="form" method="post" action="">
                                        <div class="form-group col-lg-12">
                                            <label>Tanggal Beli</label>
                                            <input type="text" name="tgl_beli" class="form-control" value="<?php  echo mdate($datestring, $time);  ?>" disabled>
                                        </div>
                                        <div class="form-group col-lg-3">
                                            <label>Nama Obat</label>
                                            <input type="text" name="nama_obat" class="form-control">
                                        </div>
                                        <div class="form-group col-lg-3">
                                            <label>Indikasi</label>
                                            <input type="text" name="indikasi" class="form-control">
                                        </div>
                                        <div class="form-group col-lg-3">
                                            <label>Banyak Obat</label>
                                            <input type="text" name="banyak_obat" class="form-control">
                                        </div>
                                        <div class="form-group col-lg-3">
                                            <label>Harga</label>
                                            <input type="text" name="harga" class="form-control">
                                        </div>
                                        
                                        <div class="form-group col-lg-6">
                                            <input type="submit" name="beli" value="Beli" class="btn btn-primary btn-block">
                                        </div>
                                        <div class="form-group col-lg-6">
                                            <input type="reset" name="reset" value="Clear" class="btn btn-danger btn-block">
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