@extends('frontend.layout.app')
@section('title', 'Movie | Home ')
@section('content')
    <main>
      <section class="hero">
        <div class="carousel">
          <div
            class="slide active"
            style="background-image: url('image/kantara2.webp')">
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
          <div class="slide" style="background-image: url('image/jaat.webp')">
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
          <div class="slide" style="background-image: url('image/toxic2.webp')">
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
          <h2>Upcoming</h2>
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
          </div>
        </div>
      </section>
    </div>

    </main>

 
