<nav class="navbar">
    <div class="logo">
        <img src="image/logo.gif" alt="" />
    </div>
    <ul class="nav-links">
        <li><a href="#" class="active">Home</a></li>
        <li><a href="movies.html">Movies</a></li>
        <li><a href="#">LiveTV</a></li>
        <li><a href="#">Sports</a></li>
        <li><a href="#">TV Shows</a></li>
        <li><a href="#">Upcoming</a></li>
        <li><a href="#">Kids</a></li>
        <li class="dropdown">
            <a href="#" id="store-btn">Store
                <i class="ri-arrow-drop-down-fill" style="font-weight: bold"></i>
            </a>
            <ul id="dropdown-menu">
                <li><a href="#">Movies</a></li>
                <li><a href="#">Shows</a></li>
            </ul>
        </li>
        <li>
            <a href="#"><i class="ri-search-line" style="font-size: 20px"></i></a>
        </li>
        <li>
            <a href="register-login.html"><i class="ri-user-3-line" style="font-size: 20px"></i></a>
        </li>
    </ul>
    <button class="subscribe-btn">Subscribe</button>
</nav>

<style>
  .dropdown {
      position: relative;
  }
  #dropdown-menu {
      display: none;
      position: absolute;
      background: #444;
      list-style: none;
      padding: 5px 0;
      min-width: 150px;
      border-radius: 5px;
      top: 100%;
      left: 0;
      box-shadow: 0 4px 6px rgba(0, 0, 0, 0.2);
  }
  #dropdown-menu li {
      padding: 10px;
  }
  #dropdown-menu a {
      color: white;
      text-decoration: none;
      display: block;
      padding: 10px;
  }
  #dropdown-menu a:hover {
      background: #555;
      border-radius: 3px;
  }
</style>

<script>
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
</script>
