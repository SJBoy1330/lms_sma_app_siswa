function get_jadwal(element) {
    const dis_notif = document.querySelectorAll("#display_jadwal .zoom-filter");
    dis_notif.forEach((div) => {
        let display_value = div.getAttribute("data-page");
        if ((display_value == 'jadwal-' + element.value)) {
            div.classList.remove("hiding");
            div.classList.add("showing");
        } else {
            div.classList.add("hiding");
            div.classList.remove("showing");
        }
    });
}



$(document).ready(function () {


    $('.button_presensi_mapel').on('click', function () {
        var id_jadwal = $(this).data('id');

        $.ajax({
            url: BASE_URL + 'presensi/get_modal',
            data: { id_jadwal: id_jadwal },
            method: 'POST',
            cache: false,
            dataType: 'json',
            beforeSend() {
                $('#button_presensi_mapel').prop('disabled', true);
            },
            success: function (data) {
                $('#button_presensi_mapel').prop('disabled', false);
                $('#nama_pelajaran').text(data.nama_pelajaran);
                $('#nama_staf').text(data.nama_staf);
                $('#jam_pelajaran').text(data.waktu);
                $('#id_pelajaran').val(data.id_pelajaran);
                $('#id_kelas').val(data.id_kelas);
                $('#id_staf').val(data.id_staf);
            }
        })
    });

});