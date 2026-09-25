function contactUSMail(nameid, emailid, phoneid, interestid, submitid, messageid) {

    var $ = jQuery;
    var name = $("#" + nameid).val();
    var email = $("#" + emailid).val();
    var phone = $("#" + phoneid).val();
    var interested = $("#" + interestid).val();
    var message = $('textarea#' + messageid).val();
    var to = "info@astiinfotech.com";
    var subject = "Interested in " + interested;
    var pattern = /^[0-9]{6,16}$/;
    var namepattern1 = /^[a-zA-Z_]+( [a-zA-Z_]+)*$/;
    var namepattern1 = /^.{3,50}$/;
    var interestpattern1 = /^[a-zA-Z_]+( [a-zA-Z_]+)*$/;
    var interestpattern1 = /^.{3,50}$/;
    var patt = /[A-Za-z0-9._%+-]+@[A-Za-z0-9.-]+\.[A-Za-z]{2,3}$/;


    if (name == null || name == "") {
        alert("Name must be filled out.");
        return false;
    } else if (!namepattern1.test(name)) {
        alert("Name should be greater then 3 Characters and lesser than 50 Characters");
        return false;
    } else if (email == null || email == "") {
        alert("Email must be filled out.");
        return false;
    } else if (!patt.test(email)) {
        alert("Please provide valid email address.");
        return false;
    } else if (interested == null || interested == "") {
        alert("Interested field must be filled out.");
        return false;
    } else if (!interestpattern1.test(interested)) {
        alert("Interested field should be greater then 3 Characters and lesser than 50 Characters");
        return false;
    } else if (phone == "") {
        alert("Please provide your mobile number!");
        return false;
    } else if (!pattern.test(phone)) {
        alert("It is not valid mobile number! Mobile number should be greater then 6 digits and lesser than 16 digits");
        return false;
    } else if (message == null || message == "") {
        alert("Please provide message");
        return false;
    } else if (name != "" && email != "" && phone != "" && message != "") {


        var getUrl = window.location;
        var baseurl = getUrl.origin; //or
        var base_url = getUrl.origin + '/' + getUrl.pathname.split('/')[1];

        $("#" + submitid).html('Sending...');
        $("#loading2").show();
        $.ajax({
            type: "POST",
            data: {
                "name": name,
                "email": email,
                "subject": interested,
                "message": message,
                "to": to,
                "phone": phone
            },
            url: "https://imprintai.us/imprintmail.php",
            success: function(msg) {
                  $("#loading2").hide();
                $.ajax({
                    type: "POST",
                    data: {
                        "name": name,
                        "email": email,
                        "subject": subject,
                        "message": message,
                        "to": to,
                        "phone": phone,
                        "interested": interested
                    },
                    // url: base_url+'/contact_us/insert_data',
                    success: function(msg) {
                        $("#loading2").hide();
                     
                        $("#" + nameid).val('');
                        $("#" + emailid).val('');
                        $("#" + phoneid).val('');
                        $("#" + interestid).val('');
                        $("#" + messageid).val('');
                        $("#" + submitid).html('Send Message');
                        // alert("We will connect with you soon !!");
                        window.location.href = "thankyou";
                    }
                });
            }
        });

    }
}

// -----------------------------contactUSMail-end------------------------

