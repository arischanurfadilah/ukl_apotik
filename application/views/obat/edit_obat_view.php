<div id="page-wrapper">
            <div class="row">
                <div class="col-lg-12">
                    <h1 class="page-header">Edit Obat</h1>
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

                                    <form role="form" method="post" action="<?php echo base_url(); ?>index.php/obat/do_edit/<?php echo $data->kode_obat; ?>" >
                                        <div class="form-group">
                                            <label>Kode Obat</label>
                                            <input type="text" name="kode_obat" class="form-control" value="<?php echo $data->kode_obat; ?>">
                                        </div>
                                        <div class="form-group">
                                            <label>Nama Obat</label>
                                            <input type="text" name="nama_obat" class="form-control" value="<?php echo $data->nama_obat; ?>">
                                        </div>
                                        <div class="form-group">
                                            <label>Indikasi</label>
                                            <input type="text" name="indikasi" class="form-control" value="<?php echo $data->indikasi; ?>">
                                        </div>
                                        <div class="form-group">
                                            <label>Stock</label>
                                            <input type="text" name="stock_obat" class="form-control" value="<?php echo $data->stock_obat; ?>">
                                        </div>
                                        <div class="form-group">
                                            <label>Harga</label>
                                            <input type="text" name="harga_obat" class="form-control" value="<?php echo $data->harga_obat; ?>">
                                        </div>
                                        <div class="form-group">
                                            <input type="submit" name="edit" value="Edit" class="btn btn-primary col-lg-4">
                                            <input type="reset" name="reset" value="Clear" class="btn btn-warning col-lg-4">
                                            <a href="<?php echo base_url(); ?>index.php/obat/data_obat/" class="btn btn-md btn-danger col-lg-4">Batal</a>
                                        </div>
                                        
                                        <!-- <a href="<?php echo base_url(); ?>index.php/obat/detil_obat/<?php echo $data->kode_obat; ?>" class="btn btn-md btn-danger">Batal</a> -->
                                        
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