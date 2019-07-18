<!-- Left Panel -->
<aside id="left-panel" class="left-panel">
    <nav class="navbar navbar-expand-sm navbar-default">
        <div id="main-menu" class="main-menu collapse navbar-collapse">
            <ul class="nav navbar-nav">
                <li>
                    <a href="<?= base_url(); ?>dashboard/"><i class="menu-icon fa fa-laptop dashboard"></i> 
                        Dashboard 
                    </a>
                </li>
                <li class="menu-title"> Main Feature </li><!-- /.menu-title -->
                <li class="menu-item-has-children dropdown">
                    <a href="<?= base_url(); ?>finance/" aria-haspopup="true" aria-expanded="false">
                    <i class="menu-icon fa fa-cogs finance"></i> 
                        Keuangan 
                    </a>
                </li>
                <li class="menu-item-has-children dropdown report">
                    <a href="<?= base_url(); ?>report/" aria-haspopup="true" aria-expanded="false">
                    <i class="menu-icon fa fa-bar-chart"></i> 
                        Laporan 
                    </a>
                </li>
                <li class="menu-title"> 
                    Powered By 
                </li><!-- /.menu-title -->
                <li class="menu-item-has-children dropdown">
                    <a href="https://www.instagram.com/asambang_itsupport/" target="_blank">
                        <i class="menu-icon fa fa-instagram ig"></i> 
                        AsamBang IT
                    </a>
                </li>
            </ul>
        </div><!-- /.navbar-collapse -->
    </nav>
</aside>    
<!-- /#left-panel -->

<!-- Right Panel -->
<div id="right-panel" class="right-panel">
<style>
    i.menu-icon.fa.fa-laptop.dashboard {
        color: #00a9f3 !important;
    }
    i.menu-icon.fa.fa-cogs.finance {
        color: #f30044 !important;
    }
    i.menu-icon.fa.fa-bar-chart {
        color: #00c762 !important;
    }
    i.menu-icon.fa.fa-instagram.ig {
        color: #f30092 !important;
    }
</style>