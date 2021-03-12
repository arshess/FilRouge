$(document).ready(function() {
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
            success: function(data) {
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
    $('#resultMarque').change(function() {
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
            success: function(data) {
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
    $('#type').change(function() {
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
            success: function(data) {
                $('#getVehicule').html('<tr><th>name</th><th>modele</th><th>doors</th><th>fuelType</th><th>mileage</th><th>horses</th><th>producted Year</th><th>picture</th></tr>'),
                    data.map(element => {
                        console.log(element)
                        var name = element.name;
                        var modele = element.modele;
                        var doors = element.doors;
                        var fuelType = element.fuelType;
                        var mileage = element.mileage;
                        var horses = element.horses;
                        var productedYear = element.productedYear;
                        var picture = element.picture;
                        $('#getVehicule').append(
                            `<tr>
                        <td>${name}</td>
                        <td>${modele}</td>
                        <td>${doors}</td>
                        <td>${fuelType}</td>
                        <td>${mileage}</td>
                        <td>${horses}</td>
                        <td>${productedYear}</td>
                        <td>${picture}</td>
                        </tr> 
                        `
                        )

                    })
            }

        })
    }
    $('#result').change(function() {
        $('#getVehicule').empty();
        var search = $(this).val();
        if (search != '') {
            loadVehicule(search);
        } else {
            loadVehicule();
        }
    })

    // function loadVehiculeDispo(date, query, type) {
    //     var type = $('#type').val();
    //     var query = $('#marque').val();

    //     $.ajax({
    //         url: "http://localhost/FilRouge/index.php/user/getVehiculeDispo",
    //         method: 'POST',
    //         data: {
    //             date: date,
    //             query: query,
    //             type: type
    //         },
    //         dataType: 'json',
    //         success: function(data) {
    //             $('#getVehicule').html('<tr><th>name</th><th>modele</th><th>doors</th><th>fuelType</th><th>mileage</th><th>horses</th><th>producted Year</th><th>picture</th></tr>'),
    //                 data.map(element => {
    //                     console.log(element)
    //                     var name = element.name;
    //                     var modele = element.modele;
    //                     var doors = element.doors;
    //                     var fuelType = element.fuelType;
    //                     var mileage = element.mileage;
    //                     var horses = element.horses;
    //                     var productedYear = element.productedYear;
    //                     var picture = element.picture;
    //                     $('#getVehicule').append(
    //                         `<tr>
    //                     <td>${name}</td>
    //                     <td>${modele}</td>
    //                     <td>${doors}</td>
    //                     <td>${fuelType}</td>
    //                     <td>${mileage}</td>
    //                     <td>${horses}</td>
    //                     <td>${productedYear}</td>
    //                     <td>${picture}</td>
    //                     </tr> 
    //                     `
    //                     )

    //                 })
    //         }

    //     })
    // }
    // $('#dateDepart,#hourDepart').change(function() {
    //     $('#getVehiculeDispo').empty();
    //     var search = $(this).val();
    //     if (search != '') {
    //         loadVehiculeDispo(search);
    //     } else {
    //         loadVehiculeDispo();
    //     }
    // })
});