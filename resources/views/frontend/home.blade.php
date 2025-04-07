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
          <a href="leatest-release.html" class="view-all">View All</a>
        </div>

        <div class="movies">
          <div class="movie-item">
          <a href="watch.html"><img src="image/kfg2.jpg" alt="URI Movie" /></a>
          <div class="movie-title">Kapil Sharma Show</div></div>

          <div class="movie-item">
            <a href="watch.html"><img src="image/rrr1.jpg" alt="Bhuj" /></a>
          <div class="movie-title">Kapil Sharma Show</div></div>

          <div class="movie-item">
            <a href="watch.html"><img src="image/kashmirfile.jpg" alt="Daag" /></a>
          <div class="movie-title">Kapil Sharma Show</div></div>

          <div class="movie-item">
            <a href="watch.html"><img src="image/83ranveer.jpg" alt="Ram Setu" /></a>
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

          
        </div>
      </section>


      <section class="shows-section">
        <div class="shows">
          <h2>Top 10 Shows</h2>
          <a href="top10.html" class="view-all">View All</a>
        </div>
      
        <div class="show-movies" id="top10">
          <div class="movie" data-video="https://www.youtube.com/embed/PGPVZT3Blvs?si=ji6VcxGW5RR04iZQ">
           <img src="image/topryri.jpg" alt="uri Movie" />
            <div class="overlay">
              <div class="play-container">
                <a href="watch.html"><div class="play-button">▶</div></a>
                  <div class="popup">
                      <div>URI</div>

                      <iframe id="myVideo" width="560" height="315"
                      src="https://www.youtube.com/embed/PGPVZT3Blvs?autoplay=1&mute=1&enablejsapi=1"
                      title="YouTube video player"
                      frameborder="0"
                      allow="autoplay; encrypted-media"
                      referrerpolicy="strict-origin-when-cross-origin"
                      allowfullscreen>
                  </iframe>
                  </div>
              </div>
            </div>
          </div>
      
          <div class="movie" data-video="https://www.youtube.com/embed/PGPVZT3Blvs?si=ji6VcxGW5RR04iZQ">
            <a href="watch.html"><img src="image/bhujimdb.jpeg" alt="bhujimdb" /></a>
            <div class="overlay">
              <div class="play-container">
                <a href="watch.html"><div class="play-button">▶</div></a>
                  <div class="popup">
                      <div>Bhuj</div>

                      <iframe id="myVideo" width="560" height="315"
                      src="https://www.youtube.com/embed/PGPVZT3Blvs?autoplay=1&mute=1&enablejsapi=1"
                      title="YouTube video player"
                      frameborder="0"
                      allow="autoplay; encrypted-media"
                      referrerpolicy="strict-origin-when-cross-origin"
                      allowfullscreen>
                  </iframe>

                  </div>
              </div>
            </div>
          </div>
      
          <div class="movie"data-video="https://www.youtube.com/embed/PGPVZT3Blvs?si=ji6VcxGW5RR04iZQ">
            <a href="watch.html"><img src="image/daagimdb.jpg" alt="daagimdb" /></a>
            <div class="overlay">
              <div class="play-container">
                <a href="watch.html"><div class="play-button">▶</div></a>
                  <div class="popup">
                      <div>Daag</div>
                     <iframe id="myVideo" width="560" height="315"
    src="https://www.youtube.com/embed/PGPVZT3Blvs?autoplay=1&mute=1&enablejsapi=1"
    title="YouTube video player"
    frameborder="0"
    allow="autoplay; encrypted-media"
    referrerpolicy="strict-origin-when-cross-origin"
    allowfullscreen>
