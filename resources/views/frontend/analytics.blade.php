<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <link rel="icon" href="image/logo.gif" />
    <title>SHTube</title>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/ionicons/5.5.2/ionicons.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/chart.js"></script>
  </head>

  <style>
    /* =========== Google Fonts ============ */
    @import url("https://fonts.googleapis.com/css2?family=Ubuntu:wght@300;400;500;700&display=swap");

    /* =============== Globals ============== */
    * {
      font-family: "Ubuntu", sans-serif;
      margin: 0;
      padding: 0;
      box-sizing: border-box;
    }

    :root {
      --blue: #2a2185;
      --white: #fff;
      --gray: #f5f5f5;
      --black1: #222;
      --black2: #999;
    }

    body {
      min-height: 100vh;
      overflow-x: hidden;
    }

    .container {
      position: relative;
      width: 100%;
    }

    /* =============== Navigation ================ */
    .navigation {
      position: fixed;
      width: 300px;
      height: 100%;
      background: var(--blue);
      border-left: 10px solid var(--blue);
      transition: 0.5s;
      overflow: hidden;
    }
    .navigation.active {
      width: 80px;
    }

    .navigation ul {
      position: absolute;
      top: 0;
      left: 0;
      width: 100%;
    }

    .navigation ul li {
      position: relative;
      width: 100%;
      list-style: none;
      border-top-left-radius: 30px;
      border-bottom-left-radius: 30px;
    }

    .navigation ul li:hover,
    .navigation ul li.hovered {
      background-color: var(--white);
    }

    .navigation ul li:nth-child(1) {
      margin-bottom: 40px;
      pointer-events: none;
    }

    .navigation ul li a {
      position: relative;
      display: block;
      width: 100%;
      display: flex;
      text-decoration: none;
      color: var(--white);
    }
    .navigation ul li:hover a,
    .navigation ul li.hovered a {
      color: var(--blue);
    }

    .navigation ul li a .icon {
      position: relative;
      display: block;
      min-width: 60px;
      height: 60px;
      line-height: 75px;
      text-align: center;
    }
    .navigation ul li a .icon ion-icon {
      font-size: 1.75rem;
    }

    .navigation ul li a .title {
      position: relative;
      display: block;
      padding: 0 10px;
      height: 60px;
      line-height: 60px;
      text-align: start;
      white-space: nowrap;
    }

    /* --------- curve outside ---------- */
    .navigation ul li:hover a::before,
    .navigation ul li.hovered a::before {
      content: "";
      position: absolute;
      right: 0;
      top: -50px;
      width: 50px;
      height: 50px;
      background-color: transparent;
      border-radius: 50%;
      box-shadow: 35px 35px 0 10px var(--white);
      pointer-events: none;
    }
    .navigation ul li:hover a::after,
    .navigation ul li.hovered a::after {
      content: "";
      position: absolute;
      right: 0;
      bottom: -50px;
      width: 50px;
      height: 50px;
      background-color: transparent;
      border-radius: 50%;
      box-shadow: 35px -35px 0 10px var(--white);
      pointer-events: none;
    }

    /* ===================== Main ===================== */
    .main {
      position: absolute;
      width: calc(100% - 300px);
      left: 300px;
      min-height: 100vh;
      background: var(--white);
      transition: 0.5s;
    }
    .main.active {
      width: calc(100% - 80px);
      left: 80px;
    }

    .box1 h2{
       text-align: center;
       margin-top: 40px;
       color: #696868;
    }

    /* .box1{
  width: 100%;
} */

    .topbar {
      width: 100%;
      height: 60px;
      display: flex;
      justify-content: space-between;
      align-items: center;
      padding: 0 10px;
    }

    .toggle {
      position: relative;
      width: 60px;
      height: 60px;
      display: flex;
      justify-content: center;
      align-items: center;
      font-size: 2.5rem;
      cursor: pointer;
    }

    .search {
      position: relative;
      width: 400px;
      margin: 0 10px;
    }

    .search label {
      position: relative;
      width: 100%;
    }

    .search label input {
      width: 100%;
      height: 40px;
      border-radius: 40px;
      padding: 5px 20px;
      padding-left: 35px;
      font-size: 18px;
      outline: none;
      border: 1px solid var(--black2);
    }

    .search label ion-icon {
      position: absolute;
      top: 0;
      left: 10px;
      font-size: 1.2rem;
    }

    .user {
      position: relative;
      width: 40px;
      height: 40px;
      border-radius: 50%;
      overflow: hidden;
      cursor: pointer;
    }

    .user img {
      position: absolute;
      top: 0;
      left: 0;
      width: 100%;
      height: 100%;
      object-fit: cover;
    }

    .chart-container {
      width: 90%;
      max-width: 800px;
      background: #fff;
      padding: 20px;
      box-shadow: 0 4px 8px rgba(0, 0, 0, 0.1);
      border-radius: 10px;
      margin: 20px auto;
    }
    /* ====================== Responsive Design ========================== */
    @media (max-width: 991px) {
      .navigation {
        left: -300px;
      }
      .navigation.active {
        width: 300px;
        left: 0;
      }
      .main {
        width: 100%;
        left: 0;
      }
      .main.active {
        left: 300px;
      }
    }

    @media (max-width: 768px) {
      .details {
        grid-template-columns: 1fr;
      }
      .recentOrders {
        overflow-x: auto;
      }
      .status.inProgress {
        white-space: nowrap;
      }

      .box1 h2{
        font-size: 20px;
      }
     
      .chart-container {
        width: 100%;
        width: 100%;
        justify-content: center;
        align-items: center;
        display: flex

      }
    }

    @media (max-width: 480px) {
      .cardHeader h2 {
        font-size: 20px;
      }
      .user {
        min-width: 40px;
      }
      .navigation {
        width: 100%;
        left: -100%;
        z-index: 1000;
      }
      .navigation.active {
        width: 100%;
        left: 0;
      }
      .toggle {
        z-index: 10001;
      }
      .main.active .toggle {
        color: #fff;
        position: fixed;
        right: 0;
        left: initial;
      }
    }

