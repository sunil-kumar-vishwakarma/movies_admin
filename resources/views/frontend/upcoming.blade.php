@extends('frontend.layout.app')
@section('title', 'Movie | Home ')
@section('content')
    <main>
      <!-- <section class="hero">
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
      <section class="shows-section">
        <div class="shows">
          <h2>Upcoming</h2>
          <a href="allupcoming.html" class="view-all">View All</a>
        </div>

        <div class="show-movies">
          <div class="movie-slider" id="kid">

            @foreach($upvideo as $rows)
                <div class="movie-item">
                  <img src="{{ asset('/' . $rows->thumbnail_image) }}" alt="Popup Movie Poster">
                        
                    <div class="movie-title">{{$rows->name}}</div>
                  </div>
            @endforeach

            @foreach($uptvshow as $rows)
                <div class="movie-item">
                  <img src="{{ asset('/' . $rows->thumbnail_image) }}" alt="Popup Movie Poster">
                        
                    <div class="movie-title">{{$rows->name}}</div>
                  </div>
            @endforeach

            <!-- @foreach($upsection as $rows)
                <div class="movie-item">
                  <img src="{{ asset('/' . $rows->thumbnail_image) }}" alt="Popup Movie Poster">
                        
                    <div class="movie-title">{{$rows->name}}</div>
                  </div>
            @endforeach -->

            @foreach($video as $rows)
                <div class="movie-item">
                  <img src="{{ asset('/' . $rows->thumbnail_image) }}" alt="Popup Movie Poster">
                        
                    <div class="movie-title">{{$rows->name}}</div>
                  </div>
            @endforeach

            
            <!-- <div class="movie-item">
              <img src="image/rajasahab.webp" alt="mayanagri" />
              <div class="movie-title">Kapil Sharma Show</div>
            </div>
            <div class="movie-item">
              <img src="image/kgf2.jpg" alt="doremon" />
              <div class="movie-title">Kapil Sharma Show</div>
            </div> -->
          </div>
        </div>
      </section>
    </div>

    </main>

 
