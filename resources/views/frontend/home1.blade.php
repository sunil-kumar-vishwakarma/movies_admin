<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <link rel="icon" href="image/logo.png" />
    <title>SHTube</title>
    <link rel="stylesheet" href="style.css" />
    <script defer src="script.js"></script>
    <link
      href="https://cdn.jsdelivr.net/npm/remixicon@4.5.0/fonts/remixicon.css"
      rel="stylesheet" />
    <link
      rel="stylesheet"
      href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0/css/all.min.css" />
  </head>
  <body>
    <header>
      <div class="navbar-container">
        <nav class="navbar">
          <div class="logo">
              <img src="image/logo.gif" alt="" />
          </div>
          <ul class="nav-links">
              <li><a href="#" class="active">Home</a></li>
              <li><a href="movies.html">Movies</a></li>
              <li><a href="liveTV.html">LiveTV</a></li>
              <li><a href="sports.html">Sports</a></li>
              <li><a href="TVshow.html">TV Shows</a></li>
              <li><a href="upcoming.html">Upcoming</a></li>
              <li><a href="kids.html">Kids</a></li>
              <li class="dropdown">
                  <a href="#" id="store-btn">Store
                      <i class="ri-arrow-drop-down-fill" style="font-weight: bold"></i>
                  </a>
                  <ul id="dropdown-menu">
                      <li><a href="rent-movie.html">Movies</a></li>
                      <li><a href="rent-show.html">Shows</a></li>
                  </ul>
              </li>
              <li>
                  <a href="#" id="search-icon"><i class="ri-search-line" style="font-size: 20px"></i></a>
              </li>
              <li>
                  <a href="register-login.html"><i class="ri-user-3-line" style="font-size: 20px"></i></a>
              </li>
          </ul>
          <button class="subscribe-btn">Subscribe</button>
        </nav>
        <div class="search-popup" id="search-popup">
          <input type="text" class="search-input" placeholder="Search...">
          <button class="search-btn"><i class="ri-search-line" style="font-size: 20px"></i></button>
        </div>
      </div>
    </header>

    <main>
      <section class="hero">
        <div class="carousel">
          <div
            class="slide active"
            style="background-image: url('image/bhuj.jpeg')">
            <div class="hero-content">
              <h1>Bhuj: The Pride of India</h1>
              <p>
                During the Indo-Pakistani War of 1971, the Bhuj airbase is
                attacked and a race against time begins to rebuild the damaged
                airstrip. During the Indo-Pakistani War of 1971, the Bhuj ...
              </p>
              <button class="watch-btn">▶ Watch Now</button>
            </div>
          </div>
          <div
            class="slide"
            style="background-image: url('image/mayanagri.jpg')">
            <div class="hero-content">
              <h1>mayanagri: chhota bheem story</h1>
              <p>
                Chhota Bheem and Krishna in Mayanagari is an animated movie
                where the demoness Maayandri plots to resurrect her brother
                Kirmada.....
              </p>
              <button class="watch-btn">▶ Watch Now</button>
            </div>
          </div>
          <div
            class="slide"
            style="background-image: url('image/tom&jerry.jpg')">
            <div class="hero-content">
              <h1>Tom & jerry</h1>
              <p>
                Tom and Jerry is a popular animated series featuring a cat named
                Tom and a mouse named Jerry, who engage in comical chases and
                conflicts within their home and various settings around the
                world....
              </p>
              <button class="watch-btn">▶ Watch Now</button>
            </div>
          </div>
          <div class="slide" style="background-image: url('image/uri.jpg')">
            <div class="hero-content">
              <h1>URI</h1>
              <p>
                Uri: The Surgical Strike is a 2019 Indian Hindi-language war
                action film that dramatizes the retaliation to the 2016 Uri
                attack by Indian...
              </p>
              <button class="watch-btn">▶ Watch Now</button>
            </div>
          </div>
          <div
            class="slide"
            style="background-image: url('image/oddsquad.jpg')">
            <div class="hero-content">
              <h1>Odd Squad</h1>
              <p>
                Odd Squad is an educational and comedy television series created
                by Tim McKeon and Adam Peltzman. It premiered on TVOKids in
                Canada and PBS Kids in the United States on November 26, 2014.
                ...
              </p>
              <button class="watch-btn">▶ Watch Now</button>
            </div>
          </div>
        </div>
      </section>
      <br />

  <div class="box">
      <section class="movie-section">
        <div class="shows">
          <h2>Latest Releases</h2>
          <a href="#" class="view-all">View All</a>
        </div>

        <div class="movies">
          <div class="movie-item">
          <img src="image/kfg2.jpg" alt="URI Movie" />
          <div class="movie-title">Kapil Sharma Show</div></div>

          <div class="movie-item">
          <img src="image/rrr1.jpg" alt="Bhuj" />
          <div class="movie-title">Kapil Sharma Show</div></div>

          <div class="movie-item">
          <img src="image/kashmirfile.jpg" alt="Daag" />
          <div class="movie-title">Kapil Sharma Show</div></div>

          <div class="movie-item">
          <img src="image/bimingam.jpg" alt="Ram Setu" />
          <div class="movie-title">Kapil Sharma Show</div></div>

          <div class="movie-item">
          <img src="image/shamashera.jpg" alt="Bhaag Milkha Bhaag" />
          <div class="movie-title">Kapil Sharma Show</div></div>

          <div class="movie-item">
          <img src="image/anek.jpg" alt="MR 360" />
          <div class="movie-title">Kapil Sharma Show</div></div>

          <div class="movie-item">
          <img src="image/raamsetu.jpg" alt="Naadi Dosh" />
          <div class="movie-title">Kapil Sharma Show</div></div>

          <div class="movie-item">
          <img src="image/villian.jpeg" alt="Ek Villain Returns" />
          <div class="movie-title">Kapil Sharma Show</div></div>
        </div>
      </section>


      <section class="shows-section">
        <div class="shows">
          <h2>Top 10 Shows</h2>
          <a href="#" class="view-all">View All</a>
        </div>
      
        <div class="show-movies">
          <div class="movie">
            <img src="image/topryri.jpg" alt="uri Movie" />
            <div class="overlay">
              <div class="play-container">
                  <div class="play-button">▶</div>
                  <div class="popup">
                      <div>URI</div>
                      <img src="image/villian.jpeg" alt="Popup Movie Poster">
                  </div>
              </div>
            </div>
          </div>
      
          <div class="movie">
            <img src="image/bhujimdb.jpeg" alt="bhujimdb" />
            <div class="overlay">
              <div class="play-container">
                  <div class="play-button">▶</div>
                  <div class="popup">
                      <div>Bhuj</div>
                      <img src="image/villian.jpeg" alt="Popup Movie Poster">
                  </div>
              </div>
            </div>
          </div>
      
          <div class="movie">
            <img src="image/daagimdb.jpg" alt="daagimdb" />
            <div class="overlay">
              <div class="play-container">
                  <div class="play-button">▶</div>
                  <div class="popup">
                      <div>Daag</div>
                      <img src="image/villian.jpeg" alt="Popup Movie Poster">
                  </div>
              </div>
            </div>
          </div>
      
          <div class="movie">
            <img src="image/ramsetuimdb.jpeg" alt="ramsetuimdb" />
            <div class="overlay">
              <div class="play-container">
                  <div class="play-button">▶</div>
                  <div class="popup">
                      <div>Ram Setu</div>
                      <img src="image/villian.jpeg" alt="Popup Movie Poster">
                  </div>
              </div>
            </div>
          </div>
      
          <div class="movie">
            <img src="image/milkhaimdb.png" alt="milkhaimdb" />
            <div class="overlay">
              <div class="play-container">
                  <div class="play-button">▶</div>
                  <div class="popup">
                      <div>Bhaag Milkha Bhaag</div>
                      <img src="image/villian.jpeg" alt="Popup Movie Poster">
                  </div>
              </div>
            </div>
          </div>
        </div>
      </section>


      <section class="movie-section">
        <h2>Popular Channels</h2>
        <div class="channel">
          <div class="movies">
            <img src="image/prime.png" alt="prime" />
            <img src="image/netflix.png" alt="netflix" />
            <img src="image/sonyliv.png" alt="sonyliv" />
            <img src="image/sonysab.png" alt="sonysab" />
            <img src="image/zoom.png" alt="zoom" />
            <img src="image/sonymusic.png" alt="sonymusic" />
            <img src="image/9xm.png" alt="9xm" />
            <img src="image/coniples.png" alt="coniples" />
            <img src="image/utv.png" alt="utv" />
          </div>
        </div>
      </section>


      <section class="shows-section">
        <div class="shows">
          <h2>Kids Special</h2>
          <a href="#" class="view-all">View All</a>
        </div>

        <div class="show-movies">
          <div class="movie-slider">
            <div class="movie-item">
              <img src="image/tom&jerry.jpg" alt="tom&jerry" />
              <div class="movie-title">Kapil Sharma Show</div>
            </div>
            <div class="movie-item">
              <img src="image/mayanagri.jpg" alt="mayanagri" />
              <div class="movie-title">Kapil Sharma Show</div>
            </div>
            <div class="movie-item">
              <img src="image/doremon.jpeg" alt="doremon" />
              <div class="movie-title">Kapil Sharma Show</div>
            </div>
          </div>
        </div>
      </section>


       <section class="movie-section">
        <h2>Best TVShow</h2>
        <div class="movies">
          <div class="movie">
            <img src="image/baalveer.webp" alt="URI Movie" />
            <div class="overlay">
              <div class="play-container">
                <div class="play-button">▶</div>
                <div class="popup">
                  <div>Movie Title: URI</div>
                  <img src="image/baalveer.webp" alt="Popup Movie Poster" />
                </div>
              </div>
            </div>
          </div>

          <div class="movie">
            <img src="image/akbar.webp" alt="Bhuj" />
            <div class="overlay">
              <div class="play-container">
                <div class="play-button">▶</div>
                <div class="popup">
                  <div>BHUJ</div>
                  <img src="image/akbar.webp" alt="Popup Movie Poster" />
                </div>
              </div>
            </div>
          </div>

          <div class="movie">
            <img src="image/shakalaka.png" alt="Daag" />
            <div class="overlay">
              <div class="play-container">
                <div class="play-button">▶</div>
                <div class="popup">
                  <div>daag</div>
                  <img src="image/shakalaka.webp" alt="Popup Movie Poster" />
                </div>
              </div>
            </div>
          </div>

          <div class="movie">
            <img src="image/shanktimaan.webp" alt="Ram Setu" />
            <div class="overlay">
              <div class="play-container">
                <div class="play-button">▶</div>
                <div class="popup">
                  <div>raamsetu</div>
                  <img src="image/shanktimaan.jpg" alt="Popup Movie Poster" />
                </div>
              </div>
            </div>
          </div>

          <div class="movie">
            <img src="image/tarakmehta.webp" alt="Bhaag Milkha Bhaag" />
            <div class="overlay">
              <div class="play-container">
                <div class="play-button">▶</div>
                <div class="popup">
                  <div>Bhag milkha bhag</div>
                  <img src="image/tarakmehta.webp" alt="Popup Movie Poster" />
                </div>
              </div>
            </div>
          </div>

          <div class="movie">
            <img src="image/mohabbaten.webp" alt="Naadi Dosh" />
            <div class="overlay">
              <div class="play-container">
                <div class="play-button">▶</div>
                <div class="popup">
                  <div>naadi dosh</div>
                  <img src="image/mohabbaten.webp" alt="Popup Movie Poster" />
                </div>
              </div>
            </div>
          </div>

          <div class="movie">
            <img src="image/hatiim.webp" alt="Shamshera" />
            <div class="overlay">
              <div class="play-container">
                <div class="play-button">▶</div>
                <div class="popup">
                  <div>Attack</div>
                  <img src="image/hatiim.webp" alt="Popup Movie Poster" />
                </div>
              </div>
            </div>
          </div>

          <div class="movie">
            <img src="image/ridhta.webp" alt="Ek Villain Returns" />
            <div class="overlay">
              <div class="play-container">
                <div class="play-button">▶</div>
                <div class="popup">
                  <div>villian</div>
                  <img src="image/ridhta.webp" alt="Popup Movie Poster" />
                </div>
              </div>
            </div>
          </div>
        </div>
      </section>

      <!-- <section class="movie-section">
        <h2>Best Thrillers</h2>
        <div class="movies">

          <div class="movie">
            <img src="image/urimovie.jpg" alt="URI Movie" />
            <div class="overlay">
              <div class="play-container">
                <div class="play-button">▶</div>
                <div class="popup">
                  <div>Movie Title: URI</div>
                  <img src="image/uri.jpg" alt="Popup Movie Poster">
                </div>
              </div>
            </div>
          </div>

        <div class="movie">
          <img src="image/bhujmovie.jpeg" alt="Bhuj" />
          <div class="overlay">
            <div class="play-container">
                <div class="play-button">▶</div>
                <div class="popup">
                    <div>BHUJ</div>
                    <img src="image/bhujimdb.jpeg" alt="Popup Movie Poster">
                </div></div></div></div>

                <div class="movie">
          <img src="image/daag.jpg" alt="Daag" />
          <div class="overlay">
            <div class="play-container">
                <div class="play-button">▶</div>
                <div class="popup">
                    <div>daag</div>
                    <img src="image/daagimdb.jpg" alt="Popup Movie Poster">
                </div></div></div></div>

                <div class="movie">
          <img src="image/raamsetu.jpg" alt="Ram Setu" />
          <div class="overlay">
            <div class="play-container">
                <div class="play-button">▶</div>
                <div class="popup">
                    <div>raamsetu</div>
                    <img src="image/ramsetuimdb.jpeg" alt="Popup Movie Poster">
                </div></div></div></div>

                <div class="movie">
          <img src="image/milkha.jpg" alt="Bhaag Milkha Bhaag" />
          <div class="overlay">
            <div class="play-container">
                <div class="play-button">▶</div>
                <div class="popup">
                    <div>Bhag milkha bhag</div>
                    <img src="image/milkhaimdb.png" alt="Popup Movie Poster">
                </div></div></div></div>

                

                <div class="movie">
          <img src="image/naadidosh.jpg" alt="Naadi Dosh" />
           <div class="overlay">
            <div class="play-container">
                <div class="play-button">▶</div>
                <div class="popup">
                    <div>naadi dosh</div>
                    <img src="image/naadidosh.jpg" alt="Popup Movie Poster">
                </div></div></div></div>

                <div class="movie">
          <img src="image/shamshera.jpg" alt="Shamshera" />
          <div class="overlay">
            <div class="play-container">
                <div class="play-button">▶</div>
                <div class="popup">
                    <div>shamshera</div>
                    <img src="image/shamshera.jpg" alt="Popup Movie Poster">
                </div></div></div></div>

                <div class="movie">
          <img src="image/villian.jpeg" alt="Ek Villain Returns" />
          <div class="overlay">
            <div class="play-container">
                <div class="play-button">▶</div>
                <div class="popup">
                    <div>villian</div>
                    <img src="image/villian.jpeg" alt="Popup Movie Poster">
                </div></div></div></div>
        </div>
      </section> -->
      

      <section class="movie-section">
        <div class="shows">
          <h2>Movie</h2>
          <a href="#" class="view-all">View All</a>
        </div>
        <div class="movies">
          <div class="movie-item">
          <img src="image/ligermov.jpg" alt="URI Movie" />
          <div class="movie-title">Kapil Sharma Show</div></div>

          <div class="movie-item">
          <img src="image/rrr1.jpg" alt="Bhuj" />
          <div class="movie-title">Kapil Sharma Show</div></div>

          <div class="movie-item">
          <img src="image/83ranveer.jpg" alt="Daag" />
          <div class="movie-title">Kapil Sharma Show</div></div>

          <div class="movie-item">
          <img src="image/bimingam.jpg" alt="Ram Setu" />
          <div class="movie-title">Kapil Sharma Show</div></div>

          <div class="movie-item">
          <img src="image/shamashera.jpg" alt="Bhaag Milkha Bhaag" />
          <div class="movie-title">Kapil Sharma Show</div></div>

          <div class="movie-item">
          <img src="image/anek.jpg" alt="MR 360" />
          <div class="movie-title">Kapil Sharma Show</div></div>

          <div class="movie-item">
          <img src="image/raamsetu.jpg" alt="Naadi Dosh" />
          <div class="movie-title">Kapil Sharma Show</div></div>

          <div class="movie-item">
          <img src="image/villian.jpeg" alt="Ek Villain Returns" />
          <div class="movie-title">Kapil Sharma Show</div></div>
        </div>
      </section>

     

      <section class="movie-section">
        <h2>Trending News in Live</h2>
        <div class="movies">
          <div class="movie">
            <img src="image/ias.png" alt="URI Movie" />
            <div class="overlay">
              <div class="play-container">
                <div class="play-button">▶</div>
                <div class="popup">
                  <div>Movie Title: URI</div>
                  <img src="image/ias" alt="Popup Movie Poster" />
                </div>
              </div>
            </div>
          </div>

          <div class="movie">
            <img src="image/taazakhabar.png" alt="Bhuj" />
            <div class="overlay">
              <div class="play-container">
                <div class="play-button">▶</div>
                <div class="popup">
                  <div>BHUJ</div>
                  <img src="image/taazakhabar.png" alt="Popup Movie Poster" />
                </div>
              </div>
            </div>
          </div>

          <div class="movie">
            <img src="image/medical.jpeg" alt="Daag" />
            <div class="overlay">
              <div class="play-container">
                <div class="play-button">▶</div>
                <div class="popup">
                  <div>daag</div>
                  <img src="image/medical.jpeg" alt="Popup Movie Poster" />
                </div>
              </div>
            </div>
          </div>

          <div class="movie">
            <img src="image/rick.png" alt="Ram Setu" />
            <div class="overlay">
              <div class="play-container">
                <div class="play-button">▶</div>
                <div class="popup">
                  <div>raamsetu</div>
                  <img src="image/rick.png" alt="Popup Movie Poster" />
                </div>
              </div>
            </div>
          </div>

          <div class="movie">
            <img src="image/lady.jpeg" alt="Bhaag Milkha Bhaag" />
            <div class="overlay">
              <div class="play-container">
                <div class="play-button">▶</div>
                <div class="popup">
                  <div>Bhag milkha bhag</div>
                  <img src="image/lady.jpeg" alt="Popup Movie Poster" />
                </div>
              </div>
            </div>
          </div>

          <div class="movie">
            <img src="image/taazakhabar.png" alt="Naadi Dosh" />
            <div class="overlay">
              <div class="play-container">
                <div class="play-button">▶</div>
                <div class="popup">
                  <div>naadi dosh</div>
                  <img src="image/taazakhabar.png" alt="Popup Movie Poster" />
                </div>
              </div>
            </div>
          </div>

          <div class="movie">
            <img src="image/news.jpeg" alt="Shamshera" />
            <div class="overlay">
              <div class="play-container">
                <div class="play-button">▶</div>
                <div class="popup">
                  <div>Attack</div>
                  <img src="image/news.jpeg" alt="Popup Movie Poster" />
                </div>
              </div>
            </div>
          </div>

          <div class="movie">
            <img src="image/raammandir.webp" alt="Ek Villain Returns" />
            <div class="overlay">
              <div class="play-container">
                <div class="play-button">▶</div>
                <div class="popup">
                  <div>villian</div>
                  <img src="image/raammandir.webp" alt="Popup Movie Poster" />
                </div>
              </div>
            </div>
          </div>
        </div>
      </section>

      <section class="shows-section">
        <div class="shows">
          <h2>Upcoming Movies</h2>
          <a href="#" class="view-all">View All</a>
        </div>

        <div class="show-movies">
          <div class="movie-slider">
            <div class="movie-item">
              <img src="image/spirit.webp" alt="tom&jerry" />
              <div class="movie-title">Kapil Sharma Show</div>
            </div>
            <div class="movie-item">
              <img src="image/rajasahab.webp" alt="mayanagri" />
              <div class="movie-title">Kapil Sharma Show</div>
            </div>
            <div class="movie-item">
              <img src="image/kgf2.jpg" alt="doremon" />
              <div class="movie-title">Kapil Sharma Show</div>
            </div>
          </div>
        </div>
      </section>

    



      <section class="movie-section">
        <h2>Action Extravaganza</h2>
        <div class="movies">

          <div class="movie">
            <img src="image/urimovie.jpg" alt="URI Movie" />
            <div class="overlay">
              <div class="play-container">
                <div class="play-button">▶</div>
                <div class="popup">
                  <div>Movie Title: URI</div>
                  <img src="image/uri.jpg" alt="Popup Movie Poster">
                </div>
              </div>
            </div>
          </div>

        <div class="movie">
          <img src="image/bhujmovie.jpeg" alt="Bhuj" />
          <div class="overlay">
            <div class="play-container">
                <div class="play-button">▶</div>
                <div class="popup">
                    <div>BHUJ</div>
                    <img src="image/bhujimdb.jpeg" alt="Popup Movie Poster">
                </div></div></div></div>

                <div class="movie">
          <img src="image/daag.jpg" alt="Daag" />
          <div class="overlay">
            <div class="play-container">
                <div class="play-button">▶</div>
                <div class="popup">
                    <div>daag</div>
                    <img src="image/daagimdb.jpg" alt="Popup Movie Poster">
                </div></div></div></div>

                <div class="movie">
          <img src="image/raamsetu.jpg" alt="Ram Setu" />
          <div class="overlay">
            <div class="play-container">
                <div class="play-button">▶</div>
                <div class="popup">
                    <div>raamsetu</div>
                    <img src="image/ramsetuimdb.jpeg" alt="Popup Movie Poster">
                </div></div></div></div>

                <div class="movie">
          <img src="image/milkha.jpg" alt="Bhaag Milkha Bhaag" />
          <div class="overlay">
            <div class="play-container">
                <div class="play-button">▶</div>
                <div class="popup">
                    <div>Bhag milkha bhag</div>
                    <img src="image/milkhaimdb.png" alt="Popup Movie Poster">
                </div></div></div></div>

                

                <div class="movie">
          <img src="image/naadidosh.jpg" alt="Naadi Dosh" />
           <div class="overlay">
            <div class="play-container">
                <div class="play-button">▶</div>
                <div class="popup">
                    <div>naadi dosh</div>
                    <img src="image/naadidosh.jpg" alt="Popup Movie Poster">
                </div></div></div></div>

                <div class="movie">
          <img src="image/shamshera.jpg" alt="Shamshera" />
          <div class="overlay">
            <div class="play-container">
                <div class="play-button">▶</div>
                <div class="popup">
                    <div>shamshera</div>
                    <img src="image/shamshera.jpg" alt="Popup Movie Poster">
                </div></div></div></div>

                <div class="movie">
          <img src="image/villian.jpeg" alt="Ek Villain Returns" />
          <div class="overlay">
            <div class="play-container">
                <div class="play-button">▶</div>
                <div class="popup">
                    <div>villian</div>
                    <img src="image/villian.jpeg" alt="Popup Movie Poster">
                </div></div></div></div>
        </div>
      </section>

      <section class="movie-section">
        <h2>Popular Languages</h2>
        <div class="movies" id="languages">
          <div class="movie-item">
            <img
              src="https://img.freepik.com/premium-photo/film-reel-frame-background-with-copy-space_839035-887112.jpg?semt=ais_hybrid"
              alt="swesese" />
            <div class="language-overlay">swedish</div>
          </div>

          <div class="movie-item">
            <img
              src="https://img.freepik.com/premium-photo/film-reel-frame-background-with-copy-space_839035-887112.jpg?semt=ais_hybrid"
              alt="mandarin" />
            <div class="language-overlay">German</div>
          </div>
          <div class="movie-item">
            <img
              src="https://img.freepik.com/premium-photo/film-reel-frame-background-with-copy-space_839035-887112.jpg?semt=ais_hybrid"
              alt="serbian" />
            <div class="language-overlay">Telegu</div>
          </div>
          <div class="movie-item">
            <img
              src="https://img.freepik.com/premium-photo/film-reel-frame-background-with-copy-space_839035-887112.jpg?semt=ais_hybrid"
              alt="serbian" />
            <div class="language-overlay">Serbian</div>
          </div>
          <div class="movie-item">
            <img
              src="https://img.freepik.com/premium-photo/film-reel-frame-background-with-copy-space_839035-887112.jpg?semt=ais_hybrid"
              alt="russian" />
            <div class="language-overlay">Russian</div>
          </div>
          <div class="movie-item">
            <img
              src="https://img.freepik.com/premium-photo/film-reel-frame-background-with-copy-space_839035-887112.jpg?semt=ais_hybrid"
              alt="spanish" />
            <div class="language-overlay">spanish</div>
          </div>
          <div class="movie-item">
            <img
              src="https://img.freepik.com/premium-photo/film-reel-frame-background-with-copy-space_839035-887112.jpg?semt=ais_hybrid"
              alt="mandarin" />
            <div class="language-overlay">mandarin</div>
          </div>
          <div class="movie-item">
            <img
              src="https://img.freepik.com/premium-photo/film-reel-frame-background-with-copy-space_839035-887112.jpg?semt=ais_hybrid"
              alt="turkish" />
            <div class="language-overlay">turkish</div>
          </div>
        </div>
      </section>

      <section class="shows-section">
        <div class="shows">
          <h2>Trending Movies</h2>
          <a href="#" class="view-all">View All</a>
        </div>

        <div class="show-movies">
          <div class="show-wrapper">
            <div class="movie-item">
              <span class="index-number">1</span>
              <img src="image/farzi.jpg" alt="farzi Movie" />
           
              <div class="movie-title">Kapil Sharma Show</div>
            </div>
          </div>
          <div class="show-wrapper">
            <div class="movie-item">
              <span class="index-number">2</span>
              <img src="image/delhicrime.jpg" alt="delhicrime" />
             
              <div class="movie-title">Kapil Sharma Show</div>
            </div>
          </div>
          <div class="show-wrapper">
            <div class="movie-item">
              <span class="index-number">3</span>
              <img src="image/moneyheist.jpg" alt="moneyheist" />
             
              <div class="movie-title">Kapil Sharma Show</div>
            </div>
          </div>
          <div class="show-wrapper">
            <div class="movie-item">
              <span class="index-number">4</span>
              <img src="image/wild.jpg" alt="manvswild" />
             
              <div class="movie-title">Kapil Sharma Show</div>
            </div>
          </div>
          <div class="show-wrapper">
            <div class="movie-item">
              <span class="index-number">5</span>
              <img src="image/crorepati.jpg" alt="crorepati" />
              <!-- <div class="show-overlay">
              <i
                class="ri-play-circle-line"
                class="ico-play"
                style="font-size: 50px; color: orangered"></i>
            </div> -->
              <div class="movie-title">Kapil Sharma Show</div>
            </div>
          </div>
        </div>
      </section>

      

      <!-- <section class="shows-section">
        <div class="shows">
          <h2>Top 10 Shows</h2>
          <a href="#" class="view-all">View All</a>
        </div>

   
          <div class="movies">
  
          <div class="movie">
            <img src="image/bhujmovie.jpeg" alt="Bhuj" />
            <div class="overlay">
              <div class="play-container">
                  <div class="play-button">▶</div>
                  <div class="popup">
                      <div>BHUJ</div>
                      <img src="image/bhujimdb.jpeg" alt="Popup Movie Poster">
                  </div></div></div></div>

                  <div class="movie">
                    <img src="image/urimovie.jpg" alt="URI Movie" />
                    <div class="overlay">
                      <div class="play-container">
                        <div class="play-button">▶</div>
                        <div class="popup">
                          <div>Movie Title: URI</div>
                          <img src="image/uri.jpg" alt="Popup Movie Poster">
                        </div>
                      </div>
                    </div>
                  </div>
  
  
                  <div class="movie">
            <img src="image/raamsetu.jpg" alt="Ram Setu" />
            <div class="overlay">
              <div class="play-container">
                  <div class="play-button">▶</div>
                  <div class="popup">
                      <div>raamsetu</div>
                      <img src="image/ramsetuimdb.jpeg" alt="Popup Movie Poster">
                  </div></div></div></div>

                  <div class="movie">
                    <img src="image/daag.jpg" alt="Daag" />
                    <div class="overlay">
                      <div class="play-container">
                          <div class="play-button">▶</div>
                          <div class="popup">
                              <div>daag</div>
                              <img src="image/daagimdb.jpg" alt="Popup Movie Poster">
                          </div></div></div></div>
  
                  <div class="movie">
            <img src="image/milkha.jpg" alt="Bhaag Milkha Bhaag" />
            <div class="overlay">
              <div class="play-container">
                  <div class="play-button">▶</div>
                  <div class="popup">
                      <div>Bhag milkha bhag</div>
                      <img src="image/milkhaimdb.png" alt="Popup Movie Poster">
                  </div></div></div></div>
  
                
  
                  <div class="movie">
            <img src="image/shamshera.jpg" alt="Shamshera" />
            <div class="overlay">
              <div class="play-container">
                  <div class="play-button">▶</div>
                  <div class="popup">
                      <div>shamshera</div>
                      <img src="image/shamshera.jpg" alt="Popup Movie Poster">
                  </div></div></div></div>


                  <div class="movie">
                    <img src="image/naadidosh.jpg" alt="Naadi Dosh" />
                     <div class="overlay">
                      <div class="play-container">
                          <div class="play-button">▶</div>
                          <div class="popup">
                              <div>naadi dosh</div>
                              <img src="image/naadidosh.jpg" alt="Popup Movie Poster">
                          </div></div></div></div>
  
                  <div class="movie">
            <img src="image/villian.jpeg" alt="Ek Villain Returns" />
            <div class="overlay">
              <div class="play-container">
                  <div class="play-button">▶</div>
                  <div class="popup">
                      <div>villian</div>
                      <img src="image/villian.jpeg" alt="Popup Movie Poster">
                  </div></div></div></div>
          </div>
      </section> -->

     

     


      

    
      <section class="movie-section">
        <h2>Popular Genres</h2>
        <div class="movies" id="languages">
          <div class="movie-item">
            <img
              src="https://img.freepik.com/free-photo/cinema-with-popcorn-box_23-2148133612.jpg?semt=ais_hybrid"
              alt="swesese" />
            <div class="language-overlay">Kids</div>
          </div>

          <div class="movie-item">
            <img
              src="https://img.freepik.com/free-photo/cinema-with-popcorn-box_23-2148133612.jpg?semt=ais_hybrid"
              alt="mandarin" />
            <div class="language-overlay">sci-fi & fantasy</div>
          </div>
          <div class="movie-item">
            <img
              src="https://img.freepik.com/free-photo/cinema-with-popcorn-box_23-2148133612.jpg?semt=ais_hybrid"
              alt="serbian" />
            <div class="language-overlay">TV movie</div>
          </div>
          <div class="movie-item">
            <img
              src="https://img.freepik.com/free-photo/cinema-with-popcorn-box_23-2148133612.jpg?semt=ais_hybrid"
              alt="serbian" />
            <div class="language-overlay">War</div>
          </div>
          <div class="movie-item">
            <img
              src="https://img.freepik.com/free-photo/cinema-with-popcorn-box_23-2148133612.jpg?semt=ais_hybrid"
              alt="russian" />
            <div class="language-overlay">Thriller</div>
          </div>
          <div class="movie-item">
            <img
              src="https://img.freepik.com/free-photo/cinema-with-popcorn-box_23-2148133612.jpg?semt=ais_hybrid"
              alt="spanish" />
            <div class="language-overlay">Short</div>
          </div>
          <div class="movie-item">
            <img
              src="https://img.freepik.com/free-photo/cinema-with-popcorn-box_23-2148133612.jpg?semt=ais_hybrid"
              alt="mandarin" />
            <div class="language-overlay">animation</div>
          </div>
          <div class="movie-item">
            <img
              src="https://img.freepik.com/free-photo/cinema-with-popcorn-box_23-2148133612.jpg?semt=ais_hybrid"
              alt="turkish" />
            <div class="language-overlay">Mystry</div>
          </div>
          <div class="movie-item">
            <img
              src="https://img.freepik.com/free-photo/cinema-with-popcorn-box_23-2148133612.jpg?semt=ais_hybrid"
              alt="turkish" />
            <div class="language-overlay">History</div>
          </div>

          <div class="movie-item">
            <img
              src="https://img.freepik.com/free-photo/cinema-with-popcorn-box_23-2148133612.jpg?semt=ais_hybrid"
              alt="turkish" />
            <div class="language-overlay">Biography</div>
          </div>
        </div>
      </section>

      <!-- <section class="shows-section">
        <div class="shows">
          <h2>Top Rated on IMDb</h2>
          <a href="#" class="view-all">View All</a>
        </div>
      
        <div class="show-movies">
          <div class="movie">
            <img src="image/topryri.jpg" alt="uri Movie" />
            <div class="overlay">
              <div class="play-container">
                  <div class="play-button">▶</div>
                  <div class="popup">
                      <div>URI</div>
                      <img src="image/villian.jpeg" alt="Popup Movie Poster">
                  </div>
              </div>
            </div>
          </div>
      
          <div class="movie">
            <img src="image/bhujimdb.jpeg" alt="bhujimdb" />
            <div class="overlay">
              <div class="play-container">
                  <div class="play-button">▶</div>
                  <div class="popup">
                      <div>Bhuj</div>
                      <img src="image/villian.jpeg" alt="Popup Movie Poster">
                  </div>
              </div>
            </div>
          </div>
      
          <div class="movie">
            <img src="image/daagimdb.jpg" alt="daagimdb" />
            <div class="overlay">
              <div class="play-container">
                  <div class="play-button">▶</div>
                  <div class="popup">
                      <div>Daag</div>
                      <img src="image/villian.jpeg" alt="Popup Movie Poster">
                  </div>
              </div>
            </div>
          </div>
      
          <div class="movie">
            <img src="image/ramsetuimdb.jpeg" alt="ramsetuimdb" />
            <div class="overlay">
              <div class="play-container">
                  <div class="play-button">▶</div>
                  <div class="popup">
                      <div>Ram Setu</div>
                      <img src="image/villian.jpeg" alt="Popup Movie Poster">
                  </div>
              </div>
            </div>
          </div>
      
          <div class="movie">
            <img src="image/milkhaimdb.png" alt="milkhaimdb" />
            <div class="overlay">
              <div class="play-container">
                  <div class="play-button">▶</div>
                  <div class="popup">
                      <div>Bhaag Milkha Bhaag</div>
                      <img src="image/villian.jpeg" alt="Popup Movie Poster">
                  </div>
              </div>
            </div>
          </div>
        </div>
      </section> -->


      <section class="shows-section">
        <div class="shows">
          <h2>Prime Special</h2>
          <a href="#" class="view-all">View All</a>
        </div>

        <div class="movies">
  
          <div class="movie">
            <img src="image/topgun.jpg" alt="Bhuj" />
            <div class="overlay">
              <div class="play-container">
                  <div class="play-button">▶</div>
                  <div class="popup">
                      <div>SamBahadur</div>
                      <img src="image/topgun.jpg" alt="Popup Movie Poster">
                  </div></div></div></div>

        </div>
      </section>


      <!-- <section class="shows-section">
        <div class="shows">
          <h2>Top 10 Shows</h2>
          <a href="#" class="view-all">View All</a>
        </div>

   
          <div class="movies">
  
          <div class="movie">
            <img src="image/sam.jpg" alt="Bhuj" />
            <div class="overlay">
              <div class="play-container">
                  <div class="play-button">▶</div>
                  <div class="popup">
                      <div>SamBahadur</div>
                      <img src="image/sam.jpg" alt="Popup Movie Poster">
                  </div></div></div></div>

                  <div class="movie">
                    <img src="image/war2.png" alt="URI Movie" />
                    <div class="overlay">
                      <div class="play-container">
                        <div class="play-button">▶</div>
                        <div class="popup">
                          <div>war 2</div>
                          <img src="image/war2.png" alt="Popup Movie Poster">
                        </div>
                      </div>
                    </div>
                  </div>
  </div>
      </section> -->


      <section class="shows-section">
        <div class="shows">
          <h2>Shop : Rent New Movies</h2>
          <a href="#" class="view-all">View All</a>
        </div>

        <div class="show-movies">
          <div class="show-wrapper">
            <div class="movie-item">
              <img src="image/aashram.webp" alt="farzi Movie" />
              <div class="movie-title">Kapil Sharma Show</div>
            </div>
          </div>
          <div class="show-wrapper">
            <div class="movie-item">
              <img src="image/gamechanger.webp" alt="delhicrime" />
              <div class="movie-title">Kapil Sharma Show</div>
            </div>
          </div>
          <div class="show-wrapper">
            <div class="movie-item">
              <img src="image/chhava.webp" alt="moneyheist" />
              <div class="movie-title">Kapil Sharma Show</div>
            </div>
          </div>
          <div class="show-wrapper">
            <div class="movie-item">
              <img src="image/83.jpeg" alt="manvswild" />
              <div class="movie-title">Kapil Sharma Show</div>
            </div>
          </div>
          <div class="show-wrapper">
            <div class="movie-item">
              <img src="image/bellbottom.jpg" alt="crorepati" />
              <div class="movie-title">Kapil Sharma Show</div>
            </div>
          </div>
          <div class="show-wrapper">
            <div class="movie-item">
              <img src="image/liger.jpeg" alt="crorepati" />
              <div class="movie-title">Kapil Sharma Show</div>
            </div>
          </div>
        </div>
      </section><br><br>


     

      


     

      
    </main>

    <footer class="footer">
      <div class="footer-container">
        <div class="footer-left">
          <img src="image/logo.gif" alt="DTLive Logo" class="footer-logo" />
          <p class="footer-text">
            SHT is an IT company specializing in providing technology
            solutions and services. The company focuses on various aspects of
            IT.
          </p>
        </div>

        <div class="footer-middle">
          <h3>Quick Links</h3>
          <ul>
            <li><a href="#">About Us</a></li>
            <li><a href="#">Privacy Policy</a></li>
            <li><a href="#">Terms & Conditions</a></li>
            <li><a href="#">Refund Policy</a></li>
          </ul>
        </div>

        <div class="footer-right">
          <h3>Connect with us</h3>
          <div class="social-icons">
            <a href="#"><img src="image/youtube (1).png" alt="YouTube" /></a>
            <a href="#"><img src="image/facebook.png" alt="Facebook" /></a>
            <a href="#"><img src="image/instagram.png" alt="Instagram" /></a>
          </div>
        </div>

      
      </div>
      <div class="copyr">
        <p style=>Copyright © 2020-2025 Software House Technology. All Rights Reserved</p>
      </div>
    </footer>
  </div>
  </body>
</html>
