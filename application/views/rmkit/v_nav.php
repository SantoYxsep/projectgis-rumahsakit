<div class="navbar-default sidebar" role="navigation">
                    <div class="sidebar-nav navbar-collapse">
                        <ul class="nav" id="side-menu">
                            <li class="sidebar-search">
                                <form action="<?=base_url("cari")?>" method="post">
                                <div class="input-group custom-search-form">
                                    <input type="text" class="form-control" name="carirs" placeholder="Search...">
                                    <span class="input-group-btn">
                                        <button class="btn btn-primary" type="submit">
                                            <i class="fa fa-search"></i>
                                        </button>
                                    </span>
                                </div>
                                </form>
                                <!-- /input-group -->
                            </li>
                            <li>
                                <a href="<?=base_url()?>"><i class="fa fa-dashboard fa-map"></i> Pemetaan</a>
                            </li>
                            
                            <li>
                                <?php
                                if($_SESSION["admin"] == "admin"){
                                 ?>
                                <a href="<?=base_url('Tablers')?>"><i class="fa fa-table fa-fw"></i> Rumah Sakit</a>
                               <?php } ?>
                            </li>
                        
                        </ul>
                    </div>
                    <!-- /.sidebar-collapse -->
                </div>
                <!-- /.navbar-static-side -->
            </nav>
                        <!-- Page Content -->
                        <div id="page-wrapper">
                <div class="container-fluid">
                    <div class="row">
                        <div class="col-lg-12">
                            <h1 class="page-header"><?=$title?></h1>
                        </div>