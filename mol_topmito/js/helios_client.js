// API get IP of contact
// var ipAPI = "103.56.158.22:9090/api/visitor/ip";
// API save file upload (file CV)

var save_contact_url = "./mol_topmito/helios_save.php";

var olm_referer = document.referrer;
var olm_data = {};
var olm_ip = "";

$(document).ready(function () {
    //console.log("visitor");
    olmxSendVisitor();

    //Ajax for submit form to save C3
    $(document).on("submit", ".e_form_submit", function (e) {
        //console.log('submit');
        e.preventDefault();
        $(this).find('.btn-submit').attr('disabled', 'disabled');
        var fullname = $(this).find('input[name=name]').val() ? $(this).find('input[name=name]').val() : $('#fullname').val();
        var email = $(this).find('input[name=email]').val() ? $(this).find('input[name=email]').val() : $('#email').val();
        var aCong = email.indexOf("@");
        var dauCham = email.lastIndexOf(".");
        var phone = $(this).find('input[name=phone]').val() ? $(this).find('input[name=phone]').val() : $('#phone').val();
        var age = $(this).find('select[name=age]').val() ? $(this).find('select[name=age]').val() : $('#age').val();
        var dodaisdt = phone.length;
        if (fullname == "") {
            alert("จำเป็นต้องใส่ชื่อ");
            $('#fullname').focus();
            $(this).find('.btn-submit').removeAttr('disabled');
            return (false);
        }
        if (phone == "") {
            alert("จำเป็นต้องใส่หมายเลขโทรศัพท์");
            $('#phone').focus();
            $(this).find('.btn-submit').removeAttr('disabled');
            return (false);
        }
        if (d = phone.match(/^0/i)) {
            if (dodaisdt != 10) {
                alert("เหมายเลขของคุณไม่ถูกต้อง หมายเลขของคุณต้องเริ่มต้นด้วยหมายเลย 0");
                $('#phone').focus();
                $(this).find('.btn-submit').removeAttr('disabled');
                return (false);
            }
        } else {
            alert("หมายเลขของคุณไม่ถูกต้อง หมายเลขของคุณต้องเริ่มต้นด้วยหมายเลย 0");
            $('#phone').focus();
            $(this).find('.btn-submit').removeAttr('disabled');
            return false;
        }
        if ((email == "") || (email == "email_address@gmail.com")) {
            alert("กรุณากรอกอีเมล์ของคุณ");
            $('#email').focus();
            $(this).find('.btn-submit').removeAttr('disabled');
            return (false);
        }
        if ((aCong < 1) || (dauCham < aCong + 2) || (dauCham + 2 > email.length)) {
            alert("อีเมล์ อย่างเช่น :email@example.com");
            $('#email').focus();
            $(this).find('.btn-submit').removeAttr('disabled');
            return false;
        }
        if (age == "0") {
            alert("กรุณาใส่วันเกิด")
            $(this).find('.btn-submit').removeAttr('disabled');
            return (false);
        }

        // helios system send c3
        olmxSendContact(document.getElementById("jobs_native"));

    });

});

function saveLog(msg, fname) {
    $.ajax({
        method: "POST",
        crossDomain: true,
        url: "./mol_topmito/helios_save.php",
        data: {
            action: "savelog", fileName: fname, data: msg
        }
    });
}

