@extends('frontend.layout.app')
@section('title', 'Movie | Home ')
@section('content')

    <main>
      <section class="rent-movie">
        <div id="txt">
          <h1>Rented shows</h1>
          <hr />
        </div>

        <div class="card-container">
          <div class="card">
            <img src="image/aashiqi.jpg" alt="Kahaani 2" />
            <div class="card-content">
              <h3>Meri aashiqui tumse hi</h3>
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
            <img src="image/aashiqi.jpg" alt="Kahaani 2" />
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
            <img src="image/aashiqi.jpg" alt="Kahaani 2" />
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

        </div>
      </section>
    </main>
