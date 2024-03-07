"use strict";

const BASE_URL = window.location.origin;

const URL_STEP_2 = "/landing2";
const URL_STEP_3 = "/landing3";
const SUBMIT_ENDPOINT = "/submit";

$.ajaxSetup({
	headers: {
		"X-CSRF-TOKEN": $('meta[name="csrf-token"]').attr(
			"content"
		),
	},
});

var redirectToStep2 = () => {
	window.location.href = BASE_URL + URL_STEP_2;
}

var register = () => {
	$('#register').validate({
		rules: {
			name: { required: true, minlength: 3, maxlength: 100 },
			phone: { required: true, minlength: 10, maxlength: 16 },
			clinic_name: { required: true, minlength: 3, maxlength: 255 },
			clinic_address: { required: true, minlength: 3, maxlength: 255 },
			operational_license_number: { required: true, minlength: 3, maxlength: 255 },
			clinic_fasyankes_code: { required: true, minlength: 3, maxlength: 255 }
		},

		messages: {
			name: { required: "Nama dibutuhkan" },
			phone: { required: "Phone dibutuhkan" },
			clinic_name: { required: "Nama klinik dibutuhkan" },
			clinic_address: { required: "Alamat klinik dibutuhkan" },
			operational_license_number: { required: "Nomor izin operasional klinik dibutuhkan" },
			clinic_fasyankes_code: { required: "Kode fasyankes klinik dibutuhkan" }
		},

		errorPlacement: (error, element) => {
			error.appendTo(element.parent().find('.invalid-feedback'));
			$(element).addClass('is-invalid');
		},

		unhighlight: (element) => {
			$(element).removeClass('is-invalid');
		},

		submitHandler: (form, event) => {

			event.preventDefault();
			let formData = $(form).serialize();
			console.log(formData);
			$.ajax({
				method: "POST",
				url: SUBMIT_ENDPOINT,
				data: formData,
				dataType: 'json',
				beforeSend: () => {
					// $(`.loading`).
				},
				success: (response) => {
					console.log(response);
				},
				error: (xhr) => {
					console.log(xhr);
				}
			});
		}
	});
}

$(document).ready(function () {
	register();
});
