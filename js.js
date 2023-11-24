$(document).ready(function () {
    $("#l").toggle("loader");
});

$(".info").mouseenter(function () {
    $('#out').get(0).play();
});
$(".info").mouseleave(function () {
    $('#in').get(0).play();
});

$('#t').click(function () {
    let t = (this);
    $('#click').get(0).play();
    t.classList.toggle("box");
    t.classList.toggle("tampa");
});

$(".tape").mouseenter(function () {
    $('#tap').get(0).play();
});
$(".tape").mouseleave(function () {
    $('#tap').get(0).stop();
});

$(".postais").mouseenter(function () {
    $('#leaf').get(0).play();
});

$(".voltar").mouseenter(function () {
    $('#tap').get(0).play();
});

$('.tape').click(function (e) {
    let ids = (this.id);
    $('#clunk').get(0).play();
    window.setTimeout(function () {
        window.location = 'podcast.php?target=' + ids;
    }, 2100);
    e.preventDefault();
});