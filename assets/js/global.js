// var quick_link = new bootstrap.Modal(document.getElementById('menumodal'), {})
// const unreload = (element, event) => {
//     event = event || window.event;
//     event.preventDefault();
//     window.history.pushState({}, "", element.href);
//     handleLocation(element.href);
//     // console.log(element.href);
// };

// const handleLocation = async (root) => {
//     // const route = root + '?routing=true' || routes[404];
//     // const html = await fetch(route).then((data) => data.text());
//     var body = document.querySelector('body');
//     var htmls = document.querySelector('html');
//     $('footer').load(root + ' #footer');

//     $('#reload_halaman').fadeIn('slow');
//     $('main').load(root + ' #reload_halaman');
//     $('#sidemenu').load(root + ' #content_sidemenu');

//     // $('main').fadeIn('slow');
//     quick_link.hide()
//     $('main').css('min-height', $(window).height());
//     if ($('.footer').length > 0) {
//         $('main').css('padding-bottom', $('.footer').outerHeight() + 10);
//     }

//     // document.getElementById("reload-content").innerHTML = html;
//     body.classList.remove('menu-open');
//     htmls.classList.remove('menu-open');


// };

// // window.onpopstate = handleLocation;
// // window.route = route;


// handleLocation();



// Javascript Pribadi

function password_show_hide() {

    var x = document.getElementById("kata_sandi");

    var show_eye = document.getElementById("show_eye");

    var hide_eye = document.getElementById("hide_eye");

    hide_eye.classList.remove("d-none");

    if (x.type === "password") {

        x.type = "text";

        show_eye.style.display = "none";

        hide_eye.style.display = "block";

    } else {

        x.type = "password";

        show_eye.style.display = "block";

        hide_eye.style.display = "none";

    }

}

function show_modal(id_modal) {
    $(id_modal).modal('show');
}


// function submit_form(element, id_form) {
//     var form = document.querySelector(id_form);
//     var data = $(id_form).serialize();
//     var url = $(id_form).attr('url');
//     var button = document.getElementById(element.id);
//     $.ajax({
//         url: url,
//         data: data,
//         cache: false,
//         method: 'post',
//         dataType: 'json',
//         beforeSend: function () {
//             $('#' + element.id).prop('disabled', true);
//             // $('#' + element.id).html('<div class="spinner-border text-light" role="status"><span class="sr-only"></span></div>');
//         },
//         success: function (data) {
//             $('#' + element.id).prop('disabled', false);
//             // $('#' + element.id).html('<span class="indicator-label">Simpan</span>');
//             $('.fadedin').remove();

//             if (data.status == true) {
//                 var icon = 'success';
//             } else {
//                 var icon = 'warning';
//             }
//             if (data.alert) {
//                 Swal.fire({
//                     title: data.alert.title,
//                     text: data.alert.message,
//                     icon: icon,
//                     buttonsStyling: !1,
//                     confirmButtonText: "Ok",
//                     customClass: {
//                         confirmButton: "btn btn-lg shadow-sm btn-pribadi"
//                     }
//                 }).then(function () {
//                     if (data.redirect) {
//                         location.href = data.redirect;
//                     } else if (data.reload) {
//                         location.reload();
//                     }
//                 });
//             } else {
//                 if (data.required) {
//                     const array = data.required.length;
//                     for (var i = 0; i < array; i++) {
//                         $('#' + data.required[i][0]).append('<span class="text-danger fadedin">' + data.required[i][1] + '</span>');
//                     }
//                 }
//                 if (data.redirect) {
//                     location.href = data.redirect;
//                 }
//             }
//         }
//     });
// }

// function submenu(stts) {
//     var body = document.querySelector('body');
//     var htmls = document.querySelector('html');
//     console.log(stts);
//     if (stts == 'open') {
//         body.classList.add('menu-open');
//         htmls.classList.add('menu-open');
//     } else {
//         body.classList.remove('menu-open');
//         htmls.classList.remove('menu-open');
//     }
// }