<?php error_reporting(1); ?>
<!-- Content -->
<div class="content">
    <!-- Animated -->
    <div class="animated fadeIn">
        <!--  Traffic  -->
        <div class="row">
            <div class="col-lg-12">
                <div class="card">
                    <div class="card-body">
                        <h4 class="box-title"> Laporan </h4>
                    </div>
                    <div class="row">
                        <div class="col-lg-12">
                            <div class="card-body">
                                <table style="width: 100%;" class="table table-hover" id="dataTable" cellspacing="0">
                                    <tr>
                                        <th class="field no" style="border-bottom: 1px solid #eee; text-align: left;"> no </th>
                                        <th class="field" style="border-bottom: 1px solid #eee; text-align: left;"> waktu </th>
                                        <th class="field" style="border-bottom: 1px solid #eee; text-align: right;"> saldo </th>
                                        <th class="field" style="border-bottom: 1px solid #eee; text-align: center;"> aksi </th>
                                    </tr>
                            <?php $no = 1; foreach($reports as $laporan): $jumLaporan[] = $laporan->saldo;?> 
                                    <tr>
                                        <td class="field no" style="background: #eee; background: #f7f7f7; text-align: center;"><?= $no; ?></td>
                                        <td class="field" style="text-transform: lowercase;"><?= $laporan->date; ?></td>
                                        <td class="field" style="text-align: right;">
                                            <?= number_format($laporan->saldo_total,2,',','.'); ?>
                                        </td>
                                        <td class="field" style="text-align: center;">
                                            <a onclick="deleteConfirm('<?= site_url().'finance/delete/'.$laporan->num_report ?>')" href="#delete" class="btn btn-small text-danger">&times;</a>
                                        </td>
                                    </tr>
                            <?php $no++; $laporanIn = array_sum($jumLaporan); endforeach; ?>
                                </table>    
                            </div> <!-- /.card-body -->
                            <div class="card-body">                                
                                <table style="width: 100%; border-top: 1px solid #eee;">
                                    <tr>
                                    <?php if($laporanIn == null) { $laporanIn = 0; ?>
                                        <td class="field" style="border-bottom: 1px solid #eee;"><b> Belum Ada Laporan </b></td>
                                    <?php } else { ?>
                                        <td class="field" style="border-bottom: 1px solid #eee;"><b> Total Saldo </b></td>
                                        <td class="field" style="border-bottom: 1px solid #eee; border-top: 1px solid #eee; text-align: right;"><b><?= number_format($laporanIn,2,',','.'); ?></b></td>
                                        <td class="field" style="border-bottom: 1px solid #eee; border-top: 1px solid #eee; text-align: right;"><b></b></td>
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
        <div class="clearfix"></div>
    <!-- /#add-category -->
    </div>
    <!-- .animated -->
</div>
<!-- /.content -->
<div class="clearfix"></div>