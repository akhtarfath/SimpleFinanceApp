<?php date_default_timezone_set('Asia/Jakarta'); ?>
<div id="feeReport-form" class="modal fade" role="dialog">
    <!-- Content -->
    <div class="content modal-dialog">
        <!-- Animated -->
        <div class="animated fadeIn">
            <!--  Traffic  -->
            <div class="row">
                <div class="col-lg-12">
                    <div class="card modal-content">
                        <div class="card-body modal-header">
                            <h4 class="box-title"> 
                                Buat Laporan Keuangan Anda <button type="button" class="close" data-dismiss="modal"> &times; </button>
                                <small id="titleHelp" class="form-text text-muted"> Ketika data disimpan, otomatis akan lanjut kehari selanjutnya </small>
                            </h4>
                        </div>
                        <div class="card-body modal-body">
                            <form action="<?= base_url('finance/makereport'); ?>" method="post" enctype="multipart/form-data">
                            <div class="row">
                                <div class="col-sm-12">
                                    <div class="form-group date">
                                        <label for="inputPemasukan"> Tanggal Pembuatan Laporan </label>
                                        <input type="date" class="form-control" id="inputTanggal" value="<?= date('Y-m-d'); ?>" disabled="disabled" name="dateIn" required="required">
                                        <small id="emailHelp" class="form-text text-muted"> Maaf, Tanggal tidak dapat diubah </small>
                                    </div>
                                </div>
                            </div>
                            <div class="row" style="display: none;">
                                <div class="col-sm-12">
                                    <div class="form-group date">
                                        <label for="inputPemasukan"> Tanggal Pembuatan Laporan </label>
                                        <input type="date" class="form-control" id="inputTanggal" value="<?= date('Y-m-d'); ?>" name="dateIn" required="required">
                                        <small id="emailHelp" class="form-text text-muted"> Maaf, Tanggal tidak dapat diubah </small>
                                    </div>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-sm-12">
                                    <div class="form-group">
                                        <label for="inputPemasukan"> Total Saldo </label>
                                        <input type="number" class="form-control" id="inputPemasukan" aria-describedby="feeIn" placeholder="Rp." name="feeTotal" disabled="disabled" required="required" value="<?= $total; ?>">
                                        <small id="emailHelp" class="form-text text-muted"> Periksa jumlah angka 0 (nol) nya. </small>
                                    </div>
                                    <div class="form-group" style="display: none;">
                                        <label for="inputPemasukan"> Total Saldo </label>
                                        <input type="number" class="form-control" id="inputPemasukan" aria-describedby="feeIn" placeholder="Rp." name="feeTotal" required="required" value="<?= $total; ?>">
                                        <small id="emailHelp" class="form-text text-muted"> Periksa jumlah angka 0 (nol) nya. </small>
                                    </div>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-sm-12">
                                    <div class="form-group">
                                        <button type="submit" name="btnIn"  class="btn btn-primary" style="width: 100%;"> 
                                            Simpan
                                        </button>
                                    </div>
                                </div>
                            </div>
                            </form>
                        </div>
                    </div>
                </div><!-- /# column -->
            </div>
            <!--  /Traffic -->
            <div class="clearfix"></div>
        <!-- /#add-category -->
        </div>
        <!-- .animated -->
    </div>
    <!-- /.content -->
</div>
<div class="clearfix"></div>
