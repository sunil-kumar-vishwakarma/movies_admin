@extends('frontend.layout.app')
@section('title', 'Movie | Home ')
@section('content')

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
            style="background-image: url('image/kgf2.jpg')">
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
      <section class="shows-section">
        <div class="shows">
          <h2>Kids Special</h2>
          <a href="#" class="view-all">View All</a>
        </div>

        <div class="show-movies">
          <div class="movie-slider" id="kid">
            <div class="movie-item">
              <a href="watch.html"><img src="image/tom&jerry.jpg" alt="tom&jerry" /></a>
              <div class="movie-title">Kapil Sharma Show</div>
            </div>
            <div class="movie-item">
              <a href="watch.html"><img src="image/mayanagri.jpg" alt="mayanagri" /></a>
              <div class="movie-title">Kapil Sharma Show</div>
            </div>
            <div class="movie-item">
              <a href="watch.html"><img src="image/doremon.jpeg" alt="doremon" /></a>
              <div class="movie-title">Kapil Sharma Show</div>
            </div>
          </div>
        </div>
      </section>


      <section class="movie-section" >
        <h2>Latest Releases</h2>
        <div class="movies" id="shows">

          <div class="movie">
            <img src="image/urimovie.jpg" alt="URI Movie" />
            <div class="overlay">
              <div class="play-container">
                <a href="watch.html"><div class="play-button">▶</div></a>
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
              <a href="watch.html"><div class="play-button">▶</div></a>
                <div class="popup">
                    <div>BHUJ</div>
                    <img src="image/bhujimdb.jpeg" alt="Popup Movie Poster">
                </div></div></div></div>

                <div class="movie">
          <img src="image/daag.jpg" alt="Daag" />
          <div class="overlay">
            <div class="play-container">
              <a href="watch.html"><div class="play-button">▶</div></a>
                <div class="popup">
                    <div>daag</div>
                    <img src="image/daagimdb.jpg" alt="Popup Movie Poster">
                </div></div></div></div>

                <div class="movie">
          <img src="image/raamsetu.jpg" alt="Ram Setu" />
          <div class="overlay">
            <div class="play-container">
              <a href="watch.html"><div class="play-button">▶</div></a>
                <div class="popup">
                    <div>raamsetu</div>
                    <img src="image/ramsetuimdb.jpeg" alt="Popup Movie Poster">
                </div></div></div></div>

                <div class="movie">
          <img src="image/milkha.jpg" alt="Bhaag Milkha Bhaag" />
          <div class="overlay">
            <div class="play-container">
              <a href="watch.html"><div class="play-button">▶</div></a>
                <div class="popup">
                    <div>Bhag milkha bhag</div>
                    <img src="image/milkhaimdb.png" alt="Popup Movie Poster">
                </div></div></div></div>

                

                <div class="movie">
          <img src="image/naadidosh.jpg" alt="Naadi Dosh" />
           <div class="overlay">
            <div class="play-container">
              <a href="watch.html"><div class="play-button">▶</div></a>
                <div class="popup">
                    <div>naadi dosh</div>
                    <img src="image/naadidosh.jpg" alt="Popup Movie Poster">
                </div></div></div></div>

                <div class="movie">
          <img src="image/attack.jpeg" alt="Shamshera" />
          <div class="overlay">
            <div class="play-container">
              <a href="watch.html"><div class="play-button">▶</div></a>
                <div class="popup">
                    <div>Attack</div>
                    <img src="image/attack.jpeg" alt="Popup Movie Poster">
                </div></div></div></div>

                <div class="movie">
          <img src="image/villian.jpeg" alt="Ek Villain Returns" />
          <div class="overlay">
            <div class="play-container">
              <a href="watch.html"><div class="play-button">▶</div></a>
                <div class="popup">
                    <div>villian</div>
                    <img src="image/villian.jpeg" alt="Popup Movie Poster">
                </div></div></div></div>
        </div>
      </section>
      

      <section class="movie-section" id="tpp">
        <div class="shows">
          <h2>Movie</h2>
          <a href="moviesall.html" class="view-all">View All</a>
        </div>

        <div class="movies">
          <div class="movie-item">
          <a href="watch.html"><img src="image/ligermov.jpg" alt="URI Movie" /></a>
          <div class="movie-title">Kapil Sharma Show</div></div>

          <div class="movie-item">
            <a href="watch.html"><img src="image/rrr1.jpg" alt="Bhuj" /></a>
          <div class="movie-title">Kapil Sharma Show</div></div>

          <div class="movie-item">
            <a href="watch.html"><img src="image/83ranveer.jpg" alt="Daag" /></a>
          <div class="movie-title">Kapil Sharma Show</div></div>

          <div class="movie-item">
            <a href="watch.html"><img src="image/bimingam.jpg" alt="Ram Setu" /></a>
          <div class="movie-title">Kapil Sharma Show</div></div>

          <div class="movie-item">
            <a href="watch.html"><img src="image/shamashera.jpg" alt="Bhaag Milkha Bhaag" /></a>
          <div class="movie-title">Kapil Sharma Show</div></div>

          <div class="movie-item">
            <a href="watch.html"><img src="image/anek.jpg" alt="MR 360" /></a>
          <div class="movie-title">Kapil Sharma Show</div></div>

          <div class="movie-item">
            <a href="watch.html"><img src="image/raamsetu.jpg" alt="Naadi Dosh" /></a>
          <div class="movie-title">Kapil Sharma Show</div></div>

          <div class="movie-item">
            <a href="watch.html"><img src="image/villian.jpeg" alt="Ek Villain Returns" /></a>
          <div class="movie-title">Kapil Sharma Show</div></div>
        </div>
      </section>


     
    </div>
      
    </main>
