<?php 
$currentPage = 'travel-map';
$pageTitle = 'Travel Map';
$additionalCSS = ['css/travel-map.css'];
include 'includes/header.php'; 
?>

<div class="map-container">
    <div class="map-sidebar">
        <div class="map-header">
            <h2>Explore Siem Reap</h2>
            <div class="search-box">
                <input type="text" id="mapSearch" placeholder="Search destinations...">
                <button id="searchBtn"><i class="fas fa-search"></i></button>
            </div>
        </div>

        <div class="filter-section">
            <h3>Filter by Category</h3>
            <div class="filter-buttons">
                <button class="filter-btn active" data-category="all">
                    <i class="fas fa-globe"></i> All
                </button>
                <button class="filter-btn" data-category="temple">
                    <i class="fas fa-gopuram"></i> Temples
                </button>
                <button class="filter-btn" data-category="beach">
                    <i class="fas fa-water"></i> Water Sports
                </button>
                <button class="filter-btn" data-category="nature">
                    <i class="fas fa-tree"></i> Nature
                </button>
                <button class="filter-btn" data-category="city">
                    <i class="fas fa-city"></i> Cities
                </button>
            </div>
        </div>

        <div class="destinations-list" id="destinationsList">
            <!-- Destinations will be populated by JavaScript -->
        </div>
    </div>

    <div class="map-wrapper">
        <div id="map"></div>
        <div class="map-controls">
            <button id="centerMap" title="Center Map"><i class="fas fa-crosshairs"></i></button>
            <button id="toggleSatellite" title="Toggle Satellite"><i class="fas fa-satellite"></i></button>
        </div>
    </div>
</div>

<!-- Destination Info Modal -->
<div class="info-modal" id="infoModal">
    <div class="info-modal-content">
        <button class="close-info-btn" id="closeInfo">&times;</button>
        <div id="modalContent">
            <!-- Content will be populated by JavaScript -->
        </div>
    </div>
</div>

<link rel="stylesheet" href="https://unpkg.com/leaflet@1.9.4/dist/leaflet.css" />
<script src="https://unpkg.com/leaflet@1.9.4/dist/leaflet.js"></script>
<script src="js/travel-map.js"></script>

<?php include 'includes/footer.php'; ?>
