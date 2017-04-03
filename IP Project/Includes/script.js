/**
 * Created by Omar on 3/6/2017.
 */


/*Automatic Slideshow*/
var slideIndex = 0;
window.addEventListener("load",showSlides,true);


function showSlides() {
    var i;
    var slides = document.getElementsByClassName("mySlides");
    for (i = 0; i < slides.length; i++) {
        slides[i].style.display = "none";
    }
    slideIndex++;
    if (slideIndex> slides.length) {slideIndex = 1}
    slides[slideIndex-1].style.display = "block";
    setTimeout(showSlides, 5000); // Change image every 5 seconds
}

/*Manual Slideshow*/

//-------------------------------------------scroll button---------------------------------------------------------------------//
// When the user scrolls down 20px from the top of the document, show the button
window.onscroll = function() {scrollFunction()};

function scrollFunction() {
    if (document.body.scrollTop > 20 ) {
        document.getElementById("myBtn").style.display = "block";
    } else {
        document.getElementById("myBtn").style.display = "none";
    }
}



// When the user clicks on the button, scroll to the top of the document

$(document).ready(function() {
    $('#myBtn').click(function () {
        $("html, body").animate({scrollTop: 0}, 1700);
        return false;
    });

});



//----------------------------------------------Fixed navbar------------------------------------------------------------------//
$(document).ready(function() {
  var stickyNavTop = $('nav').offset().top;

  var stickyNav = function(){
    var scrollTop = $(window).scrollTop();

    if (scrollTop > stickyNavTop) { 
      $("#navbar-frame, #navbar-Admin").addClass('sticky');
    } else {
      $("#navbar-frame, #navbar-Admin").removeClass('sticky');
    }
  };

  stickyNav();

  $(window).scroll(function() {
    stickyNav();
  });
});


$(document).ready(function(){
    $("#navbar-frame").load("Includes/Navbar.html");
});

$(document).ready(function(){
    $("#navbar-Admin").load("Includes/AdminNav.html");
});

$(document).ready(function(){
    $("#Footer-frame").load("Includes/Footer.html");
});





//------------------------------------------------------------------JSON------------------------------------------------------------------//

function JSON()
{
    var name= document.a.in1.value;
    var email= document.a.in2.value;
    var checkin= document.a.in3.value;
    var checkout=document.a.in4.value;
    var NOG= document.a.in5.value;
    var RT= document.a.in6.value;
    var msg= document.a.in7.value;
    var n=parseInt(RT);
    var arr = [x,y,z,n];

    var Form= {
        "Form1": {
            "Name": "",
            "Email": "",
            "checkin": "",
            "checkout": "",
            "NOG": "",
            "RT": "",
            "msg": ""
        },
        "AdminAddRoom":{
            "RoomNumber":"",
            "RoomType":"",
            "RoomLocation":"",
            "RoomDescription":"",
            "RoomAvailability":""
        },
        "AdminEditRoom":{
            "RoomNumber":"",
            "RoomType":"",
            "RoomLocation":"",
            "RoomDescription":"",
            "RoomAvailability":""
        }

    }

    Form.Form1.Name= document.a.in1.value;
    Form.Form1.Email= document.a.in2.value;
    Form.Form1.checkin= document.a.in3.value;
    Form.Form1.checkout=document.a.in4.value;
    Form.Form1.NOG= document.a.in5.value;
    Form.Form1.RT= document.a.in6.value;
    Form.Form1.msg= document.a.in7.value;
    //==============================================//
    var chkin = JSON.parse(Form.Form1.checkin);
    var chkout = JSON.parse(Form.Form1.checkout);
    var NOofG = JSON.parse(Form.Form1.NOG);
    //=============================================//
    Form.AdminAddRoom.RoomNumber = document.add.in1.value;
    Form.AdminAddRoom.RoomType = document.add.in2.value;
    Form.AdminAddRoom.RoomLocation = document.add.in3.value;
    Form.AdminAddRoom.RoomDescription = document.add.in4.value;
    Form.AdminAddRoom.RoomAvailability = document.add.in5.value;
    //=============================================//
    var roomnum = JSON.parse(Form.AdminAddRoom.RoomNumber);
    //===============================================//
    Form.AdminEditRoom.RoomNumber = document.Edit.in1.value;
    Form.AdminEditRoom.RoomType = document.Edit.in2.value;
    Form.AdminEditRoom.RoomLocation = document.Edit.in3.value;
    Form.AdminEditRoom.RoomDescription = document.Edit.in4.value;
    Form.AdminEditRoom.RoomAvailability = document.Edit.in5.value;
    //==================================================//
    var roomnum2 = JSON.parse(Form.AdminAddRoom.RoomNumber);
}

//------------------------------------------------------------------validate Form------------------------------------------------------------------//
function validateForm() {
    var letters = /[A-Za-z]/;
    var numbers = /\d/;
    var format = "mm/dd/yyyy";
    var at ="@";
    var Name = document.getElementById("name").value;
    var Email = document.getElementById("email").value;
    if (document.getElementById('name').value == "" || document.getElementById('email').value == "" ) {
        alert("Fill All Fields !");
    }else if (!Name.match(letters)) {
        window.alert("Name must be Letters only");
    }
    else if (!Email.match(at)) {
            window.alert("Please type an email with the right format");
        }
     else {
        document.getElementById('form').submit();
        alert("Form Submitted Successfully...");
    }

}








function check_empty() {
    if (document.getElementById('name').value == "" || document.getElementById('email').value == "" || document.getElementById('msg').value == "") {
        alert("Fill All Fields !");
    } else {
        document.getElementById('form').submit();
        alert("Form Submitted Successfully...");
    }
}
//Function To Display Popup
function div_show() {
    document.getElementById('abc').style.display = "block";
}
//Function to Hide Popup
function div_hide(){
    document.getElementById('abc').style.display = "none";
}