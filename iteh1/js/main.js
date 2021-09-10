$('#btn').click(function () {
    $('#pregled').toggle();
});

$('#btn-obrisi').click(function () {
    const checked = $('input[name=checked-donut]:checked');

    request = $.ajax({
        url: 'handler/delete.php',
        type: 'post',
        data: {'id': checked.val()}
    });

    request.done(function (response, textStatus, jqXHR) {
        if (response === 'Success') {
            checked.closest('tr').remove();
            alert('Automobil je obrisan');
            console.log('Obrisano');
        }
        else {
            console.log('Nije obrisano');
            alert('Automobil nije obrisan');
        }
        console.log(response);
    });

    request.fail(function (jqXHR, textStatus, errorThrown) {
        console.error('The following error occurred: ' + textStatus, errorThrown);
    });
});

$('#btnDodaj').submit(function () {
    $('#myModal').modal('toggle');
    return false;
});

$('#btnIzmeni').submit(function () {
    $('#myModal').modal('toggle');
    return false;
});

$('#dodajForm').submit(function () {
    event.preventDefault();
    console.log("Ovde");
    const $form = $(this);
    const $inputs = $form.find('input, select, button, textarea');
    const serializedData = $form.serialize();
    console.log(serializedData);
    $inputs.prop('disabled', true);

    request = $.ajax({
        url: 'handler/add.php',
        type: 'post',
        data: serializedData
    });

    request.done(function (response, textStatus, jqXHR) {
        if (response === 'Success') {
            alert('Automobil je dodat');
            console.log('Sacekaj malo...');
            location.reload(true);
        }
        else console.log('Automobil nije dodat ' + response);
        console.log(response);
    });

    request.fail(function (jqXHR, textStatus, errorThrown) {
        console.error('The following error occurred: ' + textStatus, errorThrown);
    });
});

$('#btn-izmeni').click(function () {
    const checked = $('input[name=checked-donut]:checked');

    request = $.ajax({
        url: 'handler/get.php',
        type: 'post',
        data: {'id': checked.val()},
        dataType: 'json'
    });

    request.done(function (response, textStatus, jqXHR) {
        console.log('Popunjena');
        $('#naziv1').val(response[0]['naziv']);
        console.log(response[0]['naziv']);

        $('#zemlja1').val(response[0]['zemlja'].trim());
        console.log(response[0]['zemlja'].trim());
        $('#cena1').val(response[0]['cena'].trim());
        console.log(response[0]['cena'].trim());
        $('#opis1').val(response[0]['opis'].trim());
        console.log(response[0]['opis'].trim());
        $('#id').val(checked.val());

        console.log(response);
    });

    request.fail(function (jqXHR, textStatus, errorThrown) {
        console.error('The following error occurred: ' + textStatus, errorThrown);
    });

});

$('#izmeniForm').submit(function () {
    event.preventDefault();
    event.stopImmediatePropagation();
    console.log("Izmene");
    const $form = $(this);
    const $inputs = $form.find('input, select, button, textarea');
    const serializedData = $form.serialize();
    console.log(serializedData);
    $inputs.prop('disabled', true);

    request = $.ajax({
        url: 'handler/update.php',
        type: 'post',
        data: serializedData
    });

    request.done(function (response, textStatus, jqXHR) {


        if (response === 'Success') {
            console.log('Automobil je izmenjen');
            location.reload(true);
        }
        else console.log('Automobil nije izmenjen ' + response);
        console.log(response);
    });

    request.fail(function (jqXHR, textStatus, errorThrown) {
        console.error('The following error occurred: ' + textStatus, errorThrown);
    });

});


$('#btn-pretraga').click(function () {

    var para = document.querySelector('#myInput');
    console.log(para);
    var style = window.getComputedStyle(para);
    console.log(style);
    if (!(style.display === 'inline-block') || ($('#myInput').css("visibility") ==  "hidden")) {
        console.log('block');
        $('#myInput').show();
        document.querySelector("#myInput").style.visibility = "";
    } else {
       document.querySelector("#myInput").style.visibility = "hidden";
    }
});