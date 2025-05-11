@extends('frontend.layout.app')
@section('title', 'Movie | Home ')
@section('content')

    <main>
      <section class="rent-movie">
        <div id="txt">
          <h1>Rented Video</h1>
          <hr />
        </div>

        <div class="card-container">
          @foreach($rentMovies as $rows)
          <div class="card">
            <img src="{{ asset('/' . $rows->thumbnail_image) }}" alt="Kahaani 2">
                  
            <!-- <img src="image/chhava.webp" alt="Kahaani 2" /> -->
            <div class="card-content">
              <h3>{{$rows->name}}</h3>
        @php
            $duration = $rows->video_duration; // e.g. "16:10"
            list($minutes, $seconds) = array_pad(explode(':', $duration), 2, 0);
            $totalSeconds = ($minutes * 60) + $seconds;

            $hours = floor($totalSeconds / 3600);
            $mins = floor(($totalSeconds % 3600) / 60);
            $secs = $totalSeconds % 60;
        @endphp

          <!-- <p class="time">
              {{ $hours }} hour{{ $hours != 1 ? 's' : '' }} {{ $minutes }} minute{{ $minutes != 1 ? 's' : '' }}
          </p> -->
              <!-- <p class="time">2 h 2 min <span>2024-03-20</span></p> -->
              <p class="time">{{ $hours }} h{{ $hours != 1 ? 's' : '' }} {{ $mins }} min{{ $secs != 1 ? 's' : '' }}  {{ $secs }} sec{{ $mins != 1 ? 's' : '' }}<span>{{$rows->release_date}}</span></p>
              <p class="description">
                Chhaava is a 2025 Indian Hindi-language historical action film
                of Sambhaji Maharaj, played by Vicky Kaushal....
              </p>
              <a href="watch.html"><button class="rent-btn">
                <i class="ri-price-tag-3-fill"></i> Rent 30 Days For ₹99
              </button></a>
            </div>
          </div>
          @endforeach

          <!-- <div class="card">
            <img src="image/aashram.webp" alt="Kahaani 2" />
            <div class="card-content">
              <h3>Ek Badnaam Aashram</h3>
              <p class="time">2 h 2 min <span>2024-03-20</span></p>
              <p class="description">
                Aashram is an Indian Hindi-language crime drama web series
                directed by Prakash Jha, The series stars Bobby Deol along .....
              </p>
              <a href="watch.html"><button class="rent-btn">
                <i class="ri-price-tag-3-fill"></i> Rent 30 Days For ₹99
              </button></a>
            </div>
          </div>

          <div class="card">
            <img src="image/chhava.webp" alt="Kahaani 2" />
            <div class="card-content">
              <h3>Chhava</h3>
              <p class="time">2 h 2 min <span>2024-03-20</span></p>
              <p class="description">
                Chhaava is a 2025 Indian Hindi-language historical action film
                of Sambhaji Maharaj, played by Vicky Kaushal....
              </p>
              <a href="watch.html"><button class="rent-btn">
                <i class="ri-price-tag-3-fill"></i> Rent 30 Days For ₹99
              </button></a>
            </div>
          </div>

          <div class="card">
            <img src="image/aashram.webp" alt="Kahaani 2" />
            <div class="card-content">
              <h3>Ek Badnaam Aashram</h3>
              <p class="time">2 h 2 min <span>2024-03-20</span></p>
              <p class="description">
                Aashram is an Indian Hindi-language crime drama web series
                directed by Prakash Jha, The series stars Bobby Deol along .....
              </p>
              <a href="watch.html"><button class="rent-btn">
                <i class="ri-price-tag-3-fill"></i> Rent 30 Days For ₹99
              </button></a>
            </div>
          </div>

          <div class="card">
            <img src="image/bahubali.webp" alt="Kahaani 2" />
            <div class="card-content">
              <h3>Bahubali</h3>
              <p class="time">2 h 2 min <span>2024-03-20</span></p>
              <p class="description">
                Baahubali: ₹511.35 crore in all languages in India alone, and
                became the highest-grossing film in India, surpassing PK's gross
                of ₹440 crore from India...
              </p>
              <a href="watch.html"><button class="rent-btn">
                <i class="ri-price-tag-3-fill"></i> Rent 30 Days For ₹99
              </button></a>
            </div>
          </div>

          <div class="card">
            <img src="image/gamechanger.webp" alt="Kahaani 2" />
            <div class="card-content">
              <h3>Game Changer</h3>
              <p class="time">2 h 2 min <span>2024-03-20</span></p>
              <p class="description">
                Game Changer is a 2025 Indian Telugu-language political action
                film directed by S. Shankar, who made his Telugu debut with this
                movie.
              </p>
              <a href="watch.html"><button class="rent-btn">
                <i class="ri-price-tag-3-fill"></i> Rent 30 Days For ₹99
              </button></a>
            </div>
          </div> -->

          <!-- <div class="card">
            <img src="image/chhava.webp" alt="Kahaani 2" />
            <div class="card-content">
              <h3>Chhava</h3>
              <p class="time">2 h 2 min <span>2024-03-20</span></p>
              <p class="description">
                Chhaava is a 2025 Indian Hindi-language historical action film
                of Sambhaji Maharaj, played by Vicky Kaushal....
              </p>
              <a href="watch.html"><button class="rent-btn">
                <i class="ri-price-tag-3-fill"></i> Rent 30 Days For ₹99
              </button></a>
            </div>
          </div>

          <div class="card">
            <img src="image/aashram.webp" alt="Kahaani 2" />
            <div class="card-content">
              <h3>Ek Badnaam Aashram</h3>
              <p class="time">2 h 2 min <span>2024-03-20</span></p>
              <p class="description">
                Aashram is an Indian Hindi-language crime drama web series
                directed by Prakash Jha, The series stars Bobby Deol along .....
              </p>
              <a href="watch.html"><button class="rent-btn">
                <i class="ri-price-tag-3-fill"></i> Rent 30 Days For ₹99
              </button></a>
            </div>
          </div>

          <div class="card">
            <img src="image/bahubali.webp" alt="Kahaani 2" />
            <div class="card-content">
              <h3>Bahubali</h3>
              <p class="time">2 h 2 min <span>2024-03-20</span></p>
              <p class="description">
                Baahubali: ₹511.35 crore in all languages in India alone, and
                became the highest-grossing film in India, surpassing PK's gross
                of ₹440 crore from India...
              </p>
              <a href="watch.html"><button class="rent-btn">
                <i class="ri-price-tag-3-fill"></i> Rent 30 Days For ₹99
              </button></a>
            </div>
          </div> -->
        </div>
      </section>
    </main>