var olmxBrowserInfo = function () {
    var nVer = navigator.appVersion;
    var nAgt = navigator.userAgent;
    var browserName = navigator.appName;
    var fullVersion = "" + parseFloat(navigator.appVersion);
    var majorVersion = parseInt(navigator.appVersion, 10);
    var nameOffset, verOffset, ix;
    var device = "desktop";
    if (/Android|webOS|iPhone|iPad|iPod|BlackBerry|IEMobile|Opera Mini/i.test(navigator.userAgent)) {
        device = "mobile";
    }

    // In Opera 15+, the true version is after "OPR/"
    if ((verOffset = nAgt.indexOf("OPR/")) != -1) {
        browserName = "Opera";
        fullVersion = nAgt.substring(verOffset + 4);
    }
    // In older Opera, the true version is after "Opera" or after "Version"
    else if ((verOffset = nAgt.indexOf("Opera")) != -1) {
        browserName = "Opera";
        fullVersion = nAgt.substring(verOffset + 6);
        if ((verOffset = nAgt.indexOf("Version")) != -1)
            fullVersion = nAgt.substring(verOffset + 8);
    }
    // In MSIE, the true version is after "MSIE" in userAgent
    else if ((verOffset = nAgt.indexOf("MSIE")) != -1) {
        browserName = "Microsoft Internet Explorer";
        fullVersion = nAgt.substring(verOffset + 5);
    }
    // In Chrome, the true version is after "Chrome"
    else if ((verOffset = nAgt.indexOf("Chrome")) != -1) {
        browserName = "Chrome";
        fullVersion = nAgt.substring(verOffset + 7);
    }
    // In Safari, the true version is after "Safari" or after "Version"
    else if ((verOffset = nAgt.indexOf("Safari")) != -1) {
        browserName = "Safari";
        fullVersion = nAgt.substring(verOffset + 7);
        if ((verOffset = nAgt.indexOf("Version")) != -1)
            fullVersion = nAgt.substring(verOffset + 8);
    }
    // In Firefox, the true version is after "Firefox"
    else if ((verOffset = nAgt.indexOf("Firefox")) != -1) {
        browserName = "Firefox";
        fullVersion = nAgt.substring(verOffset + 8);
    }
    // In most other browsers, "name/version" is at the end of userAgent
    else if ((nameOffset = nAgt.lastIndexOf(" ") + 1) <
        (verOffset = nAgt.lastIndexOf("/"))) {
        browserName = nAgt.substring(nameOffset, verOffset);
        fullVersion = nAgt.substring(verOffset + 1);
        if (browserName.toLowerCase() == browserName.toUpperCase()) {
            browserName = navigator.appName;
        }
    }
    // trim the fullVersion string at semicolon/space if present
    if ((ix = fullVersion.indexOf(";")) != -1)
        fullVersion = fullVersion.substring(0, ix);
    if ((ix = fullVersion.indexOf(" ")) != -1)
        fullVersion = fullVersion.substring(0, ix);

    majorVersion = parseInt("" + fullVersion, 10);
    if (isNaN(majorVersion)) {
        fullVersion = "" + parseFloat(navigator.appVersion);
        majorVersion = parseInt(navigator.appVersion, 10);
    }

    return {
        "browser_name": browserName,
        "full_version": fullVersion,
        "major_version": majorVersion,
        "device": device
    };
};

var olmxLandingPage = function () {
    // This function is anonymous, is executed immediately and
    // the return value is assigned to QueryString!
    var query = window.location.href;
    var vars = query.split("?");
    if (vars.length > 1) {
        return vars[0];
    } else {
        return query;
    }
};

function olmxSearchParams() {
    var search = location.search.substring(1);

    if(!search) return false;

    var params = search.split(/&/g);
    params = params.filter(Boolean);

    for (p in params) {
        if (!/=/i.test(params[p])) {
            params[params.indexOf(params[p])] = params[p] + "=";
        }
    }

    var paramsURLString = params.join("&");
    var paramsFromURL = JSON.parse('{"' + paramsURLString.replace(/&/g, '","').replace(/=/g,'":"') + '"}', function(key, value) {
        return key==="" ? value : decodeURIComponent(value);
    });
    return paramsFromURL;
}

var olmxLoadIp = function () {
    $.ajax({
        method: "GET",
        //url: ("https:" == document.location.protocol ? "https://" : "http://") + ipAPI,
        //data: {}
        url: "https://jsonip.com",
        dataType: 'json'
    }).success(function (data) {
        //olm_ip = data.REMOTE_ADDR;
        olm_ip = data.ip;
    });
};

function olmxSendVisitor() {
    // console.log("visitor");
    olmxLoadIp();
    setTimeout(function () {
        var browser_info = olmxBrowserInfo();
        var session_data = {
            //code: (ClientStorage.get("visitor_code")) ? ClientStorage.get("visitor_code") : null,
            //session_code: session_code,
            ip: olm_ip,
            platform: navigator.platform,
            oscpu: (navigator.oscpu) ? navigator.oscpu : "",
            browser: browser_info.browser_name,
            browser_version: browser_info.full_version,
            user_agent: navigator.userAgent,
            device: browser_info.device,
            cookie_enabled: (navigator.cookieEnabled) ? 1 : 0,
            initial_referrer: olm_referer,
            initial_domain: decodeURIComponent(window.location.href),
            ads_link: decodeURIComponent(window.location.href),
            domain: decodeURIComponent(window.location.protocol) + "//" + decodeURIComponent(window.location.hostname),
            landing_page: olmxLandingPage()
        };

        //Get default params of landing page
        if (olm_data) {
            for (i in olm_data) {
                if (olm_data.hasOwnProperty(i)) {
                    session_data[i] = olm_data[i];
                }
            }
        }

        var paramsFromURL = olmxSearchParams();
        if (paramsFromURL) {
            for (i in paramsFromURL) {
                if (paramsFromURL.hasOwnProperty(i)) {
                    session_data[i] = paramsFromURL[i];
                }
            }
        }

        //call API visitor
        session_data.msg_source = "landing_page";
        session_data.msg_type = "visitor";

        //get code
        var visitor_code = olmxGetCookie("olmx_visitor_code");
        var session_code = olmxGetCookie("olmx_session_code");
        if (visitor_code === undefined) {
            visitor_code = "";
        }
        if (session_code === undefined) {
            session_code = "";
        }
        session_data.visitor_code = visitor_code;
        session_data.session_code = session_code;

        $.ajax({
            method: "POST",
            dataType: "json",
            crossDomain: true,
            //jsonp: false,
            //jsonpCallback: "save_data",
            url: save_contact_url,
            data: {action: "visitor", data: JSON.stringify(session_data)}
        }).success(function (response) {
            console.log("success ", response);
            var result = response;
            if (result.code === 200) {
                if (result.data.visitor_code !== undefined && result.data.visitor_code.length > 0) {
                    olmxSetCookie("olmx_visitor_code", result.data.visitor_code);
                }
                if (result.data.session_code.length !== undefined && result.data.session_code.length > 0) {
                    olmxSetCookie("olmx_session_code", result.data.session_code);
                }
            }
        }).error( function(response) {
            console.log("err ", response);
        });

    }, 200);
}

