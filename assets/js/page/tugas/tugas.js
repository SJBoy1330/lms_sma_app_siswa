function filter_tugas() {
    var vector_tugas = document.querySelector('#vector_tugas');
    var id_pelajaran = $('#pelajaran').val();
    var status = $('#status').val();
    const prop_display = document.querySelectorAll("#display_tugas .zoom-filter");

    $('#filterTugas').modal('hide');
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
        vector_tugas.classList.remove('hiding');
        vector_tugas.classList.add('showing');
    } else {
        vector_tugas.classList.add('hiding');
        vector_tugas.classList.remove('showing');
    }
}