<div id="page-wrapper">
            <div class="row">
                <div class="col-lg-12">
                    <h1 class="page-header">Data Obat</h1>
                </div>
                <!-- /.col-lg-12 -->
            </div>
            <!-- /.row -->
            <div class="row">
                <div class="col-lg-12">
                    <div class="panel panel-default">
                        
                        <!-- /.panel-heading -->
                        <div class="panel-body">
                            <table width="100%" class="table table-striped table-bordered table-hover" id="dataTables-example">
                                <thead>
                                    <tr>
                                        <th>No.</th>
                                        <th>Kode Obat</th>
                                        <th>Nama Obat</th>
                                        <th>Indikasi</th>
                                        <th>Stock</th>
                                        <th>Harga</th>
                                        <th>Aksi</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <?php 
                                    $no = 0;
                                        foreach ($obat as $data) {
                                            echo '
                                                <tr>
                                                <td>'.++$no.'</td>
                                                <td>'.$data->kode_obat.'</td>
                                                <td>'.$data->nama_obat.'</td>
                                                <td>'.$data->indikasi.'</td>
                                                <td>'.$data->stock.'</td>
                                                <td>'.$data->harga.'</td>
                                                <td>
                                                <a href="'.base_url().'index.php/obat/edit_obat/'.$data->kode_obat.'" class="btn btn-info btn-sm"><i class="glyphicon glyphicon-search"></i> Edit </a>
                                                <a href="'.base_url().'index.php/buku/hapus/'.$data->kode_obat.'" class="btn btn-danger btn-sm"><i class="glyphicon glyphicon-trash"></i> Hapus </a>
                                                </td>
                                                </tr>
                                                ';
                                            }
                                            
                                    ?>
                                    
                                                <!-- <tr>
                                                <td>1</td>
                                                <td>Kode</td>
                                                <td>nama obat</td>
                                                <td>indikasi</td>
                                                <td>stock</td>
                                                <td>harga</td>
                                                <td>
                                                <a href="<?php echo base_url(); ?>index.php/obat/edit_obat" class="btn btn-info btn-sm"><i class="glyphicon glyphicon-search"></i> Lihat </a>
                                                <a href="<?php echo base_url(); ?>index.php/obat/hapus_obat" class="btn btn-danger btn-sm"><i class="glyphicon glyphicon-trash"></i> Hapus </a>
                                                </td>
                                                </tr> -->
                                                
                                </tbody>
                            </table>
                            <!-- /.table-responsive -->

                            <!-- <?php echo $pagination; ?> -->
                            
                        </div>
                        <!-- /.panel-body -->
                    </div>
                    <!-- /.panel -->
                </div>
                <!-- /.col-lg-12 -->
            </div>
            <!-- /.row -->
            
</div>
       