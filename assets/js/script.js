$(document).ready(function () {

    $('#cari').hide();

    // event ketika key ditulis
    $('#key').on('keyup', function () {
        // munculkan icon load
        // ajax load
        // $('#container').load('ajax/mahasiswa.php?keyword=' + $('#keyword').val());

        // ajax get
        $.get('ajax/berita.php?keyword=' + $('#key').val(), function (data) {

            $('#container').html(data);
        });

    });
});
$(document).ready(function () {
    $('#cari-siswa').hide();
    $('#key').on('keyup', function () {
        $.get('ajax/siswa.php?keyword=' + $('#key').val(), function (data) {
            $('#contain').html(data);
        })
    });
  });