</iframe>
                  </div>
              </div>
            </div>
          </div>
      
          <div class="movie" data-video="https://www.youtube.com/embed/PGPVZT3Blvs?si=ji6VcxGW5RR04iZQ">
            <a href="watch.html"><img src="image/ramsetuimdb.jpeg" alt="ramsetuimdb" /></a>
            <div class="overlay">
              <div class="play-container">
                <a href="watch.html"><div class="play-button">▶</div></a>
                  <div class="popup">
                      <div>Ram Setu</div>
                      <iframe id="myVideo" width="560" height="315"
                      src="https://www.youtube.com/embed/PGPVZT3Blvs?autoplay=1&mute=1&enablejsapi=1"
                      title="YouTube video player"
                      frameborder="0"
                      allow="autoplay; encrypted-media"
                      referrerpolicy="strict-origin-when-cross-origin"
                      allowfullscreen>
                  </iframe>
                  </div>
              </div>
            </div>
          </div>
      
          <div class="movie" data-video="https://www.youtube.com/embed/PGPVZT3Blvs?si=ji6VcxGW5RR04iZQ">
            <a href="watch.html"> <img src="image/milkhaimdb.png" alt="milkhaimdb" /></a>
            <div class="overlay">
              <div class="play-container">
                <a href="watch.html"><div class="play-button">▶</div></a>
                  <div class="popup">
                      <div>Bhaag Milkha Bhaag</div>
                      <iframe id="myVideo" width="560" height="315"
                      src="https://www.youtube.com/embed/PGPVZT3Blvs?autoplay=1&mute=1&enablejsapi=1"
                      title="YouTube video player"
                      frameborder="0"
                      allow="autoplay; encrypted-media"
                      referrerpolicy="strict-origin-when-cross-origin"
                      allowfullscreen>
                  </iframe>
                  </div>
              </div>
            </div>
          </div>
        </div>
      </section>


      <section class="movie-section" id="tpp">
        <h2>Popular Channels</h2>
        <div class="channel">
          <div class="movies">
            <a href="allchannel.html"><img src="image/prime.png" alt="prime" /></a>
            <a href="allchannel.html"><img src="image/netflix.png" alt="netflix" /></a>
            <a href="allchannel.html"><img src="image/sonyliv.png" alt="sonyliv" /></a>
            <a href="allchannel.html"><img src="image/sonysab.png" alt="sonysab" /></a>
            <a href="allchannel.html"><img src="image/zoom.png" alt="zoom" /></a>
            <a href="allchannel.html"><img src="image/sonymusic.png" alt="sonymusic" /></a>
            <a href="allchannel.html"><img src="image/9xm.png" alt="9xm" /></a>
            <a href="allchannel.html"><img src="image/coniples.png" alt="coniples" /></a>
            <a href="allchannel.html"><img src="image/utv.png" alt="utv" /></a>
          </div>
        </div>
      </section>


      <section class="shows-section">
        <div class="shows">
          <h2>Kids Special</h2>
          <a href="kids-special.html" class="view-all">View All</a>
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


       <section class="movie-section">
        <h2>TVShows</h2>
        
        <div class="movies" id="shows" >
          <div class="movie" data-video="https://www.youtube.com/embed/PGPVZT3Blvs?si=ji6VcxGW5RR04iZQ">
            <a href="watch.html"><img src="image/baalveer.webp" alt="URI Movie" /></a>
            <div class="overlay" id="setoverlay">
              <div class="play-container">
                <a href="watch.html"><div class="play-button">▶</div></a>
                <div class="popup">
                  <div>Movie Title: URI</div>
                  <iframe id="myVideo" width="560" height="315"
    src="https://www.youtube.com/embed/PGPVZT3Blvs?autoplay=1&mute=1&enablejsapi=1"
    title="YouTube video player"
    frameborder="0"
    allow="autoplay; encrypted-media"
    referrerpolicy="strict-origin-when-cross-origin"
    allowfullscreen>
