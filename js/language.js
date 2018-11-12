var language;

function setLanguage(lang) {
    localStorage.setItem('language', lang);
    getLanguage();
}

function getLanguage() {
    (localStorage.getItem('language') == null) ? setLanguage('eng'): false;
    var urlCurrent = window.location.href.toString().toLowerCase();
    $.ajax({
        url: './language/' + localStorage.getItem('language') + '.json',
        dataType: 'json',
        async: false,
        dataType: 'json',
        success: function (lang) {
            language = lang
            console.log(language);
            console.log('url:' + urlCurrent);
            console.log('home'.includes(urlCurrent));
            if (urlCurrent.includes('home')) {
                ('home');
                setTextHome();
            } else if (urlCurrent.includes('whyus')) {
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
                console.log("not found");
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
//    $('#whyus_t7').text(language.whyus_t7);
//    $('#whyus_t8').text(language.whyus_t8);
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
    getLanguage();
});
