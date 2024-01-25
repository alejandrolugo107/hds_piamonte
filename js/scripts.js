/*!
* Start Bootstrap - Personal v1.0.1 (https://startbootstrap.com/template-overviews/personal)
* Copyright 2013-2023 Start Bootstrap
* Licensed under MIT (https://github.com/StartBootstrap/startbootstrap-personal/blob/master/LICENSE)
*/
// This file is intentionally blank
// Use this file to add JavaScript to your project

$(window).on("load", function () {

    //Global Variables
    var gradosKinder = {"PK":"PreKinder","1K":"1°Kinder","2K":"2°Kinder","3K":"3°Kinder"}
    var gradosPrimaria = {"1P":"1°Primaria","2P":"2°Primaria","3P":"3°Primaria","4P":"4°Primaria","5P":"5°Primaria","6P":"6°Primaria"};
    var gradosSecundaria = { "7S": "7°Secundaria", "8S": "8°Secundaria", "9S": "9°Secundaria" }
    var academias = {"Ajedrez":"Ajedrez", "Basketball":"Basketball","Baile":"Baile","Catecismo":"Catecismo","Confirmación":"Confirmación","Música":"Música","Robótica":"Robótica"}
    var fieldsets = ['fieldsetInasistencias','fieldsetCitas','fieldsetPrecompras','fieldsetAcademias','fieldsetSoporte']





    //Selects first option when modal is opened
    $('#btnModal').on('click', function () {
        $('#formTicket').hide();
        $('#motivoContacto option:first').prop('selected', true)
        $('#nivelAlumno option:first').prop('selected', true)        
        $('#gradoContainer').hide();
    })

    //Displays Grados Based on selectNivel value
    $('#nivelAlumno').change(function () {
        $('#selectGrado').empty()
        $('#gradoContainer').show();
        var selectedNivel = $(this).val()
        switch (selectedNivel) {
            case "Kinder":
                $.each(gradosKinder, function (key, value) {
                    $('#selectGrado').append($('<option>',{value:key}).text(value))
                })
                break;
            case "Primaria":
                $.each(gradosPrimaria, function (key, value) {
                    $('#selectGrado').append($('<option>',{value:key}).text(value))
                })
                break;
            case "Secundaria":
                $.each(gradosSecundaria, function (key, value) {
                    $('#selectGrado').append($('<option>',{value:key}).text(value))
                })
                break;
        }   
    })

    $('#motivoContacto').change(function () {
        resetFields();
        var motivo = $(this).val();
        if (motivo != 0) {
            switch (motivo) {
                case '1':
                    $('#formTicket').show()
                    $('#fieldsetInasistencias').show()
                    $('#fieldsetInasistencias :input').each(function () {
                        $(this).prop('required',true)
                    })
                    disableCitas();
                    disablePrecompras();
                    disableAcademias();
                    disableSoporte();
                    break;
                case '2':
                    $('#formTicket').show();
                    $('#fieldsetCitas').show()
                    disableInasistencias();
                    disablePrecompras();
                    disableAcademias();
                    disableSoporte();
                    break;
                case '3':
                    $('#formTicket').show()
                    $('#fieldsetPrecompras').show()
                    disableInasistencias();
                    disableCitas();
                    disableAcademias();
                    disableSoporte();
                    break;
                case '4':
                    $('#formTicket').show();
                    $('#fieldsetAcademias').show()
                    disableInasistencias();
                    disableCitas();
                    disablePrecompras();
                    disableSoporte();
                    break;
                case '5':
                    $('#formTicket').show();
                    $('#fieldsetSoporte').show()
                    disableInasistencias();
                    disableCitas();
                    disablePrecompras();
                    disableAcademias();
                    break;
        }
        } else {
            $('#fieldsetInasistencias').hide();
            $('#fieldsetCitas').hide();
            $('#fieldsetPrecompras').hide();
            $('#fieldsetAcademias').hide();
            $('#fieldsetSoporte').hide();
        }
        
    })

    // ResetFields()
    function resetFields() {
        //ResetFormFields
        $('#formTicket')[0].reset();
        //HideFormTicket
        $('#formTicket').hide();
        //HidesGradoContainer
        $('#gradoContainer').hide();
        //Empties academiaAlumnos
        $('#academiaAlumno').empty();
        //Fills academiaAlumnos with ss' academias
        $.each(academias, function (key, value) {
            $('#academiaAlumno').append($('<option>', {value:key}).text(value))
        })
        fieldsets.forEach(field => {
            $(`#${field}`).prop('disabled', false);
        })
    }



    function disableInasistencias() {
        $('#fieldsetInasistencias').prop('disabled', true);
        $('#fieldsetInasistencias').hide()
    }
    function disableCitas() {
        $('#fieldsetCitas').prop('disabled', true);
        $('#fieldsetCitas').hide()
    }
    function disablePrecompras() {
        $('#fieldsetPrecompras').prop('disabled', true);
        $('#fieldsetPrecompras').hide()
    }
    function disableAcademias() {
        $('#fieldsetAcademias').prop('disabled', true);
        $('#fieldsetAcademias').hide()
    }
    function disableSoporte() {
        $('#fieldsetSoporte').prop('disabled', true);
        $('#fieldsetSoporte').hide()
    }
})
