function filter_ujian() {
    var vector_riwayat = document.querySelector('#vector_riwayat');
    var id_pelajaran = $('#pelajaran').val();
    var status = $('#status').val();
    const prop_display = document.querySelectorAll("#display_ujian .zoom-filter");

    $('#filterUjian').modal('hide');
    prop_display.forEach((div) => {
        let val_status = div.getAttribute("data-status");
        let val_pelajaran = div.getAttribute("data-pelajaran");
        if (((val_status == status) || (status == "all")) && ((val_pelajaran == id_pelajaran) || (id_pelajaran == "all"))) {
            div.classList.remove("hiding"); //first remove the hide class from the image
            div.classList.add("showing"); //add show class in image
        } else {
            div.classList.add("hiding"); //add hide class in image
            div.classList.remove("showing"); //remove show class from the image
        }
    });

    var count = $('.target_search.showing').length;
    if (count <= 0) {
        vector_riwayat.classList.remove('hiding');
        vector_riwayat.classList.add('showing');
    } else {
        vector_riwayat.classList.add('hiding');
        vector_riwayat.classList.remove('showing');
    }
}