document.addEventListener("DOMContentLoaded", function() {
    var acceptCookiesButton = document.getElementById("accept-cookies");
    
    acceptCookiesButton.addEventListener("click", function() {
      // Set a cookie or update a flag in your backend to remember the user's preference
      // For example, you can use document.cookie = "cookiesAccepted=true";
      // You may also want to include an expiration date for the cookie
  
      // Hide the cookies banner
      var cookiesBanner = document.querySelector(".container");
      cookiesBanner.style.display = "none";
    });
  });
  