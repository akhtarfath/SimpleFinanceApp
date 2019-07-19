<?php date_default_timezone_set('Asia/Jakarta'); ?>
<div id="feeIn-form" class="modal fade" role="dialog">
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
                                Input Pemasukkan Anda <button type="button" class="close" data-dismiss="modal"> &times; </button>
                            </h4>
                        </div>
                        <div class="card-body modal-body">
                            <form action="<?= base_url(); ?>finance/addfee" method="post" enctype="multipart/form-data">
                            <div class="row">
                                <div class="col-sm-6">
                                    <div class="form-group date">
                                        <label for="inputPemasukan"> Waktu Saat Ini </label>
                                        <input type="time" class="form-control" id="inputJam" value="<?= date('H:i:s'); ?>" name="timeIn" required="required">
                                        <small id="emailHelp" class="form-text text-muted"> Ketika anda menerima pemasukkan </small>
                                    </div>
                                </div>
                                <div class="col-sm-6">
                                    <div class="form-group date">
                                        <label for="inputPemasukan"> Tanggal Saat Ini </label>
                                        <input type="date" class="form-control" id="inputTanggal" value="<?= date('Y-m-d'); ?>" name="dateIn" required="required" disabled="disabled">
                                        <small id="emailHelp" class="form-text text-muted"> Maaf, Tanggal tidak dapat diubah </small>
                                    </div>
                                </div>
                                <div class="col-sm-6" style="display:none">
                                    <div class="form-group date">
                                        <label for="inputPemasukan"> Tanggal Saat Ini </label>
                                        <input type="date" class="form-control" id="inputTanggal" value="<?= date('Y-m-d'); ?>" name="dateIn" required="required">
                                        <small id="emailHelp" class="form-text text-muted"> Maaf, Tanggal tidak dapat diubah </small>
                                    </div>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-sm-6">
                                    <div class="form-group">
                                        <label for="inputPemasukan"> Jumlah Uang </label>
                                        <input type="number" class="form-control" id="inputPemasukan" aria-describedby="feeIn" placeholder="Rp." name="feeIn" required="required">
                                        <small id="emailHelp" class="form-text text-muted"> Periksa jumlah angka 0 (nol) nya. </small>
                                    </div>
                                </div>
                                <div class="col-sm-6">
                                    <div class="form-group">
                                        <label for="inputPemasukan"> Jenis Pemasukkan </label>
                                        <select name="catIn" class="form-control" id="inputKategoriIn" required="required">
                                            <option value="1"> Gaji </option>
                                            <option value="2"> Teman </option>
                                            <option value="3"> Tak Terduga </option>
                                            <option value="4"> Lembur </option>
                                            <option value="5"> Orang Tua </option>
                                        </select>
                                        <small id="emailHelp" class="form-text text-muted"> Dari mana pemasukkan anda didapat? </small>
                                    </div>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-sm-12">
                                    <div class="form-group">
                                        <textarea class="form-control" id="inputInformasiPemasukkan" placeholder="Keterangan pemasukkan" name="infIn" required="required"></textarea>
                                    </div>
                                    <div class="form-group">
                                        <button type="submit" name="btnIn"  class="btn btn-success" style="width: 100%;"> Kirim Data Pemasukkan </button>
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
<style>
    @media (min-width: 576px) {
        .modal-dialog {
            max-width: 100% !important;
            margin: 1rem auto;
        }
        textarea#inputInformasiPemasukkan {
            height: 175px;
        }
    }
</style>
