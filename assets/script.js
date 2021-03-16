$(document).ready(function () {
    function load_modele(query, type) {
        var type = $('#type').val();
        $.ajax({
            url: "http://localhost/FilRouge/index.php/user/fetch",
            method: "POST",
            data: {
                query: query,
                type: type
            },
            dataType: 'json',
            success: function (data) {
                $('#result').html('<option>Modeles</option>')
                data.map(elem => {
                    var name = elem.name;
                    var id = elem.modele_id;
                    $('#result').append(
                        `
                        <option value="${id}">${name}</option>
                        `
                    )
                })
            }
        })
    }
    $('#resultMarque').change(function () {
        $('#result').empty();
        var search = $(this).val();
        if (search != '') {
            load_modele(search);
        } else {
            load_modele();
        }
    });

    function load_data(query) {
        $.ajax({
            url: "http://localhost/FilRouge/index.php/user/fetchMarque",
            method: "POST",
            data: {
                query: query
            },
            dataType: 'json',
            success: function (data) {
                $('#resultMarque').html('<option>Marques</option>')
                data.map(element => {
                    var name = element.name;
                    var id = element.marque_id;
                    $('#resultMarque').append(
                        `
                        <option value="${id}">${name}</option>
                        `
                    )
                })
            }
        })
    }
    $('#type').change(function () {
        $('#resultMarque').empty();
        var search = $(this).val();
        if (search != '') {
            load_data(search);
        } else {
            load_data();
        }
    });

    function loadVehicule(query, type) {

        var type = $('#type').val();
        $.ajax({
            url: "http://localhost/FilRouge/index.php/user/getVehicule",
            method: 'POST',
            data: {
                query: query,
                type: type
            },
            dataType: 'json',
            success: function (data) {
                var baseurl = window.location.origin;
                var departTime = $('#dateDepart').val() + ' ' + $('#hourDepart').val;
                var returnTime = $('#dateRetour').val() + ' ' + $('#hourRetour').val;

                $('#getVehicule').html('<tr  style="text-align: center;"><th>Marque</th><th>Modèle</th><th>Nombre de portes</th><th>Carburant</th><th>Kilométrage</th><th>Puissance DIN</th><th>Mise en circulation</th><th>Image</th></tr>'),
                    data.map(element => {
                        // console.log(element)
                        var name = element.name;
                        var modele = element.modele;
                        var doors = element.doors;
                        var fuelType = element.fuelType;
                        var mileage = element.mileage;
                        var horses = element.horses;
                        var productedYear = element.productedYear;
                        var picture = element.picture;
                        var starttime = 0;
                        var endtime = 0;
                        if (picture == null) {
                            picture = 'lambo.jpg';
                        }
                        var vehicule_id = element.vehicule_id;
                        $('#getVehicule').append(
                            `<tr  style="text-align: center;">
                        <td>${name}</td>
                        <td>${modele}</td>
                        <td>${doors}</td>
                        <td>${fuelType}</td>
                        <td>${mileage}</td>
                        <td>${horses}</td>
                        <td>${productedYear}</td>
                        
                        <td><img src="./public/images/vehicule/${picture}" style="height:50px;width:100px;object-fit: cover;"></td>
                        <td><a href="`+ baseurl + `/FilRouge/User/confirmReservation/${vehicule_id}/"><button class="btn btn-warning">Réserver</button></td></a>
                        <td><a href="`+ baseurl + `/FilRouge/User/getDetailsVehicule/${vehicule_id}"><button class="btn btn-success" value="<?= $val->vehicule_id?>">Détails véhicule</button></td></a>
                        </td>
                        </tr> 
                        `
                        )
                    })
            }
        })
    }
    $('#result').change(function () {
        $('#getVehicule').empty();
        var search = $(this).val();
        if (search != '') {
            loadVehicule(search);
            document.getElementById('vehiculePagination').classList.add('d-none')
        } else {
            loadVehicule();
            document.getElementById('vehiculePagination').classList.remove('d-none')
        }
    });
    $('#hourDepart').change(function () {
        var truc = $('#dateDepart').val() + ' ' + $('#hourDepart').val();
        document.cookie = 'datestart=' + truc;
        console.log(truc)
    });
    $('#hourRetour').change(function () {
        var truc = $('#dateRetour').val() + ' ' + $('#hourRetour').val();
        document.cookie = 'dateretour=' + truc;
    });
});