function olmxSetCookie(cname, cvalue) {
    var d = new Date();
    d.setTime(d.getTime() + (60 * 24 * 60 * 60 * 1000));
    var expires = "expires=" + d.toUTCString();
    document.cookie = cname + "=" + cvalue + ";" + expires + ";path=/";
}

function olmxGetCookie(cname) {
    var name = cname + "=";
    var decodedCookie = decodeURIComponent(document.cookie);
    var ca = decodedCookie.split(";");
    for (var i = 0; i < ca.length; i++) {
        var c = ca[i];
        while (c.charAt(0) === " ") {
            c = c.substring(1);
        }
        if (c.indexOf(name) === 0) {
            return c.substring(name.length, c.length);
        }
    }
    return "";
}

function olmxSendContact(form) {
    // console.log("submitter");
    // start save contact
    saveLog(window.location.hostname + " AJAX starting...", "contact_log.txt");

    // get device identify
    var browser_info = olmxBrowserInfo();

    //get code
    var visitor_code = olmxGetCookie("olmx_visitor_code");
    var session_code = olmxGetCookie("olmx_session_code");
    if (visitor_code === undefined) {
        visitor_code = "";
    }
    if (session_code === undefined) {
        session_code = "";
    }

    saveLog(window.location.hostname + " AJAX reparing...", "contact_log.txt");
    form = $(form);
    if (form) {
        var params = form.serializeArray();
        var ajax_data = {};
        if (typeof (olm_data) != "undefined") {
            ajax_data = olm_data;
        }
        ajax_data.msg_source = "landing_page";
        ajax_data.msg_type = "submitter";
        ajax_data.device = browser_info.device;
        ajax_data.domain = decodeURIComponent(window.location.protocol) + "//" + decodeURIComponent(window.location.hostname);
        ajax_data.initial_referrer = document.referrer;
        ajax_data.ads_link = decodeURIComponent(window.location.href);
        ajax_data.landing_page = olmxLandingPage();
        ajax_data.ip = olm_ip;
        ajax_data.platform = navigator.platform;
        ajax_data.oscpu = (navigator.oscpu) ? navigator.oscpu : "";
        ajax_data.browser = browser_info.browser_name;
        ajax_data.browser_version = browser_info.full_version;
        ajax_data.user_agent = navigator.userAgent;
        ajax_data.visitor_code = visitor_code;
        ajax_data.session_code = session_code;

        //console.log("params : " + params);

        var paramsFromURL = olmxSearchParams();
        if (paramsFromURL) {
            for (i in paramsFromURL) {
                if (paramsFromURL.hasOwnProperty(i)) {
                    ajax_data[i] = paramsFromURL[i];
                }
            }
        }

        for (var i = 0; i < params.length; i++) {
            if (params[i].name == "age" && params[i].value == "20 - 30 ??") {
                params[i].value = "20";
            }
            ajax_data[params[i].name] = params[i].value;
        }

        saveLog(window.location.hostname + " AJAX running..." +
            ", name : " + ajax_data.name +
            ", phone : " + ajax_data.phone +
            ", email : " + ajax_data.email +
            ", age : " + ajax_data.age,
            "contact_log.txt");

        $.ajax({
            method: "POST",
            dataType: "json",
            //async: false,
            crossDomain: true,
            //jsonp: false,
            //jsonpCallback: "save_data",
            url: save_contact_url,
            data: {action: "contact", data: JSON.stringify(ajax_data)}
        }).success(function (response) {
            saveLog(window.location.hostname + " AJAX success...", "contact_log.txt");
            //if (ajax_data.age < "18" ||
            if(response.code !== 200 || response.url === null) {
                saveLog(window.location.hostname + " AJAX failed ... "
                    + JSON.stringify(ajax_data) + " "
                    + JSON.stringify(response), "contact_log.txt");
                console.log("Failed !");
                // location.href = "http://bestenglish.topicanative.co.th/helios";
            } else {
                console.log("Thanks !");
                // location.href = response.url;
            }
        }).error( function(response) {
            saveLog(window.location.hostname + " AJAX error...", "contact_log.txt");
            console.log("Error !", response);
            // location.href = "http://bestenglish.topicanative.co.th/helios";
        });
    }
}
