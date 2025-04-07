@extends('frontend.layout.app')
@section('title', 'Movie | Home ')
@section('content')

    <main>
      <section class="hero">
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
      </section>

    </main>

  
