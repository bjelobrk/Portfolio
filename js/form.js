

$(document).ready(function () {

    var prvibroj = Math.floor(Math.random() * 10);
    var drugibroj = Math.floor(Math.random() * 10);
    $("#human").attr("placeholder", +prvibroj + "+" + drugibroj + "=");


    $('.loading').hide();
    $("#submitkontakt").click(function (event) {

        var ime = ($("#ime").val());
        var email = ($("#email").val());
        var poruka = ($("#poruka").val());
        var human = ($("#human").val());
        var jezik = $('.jezik').text();
        var emailPattern = /\b[A-Za-z0-9._%+-]+@[A-Za-z0-9.-]+\.[A-Za-z]{2,4}\b/;

        var isValid = true;


        if (ime == "") {
            if (jezik == 'srpski') {
                $("#ime_error").text("ovo polje je obavezno");
                isValid = false;
            } else if (jezik == 'engleski') {
                $("#ime_error").text("please fill out name");
                isValid = false;
            } else if (jezik == 'nemacki') {
                $("#ime_error").text("füllen Sie bitte Namen");
                isValid = false;
            } else {
                $("#ime_error").text("заполните имя и фамилия");
            }
            isValid = false;
        } else if (ime.length < 3) {
            if (jezik == 'srpski') {
                $("#ime_error").text("ime mora biti duže od 2 karaktera");
                isValid = false;
            } else if (jezik == 'engleski') {
                $("#ime_error").text("name must be at least 3 characters length");
                isValid = false;
            } else if (jezik == 'nemacki') {
                $("#ime_error").text("Name muss mindestens 3 Zeichen lang sein");
                isValid = false;
            } else {
                $("#ime_error").text("имя должно быть длиной не менее 3 символов");
                isValid = false;
            }
        }
        else {
            $("#ime_error").text("*");
        }


        if (email == "") {
            if (jezik == 'srpski') {
                $("#email_error").text("ovo polje je obavezno");
                isValid = false;
            } else if (jezik == 'engleski') {
                $("#email_error").text("please fill out name email");
                isValid = false;
            } else if (jezik == 'nemacki') {
                $("#email_error").text("füllen Sie bitte E-Mail");
            } else
            {
                $("#email_error").text("заполнить электронная почта");
                isValid = false;
            }
        } else if (!emailPattern.test(email)) {
            if (jezik == 'srpski') {
                $("#email_error").text("unesite pravi format email-a");
                isValid = false;
            } else if (jezik == 'engleski') {
                $("#email_error").text("email address is not valid");
                isValid = false;
            } else if (jezik == 'nemacki') {
                $("#email_error").text("E-Mail-Adresse ist ungültig");
                isValid = false;
            } else {
                $("#email_error").text("Формат электронной почты не действителен");
                isValid = false;
            }
        } else {
            $("#email_error").text("*");
        }


        if (poruka == "") {
            if (jezik == 'srpski') {
                $("#poruka_error").text("ovo polje je obavezno");
                isValid = false;
            } else if (jezik == 'engleski') {
                $("#poruka_error").text("please fill out message");
                isValid = false;
            } else if (jezik == 'nemacki') {
                $("#poruka_error").text("füllen Sie bitte Nachricht");
                isValid = false;
            } else {
                $("#poruka_error").text("заполните сообщение");
                isValid = false;
            }
        } else {
            $("#poruka_error").text("*");
        }


        if (prvibroj + drugibroj != human) {
            if (jezik == 'srpski') {
                $("#human_error").text("netačan rezultat sabiranja");

                isValid = false
            } else if (jezik == 'engleski') {
                $("#human_error").text("not valid result");

                isValid = false
            } else if (jezik == 'nemacki') {
                $("#human_error").text("nicht gültig Ergebnis");

                isValid = false
            } else {
                $("#human_error").text("не действует результат");

                isValid = false
            }
        } else {
            $("#human_error").text("*");
        }


        if (isValid == false) {
            event.preventDefault();
        }
        if (isValid == true) {

            $("form").hide();
            $('.loading').show();


        }
    }
    );

});