<?php date_default_timezone_set('Asia/Jakarta'); ?>
<div id="feeOut-form" class="modal fade" role="dialog">
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
                                Input Pengeluaran Anda <button type="button" class="close" data-dismiss="modal"> &times; </button>
                            </h4>
                        </div>
                        <div class="card-body modal-body">
                            <form method="post">
                                <div class="form-group">
                                    <label for="inputPemasukan"> Tanggal Saat Ini </label>
                                    <input type="datetime-local" class="form-control" id="inputTanggal" value="<?= date('Y-m-d\TH:i:s'); ?>" disabled="disabled">
                                    <small id="emailHelp" class="form-text text-muted"> Maaf, waktu tidak dapat diubah </small>
                                </div>
                            <form method="post">
                                <div class="form-group">
                                    <label for="inputPemasukan"> Jumlah Uang </label>
                                    <input type="number" class="form-control" id="inputPemasukan" aria-describedby="feeIn" placeholder="Rp.">
                                    <small id="emailHelp" class="form-text text-muted"> Periksa jumlah angka 0 (nol) nya. </small>
                                </div>
                                <div class="form-group">
                                    <label for="inputPemasukan"> Jenis Pengeluaran </label>
                                    <select name="inputKategoriIn" class="form-control" id="inputKategoriIn">
                                        <option value="1"> Listrik </option>
                                        <option value="2"> Makan </option>
                                        <option value="3"> Minum </option>
                                        <option value="4"> Belanja </option>
                                        <option value="5"> Utang </option>
                                        <option value="6"> Kuliah </option>
                                        <option value="7"> Orang Tua </option>
                                        <option value="8"> Kost </option>
                                        <option value="9"> Air </option>
                                    </select>
                                    <small id="emailHelp" class="form-text text-muted"> Dari mana pemasukkan anda didapat? </small>
                                </div>
                                <div class="form-group">
                                    <textarea class="form-control" id="inputInformasiPemasukkan" placeholder="Keterangan pengeluaran"></textarea>
                                </div>
                                <div class="form-group">
                                    <button type="submit" name="btn-pengeluaran" class="btn btn-danger" style="width: 100%;"> Kirim Data Pengeluaran </button>
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
    }
</style>
