<div class="d-flex flex-column flex-md-row align-items-center p-3 px-md-4 mb-3 bg-white border-bottom shadow-sm">
  <h5 class="my-0 mr-md-auto font-weight-normal">Data Penjualan Usaha AR Tech</h5>
  <nav class="my-2 my-md-0 mr-md-3">
    <a class="align-middle btn btn-success" href="<?=base_url('pweb/tambah')?>">Tambah Data</a>
  </nav>
  <a class="align-middle btn btn-danger" href="<?=base_url('pweb/logout')?>">Sign Out</a>
</div>

<div class="limiter">
		<div class="container-table100">
			<div class="wrap-table100">
      <?php if($this->session->flashdata('pesan') == "Ditambah"): ?>
						<div class="text-center alert alert-success" role="alert">
							Data Berhasil ditambah
						</div>
  <?php elseif($this->session->flashdata('pesan') == "Diubah"): ?>
						<div class="text-center alert alert-success" role="alert">
							Data Berhasil diubah
						</div>
  <?php elseif($this->session->flashdata('pesan') == "Dihapus"): ?>
						<div class="text-center alert alert-success" role="alert">
							Data Berhasil Dihapus!
						</div>
					<?php endif?>
          <br>
          <br>
          <br>
				<div class="table100">
					<table>
						<thead>
							<tr class="table100-head">
								<th rowspan="2" class="column2 align-middle text-center">No</th>
								<th rowspan="2" class="column1 align-middle text-center">Tanggal</th>
								<th colspan="5" class="column3 align-middle text-center">Cabang</th>
								<th rowspan="2" class="column4 align-middle text-center">Keterangan</th>
								<th rowspan="2" class="column5 align-middle text-center">Aksi</th>
							</tr>
              <tr class="table100-head">
        <th class="text-center">Bekasi</th>
        <th class="text-center">Jakarta</th>
        <th class="text-center">Depok</th>
        <th class="text-center">Bandung</th>
        <th class="text-center">Rata - rata</th>
      </tr>
						</thead>
            <tbody>
      <?php 
      $no = 1; 
      foreach($nilai as $data): ?>
      <tr
      <?php if($data['keterangan'] == "Tidak Memenuhi"){
        echo "class = 'bg-warning'";
      }
      ?>
      >
        <th class="column2 align-middle text-center"><?=$no++?></th>
        <td class="column1 align-middle"><?=$data['nama_mahasiswa']?></td>
        <td class="column3 align-middle text-center"><?=$data['nilai1']?></td>
        <td class="column3 align-middle text-center"><?=$data['nilai2']?></td></td>
        <td class="column3 align-middle text-center"><?=$data['nilai3']?></td></td>
        <td class="column3 align-middle text-center"><?=$data['nilai4']?></td></td>
        <td class="column3 align-middle text-center"><?=$data['rata']?></td></td>
        <td class="column4 align-middle text-center"><?=$data['keterangan']?></td>
        <td class="column5 align-middle text-center">
          <a href="<?=base_url('pweb/edit/'. $data['id_nilai'])?>" class="column5 align-middle btn btn-success">Edit</a>
          <a href="<?=base_url('pweb/delete/'. $data['id_nilai'])?>" class="column5 align-middle btn btn-danger" onclick="return confirm('Data ini akan dihapus, Anda yakin?')">Hapus</a>
        </td>
      </tr>
      <?php endforeach ?>
    </tbody>
					</table>
				</div>
			</div>
		</div>
    </div>