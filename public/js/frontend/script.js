document.addEventListener("DOMContentLoaded", function () {

    document.getElementById("menu-toggle").addEventListener("click", function () {
        document.getElementById("nav-links").classList.toggle("active");
    });
    // Slideshow functionality
    let slides = document.querySelectorAll(".slide");
    let currentIndex = 0;
  
    function showNextSlide() {
        slides[currentIndex].classList.remove("active");
        currentIndex = (currentIndex + 1) % slides.length;
        slides[currentIndex].classList.add("active");
    }
  
    setInterval(showNextSlide, 2000);
  
    // Navigation active link handling
    const navLinks = document.querySelectorAll(".nav-links li a");
    navLinks.forEach((link) => {
        link.addEventListener("click", function () {
            navLinks.forEach((l) => l.classList.remove("active"));
            this.classList.add("active");
        });
    });
  
    // Store dropdown toggle
    const storeBtn = document.getElementById("store-btn");
    const dropdown = document.getElementById("dropdown-menu");
  
    if (storeBtn && dropdown) {
        storeBtn.addEventListener("click", function (event) {
            event.preventDefault();
            dropdown.style.display = dropdown.style.display === "block" ? "none" : "block";
        });
  
        document.addEventListener("click", function (event) {
            if (!storeBtn.contains(event.target) && !dropdown.contains(event.target)) {
                dropdown.style.display = "none";
            }
        });
    }


    const profileBtn = document.getElementById("profile-btn");
    const dropdown1 = document.getElementById("dropdown-menu2");
  
    if (profileBtn && dropdown1) {
        profileBtn.addEventListener("click", function (event) {
            event.preventDefault();
            dropdown1.style.display = dropdown.style.display === "block" ? "none" : "block";
        });
  
        document.addEventListener("click", function (event) {
            if (!profileBtn.contains(event.target) && !dropdown1.contains(event.target)) {
                dropdown1.style.display = "none";
            }
        });
    }
  
    // Navbar scroll effect
    const navbar = document.querySelector(".navbar");
    window.addEventListener("scroll", function () {
        if (window.scrollY > 50) {
            navbar.classList.add("scrolled");
        } else {
            navbar.classList.remove("scrolled");
        }
    });
  
    // Sign-in / Sign-up toggle
    const signInBtn = document.querySelector("#sign-in-btn");
    const signUpBtn = document.querySelector("#sign-up-btn");
    const container = document.querySelector(".container");
  
    if (signInBtn && signUpBtn && container) {
        signUpBtn.addEventListener("click", () => container.classList.add("sign-up-mode"));
        signInBtn.addEventListener("click", () => container.classList.remove("sign-up-mode"));
    }
  
    // Movie popup functionality
    const movies = document.querySelectorAll(".movie");
    if (movies.length > 0) {
        const popup = document.createElement("div");
        popup.classList.add("dynamic-popup");
        // popup.innerHTML = `
        //     <div class="popup-content">
        //         <div class="popup-title"></div>
        //         <img src="" alt="Popup Movie Poster" class="popup-image">
        //     </div>
        // `;
        document.body.appendChild(popup);
  
        movies.forEach((movie) => {
            const playButton = movie.querySelector(".play-button");
            const movieImage = movie.querySelector("img");
  
            if (playButton && movieImage) {
                playButton.addEventListener("mouseenter", function () {
                    popup.querySelector(".popup-title").innerText = movieImage.alt;
                    popup.querySelector(".popup-image").src = movieImage.src;
  
                    const rect = movieImage.getBoundingClientRect();
                    popup.style.left = `${rect.left + window.scrollX}px`;
                    popup.style.top = `${rect.top + window.scrollY - popup.offsetHeight - 10}px`;
                    popup.classList.add("visible");
                });
  
                playButton.addEventListener("mouseleave", function () {
                    popup.classList.remove("visible");
                });
            }
        });
    }
  
    // Search functionality
    const searchIcon = document.getElementById("search-icon");
    const searchPopup = document.getElementById("search-popup");
  
    if (searchIcon && searchPopup) {
        searchIcon.addEventListener("click", function (event) {
            event.preventDefault();
            searchPopup.style.display = "flex";
        });
        
  
        document.addEventListener("click", function (event) {
            if (!searchIcon.contains(event.target) && !searchPopup.contains(event.target)) {
                searchPopup.style.display = "none";
            }
        });
    }

    document.addEventListener("DOMContentLoaded", function () {
        const movieContainers = document.querySelectorAll(".movie-container");
    
        movieContainers.forEach(container => {
            let isDown = false;
            let startX;
            let scrollLeft;
    
            container.addEventListener("touchstart", (e) => {
                isDown = true;
                startX = e.touches[0].pageX - container.offsetLeft;
                scrollLeft = container.scrollLeft;
            });
    
            container.addEventListener("touchend", () => {
                isDown = false;
            });
    
            container.addEventListener("touchmove", (e) => {
                if (!isDown) return;
                e.preventDefault();
                const x = e.touches[0].pageX - container.offsetLeft;
                const walk = (x - startX) * 2; // Adjust scroll speed
                container.scrollLeft = scrollLeft - walk;
            });
        });
    });

    document.querySelectorAll(".movie").forEach(movie => {
        const iframe = movie.querySelector("iframe");
        const videoUrl = movie.getAttribute("data-video");
    
        movie.addEventListener("mouseenter", () => {
            iframe.src = videoUrl + "?autoplay"; // Autoplay with mute
        });
    
        movie.addEventListener("mouseleave", () => {
            iframe.src = ""; // Stop video
        });
    });

    function openVideo() {
        document.getElementById("videoPopup").style.display = "block";
        document.getElementById("youtubeVideo").src = "https://www.youtube.com/embed/YOUR_VIDEO_ID";
    }
    function closeVideo() {
        document.getElementById("videoPopup").style.display = "none";
        document.getElementById("youtubeVideo").src = "";
    }


        const watchButtons = document.querySelectorAll('.watch-btn');
        watchButtons.forEach(button => {
          button.addEventListener('click', function(event) {
            event.preventDefault();
            window.location.href = 'watch.html';
          });
        });

        document.querySelector(".update-btn").addEventListener("click", function() {
            let popup = document.getElementById("updatePopup");
        
            // Show popup with smooth effect
            popup.classList.add("show");
        
            // Hide popup after 3 seconds
            setTimeout(function() {
                popup.classList.remove("show");
            }, 3000);
        });

        
        document.querySelector(".btn").addEventListener("click", function() {
        
        
            // Show popup with smooth effect
            popup.classList.add("show");
        
            // Hide popup after 3 seconds
            setTimeout(function() {
                popup.classList.remove("show");
            }, 3000);
        });
      });
