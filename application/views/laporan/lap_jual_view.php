<div id="page-wrapper">
            <div class="row">
                <div class="col-lg-12">
                    <h1 class="page-header">Laporan Penjualan Obat</h1>
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
                                        <th>Kode Penjualan</th>
                                        <th>Tanggal Transaksi</th>
                                        <th>Nama Obat</th>
                                        <th>Jumlah Obat</th>
                                        <th>Keterangan</th>
                                        <th>Harga Satuan</th>
                                        <th>Total</th>
                                        <th>Aksi</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <?php 
                                        $no=0;
                                        foreach ($jual as $data) {
                                            echo '
                                                <tr>
                                                <td>'.++$no.'</td>
                                                <td>'.$data->id_jual.'</td>
                                                <td>'.$data->tgl_jual.'</td>
                                                <td>'.$data->nama_obat.'</td>
                                                <td>'.$data->qty.'</td>
                                                <td>'.$data->keterangan.'</td>
                                                <td>'.$data->harga.'</td>
                                                <td>'.$data->qty * $data->harga.'</td>
                                                <td>
                                                <a href="'.base_url().'index.php/transaksi/hapus/'.$data->id_jual.'" class="btn btn-danger btn-sm"><i class="glyphicon glyphicon-trash"></i> Hapus </a>
                                                </td>
                                                </tr>
                                                ';
                                            }
                                    ?> 
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
       