</iframe>
                </div>
              </div>
            </div>
          </div>

          <div class="movie" data-video="https://www.youtube.com/embed/PGPVZT3Blvs?si=ji6VcxGW5RR04iZQ">
            <a href="watch.html"><img src="image/akbar.webp" alt="Bhuj" /></a>
            <div class="overlay" id="setoverlay">
              <div class="play-container">
                <a href="watch.html"><div class="play-button">▶</div></a>
                <div class="popup">
                  <div>BHUJ</div>
                  <img src="image/akbar.webp" alt="Popup Movie Poster" />
                </div>
              </div>
            </div>
          </div>

          <div class="movie" data-video="https://www.youtube.com/embed/PGPVZT3Blvs?si=ji6VcxGW5RR04iZQ">
            <a href="watch.html"><img src="image/shakalaka.png" alt="Daag" /></a>
            <div class="overlay" id="setoverlay">
              <div class="play-container">
                <a href="watch.html"><div class="play-button">▶</div></a>
                <div class="popup">
                  <div>daag</div>
                  <iframe id="myVideo" width="560" height="315"
                  src="https://www.youtube.com/embed/PGPVZT3Blvs?autoplay=1&mute=1&enablejsapi=1"
                  title="YouTube video player"
                  frameborder="0"
                  allow="autoplay; encrypted-media"
                  referrerpolicy="strict-origin-when-cross-origin"
                  allowfullscreen>
              </iframe>
                </div>
              </div>
            </div>
          </div>

        

          <div class="movie" data-video="https://www.youtube.com/embed/PGPVZT3Blvs?si=ji6VcxGW5RR04iZQ">
            <a href="watch.html"><img src="image/tarakmehta.webp" alt="Bhaag Milkha Bhaag" /></a>
            <div class="overlay" id="setoverlay">
              <div class="play-container">
                <a href="watch.html"><div class="play-button">▶</div></a>
                <div class="popup">
                  <div>Bhag milkha bhag</div>
                  <iframe id="myVideo" width="560" height="315"
                  src="https://www.youtube.com/embed/PGPVZT3Blvs?autoplay=1&mute=1&enablejsapi=1"
                  title="YouTube video player"
                  frameborder="0"
                  allow="autoplay; encrypted-media"
                  referrerpolicy="strict-origin-when-cross-origin"
                  allowfullscreen>
              </iframe>
                </div>
              </div>
            </div>
          </div>

          <div class="movie" data-video="https://www.youtube.com/embed/PGPVZT3Blvs?si=ji6VcxGW5RR04iZQ">
            <a href="watch.html"><img src="image/mohabbaten.webp" alt="Naadi Dosh" /></a>
            <div class="overlay" id="setoverlay">
              <div class="play-container">
                <a href="watch.html"><div class="play-button">▶</div></a>
                <div class="popup">
                  <div>naadi dosh</div>
                  <iframe id="myVideo" width="560" height="315"
                  src="https://www.youtube.com/embed/PGPVZT3Blvs?autoplay=1&mute=1&enablejsapi=1"
                  title="YouTube video player"
                  frameborder="0"
                  allow="autoplay; encrypted-media"
                  referrerpolicy="strict-origin-when-cross-origin"
                  allowfullscreen>
              </iframe>
                </div>
              </div>
            </div>
          </div>

          <div class="movie" data-video="https://www.youtube.com/embed/PGPVZT3Blvs?si=ji6VcxGW5RR04iZQ">
            <a href="watch.html"><img src="image/hatiim.webp" alt="Shamshera" /></a>
            <div class="overlay" id="setoverlay">
              <div class="play-container">
                <a href="watch.html"><div class="play-button">▶</div></a>
                <div class="popup">
                  <div>Attack</div>
                  <iframe id="myVideo" width="560" height="315"
                  src="https://www.youtube.com/embed/PGPVZT3Blvs?autoplay=1&mute=1&enablejsapi=1"
                  title="YouTube video player"
                  frameborder="0"
                  allow="autoplay; encrypted-media"
                  referrerpolicy="strict-origin-when-cross-origin"
                  allowfullscreen>
              </iframe>
                </div>
              </div>
            </div>
          </div>
        </div>
      </section><br>

      <section class="movie-section" id="tpp">
        <div class="shows">
          <h2>Movies</h2>
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

        
        </div>
      </section>

     

      <section class="movie-section">
        <h2>News</h2>
        <div class="movies" id="shows">
          <div class="movie">
            <a href="watch.html"><img src="image/breakingnews.jpg" alt="URI Movie" /></a>
            <div class="overlay" id="setoverlay">
              <div class="play-container">
                <a href="watch.html"><div class="play-button">▶</div></a>
                <div class="popup">
                  <div>Movie Title: URI</div>
                  <img src="image/ias" alt="Popup Movie Poster" />
                </div>
              </div>
            </div>
          </div>

          <div class="movie">
            <a href="watch.html"><img src="image/aajtak.jpg" alt="Bhuj" /></a>
            <div class="overlay" id="setoverlay">
              <div class="play-container">
                <a href="watch.html"><div class="play-button">▶</div></a>
                <div class="popup">
                  <div>BHUJ</div>
                  <img src="image/taazakhabar.png" alt="Popup Movie Poster" />
                </div>
              </div>
            </div>
          </div>

          <div class="movie">
            <a href="watch.html"><img src="image/news24.jpg" alt="Daag" /></a>
            <div class="overlay" id="setoverlay">
              <div class="play-container">
                <a href="watch.html"><div class="play-button">▶</div></a>
                <div class="popup">
                  <div>daag</div>
                  <img src="image/medical.jpeg" alt="Popup Movie Poster" />
                </div>
              </div>
            </div>
          </div>

          <div class="movie">
            <a href="watch.html"><img src="image/newsnation.png" alt="Ram Setu" /></a>
            <div class="overlay" id="setoverlay">
              <div class="play-container">
                <a href="watch.html"><div class="play-button">▶</div></a>
                <div class="popup">
                  <div>raamsetu</div>
                  <img src="image/rick.png" alt="Popup Movie Poster" />
                </div>
              </div>
            </div>
          </div>


          <div class="movie">
            <a href="watch.html"><img src="image/taazakhabar.png" alt="Naadi Dosh" /></a>
            <div class="overlay" id="setoverlay">
              <div class="play-container">
                <a href="watch.html"><div class="play-button">▶</div></a>
                <div class="popup">
                  <div>naadi dosh</div>
                  <img src="image/taazakhabar.png" alt="Popup Movie Poster" />
                </div>
              </div>
            </div>
          </div>
          
        </div>
      </section><br> 

      <section class="shows-section" id="tpp">
        <div class="shows">
          <h2>Upcoming Movies</h2>
          <a href="allupcoming.html" class="view-all">View All</a>
        </div>

        <div class="show-movies">
          <div class="movie-slider" id="kid">
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
            <div class="movie-item">
              <img src="image/rajasahab.webp" alt="mayanagri" />
              <div class="movie-title">Kapil Sharma Show</div>
            </div>
       
            </div>
          </div>
      
      </section>

      <section class="movie-section">
        <h2>Action movies</h2>
        <div class="movies" id="shows">

          <div class="movie">
            <a href="watch.html"><img src="image/urimovie.jpg" alt="URI Movie" /></a>
            <div class="overlay" id="setoverlay">
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
          <a href="watch.html"><img src="image/bhujmovie.jpeg" alt="Bhuj" /></a>
          <div class="overlay" id="setoverlay">
            <div class="play-container">
              <a href="watch.html"><div class="play-button">▶</div></a>
                <div class="popup">
                    <div>BHUJ</div>
                    <img src="image/bhujimdb.jpeg" alt="Popup Movie Poster">
                </div></div></div></div>

                <div class="movie">
                  <a href="watch.html"><img src="image/daag.jpg" alt="Daag" /></a>
          <div class="overlay" id="setoverlay">
            <div class="play-container">
              <a href="watch.html"><div class="play-button">▶</div></a>
                <div class="popup">
                    <div>daag</div>
                    <img src="image/daagimdb.jpg" alt="Popup Movie Poster">
                </div></div></div></div>

                <div class="movie">
                  <a href="watch.html"><img src="image/raamsetu.jpg" alt="Ram Setu" /></a>
          <div class="overlay" id="setoverlay">
            <div class="play-container">
              <a href="watch.html"><div class="play-button">▶</div></a>
                <div class="popup">
                    <div>raamsetu</div>
                    <img src="image/ramsetuimdb.jpeg" alt="Popup Movie Poster">
                </div></div></div></div>

                <div class="movie">
                  <a href="watch.html"><img src="image/milkha.jpg" alt="Bhaag Milkha Bhaag" /></a>
          <div class="overlay" id="setoverlay">
            <div class="play-container">
              <a href="watch.html"><div class="play-button">▶</div></a>
                <div class="popup">
                    <div>Bhag milkha bhag</div>
                    <img src="image/milkhaimdb.png" alt="Popup Movie Poster">
                </div></div></div></div>

                

                <div class="movie">
                  <a href="watch.html"><img src="image/naadidosh.jpg" alt="Naadi Dosh" /></a>
           <div class="overlay" id="setoverlay">
            <div class="play-container">
              <a href="watch.html"><div class="play-button">▶</div></a>
                <div class="popup">
                    <div>naadi dosh</div>
                    <img src="image/naadidosh.jpg" alt="Popup Movie Poster">
                </div></div></div></div>

                <div class="movie">
                  <a href="watch.html"><img src="image/shamshera.jpg" alt="Shamshera" /></a>
          <div class="overlay" id="setoverlay">
            <div class="play-container">
              <a href="watch.html"><div class="play-button">▶</div></a>
                <div class="popup">
                    <div>shamshera</div>
                    <img src="image/shamshera.jpg" alt="Popup Movie Poster">
                </div></div></div></div>

            
        </div>
      </section>

    

      <section class="shows-section" id="tpp">
        <div class="shows">
          <h2>Trending Movies</h2>
          <a href="trendingall.html" class="view-all">View All</a>
        </div>

        <div class="show-movies"  id="kid">

          <div class="show-wrapper">
            <div class="movie-item">
              <span class="index-number">1</span>
              <a href="watch.html"><img src="image/farzi.jpg" alt="farzi Movie" /></a>
           
              <div class="movie-title">Kapil Sharma Show</div>
            </div>
          </div>
          <div class="show-wrapper">
            <div class="movie-item">
              <span class="index-number">2</span>
              <a href="watch.html"><img src="image/delhicrime.jpg" alt="delhicrime" /></a>
             
              <div class="movie-title">Kapil Sharma Show</div>
            </div>
          </div>
          <div class="show-wrapper">
            <div class="movie-item">
              <span class="index-number">3</span>
              <a href="watch.html"><img src="image/moneyheist.jpg" alt="moneyheist" /></a>
             
              <div class="movie-title">Kapil Sharma Show</div>
            </div>
          </div>
          <div class="show-wrapper">
            <div class="movie-item">
              <span class="index-number">4</span>
              <a href="watch.html"><img src="image/wild.jpg" alt="manvswild" /></a>
             
              <div class="movie-title">Kapil Sharma Show</div>
            </div>
          </div>
          <div class="show-wrapper">
            <div class="movie-item">
              <span class="index-number">5</span>
              <a href="watch.html"><img src="image/crorepati.jpg" alt="crorepati" /></a>
              
              <div class="movie-title">Kapil Sharma Show</div>
            </div>
          </div>
        </div>
      </section>

      <section class="movie-section" id="Genres">
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

  


      <section class="shows-section">
        <div class="shows">
          <h2>Prime Special</h2>
          <a href="primeall.html" class="view-all">View All</a>
        </div>

        <div class="movies" id="shows">
  
          <div class="movie">
            <a href="watch.html"><img src="image/topgun.jpg" alt="Ek Villain Returns" style="width: auto;"/></a>
            <div class="overlay" id="setoverlay">
              <div class="play-container">
                <a href="watch.html"><div class="play-button">▶</div></a>
                  <div class="popup">
                      <div>villian</div>
                      <img src="image/topgun.jpg" alt="Popup Movie Poster">
                  </div></div></div></div>

        </div>
      </section>

      <!-- <section class="movie-section" id="tpp">
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
    -->


      <section class="shows-section">
        <div class="shows">
          <h2>shop : Rent movies</h2>
          <a href="rent-movie.html" class="view-all">View All</a>
        </div>

        <div class="show-movies" id="kid">
          <div class="movie-slider">
            <div class="movie-item">
              <a href="watch.html"><img src="image/aashram.webp" alt="tom&jerry" /></a>
              <div class="movie-title">Kapil Sharma Show</div>
            </div>
            <div class="movie-item">
              <a href="watch.html"><img src="image/Mirzapur-3-poster.webp" alt="mayanagri" /> <a href="watch.html"></a>
              <div class="movie-title">Kapil Sharma Show</div>
            </div>
            <div class="movie-item">
              <a href="watch.html"><img src="image/chhava.webp" alt="doremon" /></a>
              <div class="movie-title">Kapil Sharma Show</div>
            </div>
          </div>
        </div>
      </section><br><br>
    </div>
    </main>

    
 
 
