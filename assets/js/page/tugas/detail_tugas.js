const dt = new DataTransfer(); // Permet de manipuler les fichiers de l'input file

$("#attachment").on('change', function (e) {
	for (var i = 0; i < this.files.length; i++) {
		let fileBloc = $('<span/>', { class: 'file-block' }),
			fileName = $('<span/>', { class: 'name', text: this.files.item(i).name });
		fileBloc.append('<span class="file-delete"><span>+</span></span>')
			.append(fileName);
		$("#filesList > #files-names").append(fileBloc);
	};
	// Ajout des fichiers dans l'objet DataTransfer
	for (let file of this.files) {
		dt.items.add(file);
	}
	// Mise à jour des fichiers de l'input file après ajout
	this.files = dt.files;

	// EventListener pour le bouton de suppression créé
	$('span.file-delete').click(function () {
		let name = $(this).next('span.name').text();
		// Supprimer l'affichage du nom de fichier
		$(this).parent().remove();
		for (let i = 0; i < dt.items.length; i++) {
			// Correspondance du fichier et du nom
			if (name === dt.items[i].getAsFile().name) {
				// Suppression du fichier dans l'objet DataTransfer
				dt.items.remove(i);
				continue;
			}
		}
		// Mise à jour des fichiers de l'input file après suppression
		document.getElementById('attachment').files = dt.files;
	});
});



function hapus_file(id_tugas, id_file) {
	$.ajax({
		url: BASE_URL + "tugas/hapus_file/",
		data: { id_file: id_file },
		method: 'POST',
		dataType: 'json',
		cache: false,
		beforeSend: function () {
			$('#button_submited_tugas').prop('disabled', true);
			$('#hapus_file_loading_' + id_file).html('<div class="spinner-border text-danger" role="status">\
                     <span class="sr-only"></span>\
</div>');
			$('#lapirkan_jawaban').prop('readonly', true);
		},
		success: function (data) {
			// console.log(data);
			$('#button_submited_tugas').prop('disabled', false);
			$('#lapirkan_jawaban').prop('readonly', false);
			if (data.status == true) {
				$('#jawaban-' + id_file).fadeOut(function () {
					$('#display_jawaban').load(BASE_URL + 'tugas/detail_tugas/' + id_tugas + ' #reload_jawaban');
				});
			} else {
				Swal.fire({
					title: 'PERINGATAN',
					text: data.message,
					icon: 'warning',
					buttonsStyling: !1,
					confirmButtonText: "Ok",
					customClass: {
						confirmButton: css_button
					}
				})
			}
		}
	})
}

function upload_jawaban(element) {
	// console.log('ok');
	var id = $('#id_tugas').val();
	var url = BASE_URL + 'tugas/upload';
	var method = 'POST';
	// console.log(url);

	var form = $('form')[0];
	var form_data = new FormData(form);

	$.ajax({
		url: url,
		method: method,
		data: form_data,
		contentType: false,
		cache: false,
		processData: false,
		dataType: 'json',
		beforeSend: function () {
			$('#loading_scene').modal('show');
		},
		success: function (data) {
			$('#loading_scene').modal('hide');
			$('#refresh_loading').load(BASE_URL + 'tugas/detail_tugas/ #loading_scene');
			$('.modal-backdrop').remove();
			if (data.status == true) {
				var icon = 'success';
				$('#display_jawaban').load(BASE_URL + 'tugas/detail_tugas/' + id + ' #reload_jawaban');
			} else {
				var icon = 'warning';
			}
			Swal.fire({
				title: data.titile,
				text: data.message,
				icon: icon,
				buttonsStyling: !1,
				confirmButtonText: "Ok",
				customClass: {
					confirmButton: css_button
				}
			})

		}, error: function () {
			// $('#loading_scene').modal('hide');
		}
	});
}