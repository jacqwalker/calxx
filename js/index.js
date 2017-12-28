console.log("say hello");

// cookies popup
$(function () {
  if(localStorage.getItem('popState') != 'shown'){
      $(".cookies-popup-section").delay(2000).fadeIn();
      localStorage.setItem('popState','shown');
  } else {
    document.querySelector(".cookies-popup-section").style.display = "none";
  }
  });

$('.close-cookies-popup').click(function(e) {
    $('.cookies-popup-section').fadeOut();
  });

// set up page loading job search
$(function () {
 $("#findJobs").val("");
});

// Nav bar
function showNavBar(e) {
  e.preventDefault();
  $(".nav-header").toggleClass("visible");
}

$(".nav-icon").click(showNavBar);

// Show and hide role section of application form
function showSection(e) {
  e.preventDefault();
  $(".role-descrip-section").toggleClass("role-descrip-section-visible");
}

$(".role-descrip-section-btn").click(showSection);

function showSection2(e) {
  e.preventDefault();
  $(".role-descrip-section-2").toggleClass("role-descrip-section2-visible");
}

$(".role-descrip-section2-btn").click(showSection2);
//


// Linking find jobs to search page
var newUrl;
$("#findJobs").change(function () {
  // newUrl = $("#findJobs").val();
  newUrl = document.getElementById("findJobs").value;
  }
);

$("#findJobsButton").click(function (e) {
  e.preventDefault();
  location = newUrl;
  }
);

// job alerts popup
function showPopup () {
  document.querySelector(".overlay").style.display = "block";
  $("#myPopup").addClass("show");
  // var popup = document.getElementById("myPopup");
  // popup.addClass("show");
}

$(".job-alerts").click(showPopup);

// close job alerts popup

function closePopup () {
  document.querySelector(".overlay").style.display = "none";
  $("#myPopup").removeClass("show");
}

$(".close-job-alerts").click(closePopup);