function pricingData(nameid, emailid, phoneid, interestid, submitid, radio_id1, radio_id2, radio_id3, checkbox1id, checkbox2id) {
    var $ = jQuery;
    var radioValue = "";
    var checkbox1 = "";
    var checkbox2 = "";
    var checkbox3 = "";
    var checkbox4 = "";
    var checkbox5 = "";
    var checkbox6 = "";
    var checkbox7 = "";
    var checkbox8 = "";
    var checkbox9 = "";
    var checkbox10 = "";
    var checkbox11 = "";
    if (document.getElementById("selectall").checked == true) {
        checkbox1 = document.getElementById("1").value
        checkbox2 = document.getElementById("2").value
        checkbox3 = document.getElementById("3").value
        checkbox4 = document.getElementById("4").value
        checkbox5 = document.getElementById("5").value
        checkbox6 = document.getElementById("6").value
        checkbox7 = document.getElementById("7").value
        checkbox8 = document.getElementById("8").value
        checkbox9 = document.getElementById("9").value
        checkbox10 = document.getElementById("10").value
        checkbox11 = document.getElementById("11").value
    }
    if (document.getElementById("selectall").checked == false) {
        checkbox1 = "";
        checkbox2 = "";
        checkbox3 = "";
        checkbox4 = "";
        checkbox5 = "";
        checkbox6 = "";
        checkbox7 = "";
        checkbox8 = "";
        checkbox9 = "";
        checkbox10 = "";
        checkbox11 = "";
    }

    if (document.getElementById("1").checked == true) {
        checkbox1 = document.getElementById("1").value
    }
    if (document.getElementById("2").checked == true) {
        checkbox2 = document.getElementById("2").value
    }
    if (document.getElementById("3").checked == true) {
        checkbox3 = document.getElementById("3").value
    }
    if (document.getElementById("4").checked == true) {
        checkbox4 = document.getElementById("4").value
    }
    if (document.getElementById("5").checked == true) {
        checkbox5 = document.getElementById("5").value
    }
    if (document.getElementById("6").checked == true) {
        checkbox6 = document.getElementById("6").value
    }
    if (document.getElementById("7").checked == true) {
        checkbox7 = document.getElementById("7").value
    }
    if (document.getElementById("8").checked == true) {
        checkbox8 = document.getElementById("8").value
    }
    if (document.getElementById("9").checked == true) {
        checkbox9 = document.getElementById("9").value
    }
    if (document.getElementById("10").checked == true) {
        checkbox10 = document.getElementById("10").value
    }
    if (document.getElementById("11").checked == true) {
        checkbox11 = document.getElementById("11").value
    }

    var $ = jQuery;
    var name = $("#" + nameid).val();
    var email = $("#" + emailid).val();
    var phone = $("#" + phoneid).val();
    var interested = $("#" + interestid).val();
    var message = 'Interested in - '+ interested+'\n'+ radioValue+' Features Interested in - '+ checkbox1+','+ checkbox2+','+ checkbox3+','+ checkbox4+','+ checkbox5+','+ checkbox6+','+ checkbox7+','+ checkbox8+','+ checkbox9+','+ checkbox10+','+ checkbox11;
    var to = "info@astiinfotech.com";
    var subject = "Interested in " + interested;
    var namepattern2 = /^[a-zA-Z_]+( [a-zA-Z_]+)*$/;
    var namepattern2 = /^.{3,50}$/;
    var interestpattern2 = /^[a-zA-Z_]+( [a-zA-Z_]+)*$/;
    var interestpattern2 = /^.{3,50}$/;
    var pattern = /^[0-9]{6,16}$/;
    var patt = /[A-Za-z0-9._%+-]+@[A-Za-z0-9.-]+\.[A-Za-z]{2,3}$/;

    if (name == null || name == "") {
        alert("Name must be filled out.");
        return false;
    } else if (!namepattern2.test(name)) {
        alert("Name should be greater then 3 Characters and lesser than 50 Characters");
        return false;
    } else if (email == null || email == "") {
        alert("Email must be filled out.");
        return false;
    } else if (!patt.test(email)) {
        alert("Please provide valid email address.");
        return false;
    } else if (interested == null || interested == "") {
        alert("Interested field must be filled out.");
        return false;
    } else if (!interestpattern2.test(interested)) {
        alert("Interested field should be greater then 3 Characters and lesser than 50 Characters");
        return false;
    } else if (phone == "") {
        alert("Please provide your mobile number!");
        return false;
    } else if (!pattern.test(phone)) {
        alert("It is not valid mobile number! Mobile number should be greater then 6 digits and lesser than 16 digits");
        return false;
    }
    if (document.getElementById('five1').checked == true) {
        radioValue = "Upto500";
    } else if (document.getElementById('thousand1').checked == true) {
        radioValue = "500to1000";
    } else if (document.getElementById('above1').checked == true) {
        radioValue = "above1000";
    } else {
        alert("Please select a Expected Volume.");
        return false;
    }

    if (name != "" && email != "" && phone != "" && interested != "") {


        var getUrl = window.location;
        var baseurl = getUrl.origin; //or
        var base_url = getUrl.origin + '/' + getUrl.pathname.split('/')[1];

        $("#" + submitid).html('Sending...');
        $("#loading3").show();
      
        $.ajax({
            type: "POST",
            data: {
                "name": name,
                "email": email,
                "subject": subject,
                "message": message,
                "to": to,
                "phone": phone
            },
            url: "https://imprintai.us/imprintmail.php",
            success: function(msg) {
                $("#loading3").hide();
        $.ajax({
            type: "POST",
            data: {
                "name": name,
                "email": email,
                "subject": subject,
                "to": to,
                "phone": phone,
                "interested": interested,
                "radioValue": radioValue,
                "checkbox1": checkbox1,
                "checkbox2": checkbox2,
                "checkbox3": checkbox3,
                "checkbox4": checkbox4,
                "checkbox5": checkbox5,
                "checkbox6": checkbox6,
                "checkbox7": checkbox7,
                "checkbox8": checkbox8,
                "checkbox9": checkbox9,
                "checkbox10": checkbox10,
                "checkbox11": checkbox11
            },
            // url: base_url+'/contact_us/pricing_data',
            success: function(msg2) {
                $("#loading3").hide();
                // alert("Thanks for sharing the details. We will contact you soon with the pricing details")
                jQuery('input:checked').prop('checked', false);

                $("#" + nameid).val('');
                $("#" + emailid).val('');
                $("#" + phoneid).val('');
                $("#" + interestid).val('');
                // $("#"+submitid).html('Send Message');      
                // window.location.href = "Thankyou";  
                window.location.href = "thankyou";
            }
        });
            }
        });
    }
}


