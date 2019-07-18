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
                                            <th class="field no" style="border-bottom: 1px solid #eee; text-align: left;"> No </th>
                                            <th class="field" style="border-bottom: 1px solid #eee; text-align: left;"> Waktu </th>
                                            <th class="field pemasukkan" style="border-bottom: 1px solid #eee; text-align: left;"> Keterangan </td>
                                            <th class="field" style="border-bottom: 1px solid #eee; text-align: center;"> # </th>
                                            <th class="field" style="border-bottom: 1px solid #eee; text-align: right;"> Jumlah Uang </th>
                                        </tr>
                                <?php $no = 1; 
                                    foreach($feeIn as $masuk): ?> 
                                            <tr>
                                                <td class="field no" style="background: #eee; background: #f7f7f7; text-align: center;"><?= $no; ?></td>
                                                <td class="field" style="text-transform: lowercase;"><?= $masuk->time_in; ?></td>
                                                <td class="field" style="text-transform: lowercase;"><?= $masuk->information; ?></td>
                                                <td class="field" style="text-align: center;"></td>
                                                <td class="field" style="text-align: right;"><?= number_format($masuk->fee_in,2,',','.'); ?></td>
                                            </tr>
                                <?php $no++; endforeach;
                                    foreach($feeOut as $keluar): ?>
                                            <tr>
                                                <td class="field no" style="background: #eee; background: #f7f7f7; text-align: center;"><?= $no; ?></td>
                                                <td class="field" style="text-transform: lowercase;"><?= $keluar->time_out; ?></td>
                                                <td class="field" style="text-transform: lowercase;"><?= $keluar->information; ?></td>
                                                <td class="field" style="text-align: center;"></td>
                                                <td class="field" style="text-align: right;"><?= number_format($keluar->fee_out,2,',','.'); ?></td>
                                            </tr>
                                <?php $no++; endforeach; ?>
                                    </table>
                                </div>
                                <div class="card-body">                                
                                    <table style="width: 100%; border-top: 1px solid #eee;">
                                        <tr>
                                            <td class="field" colspan="2"><b> Saldo Anda </b></td>
                                            <?php $total = ($masuk->fee_in - $keluar->fee_out); 
                                                $masuk->fee_in = $total; ?>
                                            <td class="field" style="text-align: right;" colspan="3"><b><?= number_format($total,2,',','.'); ?></b></td>
                                        </tr>
                                    </table>
                                </div>
                            </div> <!-- /.card-body -->
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
            <input class="btn btn-primary" type="button" data-toggle="modal" data-target="#simpanFinance" value="( ! ) Simpan Data">
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
</style>