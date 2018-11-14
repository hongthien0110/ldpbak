var language;

function setLanguage(lang) {
    localStorage.setItem('language', lang);
    getLanguage();
}

function getLanguage() {
    (localStorage.getItem('language') == null) ? setLanguage('thai'): false;
    var urlCurrent = window.location.href.toString().toLowerCase();
    $.ajax({
        url: './language/' + localStorage.getItem('language') + '.json',
        dataType: 'json',
        async: false,
        dataType: 'json',
        success: function (lang) {
            language = lang;
            // console.log(language);
            // console.log('url:' + urlCurrent);
            // console.log('home'.includes(urlCurrent));
            $('#home').text(language.menu_t1);
            $('#whyus').text(language.menu_t2);
            $('#ourteam').text(language.menu_t3);
            $('#method').text(language.menu_t4);
            $('#package').text(language.menu_t5);
            $('#register').text(language.menu_t6);

            $('#form_t3').attr('placeholder',language.form_t3);
            $('#form_t4').attr('placeholder',language.form_t4);
            $('#form_t5').attr('placeholder',language.form_t5);
            $('#form_t6').text(language.form_t6);
            $('#form_t7').text(language.form_t7);
            $('#form_t8').text(language.form_t8);
            $('#form_t9').text(language.form_t9);
            $('#form_t10').text(language.form_t10);
            if (urlCurrent.includes('whyus')) {
                setTextWhyUs();
            } else if (urlCurrent.includes('ourteam')) {
                setTextOurTeam();
            } else if (urlCurrent.includes('method')) {
                setTextMethod();
            } else if (urlCurrent.includes('package')) {
                setTextPackage();
            } else if (urlCurrent.includes('register')) {
                setTextRegister();
            }else {
                $('#form_t1').text(language.form_t1);
                $('#form_t2').text(language.form_t2);
                setTextHome();
            }
        }
    });
}

function setTextHome() {
    $('#home_t1').text(language.home_t1);
    $('#home_t2').text(language.home_t2);
    $('#home_t3').text(language.home_t3);
    $('#home_t4').text(language.home_t4);
    $('#home_t5').text(language.home_t5);
    $('#home_t6').text(language.home_t6);
    $('#home_t7').text(language.home_t7);
    $('#home_t8').text(language.home_t8);
}

function setTextWhyUs() {
    $('#home_t1').text(language.whyus_t1);
    $('#whyus_t2').text(language.whyus_t2);
    $('#whyus_t3').text(language.whyus_t3);
    $('#whyus_t4').text(language.whyus_t4);
    $('#whyus_t5').text(language.whyus_t5);
    $('#whyus_t6').text(language.whyus_t6);
    $('#whyus_t7').text(language.whyus_t7);
    $('#whyus_t8').text(language.whyus_t8);
    $('#whyus_t9').text(language.whyus_t9);
    $('#whyus_t10').text(language.whyus_t10);
    $('#whyus_t11').text(language.whyus_t11);
    $('#whyus_t12').text(language.whyus_t12);
    $('#whyus_t13').text(language.whyus_t13);
    $('#whyus_t14').text(language.whyus_t14);
    $('#whyus_t15').text(language.whyus_t15);
    $('#whyus_t16').text(language.whyus_t16);
    $('#whyus_t17').text(language.whyus_t17);
    $('#whyus_t18').text(language.whyus_t18);
    $('#whyus_t19').text(language.whyus_t19);
    $('#whyus_t20').text(language.whyus_t20);
    $('#whyus_t21').text(language.whyus_t21);
    $('#whyus_t22').text(language.whyus_t22);
    $('#whyus_t23').text(language.whyus_t23);
    $('#whyus_t24').text(language.whyus_t24);
}

function setTextOurTeam() {
    $('#home_t1').text(language.whyus_t1);
    $('#ourteam_t1').text(language.ourteam_t1);
    $('#ourteam_t2').text(language.ourteam_t2);
    $('#ourteam_t3').text(language.ourteam_t3);
    $('#ourteam_t4').text(language.ourteam_t4);
    $('#ourteam_t5').text(language.ourteam_t5);
    $('#ourteam_t6').text(language.ourteam_t6);
    $('#ourteam_t7').text(language.ourteam_t7);
}
function setTextMethod() {
    $('#home_t1').text(language.whyus_t1);
    $('#method_t1').text(language.method_t1);
    $('#method_t2').text(language.method_t2);
    $('#method_t3').text(language.method_t3);
    $('#method_t4').text(language.method_t4);
    $('#method_t5').text(language.method_t5);
    $('#method_t6').text(language.method_t6);
    $('#method_t7').text(language.method_t7);
}
function setTextPackage() {
    $('#home_t1').text(language.whyus_t1);
    $('#package_t1').text(language.package_t1);
    $('#package_t2').text(language.package_t2);
    $('#package_t3').text(language.package_t3);
    $('#package_t4').text(language.package_t4);
    $('#package_t5').text(language.package_t5);
    $('#package_t6').text(language.package_t6);
//    $('#package_t7').text(language.package_t7);
}
function setTextRegister() {
    $('#home_t1').text(language.whyus_t1);
    $('#register_t1').text(language.register_t1);
    $('#register_t2').text(language.register_t2);
    $('#register_t3').text(language.register_t3);
    $('#register_t4').text(language.register_t4);
    $('#register_t5').text(language.register_t5);
    $('#register_t6').text(language.register_t6);
    $('#register_t7').text(language.register_t7);
    $('#register_t8').text(language.register_t8);
    $('#register_t9').text(language.register_t9);
    $('#register_t10').text(language.register_t10);
}

$(document).ready(function () {
    // console.log(localStorage.getItem('language'));
    getLanguage();
});
