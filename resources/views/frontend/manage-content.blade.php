<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link rel="icon" href="image/logo.png" />
    <title>SHTube</title>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.2/css/all.min.css">
    <style>
        @import url("https://fonts.googleapis.com/css2?family=Ubuntu:wght@300;400;500;700&display=swap");

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

        .box1 {
            width: 100%;
        }

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

        /* ======================= Cards ====================== */

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
            .cardBox {
                grid-template-columns: repeat(2, 1fr);
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
        }

        @media (max-width: 480px) {
            .cardBox {
                grid-template-columns: repeat(1, 1fr);
            }
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

        .videos-container {
            display: grid;
            grid-template-columns: repeat(auto-fill, minmax(300px, 1fr));
            gap: 20px;
            padding: 20px;
            justify-content: center;
        }

        .video-card {
            background: rgba(180, 175, 175, 0.527);
            border-radius: 10px;
            overflow: hidden;
            box-shadow: 0 4px 8px rgba(0, 0, 0, 0.2);
            transition: transform 0.3s ease-in-out;
        }

        .video-card:hover {
            transform: scale(1.05);
        }

        .video-image {
            position: relative;
            width: 100%;
            height: 180px;
        }

        .video-thumbnail {
            width: 100%;
            height: 100%;
            object-fit: cover;
            border-radius: 10px 10px 0 0;
        }

        .video-card-overlay {
            position: absolute;
            top: 0;
            left: 0;
            width: 100%;
            height: 100%;
            background: rgba(0, 0, 0, 0.5);
            display: flex;
            align-items: center;
            justify-content: center;
            opacity: 0;
            transition: opacity 0.3s ease-in-out;
        }

        .video-card:hover .video-card-overlay {
            opacity: 1;
        }

        .video-card-icons {
            display: flex;
            gap: 10px;
        }

        .video-card-icons button {
            background: transparent;
            border: none;
            color: #fff;
            font-size: 18px;
            cursor: pointer;
            transition: color 0.3s ease-in-out;
            background-color: #2222227b;
            border-radius: 5px;
            padding: 10px;
        }

        /* .video-card-icons button:hover {
            color: rgb(5, 5, 75);
        } */

        .video-info {
            padding: 10px;
            text-align: center;
        }

        .toggle-banner-btn {
            background: rgb(5, 5, 75);
            color: white;
            border: none;
            padding: 10px 30px;
            border-radius: 5px;
            cursor: pointer;
            transition: background 0.3s ease-in-out;
            margin-left: -260px;
        }

        .toggle-banner-btn:hover {
            background: rgb(17, 17, 112);
           
        }

        .edit-btn i:hover{
           color: blue;
           transform: scale(1.5);
           transition: all 0.4s ease-in-out;
          
         
        }

        .delete-btn i:hover{
            color: rgb(235, 93, 93);
            transform: scale(1.5);
            transition: all 0.4s ease-in-out;
          
           
        }

        /* Responsive Design */
        @media (max-width: 1024px) {
            .videos-container {
                grid-template-columns: repeat(2, 1fr);
            }
        }

        @media (max-width: 768px) {
            .videos-container {
                grid-template-columns: repeat(1, 1fr);
            }
        }

        /* Modal Styles */
        .modal {
            display: none;
            position: fixed;
            z-index: 1000;
            left: 0;
            top: 0;
            width: 100%;
            height: 100%;
            overflow: hidden;
            background-color: rgba(0, 0, 0, 0.4);
            backdrop-filter: blur(5px);
            transition: all 0.5s ease;
        }

        .modal-content {
            background-color: #fff;
            position: absolute;
            top: 50%;
            left: 50%;
            transform: translate(-50%, -50%);
            padding: 20px;
            border: 1px solid #888;
            width: 80%;
            max-width: 600px;
            border-radius: 10px;
            box-shadow: 0 4px 10px rgba(0, 0, 0, 0.2);
            transition: all 0.5s ease;
            opacity: 0;
            transform: translate(-50%, -50%) scale(0.8);
        }

        .modal.show .modal-content {
            opacity: 1;
            transform: translate(-50%, -50%) scale(1);
        }

        .close {
            color: #aaa;
            float: right;
            font-size: 28px;
            font-weight: bold;
        }

        .close:hover,
        .close:focus {
            color: black;
            text-decoration: none;
            cursor: pointer;
        }

        .form-group {
            margin-bottom: 15px;
        }

        .form-group label {
            display: block;
            margin-bottom: 5px;
        }

        .form-group input,
        .form-group select,
        .form-group textarea {
            width: 100%;
            padding: 10px;
            border: 1px solid #ddd;
            border-radius: 5px;
            font-size: 14px;
        }

        .submit-btn {
            padding: 10px 20px;
            background: linear-gradient(135deg, #d95508, #da7d32);
            color: white;
            border: none;
            border-radius: 5px;
            cursor: pointer;
            font-size: 14px;
            transition: background-color 0.3s ease;
        }

        .submit-btn:hover {
            background: linear-gradient(135deg, #da7d32, #d95508);
        }

        .form-scroll-container {
            max-height: 400px; /* Adjust this value as needed */
            overflow-y: auto; /* Enable vertical scrolling */
            padding-right: 5px; /* Add padding to account for the scrollbar */
        }

        .no-btn {
            padding: 10px 20px;
            background: linear-gradient(135deg, #c70f22, #8d0412);
            color: white;
            border: none;
            border-radius: 5px;
            cursor: pointer;
            font-size: 14px;
            transition: background-color 0.3s ease;
        }

        .no-btn:hover {
            background: linear-gradient(135deg, #8d0412, #c70f22);
        }

        .delete-cancel {
            background-color: #6c757d;
            margin-left: 10px;
        }

        .delete-cancel:hover {
            background-color: #545b62;
        }

        .delete-content {
            text-align: center;
        }

        .button-group {
            display: flex;
            justify-content: center;
            gap: 10px;
            margin-top: 20px;
        }
    </style>
</head>
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
                        <input type="text" placeholder="Search content...">
                        <ion-icon name="search-outline"></ion-icon>
                    </label>
                </div>
                <div class="user"><img src="image/vicky.jpg" alt="Producer"></div>
            </div>
            
            <div class="box1">
                <main class="main-content">
                    <section class="videos-list">
                        <div class="videos-container">
                            <div class="video-card" id="banner-card">
                                <div class="video-image">
                                    <div class="video-card-overlay">
                                        <div class="video-card-icons">
                                            <button class="edit-btn" id="open-edit-modal"><i class="fas fa-edit"></i></button>
                                            <button class="delete-btn" id="open-delete-modal"><i class="fas fa-trash"></i></button>
                                        </div>
                                    </div>
                                    <img src="image/bhujimdb.jpeg" alt="Thumbnail" class="video-thumbnail">
                                </div>
                                <div class="video-info">
                                    <a href="watch.html"><button class="toggle-banner-btn" >Show</button></a>
                                </div>
                            </div>
                            <div class="video-card" id="banner-card">
                                <div class="video-image">
                                    <div class="video-card-overlay">
                                        <div class="video-card-icons">
                                            <button class="edit-btn" id="open-edit-modal"><i class="fas fa-edit"></i></button>
                                            <button class="delete-btn" id="open-delete-modal"><i class="fas fa-trash"></i></button>
                                        </div>
                                    </div>
                                    <img src="image/daagimdb.jpg" alt="Thumbnail" class="video-thumbnail">
                                </div>
                                <div class="video-info">
                                    <a href="watch.html"><button class="toggle-banner-btn" >Show</button></a>
                                </div>
                            </div>
                            <div class="video-card" id="banner-card">
                                <div class="video-image">
                                    <div class="video-card-overlay">
                                        <div class="video-card-icons">
                                            <button class="edit-btn" id="open-edit-modal"><i class="fas fa-edit"></i></button>
                                            <button class="delete-btn" id="open-delete-modal"><i class="fas fa-trash"></i></button>
                                        </div>
                                    </div>
                                    <img src="image/uri.jpg" alt="Thumbnail" class="video-thumbnail">
                                </div>
                                <div class="video-info">
                                    <a href="watch.html"><button class="toggle-banner-btn" >Show</button></a>
                                </div>
                            </div>
                            <div class="video-card" id="banner-card">
                                <div class="video-image">
                                    <div class="video-card-overlay">
                                        <div class="video-card-icons">
                                            <button class="edit-btn" id="open-edit-modal"><i class="fas fa-edit"></i></button>
                                            <button class="delete-btn" id="open-delete-modal"><i class="fas fa-trash"></i></button>
                                        </div>
                                    </div>
                                    <img src="image/toxic2.webp" alt="Thumbnail" class="video-thumbnail">
                                </div>
                                <div class="video-info">
                                    <a href="watch.html"><button class="toggle-banner-btn" >Show</button></a>
                                </div>
                            </div>
                        </div>
                    </section>

                    <!-- Edit Modal -->
    <div class="modal" id="edit-modal">
        <div class="modal-content">
            <span class="close" id="close-edit-modal">&times;</span>
            <h2>Edit</h2><br>
            <form id="edit-form">
                <div class="form-group">
                    <label for="image">Thumbnail Image</label>
                    <input type="file" id="image" name="image" required>
                </div>
                <div class="form-group">
                    <label class="input-label">Select Genere</label>
                    <select class="video-select">
                        <option>Select Genere</option>
                        <option>Thriller</option>
                        <option>Animation</option>
                        <option>Mystry</option>
                        <option>Biography</option>
                        <option>Comedy</option>
                        <option>Sci-fy</option>
                    </select>
                </div>
                <div class="form-group">
                    <label for="user-name">Upload Title</label>
                    <input type="text" id="name" name="name" placeholder="Enter Title..." required>
                </div>

                <button type="submit" class="submit-btn">Update</button>
            </form>
        </div>
    </div>


    <div class="modal" id="delete-modal">
        <div class="modal-content">
            <span class="close" id="close-delete-modal">&times;</span>
            <div class="delete-content">
                <h2>Delete</h2><br>
                <p>Are you sure you want to delete this ?</p>
                <div class="button-group">
                    <button type="button" class="submit-btn delete-confirm">Confirm</button>
                    <button type="button" class="no-btn delete-cancel">No</button>
                </div>
            </div>
        </div>
    </div>
                </main>
            </div>
        </div>
    </div>
    
    <script src="https://cdnjs.cloudflare.com/ajax/libs/ionicons/5.5.2/ionicons.min.js"></script>
    <script>
        function openModal(modalId) {
            var modal = document.getElementById(modalId);
            if (modal) {
                modal.style.display = 'block';
                setTimeout(() => modal.classList.add('show'), 10);
            }
        }

        function closeModal(modalId) {
            var modal = document.getElementById(modalId);
            if (modal) {
                modal.classList.remove('show');
                setTimeout(() => modal.style.display = 'none', 200);
            }
        }

        document.addEventListener('DOMContentLoaded', function () {
            // Handle opening modals dynamically
            document.querySelectorAll('[id^="open-"]').forEach(openBtn => {
                openBtn.addEventListener('click', function () {
                    var modalId = openBtn.id.replace('open-', '');
                    openModal(modalId);
                });
            });

            // Handle closing modals dynamically
            document.querySelectorAll('[id^="close-"]').forEach(closeBtn => {
                closeBtn.addEventListener('click', function () {
                    var modal = closeBtn.closest('.modal');
                    if (modal) closeModal(modal.id);
                });
            });

            // Handle closing delete modal when clicking "No"
            document.querySelectorAll('.delete-cancel').forEach(cancelBtn => {
                cancelBtn.addEventListener('click', function () {
                    closeModal('delete-modal');
                });
            });

            // Optional: Close modal when clicking outside
            document.querySelectorAll('.modal').forEach(modal => {
                modal.addEventListener('click', function (e) {
                    if (e.target === modal) closeModal(modal.id);
                });
            });

            // Menu Toggle
            let toggle = document.querySelector(".toggle");
            let navigation = document.querySelector(".navigation");
            let main = document.querySelector(".main");

            toggle.onclick = function () {
                navigation.classList.toggle("active");
                main.classList.toggle("active");
            };
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