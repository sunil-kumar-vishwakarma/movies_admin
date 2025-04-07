@extends('admin.layout')

@section('content')
    <div class="dashboard">
        <div class="dashboard-container">
            <div class="summary-cards">
                <a href="{{ route('admin.user') }}" class="card">
                    <i class="fas fa-users"></i>
                    <h2 data-count="2500">0</h2>
                    <p>Users</p>
                </a>
                <a href="{{ route('admin.videos.videos') }}" class="card">
                    <i class="fas fa-video"></i>
                    <h2 data-count="66">0</h2>
                    <p>Videos</p>
                </a>
                <a href="{{ route('admin.tvshows.index') }}" class="card">
                    <i class="fas fa-tv"></i>
                    <h2 data-count="170">0</h2>
                    <p>TV Shows</p>
                </a>
                <a href="{{ route('admin.banner.home') }}" class="card">
                    <i class="fas fa-broadcast-tower"></i>
                    <h2 data-count="270">0</h2>
                    <p>Channel</p>
                </a>
                <a href="{{ route('admin.cast') }}" class="card">
                    <i class="fas fa-user-friends"></i>
                    <h2 data-count="250">0</h2>
                    <p>Cast</p>
                </a>
            </div>

            <div class="earnings-cards">
                <a href="#" class="card">
                    <i class="fas fa-dollar-sign"></i>
                    <h2 data-count="5800">$0</h2>
                    <p>Monthly Package Earnings</p>
                </a>
                <a href="#" class="card">
                    <i class="fas fa-box"></i>
                    <h2 data-count="300">$0</h2>
                    <p>Package</p>
                </a>
                <a href="#" class="card">
                    <i class="fas fa-money-bill"></i>
                    <h2 data-count="1000">$0</h2>
                    <p>Monthly Rent Earnings</p>
                </a>
                <a href="#" class="card">
                    <i class="fas fa-chart-line"></i>
                    <h2 data-count="316">$0</h2>
                    <p>Rent Earnings</p>
                </a>
            </div>
            <div class="most-viewed">
                <h3>Most Viewed Video & TV Show</h3>
                <table>
                    <thead>
                        <tr>
                            <th>#</th>
                            <th>Video / TV Show</th>
                            <th>Views</th>
                        </tr>
                    </thead>
                    <tbody>
                        <tr>
                            <td>1.</td>
                            <td>Anek</td>
                            <td><i class="fas fa-eye"></i> 156.5K</td>
                        </tr>
                        <tr>
                            <td>2.</td>
                            <td>Attack: Part 1</td>
                            <td><i class="fas fa-eye"></i> 22.6K</td>
                        </tr>
                        <tr>
                            <td>3.</td>
                            <td>Ek Villain Returns</td>
                            <td><i class="fas fa-eye"></i> 16.5K</td>
                        </tr>
                        <tr>
                            <td>4.</td>
                            <td>Sooryavanshi</td>
                            <td><i class="fas fa-eye"></i> 9.8K</td>
                        </tr>
                        <tr>
                            <td>5.</td>
                            <td>Daag: The Fire</td>
                            <td><i class="fas fa-eye"></i> 9.6K</td>
                        </tr>
                    </tbody>
                </table>
            </div>
        </div>
    </div>


    <script>
        document.addEventListener("DOMContentLoaded", function() {
            function animateCount(el, target) {
                let start = 0;
                let speed = Math.ceil(target / 100);
                let interval = setInterval(() => {
                    start += speed;
                    if (start >= target) {
                        clearInterval(interval);
                        start = target;
                    }
                    el.innerText = target >= 1000 ? new Intl.NumberFormat().format(start) : start;
                }, 20);
            }

            document.querySelectorAll(".card h2").forEach((el) => {
                let target = parseInt(el.getAttribute("data-count"));
                if (!isNaN(target)) {
                    animateCount(el, target);
                }
            });
        });
    </script>
@endsection
