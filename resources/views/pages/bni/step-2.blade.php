<x-tamu-layout>
	<h3>landing 2</h3>
	<form id="register" name="register" class="form-horizontal">
		@csrf
		@method('POST')
		<div class="form-group mb-2">
				<label>Name</label>
				<input type="text"  id="name" name="name">
				<div class="invalid-feedback">
				</div>
		</div>
		<div class="form-group mb-2">
				<label>Phone</label>
				<input type="number"  id="phone" name="phone">
				<div class="invalid-feedback">
				</div>
		</div>
		<div class="form-group mb-2">
			<label>Nama Klinik</label>
			<input type="text"  id="clinic_name" name="clinic_name">
			<div class="invalid-feedback">
			</div>
		</div>
		<div class="form-group mb-2">
			<label>Alamat Klinik</label>
			<input type="text"  id="clinic_address" name="clinic_address">
			<div class="invalid-feedback">
			</div>
		</div>
		<div class="form-group mb-2">
			<label>Nomor Izin Operasional Klinik</label>
			<input type="text"  id="operational_license_number" name="operational_license_number">
			<div class="invalid-feedback">
			</div>
		</div>
		<div class="form-group mb-2">
			<label>Kode Fasyankes Klinik</label>
			<input type="text"  id="clinic_fasyankes_code" name="clinic_fasyankes_code">
			<div class="invalid-feedback">
			</div>
		</div>
		<br>
		<div class="d-flex justify-content-end mt-4">
				<button class="btn btn-primary w-25">Register</button>
		</div>
		<div class="d-flex justify-content-end mt-4 loading">
	</div>
	</form>
</x-tamu-layout>