//--------------------------Request Demo ----------------------------------------------

function requestDemo(nameid, company_nameid, work_emailid, phoneid, countryid, submitid) {
    debugger
    var $ = jQuery;
    var name = $("#" + nameid).val();
    var email = $("#" + work_emailid).val();
    var phone = $("#" + phoneid).val();
    var companyName = $("#" + company_nameid).val();
    var country = $('#' + countryid).val();
    var message = 'Company Name - '+ companyName+'\n'+'Country -' + country;
    var to = "info@astiinfotech.com";
    // var subject="Interested in "+interested;
    var subject = "Demo Request";
    var namepattern3 = /^[a-zA-Z_]+( [a-zA-Z_]+)*$/;
    var namepattern3 = /^.{3,50}$/;
    var countrypattern2 = /^[a-zA-Z_]+( [a-zA-Z_]+)*$/;
    var countrypattern2 = /^.{2,50}$/;
    var companypattern = /^[a-zA-Z0-9_]+( [a-zA-Z0-9_]+)*$/;
    var companypattern = /^.{3,50}$/;
    var pattern = /^[0-9]{6,16}$/;
    var patt = /[A-Za-z0-9._%+-]+@[A-Za-z0-9.-]+\.[A-Za-z]{2,3}$/;

    if (name == null || name == "") {
        alert("Name must be filled out.");
        return false;
    } else if (!namepattern3.test(name)) {
        alert("Name should be greater then 3 Characters and lesser than 50 Characters");
        return false;
    } else if (companyName == null || companyName == "") {
        alert("Company name must be filled out.");
        return false;
    } else if (!companypattern.test(companyName)) {
        alert("Company name should be greater then 2 Characters and lesser than 50 Characters");
        return false;
    } else if (!patt.test(email)) {
        alert("Please provide valid email address.");
        return false;
    } else if (country == null || country == "") {
        alert("Country field must be filled out.");
        return false;
    } else if (!countrypattern2.test(country)) {
        alert("Country field should be greater then 3 Characters and lesser than 50 Characters");
        return false;
    } else if (phone == "") {
        alert("Please provide your mobile number!");
        return false;
    } else if (!pattern.test(phone)) {
        alert("It is not valid mobile number! Mobile number should be greater then 6 digits and lesser than 16 digits");
        return false;
    } else if (name != "" && email != "" && phone != "" && companyName != "") {


        var getUrl = window.location;
        var baseurl = getUrl.origin; //or
        var base_url = getUrl.origin + '/' + getUrl.pathname.split('/')[1];

        $("#" + submitid).html('Sending...');
        $("#loading").show();
        $.ajax({
            type: "POST",
            data: {
                "name": name,
                "email": email,
                "subject": subject,
                "message": message,
                "companyName": companyName,
                "country": country,
                "to": to,
                "phone": phone
            },
            url: "https://imprintai.us/imprintmail.php",
            success: function(msg) {
                $("#loading").hide();
                $.ajax({
                    type: "POST",
                    data: {
                        "name": name,
                        "email": email,
                        "companyName": companyName,
                        "country": country,
                        "phone": phone
                    },
                    // url:base_url+'/contact_us/demo_data',,
                    success: function(msg2) {
                        $("#loading").hide();
                        
                        $("#" + nameid).val('');
                        $("#" + work_emailid).val('');
                        $("#" + company_nameid).val('');
                        $("#" + phoneid).val('');
                        $("#" + countryid).val('');
                        $("#" + submitid).html('Send Message');
                        // alert("We will connect with you soon !!");
                        window.location.href = "thankyou";
                    }
                });
            }
        });
    }
}