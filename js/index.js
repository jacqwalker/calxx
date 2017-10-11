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

// Show and hide application form
// function showForm(e) {
//   e.preventDefault();
//   $(".application-section").addClass("application-section-visible");
// }
//
// $(".apply-now-button").click(showForm);
//
// function hideForm(e) {
//   e.preventDefault();
//   $(".application-section").removeClass("application-section-visible");
// }
//
// $(".close-apply-now-form").click(hideForm);

// Show and hide job alert section
function showJobAlerts(e) {
  e.preventDefault();
  $(".job-alert-section").addClass("job-alert-section-visible");
}

$(".job-alerts").click(showJobAlerts);


function hideJobAlert(e) {
  e.preventDefault();
  $(".job-alert-section").removeClass("job-alert-section-visible");
}

$(".close-job-alerts").click(hideJobAlert);

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
