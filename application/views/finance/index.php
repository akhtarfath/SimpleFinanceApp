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
                                    <table style="width: 100%;">
                                        <tr>
                                            <th class="field no" style="border-bottom: 1px solid #eee; text-align: left;"> no </th>
                                            <th class="field" style="border-bottom: 1px solid #eee; text-align: left;"> waktu </th>
                                            <th class="field" style="border-bottom: 1px solid #eee; text-align: left;"> penggunaan </th>
                                            <th class="field pemasukkan" style="border-bottom: 1px solid #eee; text-align: left;"> keterangan </td>
                                            <th class="field" style="border-bottom: 1px solid #eee; text-align: center;"> # </th>
                                            <th class="field" style="border-bottom: 1px solid #eee; text-align: right;"> harga </th>
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
                                            </tr>
                                <?php $no++; $feeIn = array_sum($In); endforeach; ?>
                                    <tr>
                                    <?php if($feeIn == null) { $feeIn = 0; ?>

                                    <?php } else { ?>
                                        <td class="field" colspan="5" style="border-bottom: 1px solid #eee;"> <b> Total Pemasukkan </b></td>
                                        <td class="field" style="border-bottom: 1px solid #eee; border-top: 1px solid #eee; text-align: right;"><b><?= number_format($feeIn,2,',','.'); ?></b></td>
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
                                            </tr>
                                <?php $no++; $feeOut = array_sum($Out); endforeach; ?>
                                    <tr>
                                    <?php if($feeOut == null) { $feeOut = 0; ?>

                                    <?php } else { ?>
                                        <td class="field" colspan="5" style="border-bottom: 1px solid #eee;"> <b> Total Pengeluaran </b></td>
                                        <td class="field" style="border-bottom: 1px solid #eee; border-top: 1px solid #eee; text-align: right;"><b><?= number_format($feeOut,2,',','.'); ?></b></td>
                                    <?php } ?>
                                    </tr>
                                    </table>
                                </div>
                            </div> <!-- /.card-body -->
                            <div class="card-body">                                
                                <table style="width: 100%; border-top: 1px solid #eee;">
                                    <tr>
                                    <?php if($feeIn == null && $feeOut == null) {
                                        $feeIn = 0; $feeOut = 0; ?> 

                                        <td class="field" colspan="2"><b> Saldo </b></td>
                                        <?php $total = ($feeIn - $feeOut); 
                                            $masuk->fee_in = $total; ?>
                                        <td class="field" style="text-align: right;" colspan="3"><b><?= number_format($total,2,',','.'); ?></b></td>
                                    <?php } else { ?>
                                        <td class="field" colspan="2"><b> Saldo = <?= number_format($feeIn,0,',','.'); ?> - <?= number_format($feeOut,0,',','.'); ?> </b></td>
                                        <?php $total = ($feeIn - $feeOut); 
                                            $masuk->fee_in = $total; ?>
                                        <td class="field" style="text-align: right;" colspan="3"><b><?= number_format($total,2,',','.'); ?></b></td>
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
                <input class="btn btn-success" type="button" data-toggle="modal" 
                    data-target="#feeIn-form" value="( + ) Pemasukkan">
                <input class="btn btn-danger" type="button" data-toggle="modal" 
                    data-target="#feeOut-form" value="( - ) Pengeluaran">
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
</style>