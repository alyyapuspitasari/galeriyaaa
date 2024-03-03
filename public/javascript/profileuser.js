var segmentTerakhir = window.location.href.split("/").pop();

$.getJSON(window.location.origin + '/profil_user/getDataProfil/' + segmentTerakhir, function (res) {
    console.log(res);
    $('#username').html(res.dataUser.username);
    // $('#namalengkap').html(res.dataUser.nama_lengkap);
    $('#bio').html(res.dataUser.bio);
    $('#foto').prop('src', '/foto_profile/' + res.dataUser.foto_profile);
});

var paginate = 1;
var dataBeranda = [];
loadMoreData(paginate);

$(window).scroll(function () {
    if ($(window).scrollTop() + $(window).height() == $(document).height()) {
        paginate++;
        loadMoreData(paginate);
    }
})

function loadMoreData(paginate) {
    $.ajax({
        url: window.location.origin + '/getfotouser' + '?page=' + paginate,
        type: "GET",
        dataType: "JSON",
        data: {
            idUser: segmentTerakhir
        },
        success: function (e) {
            console.log(e)
            e.data.data.map((x) => {
                var hasilPencarian = x.like.filter(function(hasil){
                    return hasil.users_id === e.idUser
                })
                if(hasilPencarian.length <= 0) {
                    userlike = 0;
                } else {
                    userlike = hasilPencarian[0].users_id;
                }

            //     var hasilPencarianFavorite = x.favorite.filter(function(hasil){
            //         return hasil.id_user === e.idUser
            //     })
            //     if(hasilPencarianFavorite.length <= 0) {
            //         userfavorite = 0;
            //     } else {
            //         userfavorite = hasilPencarianFavorite[0].id_user;
            //     }
                let datanya = {
                    id: x.id,
                    judul_foto: x.judul_foto,
                    deskripsi: x.deskripsi,
                    foto: x.lokasi_foto,
                    tanggal: x.created_at,
                    jml_komentar: x.komentar_count,
                    jml_like: x.like_count,
                    idUserLike: userlike,
                    useractive: e.idUser,
            //         idUserFavorite: userfavorite
                }
                dataBeranda.push(datanya)
            })
            getBeranda()
        },
        error: function (jqXHR, textStatus, errorThrown) {

        }
    })
}


const getBeranda = () => {
    $('#foto').html('')
    dataBeranda.map((x, i) => {
        $('#foto').append(
            `
            <div class="w-28 h-25 overflow-hidden">
                    <img class="rounded-lg " src="/unggah/${x.foto}" alt="">
                    <h3 class="mb-10"></h3>
            </div>

            `
        )
    })
}