.popup {
  position: fixed;
  top: 20px;
  left: 60%;
  transform: translateX(-50%);
  padding: 10px 20px;
  background-color: rgb(67, 149, 67);
  color: var(--white);
  border-radius: 5px;
  font-size: 1rem;
  display: none;
  z-index: 1000;
}
  </style>

  <body>
    <div class="container">
      <!-- Sidebar Navigation -->
      <div class="navigation">
        <ul>

           

            <li>
                <a href="producer.html">
                    <span class="icon"><img src="image/logo.gif" alt="" style="height: 70px; "></span>
                    <span class="title" style="font-weight: bold;">Hii! Producer</span>
                </a>
            </li>

            <li>
                <a href="producer.html">
                    <span class="icon"><ion-icon name="home-outline"></ion-icon></span>
                    <span class="title">Dashboard</span>
                </a>
            </li>

            <li>
                <a href="upload-content.html">
                    <span class="icon"><ion-icon name="cloud-upload-outline"></ion-icon></span>
                    <span class="title">Upload Content</span>
                </a>
            </li>
            <li>
                <a href="analytics.html">
                    <span class="icon"><ion-icon name="stats-chart-outline"></ion-icon></span>
                    <span class="title">Analytics</span>
                </a>
            </li>
            <li>
                <a href="manage-content.html">
                    <span class="icon"><ion-icon name="film-outline"></ion-icon></span>
                    <span class="title">Manage Content</span>
                </a>
            </li>
            <li>
                <a href="wallet.html">
                    <span class="icon"><ion-icon name="cash-outline"></ion-icon></span>
                    <span class="title">Wallet</span>
                </a>
            </li>

            <li>
              <a href="#">
                  <span class="icon"><ion-icon name="log-out-outline"></ion-icon></span>
                  <span class="title" id="logout">Logout</span>
              </a>
          </li>
        </ul>
    </div>

      <!-- Main Dashboard -->
      <div class="main">
        <div class="topbar">
          <div class="toggle"><ion-icon name="menu-outline"></ion-icon></div>
          <div class="search">
            <label>
              <input type="text" placeholder="Search content..." />
              <ion-icon name="search-outline"></ion-icon>
            </label>
          </div>

          <div class="logout-btn">
            
            <button id="logout"> <ion-icon name="log-out-outline" style="font-weight: bold; transform: translateY(2px);"></ion-icon> Logout</button>
          </div>
          <div class="user"><img src="image/vicky.jpg" alt="Producer" /></div>
        </div>

        <!-- Dashboard Cards -->
        <div class="box1">
          <h2>Analyse Your Views & Watch Time</h2>

          <div class="chart-container">
            <canvas id="barChart"></canvas>
          </div>
        </div>
      </div>
    </div>

    <script>
      // add hovered class to selected list item
      let list = document.querySelectorAll(".navigation li");

      function activeLink() {
        list.forEach((item) => {
          item.classList.remove("hovered");
        });
        this.classList.add("hovered");
      }

      list.forEach((item) => item.addEventListener("mouseover", activeLink));

      // Menu Toggle
      let toggle = document.querySelector(".toggle");
      let navigation = document.querySelector(".navigation");
      let main = document.querySelector(".main");

      toggle.onclick = function () {
        navigation.classList.toggle("active");
        main.classList.toggle("active");
      };

      const ctx2 = document.getElementById("barChart").getContext("2d");
      new Chart(ctx2, {
        type: "bar",
        data: {
          labels: ["Movie 1", "Movie 2", "Movie 3", "Movie 4", "Movie 5"],
          datasets: [
            {
              label: "Views",
              data: [1200, 1900, 3000, 500, 2400],
              backgroundColor: "orangered",
            },
            {
              label: "Watch Time (hrs)",
              data: [140, 75, 120, 30, 200],
              backgroundColor: "blue",
            },
          ],
        },
        options: {
          responsive: true,
          scales: {
            y: {
              beginAtZero: true,
            },
          },
        },
      });

      document.getElementById('logout').addEventListener('click', function() {
  const popup = document.createElement('div');
  popup.classList.add('popup');
  popup.textContent = 'Producer logged out successfully';
  document.body.appendChild(popup);
  popup.style.display = 'block';

  setTimeout(() => {
    popup.style.display = 'none';
    document.body.removeChild(popup);
  }, 3000);
});
    </script>
  </body>
</html>
