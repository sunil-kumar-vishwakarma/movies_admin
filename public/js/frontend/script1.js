document.addEventListener("DOMContentLoaded", function () {
    let slides = document.querySelectorAll(".slide");
    let currentIndex = 0;
  
    function showNextSlide() {
      // Remove 'active' class from current slide
      slides[currentIndex].classList.remove("active");
  
      // Move to the next slide
      currentIndex = (currentIndex + 1) % slides.length;
  
      // Add 'active' class to the new slide
      slides[currentIndex].classList.add("active");
    }
  
    // Change slide every 2 seconds
    setInterval(showNextSlide, 2000);
  });
  
  document.addEventListener("DOMContentLoaded", function () {
    const navLinks = document.querySelectorAll(".nav-links li a");
  
    navLinks.forEach((link) => {
        link.addEventListener("click", function () {
            // Remove "active" from all links
            navLinks.forEach((l) => l.classList.remove("active"));
            // Add "active" to clicked link
            this.classList.add("active");
        });
    });
  
    document.getElementById("store-btn").addEventListener("click", function(event) {
        event.preventDefault();
        let dropdown = document.getElementById("dropdown-menu");
        dropdown.style.display = dropdown.style.display === "block" ? "none" : "block";
    });
  
    // Close dropdown when clicking outside
    document.addEventListener("click", function(event) {
        let dropdown = document.getElementById("dropdown-menu");
        let storeBtn = document.getElementById("store-btn");
        if (!storeBtn.contains(event.target) && !dropdown.contains(event.target)) {
            dropdown.style.display = "none";
        }
    });
  
    document.addEventListener("scroll", function () {
        const navbar = document.querySelector(".navbar");
        if (window.scrollY > 50) {
            navbar.classList.add("scrolled");
        } else {
            navbar.classList.remove("scrolled");
        }
    });
  });
  
  const sign_in_btn = document.querySelector("#sign-in-btn");
  const sign_up_btn = document.querySelector("#sign-up-btn");
  const container = document.querySelector(".container");
  
  sign_up_btn.addEventListener("click", () => {
    container.classList.add("sign-up-mode");
  });
  
  sign_in_btn.addEventListener("click", () => {
    container.classList.remove("sign-up-mode");
  });
  
  document.addEventListener("DOMContentLoaded", function () {
    const movies = document.querySelectorAll(".movie");
  
    // Create a single popup dynamically
    const popup = document.createElement("div");
    popup.classList.add("dynamic-popup");
    popup.innerHTML = `
        <div class="popup-content">
            <div class="popup-title"></div>
            <img src="" alt="Popup Movie Poster" class="popup-image">
        </div>
    `;
    document.body.appendChild(popup);
  
    movies.forEach(movie => {
        const playButton = movie.querySelector(".play-button");
        const movieImage = movie.querySelector("img");
        
        playButton.addEventListener("mouseenter", function (event) {
            const movieTitle = movieImage.alt; // Get movie title from alt attribute
            const moviePoster = movieImage.src; // Get movie poster
            
            // Set popup content
            popup.querySelector(".popup-title").innerText = movieTitle;
            popup.querySelector(".popup-image").src = moviePoster;
  
            // Position the popup above the movie image
            const rect = movieImage.getBoundingClientRect();
            popup.style.left = `${rect.left + window.scrollX}px`;
            popup.style.top = `${rect.top + window.scrollY - popup.offsetHeight - 10}px`; // Add spacing
  
            // Show the popup
            popup.classList.add("visible");
        });
  
        playButton.addEventListener("mouseleave", function () {
            popup.classList.remove("visible");
        });
    });
  });
  
  document.getElementById("store-btn").addEventListener("click", function(event) {
    event.preventDefault();
    let dropdown = document.getElementById("dropdown-menu");
    dropdown.style.display = dropdown.style.display === "block" ? "none" : "block";
  });
  
  document.addEventListener("click", function(event) {
    let dropdown = document.getElementById("dropdown-menu");
    let storeBtn = document.getElementById("store-btn");
    if (!storeBtn.contains(event.target) && !dropdown.contains(event.target)) {
        dropdown.style.display = "none";
    }
  });
  
  // Search functionality
  document.getElementById("search-icon").addEventListener("click", function(event) {
    event.preventDefault();
    let searchPopup = document.getElementById("search-popup");
    searchPopup.style.display = "flex";
  });
  
  document.addEventListener("click", function(event) {
    let searchPopup = document.getElementById("search-popup");
    let searchIcon = document.getElementById("search-icon");
    if (!searchIcon.contains(event.target) && !searchPopup.contains(event.target)) {
        searchPopup.style.display = "none";
    }
  });