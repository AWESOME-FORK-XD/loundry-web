<ul class="sidebar-menu" style='margin-top:20px;'>
  <!-- <li class="menu-header">Menu</li> -->
  <li><a class="nav-link btnDashboard" href="#!" v-on:click='berandaAct'><i class="fas fa-home"></i> <span>Dashboard</span></a></li>
  <li><a class="nav-link btnKartuLaundry" href="#!" v-on:click='kartuLaundryAtc'><i class="fas fa-clipboard"></i> <span>Kartu Laundry</span></a></li>
  <li><a class="nav-link btnLaundryRoom" href="#!" v-on:click='laundryRoomAtc'><i class="fas fa-tshirt"></i> <span>Laundry Room</span></a></li>
  <li class="dropdown">
    <a href="#" class="nav-link has-dropdown" data-toggle="dropdown"><i class="fas fa-newspaper"></i> <span>Data Master</span></a>
    <ul class="dropdown-menu">
      <li><a class="nav-link" href="#!" v-on:click='produkServiceAtc'>Produk & Service</a></li>
      <li><a class="nav-link" href="#!" v-on:click='pelangganAtc'>Pelanggan</a></li>
      <li><a class="nav-link" href='#!' v-on:click='promoAtc'>Promo</a></li>
      <li><a class="nav-link" href="#!" v-on:click='pengeluaranLaundryAtc'>Pengeluaran Laundry</a></li>
      <li><a class="nav-link" href="#!" v-on:click='broadcastPesanAtc'>Broadcast Pesan</a></li>
    </ul>
  </li>
  <li><a class="nav-link " href="#!" v-on:click='dataTransaksiAtc'><i class="fas fa-receipt"></i> <span>Data Transaksi</span></a></li>
  <li class="dropdown">
    <a href="#" class="nav-link has-dropdown" data-toggle="dropdown"><i class="fas fa-chart-line"></i> <span>Laporan</span></a>
    <ul class="dropdown-menu">
      <li><a class="nav-link" href="#!" v-on:click='arusKasAtc'>Pemasukan</a></li>
      <li><a class="nav-link" href="#!" v-on:click='laporanTransaksiAtc'>Laporan Transaksi</a></li>
      <!-- <li><a class="nav-link" href="#!" v-on:click=''>Statistik Laundry</a></li> -->
      
    </ul>
  </li>
  <li class="dropdown">
    <a href="#" class="nav-link has-dropdown" data-toggle="dropdown"><i class="	fas fa-cogs"></i> <span>Setting Laundry</span></a>
    <ul class="dropdown-menu">
      <li><a class="nav-link" href="#!" v-on:click='pengaturanUmumAtc'>Pengaturan Umum</a></li>
      <li><a class="nav-link" href="#!" v-on:click='manajemenUserAtc'>Manajemen User</a></li>
      <!-- <li><a class="nav-link" href="#!" v-on:click='backupRestoreAtc'>Backup & Restore Data</a></li> -->
    </ul>
  </li>
  <li><a class="nav-link" id='btnBantuan' href='#!' v-on:click='bantuanAtc'><i class="fas fa-info-circle"></i> <span>Bantuan</span></a></li>
  <li><a class="nav-link" id='btnLogOut' href="<?= HOMEBASE; ?>laundry"><i class="fas fa-sign-out-alt"></i> <span>LogOut</span></a></li>
</ul> 