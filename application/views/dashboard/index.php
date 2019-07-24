<?php error_reporting(1); ?>
<!-- Content -->
<div class="content">
    <!-- Animated -->
    <div class="animated fadeIn">
        <!-- Widgets  -->
        <div class="row">
            <div class="col-lg-3 col-md-3 cuk">
                <div class="card">
                    <div class="card-body">
                        <div class="stat-widget-five">
                            <div class="stat-icon dib flat-color-4">
                                <i class="pe-7s-piggy"></i>
                            </div>
                            <div class="stat-content">
                                <div class="text-left dib">
                                    <?php foreach($allIn as $countMasuk): 
                                        $countMasuk->masuk; $masukCuk = $countMasuk->masuk; 
                                    endforeach; ?>
                                    <div class="stat-text">
                                        <span class="saldo-count">
                                            <?= number_format($masukCuk,0,',','.'); ?> x
                                        </span>
                                    </div>
                                    <div class="stat-heading"> Masuk </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-lg-3 col-md-3 cuk">
                <div class="card">
                    <div class="card-body">
                        <div class="stat-widget-five">
                            <div class="stat-icon dib flat-color-8">
                                <i class="pe-7s-coffee"></i>
                            </div>
                            <div class="stat-content">
                                <div class="text-left dib">
                                    <?php foreach($allOut as $countKeluar): 
                                        $countKeluar->keluar; $keluarCuk = $countKeluar->keluar; 
                                    endforeach; ?>
                                    <div class="stat-text">
                                        <span class="saldo-count">
                                            <?= number_format($keluarCuk,0,',','.'); ?> x
                                        </span>
                                    </div>
                                    <div class="stat-heading"> Keluar </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-lg-3 col-md-6">
                <div class="card">
                    <div class="card-body">
                        <div class="stat-widget-five">
                            <div class="stat-icon dib flat-color-1">
                                <i class="pe-7s-cash"></i>
                            </div>
                            <div class="stat-content">
                                <div class="text-left dib">
                                    <?php foreach($nabung as $saldoKu): 
                                        $saldoKu->tabungan; $saldo = $saldoKu->tabungan; 
                                    endforeach; ?>
                                    <div class="stat-text">
                                        <span class="saldo-count">
                                            Rp <?= number_format($saldo,0,',','.'); ?> 
                                        </span>
                                    </div>
                                    <div class="stat-heading"> Saldo </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-lg-3 col-md-6">
                <div class="card">
                    <div class="card-body">
                        <div class="stat-widget-five">
                            <div class="stat-icon dib flat-color-3">
                                <i class="pe-7s-browser"></i>
                            </div>
                            <div class="stat-content">
                                <div class="text-left dib">
                                    <?php foreach($allIn as $semuaIn): 
                                        $semuaIn->fee_In; $total = $semuaIn->pemasukkan; 
                                    endforeach; ?>
                                    <div class="stat-text"> Rp 
                                        <span class="stats-count"> 
                                            <?= number_format($total,0,',','.'); ?> 
                                        </span>
                                    </div>
                                    <div class="stat-heading"> Pemasukkan </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-lg-3 col-md-6">
                <div class="card">
                    <div class="card-body">
                        <div class="stat-widget-five">
                            <div class="stat-icon dib flat-color-2">
                                <i class="pe-7s-cart"></i>
                            </div>
                            <div class="stat-content">
                                 <div class="text-left dib">
                                    <?php foreach($allOut as $semuaOut): 
                                        $semuaOut->fee_out; $total = $semuaOut->pengeluaran; 
                                    endforeach; ?>
                                    <div class="stat-text"> Rp 
                                        <span class="stats-count"> 
                                            <?= number_format($total,0,',','.'); ?> 
                                        </span>
                                    </div>
                                    <div class="stat-heading"> Pengeluaran </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- /Widgets -->
        <!--  Traffic  -->
        <!-- <div class="row">
            <div class="col-lg-12">
                <div class="card">
                    <div class="card-body">
                        <h4 class="box-title"> Trafik </h4>
                    </div>
                    <div class="row">
                        <div class="col-lg-12">
                            <div class="card-body">
                                <div class="progress-box progress-1">
                                    <h4 class="por-title"> Hemat (00%)</h4>
                                    <div class="por-txt"> "Menabung dan Jangan Lupa Bersedekah" </div>
                                    <div class="progress mb-2" style="height: 5px;">
                                        <div class="progress-bar bg-flat-color-1" role="progressbar" style="width: 40%;" aria-valuenow="10" aria-valuemin="0" aria-valuemax="100"></div>
                                    </div>
                                </div>
                                <div class="progress-box progress-2">
                                    <h4 class="por-title"> Boros (00%)</h4>
                                    <div class="por-txt"> "Hati-Hati Dalam Menggunakan Uang" </div>
                                    <div class="progress mb-2" style="height: 5px;">
                                        <div class="progress-bar bg-flat-color-4" role="progressbar" style="width: 90%;" aria-valuenow="10" aria-valuemin="0" aria-valuemax="100"></div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    <div class="card-body"></div>
                </div>
            </div>
        </div> -->
        <!--  /Traffic -->
        <div class="clearfix dashboard">
        
        </div>
    <!-- /#add-category -->
    </div>
    <!-- .animated -->
</div>
<!-- /.content -->
<div class="clearfix"></div>
<style>
    @media (min-width: 992px) {
        .col-lg-3 {
            -ms-flex: 0 0 25%;
            flex: 0 0 50%;
            max-width: 50%;
        }
        .col-lg-3.col-md-3.cuk {
            max-width: 25%;
        }
        .clearfix.dashboard {
            height: 205px;
        }
        .stat-widget-five .stat-heading {
            color: #99abb4;
            font-size: 14px;
            width: 100%;
            text-align: right;
        }
        .dib {
            display: inline-block;
            width: 100%;
        }
    }
</style>