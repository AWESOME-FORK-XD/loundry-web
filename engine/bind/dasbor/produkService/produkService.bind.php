<div>
<div style='margin-bottom:15px;' id='divProdukService'>
<a href='#!' class='btn btn-lg btn-primary  btn-icon icon-left' v-on:click='tambahProdukService'><i class="fas fa-plus-circle"></i> Tambah Item</a>
</div>
<div class="row" id='divTabelProduk'>
<table id='tblPelanggan' class='table'>
<thead>
<tr>
<td>Produk</td><td>Deskripsi</td><td>Satuan - Harga</td><td>Total Transaksi</td><td>Aksi</td>
</tr>
</thead>
<tbody>
<?php
foreach($data['produkService'] as $ps):
    $kdService      = $ps['kd_service'];
    //cari total transaksi per service 
    $jlhTransaksi   = $this -> state('produkServiceData') -> totalTransaksiProduk($kdService);
?>
<tr>
<td><span style='font-size:15px;font-weight:bold;'><?=$ps['nama']; ?></span></td>
<td><?=$ps['deks']; ?></td>
<td><?=$ps['satuan']; ?> - Rp. <?=number_format($ps['harga']); ?></td>
<td><?=$jlhTransaksi; ?></td>
<td><a href='#!' class='btn btn-sm btn-primary icon-left'><i class='fas fa-search-plus'></i> Detail</a></td>
</tr>

<?php endforeach; ?>
</tbody>
</table>
</div>
</div>
<script src="<?=STYLEBASE; ?>/dasbor/produkService.js"></script>
