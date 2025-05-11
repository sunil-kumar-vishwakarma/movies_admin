@extends('frontend.layout.app')
@section('title', 'Movie | Home ')
@section('content')

    <main>
      <!-- <section class="hero">
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
      </section> -->
        <section class="hero">
  <div class="carousel">
    <img id="carouselImage" src="{{ asset('/' . $banner[0]->thumbnail_image) }}" class="slide" alt="Image">
    <div class="hero-content">
      <h1 id="carouselTitle">{{ $banner[0]->name }}</h1>
      <p id="carouselCategory">{{ $banner[0]->category }}</p>
      <button class="watch-btn" id="watchBtn">▶ Watch Now</button>
      <video id="videoPlayer" width="640" height="360" controls style="display: none; margin-top: 20px;">
        <source id="videoSource" src="" type="video/mp4">
      </video>
    </div>
  </div>
</section>

<script>
  const banners = @json($banner);
  let current = 0;

  const img = document.getElementById('carouselImage');
  const title = document.getElementById('carouselTitle');
  const category = document.getElementById('carouselCategory');
  const watchBtn = document.getElementById('watchBtn');
  const videoPlayer = document.getElementById('videoPlayer');
  const videoSource = document.getElementById('videoSource');

  function updateSlide(index) {
    const data = banners[index];
    img.src = `/${data.thumbnail_image}`;
    title.textContent = data.name;
    category.textContent = data.category;

    // Remove video (if any playing)
    videoPlayer.style.display = 'none';
    videoSource.src = '';
    videoPlayer.load();

    // Update watch button action
    watchBtn.onclick = () => {
      videoSource.src = `/${data.upload_link}`;
      videoPlayer.style.display = 'block';
      videoPlayer.load();
      videoPlayer.play();
    };
  }

  setInterval(() => {
    current = (current + 1) % banners.length;
    updateSlide(current);
  }, 5000);

  // Init first slide
  updateSlide(current);
</script>
      <br />


    <div class="box">
      

      <section class="movie-section" >
        <h2>Latest Releases</h2>
        <div class="movies" id="shows">

        @foreach($latest as $rows)
          

          <div class="movie">
            <img src="{{ asset('/' . $rows->thumbnail_image) }}" alt="URI Movie" />
            <div class="overlay">
              <div class="play-container">
                <a href="watch.html"><div class="play-button">▶</div></a>
                <div class="popup">
                  <div>Movie Title: URI</div>
                  <img src="{{ asset('/' . $rows->thumbnail_image) }}" alt="Popup Movie Poster">
                  
                </div>
              </div>
            </div>
          </div>
      @endforeach
        <!-- <div class="movie">
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
        </div> -->
      </section>
      

      <section class="movie-section" id="tpp">
        <div class="shows">
          <h2>Movie</h2>
          <a href="moviesall.html" class="view-all">View All</a>
        </div>
        <div class="movies">
          @foreach($movies as $rows)
          <div class="movie-item">
            <a href="watch.html">
            <img src="{{ asset('/' . $rows->thumbnail_image) }}" alt="Image"></a>
          <!-- <a href="watch.html"><img src="image/ligermov.jpg" alt="URI Movie" /></a> -->
          <div class="movie-title">{{$rows->name}}</div></div>
          @endforeach
          <!-- <div class="movie-item">
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
          <div class="movie-title">Kapil Sharma Show</div></div> -->
        </div>
      </section>


     
    </div>
      
    </main>
