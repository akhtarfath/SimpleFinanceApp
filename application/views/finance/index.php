<?php error_reporting(1); ?>
<!-- Content -->
<div class="content">
    <!-- Animated -->
    <div class="animated fadeIn">
        <!--  Traffic  -->
        <div class="row">
            <div class="col-lg-12">
                <div class="card">
                    <div class="card-body head-finance">
                        <h3 class="box-title"> Keuangan <span style="text-align: right; position: absolute; right: 20px;"><?= $day.', '.$date;?></span></h3>
                        <small> Data akan tersimpan otomatis setelah 24 jam </small>
                    </div>
                    <div class="row">
                        <div class="col-lg-12">
                            <div class="card-body finance">
                                <div class="card-body data-finance">
                                    <table style="width: 100%;" class="table table-hover" id="dataTable" cellspacing="0">
                                        <tr>
                                            <th class="field no" style="border-bottom: 1px solid #eee; text-align: left;"> no </th>
                                            <th class="field" style="border-bottom: 1px solid #eee; text-align: left;"> waktu </th>
                                            <th class="field" style="border-bottom: 1px solid #eee; text-align: left;"> penggunaan </th>
                                            <th class="field pemasukkan" style="border-bottom: 1px solid #eee; text-align: left;"> keterangan </td>
                                            <th class="field" style="border-bottom: 1px solid #eee; text-align: center;"> # </th>
                                            <th class="field" style="border-bottom: 1px solid #eee; text-align: right;"> harga </th>
                                            <th class="field" style="border-bottom: 1px solid #eee; text-align: center;"> aksi </th>
                                        </tr>
                                <?php $no = 1;
                                    foreach($feeIn as $masuk): $status = "(+)"; $In[] = $masuk->fee_in;?> 
                                            <tr>
                                                <td class="field no" style="background: #eee; background: #f7f7f7; text-align: center;"><?= $no; ?></td>
                                                <td class="field" style="text-transform: lowercase;"><?= $masuk->time_in; ?></td>
                                                <td class="field" style="text-transform: lowercase;"><?= $masuk->cat_name; ?></td>
                                                <td class="field" style="text-transform: lowercase;"><?= $masuk->information; ?></td>
                                                <td class="field" style="text-align: center;"><?= $status; ?></td>
                                                <td class="field" style="text-align: right;"><?= number_format($masuk->fee_in,2,',','.'); ?></td>
                                                <td class="field" style="text-align: center;">
                                                    <a onclick="deleteConfirm('<?= site_url().'finance/delete/'.$masuk->num_in; ?>')" href="#delete" class="btn btn-small text-danger">&times;</a>
                                                </td>
                                            </tr>
                                <?php $no++; $feeIn = array_sum($In); endforeach; ?>
                                    <tr>
                                    <?php if($feeIn == null) { $feeIn = 0; ?>

                                    <?php } else { ?>
                                        <td class="field" colspan="5" style="border-bottom: 1px solid #eee;"><b> Total Pemasukkan </b></td>
                                        <td class="field" style="border-bottom: 1px solid #eee; border-top: 1px solid #eee; text-align: right;"><b><?= number_format($feeIn,2,',','.'); ?></b></td>
                                        <td class="field" style="border-bottom: 1px solid #eee; border-top: 1px solid #eee; text-align: right;"><b></b></td>
                                    <?php } ?>
                                    </tr>
                                <?php foreach($feeOut as $keluar): $status = "(-)"; $Out[] = $keluar->fee_out; ?>
                                            <tr>
                                                <td class="field no" style="background: #eee; background: #f7f7f7; text-align: center;"><?= $no; ?></td>
                                                <td class="field" style="text-transform: lowercase;"><?= $keluar->time_out; ?></td>
                                                <td class="field" style="text-transform: lowercase;"><?= $keluar->cat_name; ?></td>
                                                <td class="field" style="text-transform: lowercase;"><?= $keluar->information; ?></td>
                                                <td class="field" style="text-align: center;"><?= $status; ?></td>
                                                <td class="field" style="text-align: right;"><?= number_format($keluar->fee_out,2,',','.'); ?></td>
                                                <td class="field" style="text-align: center;">
                                                    <a onclick="deleteConfirm('<?= site_url('finance/delete/'.$keluar->num_out); ?>')" href="#delete" class="btn btn-small text-danger">&times;</a>
                                                </td>
                                            </tr>
                                <?php $no++; $feeOut = array_sum($Out); endforeach; ?>
                                    <tr>
                                    <?php if($feeOut == null) { $feeOut = 0; ?>

                                    <?php } else { ?>
                                        <td class="field" colspan="5" style="border-bottom: 1px solid #eee;"><b> Total Pengeluaran </b></td>
                                        <td class="field" style="border-bottom: 1px solid #eee; border-top: 1px solid #eee; text-align: right;"><b><?= number_format($feeOut,2,',','.'); ?></b></td>
                                        <td class="field" style="border-bottom: 1px solid #eee; border-top: 1px solid #eee; text-align: right;"><b></b></td>
                                    <?php } ?>
                                    </tr>
                                    </table>
                                </div>
                            </div> <!-- /.card-body -->
                            <div class="card-body">                                
                                <table style="width: 100%; border-top: 1px solid #eee;">
                                    <tr>

                                    <?php if($feeIn == null && $feeOut == null) { $feeIn = 0; $feeOut = 0; ?> 

                                        <td class="field" colspan="2">
                                            <b> Saldo </b>
                                        </td>
                                        
                                        <?php $total = ($feeIn - $feeOut); $masuk->fee_in = $total; ?>
                                        
                                        <td class="field" style="text-align: right;" colspan="3">
                                            <b><?= number_format($total,2,',','.'); ?></b>
                                        </td>

                                    <?php } else { ?>

                                        <td class="field" colspan="2">
                                            <b> Saldo = 
                                                <?= number_format($feeIn,2,',','.'); ?> 
                                                    - 
                                                <?= number_format($feeOut,2,',','.'); ?> 
                                            </b>
                                        </td>

                                    <?php $total = ($feeIn - $feeOut); $masuk->fee_in = $total; ?>
                                        
                                        <td class="field" style="text-align: right;" colspan="3">
                                            <b><?= number_format($total,2,',','.'); ?></b>
                                        </td>

                                    <?php } ?>
                                    
                                    </tr>
                                </table>
                            </div>
                        </div>
                    </div> <!-- /.row -->
                    <div class="card-body"></div>
                </div>
            </div><!-- /# column -->
        </div>
        <!--  /Traffic -->
        <div class="clearfix">
            <input class="btn btn-success" type="button" data-toggle="modal" data-target="#feeIn-form" value="( + ) Pemasukkan">
            <input class="btn btn-danger" type="button" data-toggle="modal" data-target="#feeOut-form" value="( - ) Pengeluaran">
        </div>
        <div class="clearfix">
            <div class="form-group date" style="display:none;">
                <label for="inputPemasukan"> Tanggal Saat Ini </label>
                <input type="date" class="form-control" id="inputTanggal" value="<?= $masuk->date_in; ?>" name="dateIn">
                <small id="emailHelp" class="form-text text-muted"> Maaf, Tanggal tidak dapat diubah </small>
            </div>
            <div class="form-group" style="display:none;">
                <label for="inputPemasukan"> Jumlah Uang </label>
                <input type="number" class="form-control" id="inputPemasukan" aria-describedby="feeIn" placeholder="Rp." name="feeIn" value="<?= $total; ?>">
                <small id="emailHelp" class="form-text text-muted"> Periksa jumlah angka 0 (nol) nya. </small>
            </div>
            <div class="form-group btn">
                <input class="btn btn-primary" type="button" data-toggle="modal" 
                    data-target="#feeReport-form" value="( ! ) Buat Laporan">
            </div>
        </div>
    <!-- /#add-category -->
    </div>
    <!-- .animated -->
</div>
<!-- /.content -->
<div class="clearfix"></div>

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
                                <small id="emailHelp" class="form-text text-muted"> Jika ingin membuat laporan ditanggal yang sama, tolong hapus terlebih dahulu laporan sebelumnya dengan tanggal yang sama. Terima Kasih </small>
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

<style>
    .card-body.finance {
        height: 365px;
        overflow: auto;
        max-height: 365px;
    }
    .field {
        padding: 13px 17px;
    }
    .field.no {
        border-bottom: 1px solid #eee;
        width: 55px;
    }
    .card-body.data-finance {
        padding-top: 5px;
    }
    .form-group.btn {
        margin: 0px 0px;
        display: grid;
        padding: 13px 0px;
    }

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