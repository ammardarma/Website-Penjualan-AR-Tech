<div class="d-flex flex-column flex-md-row align-items-center p-3 px-md-4 mb-3 bg-white border-bottom shadow-sm">
  <h5 class="my-0 mr-md-auto font-weight-normal">Data Penjualan Usaha AR Tech</h5>
  <nav class="my-2 my-md-0 mr-md-3">
    <a class="align-middle btn btn-success" href="<?=base_url('pweb/tambah')?>">Tambah Data</a>
  </nav>
  <a class="align-middle btn btn-danger" href="<?=base_url('pweb/logout')?>">Sign Out</a>
</div>

<div class="container-contact100">
		<div class="wrap-contact100">
			<form class="contact100-form validate-form needs-validation" action="" method="post" novalidate>
				<span class="contact100-form-title">
					Tambah Data
				</span>

				<div class="wrap-input100 validate-input" data-validate="Date is required">
					<span class="label-input100">Masukkan Tanggal</span>
					<input class="input100" type="date" name="nama_mhs" id="nama_mhs" placeholder="Enter your name" autocomplete="off" required>
					<div class="invalid-feedback">
								Anda belum memasukan data.
							</div>
					<span class="focus-input100"></span>
				</div>

				<div class="wrap-input100 validate-input" data-validate="Data is required">
					<span class="label-input100">Pendapatan Cabang Bekasi</span>
					<input class="input100" type="text" name="n_pert1" id="n_pert1" placeholder="Pendapatan Cabang Bekasi" autocomplete="off" required>
					<div class="invalid-feedback">
								Anda belum memasukan data.
							</div>
					<span class="focus-input100"></span>
				</div>

				<div class="wrap-input100 validate-input" data-validate="Data is required">
					<span class="label-input100">Pendapatan Cabang Jakarta</span>
					<input class="input100" type="text" name="n_pert2" id="n_pert2"  placeholder="Pendapatan Cabang Jakarta" autocomplete="off" required>
					<div class="invalid-feedback">
								Anda belum memasukan data.
							</div>
					<span class="focus-input100"></span>
				</div>

				<div class="wrap-input100 validate-input" data-validate="Data is required">
					<span class="label-input100">Pendapatan Cabang Depok</span>
					<input class="input100" type="text" name="n_pert3" id="n_pert3"  placeholder="Pendapatan Cabang Depok" autocomplete="off" required>
					<div class="invalid-feedback">
								Anda belum memasukan data.
							</div>
					<span class="focus-input100"></span>
				</div>

				<div class="wrap-input100 validate-input" data-validate="Data is required">
					<span class="label-input100">Pendapatan Cabang Bandung</span>
					<input class="input100" type="text" name="n_pert4" id="n_pert4"  placeholder="Pendapatan Cabang Bandung" autocomplete="off" required>
					<div class="invalid-feedback">
								Anda belum memasukan data.
							</div>
					<span class="focus-input100"></span>
				</div>

				

				<div class="container-contact100-form-btn">
					<div class="wrap-contact100-form-btn">
						<div class="contact100-form-bgbtn"></div>
						<button type="submit" name="tambah" class="contact100-form-btn">
							<span>
								Tambah Data
								<i class="fa fa-long-arrow-right m-l-7" aria-hidden="true"></i>
							</span>
						</button>
					</div>
				</div>
			</form>
		</div>
	</div>
</div>
	<div id="dropDownSelect1"></div>

	