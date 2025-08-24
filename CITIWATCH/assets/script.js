document.addEventListener('DOMContentLoaded', function() {
    const hamburger = document.querySelector('.hamburger');
    const navMenu = document.querySelector('.navdiv ul');
    
    // Only run this code if hamburger exists on the page
    if (hamburger && navMenu) {
      hamburger.addEventListener('click', function() {
        this.classList.toggle('active');
        navMenu.classList.toggle('active');
      });
      
      // Close menu when clicking on a link
      const navLinks = document.querySelectorAll('.navdiv ul li a');
      navLinks.forEach(link => {
        link.addEventListener('click', function() {
          hamburger.classList.remove('active');
          navMenu.classList.remove('active');
        });
      });
    }
  });

  const fileInput = document.getElementById("fileInput");
const fileName = document.querySelector(".file-name");

fileInput.addEventListener("change", function () {
  fileName.textContent = this.files.length > 0 ? this.files[0].name : "No file chosen";
});




  

