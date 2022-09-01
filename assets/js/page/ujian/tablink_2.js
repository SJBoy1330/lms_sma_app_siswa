function openCity(evt, cityName) {

    var i, tabcontent, tablinks;
    tabcontent = document.getElementsByClassName("tabcontent");
    for (i = 0; i < tabcontent.length; i++) {
        tabcontent[i].style.display = "none";
    }
    tablinks = document.getElementsByClassName("tablinks");
    for (i = 0; i < tablinks.length; i++) {
        tablinks[i].className = tablinks[i].className.replace(" active", "");
    }
    document.getElementById(cityName).style.display = "block";
    evt.currentTarget.className += " active";
    my_side('hide');
}

// Get the element with id="defaultOpen" and click on it
document.getElementById("defaultOpen").click();


function my_side(action) {
    $('.modal-backdrop').remove();
    var side = document.getElementById("offcanvasExample");
    var id_side = $('#offcanvasExample');
    const html = document.querySelector('html');
    const body = document.querySelector('body');
    if (action == 'hide') {
        id_side.prop('aria-hidden', true);
        id_side.prop('aria-modal', false);
        side.classList.remove('show');
        side.style.visibility = 'hidden';
        html.classList.remove('menu-open');
        body.classList.remove('menu-open');
    } else {
        id_side.prop('aria-hidden', false);
        id_side.prop('aria-modal', true);
        side.classList.add('show');
        side.style.visibility = 'visible';
        html.classList.add('menu-open');
        body.classList.add('menu-open');
    }
    // if (action == 'hide') {
    //     $('#offcanvasExample').modal('hide');
    // } else {
    //     $('#offcanvasExample').modal('show');
    // }

}