<?php 
$currentPage = 'tools';
$pageTitle = 'Weather Guide';
$additionalCSS = ['css/weather-guide.css'];
include 'includes/header.php'; 
?>

<div class="tool-container">
    <div class="tool-header">
        <div class="tool-icon">
            <i class="fas fa-cloud-sun"></i>
        </div>
        <h1>Cambodia Weather Guide</h1>
        <p>Find the best time to visit based on weather patterns</p>
        
        <!-- Real-time Current Weather -->
        <div class="current-weather" id="currentWeather">
            <div class="loading">Loading current weather...</div>
        </div>
        
        <div class="tool-stats">
            <span><i class="fas fa-eye"></i> 921 uses</span>
        </div>
    </div>

    <div class="weather-selector">
        <h2>Select Month</h2>
        <div class="month-grid">
            <button class="month-btn" data-month="1">January</button>
            <button class="month-btn" data-month="2">February</button>
            <button class="month-btn" data-month="3">March</button>
            <button class="month-btn" data-month="4">April</button>
            <button class="month-btn" data-month="5">May</button>
            <button class="month-btn" data-month="6">June</button>
            <button class="month-btn" data-month="7">July</button>
            <button class="month-btn" data-month="8">August</button>
            <button class="month-btn" data-month="9">September</button>
            <button class="month-btn" data-month="10">October</button>
            <button class="month-btn" data-month="11">November</button>
            <button class="month-btn" data-month="12">December</button>
        </div>
    </div>

    <div class="weather-result" id="weatherResult" style="display: none;">
        <div class="weather-card">
            <div class="weather-header">
                <h3 id="monthName"></h3>
                <div class="weather-icon-large" id="weatherIcon"></div>
            </div>
            
            <div class="weather-stats">
                <div class="stat-box">
                    <i class="fas fa-temperature-high"></i>
                    <div>
                        <span class="stat-label">Temperature</span>
                        <span class="stat-value" id="temperature"></span>
                    </div>
                </div>
                <div class="stat-box">
                    <i class="fas fa-tint"></i>
                    <div>
                        <span class="stat-label">Rainfall</span>
                        <span class="stat-value" id="rainfall"></span>
                    </div>
                </div>
                <div class="stat-box">
                    <i class="fas fa-wind"></i>
                    <div>
                        <span class="stat-label">Humidity</span>
                        <span class="stat-value" id="humidity"></span>
                    </div>
                </div>
            </div>

            <div class="weather-description" id="weatherDescription"></div>

            <div class="travel-recommendation">
                <h4><i class="fas fa-lightbulb"></i> Travel Recommendation</h4>
                <p id="recommendation"></p>
            </div>

            <div class="what-to-pack">
                <h4><i class="fas fa-suitcase"></i> What to Pack</h4>
                <ul id="packingList"></ul>
            </div>
        </div>
    </div>

    <div class="data-source-info">
        <p>
            <i class="fas fa-info-circle"></i> 
            Weather information is updated in real-time from international meteorological data sources.
            Last updated: <span id="lastUpdated"></span>
        </p>
    </div>

    <div class="season-overview">
        <h2>Seasonal Overview</h2>
        <div class="season-cards">
            <div class="season-card dry">
                <div class="season-icon">☀️</div>
                <h3>Dry Season</h3>
                <p class="season-months">November - April</p>
                <p>Perfect weather with clear skies and comfortable temperatures. Best time for temple visits and beach activities.</p>
                <div class="season-rating">
                    <span>Best for Travel:</span>
                    <div class="stars">★★★★★</div>
                </div>
            </div>

            <div class="season-card wet">
                <div class="season-icon">🌧️</div>
                <h3>Wet Season</h3>
                <p class="season-months">May - October</p>
                <p>Afternoon showers and lush green landscapes. Fewer tourists and great for photography with dramatic skies.</p>
                <div class="season-rating">
                    <span>Best for Travel:</span>
                    <div class="stars">★★★☆☆</div>
                </div>
            </div>
        </div>
    </div>
</div>

<script src="js/weather-guide.js"></script>

<?php include 'includes/footer.php'; ?>
