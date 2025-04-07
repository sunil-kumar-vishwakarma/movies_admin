@extends('frontend.layout.app')
@section('title', 'Movie | Home ')
@section('content')
    <main>
      <section class="hero">
        <div class="carousel">
          <div
            class="slide active"
            style="background-image: url('image/doremon1.jpg')">
            <div class="hero-content">
              <h1>Ram mandir: The Pride of India</h1>
              <p>
                The Ram Mandir (ISO: Rāma Maṁdira, lit. 'Rama Temple') is a
                partially constructed Hindu temple complex in Ayodhya, Uttar The
                temple was inaugurated[7] on 22 January 2024 after a prana
                pratishtha (consecration) ceremony....
              </p>
              <button class="watch-btn">▶ Watch Now</button>
            </div>
          </div>
          <div class="slide" style="background-image: url('image/mayanagri.jpg')">
            <div class="hero-content">
              <h1>news: popular news</h1>
              <p>
                People experiencing long-term homelessness are often living with
                disabling conditions like severe mental health challenges,
                chronic pain, and substance use disorders. To address people’s
                complex needs and end homelessness, we need comprehensive,
                coordinated care that meets people where they are...
              </p>
              <button class="watch-btn">▶ Watch Now</button>
            </div>
          </div>
          <div class="slide" style="background-image: url('image/oddsquad.jpg')">
            <div class="hero-content">
              <h1>You fight for what you think....</h1>
              <p>
                Tom and Jerry is a popular animated series featuring a cat named
                Tom and a mouse named Jerry, who engage in comical chases and
                conflicts within their home and various settings around the
                world....
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
          <h2>Featured</h2>
          <a href="kids-special.html" class="view-all">View All</a>
        </div>

        <div class="show-movies">
          <div class="movie-slider" id="kid">
            <div class="movie-item">
              <a href="watch.html"><img src="image/mayanagri.jpg" alt="tom&jerry" /></a>
              <div class="movie-title">Kapil Sharma Show</div>
            </div>
            <div class="movie-item">
              <a href="watch.html"><img src="image/doremon1.jpg" alt="mayanagri" /></a>
              <div class="movie-title">Kapil Sharma Show</div>
            </div>
            <div class="movie-item">
              <a href="watch.html"><img src="image/oddsquad.jpg" alt="doremon" /></a>
              <div class="movie-title">Kapil Sharma Show</div>
            </div>
          </div>
        </div>
      </section>

      <section class="movie-section">
        <h2>Popular in Kids</h2>
        <div class="movies" id="shows">
          <div class="movie">
            <img src="image/doremon.jpeg" alt="URI Movie" />
            <div class="overlay">
              <div class="play-container">
                <a href="watch.html"><div class="play-button">▶</div></a>
                <div class="popup">
                  <div>Movie Title: URI</div>
                  <img src="image/doremon.jpeg" alt="Popup Movie Poster" />
                </div>
              </div>
            </div>
          </div>
        </div>
      </section>
    </div>
    </main>

   
