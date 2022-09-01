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
}

// Get the element with id="defaultOpen" and click on it
document.getElementById("defaultOpen").click();

$(document).ready(function () {
    $('.show_video').on('click', function () {
        var id = $(this).data('id');
        var display = document.getElementById('display-' + id);
        var show = document.querySelector('.showing');
        display.classList.remove("hiding");
        display.classList.add("showing");
        show.classList.remove("showing");
        show.classList.add("hiding");
    });
})  