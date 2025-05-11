@extends('frontend.layout.app')
@section('title', 'Movie | Home ')
@section('content')

    <main>
      <!-- <section class="hero">
        <div class="carousel">
          <div
            class="slide active"
            style="background-image: url('image/ipl.webp')">
            <div class="hero-content">
              <h1>IPL:indian premier league</h1>
              <p>
                The Indian Premier League (IPL) is a professional Twenty20
                cricket league in India organised annually by the Board of
                Cricket Control in India (BCCI).[3] Founded by the BCCI in 2007,
                the league features ten state or city-based franchise teams...
              </p>
              <button class="watch-btn">▶ Watch Now</button>
            </div>
          </div>
          <div
            class="slide"
            style="background-image: url('image/champions.jpg')">
            <div class="hero-content">
              <h1>news: popular news</h1>
              <p>
                The India national cricket team, known as the Men in Blue, is
                the reigning Champions Trophy holder after winning the 2025
                edition against New Zealand...
              </p>
              <button class="watch-btn">▶ Watch Now</button>
            </div>
          </div>
          <div
            class="slide"
            style="background-image: url('image/indvsnz.webp')">
            <div class="hero-content">
              <h1>You fight for what you think....</h1>
              <p>
                India defeated New Zealand by 4 wickets with 6 balls remaining
                in the Champions Trophy 2025 final, held in Dubai on March 9,
                2025...
              </p>
              <button class="watch-btn">▶ Watch Now</button>
            </div>
          </div>

          <div class="slide" style="background-image: url('image/india.webp')">
            <div class="hero-content">
              <h1>india champ</h1>
              <p>
                The India national cricket team, also known as Men in Blue,
                represents India in international cricket.....
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

    </main>

  
