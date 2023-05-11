        <!-- JavaScript Libraries -->
    <script src="https://code.jquery.com/jquery-3.4.1.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0/dist/js/bootstrap.bundle.min.js"></script>
    <script src="lib/wow/wow.min.js"></script>
    <script src="lib/easing/easing.min.js"></script>
    <script src="lib/waypoints/waypoints.min.js"></script>
    <script src="lib/counterup/counterup.min.js"></script>
    <script src="lib/owlcarousel/owl.carousel.min.js"></script>
    <script src="lib/tempusdominus/js/moment.min.js"></script>
    <script src="lib/tempusdominus/js/moment-timezone.min.js"></script>
    <script src="lib/tempusdominus/js/tempusdominus-bootstrap-4.min.js"></script>

    <!-- Template Javascript -->
    <script src="js/main.js"></script>

<aside class="main-sidebar">
    <section class="sidebar">
      <ul class="sidebar-menu" data-widget="tree">
        <li><a href="<?php echo base_url('dashboard')?>"><i class="fa fa-home"></i> <span>Dashboard</span></a></li>
        <li><a href="<?php echo base_url('data_produk')?>"><i class="fa fa-file"></i> <span>Produk</span></a></li>
        <li><a href="<?php echo base_url('data_transaksi_sewa')?>"><i class="fa fa-file"></i> <span>Transaksi Sewa</span></a></li>
        <li><a href="<?php echo base_url('data_transaksi_jasa')?>"><i class="fa fa-file"></i> <span>Transaksi Jasa</span></a></li>
        <li class="treeview">
          <a href="#">
            <i class="fa fa-folder"></i> <span>Data Master</span>
            <span class="pull-right-container">
              <i class="fa fa-angle-left pull-right"></i>
            </span>
          </a>
          <ul class="treeview-menu">
            <li><a href="<?php echo base_url('data_kategori_sewa')?>"><i class="fa fa-circle-o"></i> Kategori Produk</a></li>
            <li><a href="<?php echo base_url('data_kategori_jasa')?>"><i class="fa fa-circle-o"></i> Kategori Jasa</a></li>
          </ul>
        </li>
        <li class="treeview">
          <a href="#">
            <i class="fa fa-folder"></i> <span>Laporan</span>
            <span class="pull-right-container">
              <i class="fa fa-angle-left pull-right"></i>
            </span>
          </a>
          <ul class="treeview-menu">
            <li><a href="<?php echo base_url('laporan_sewa')?>"><i class="fa fa-file"></i> Transaksi Sewa</a></li>
            <li><a href="<?php echo base_url('laporan_jasa')?>"><i class="fa fa-file"></i> Transaksi Jasa</a></li>
          </ul>
        </li>
        <li><a href="<?php echo base_url('data_member')?>"><i class="fa fa-users"></i> <span>Manage Member</span></a></li>
        <li><a href="<?php echo base_url('pengaturan')?>"><i class="fa fa-gears"></i> <span>Pengaturan</span></a></li>
      </ul>
    </section>
  </aside>
