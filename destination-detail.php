<?php 
require_once 'data/destinations.php';

// Get slug from URL
$slug = isset($_GET['slug']) ? $_GET['slug'] : '';
$destination = getDestination($slug);

// If destination not found, redirect to destinations page
if (!$destination) {
    header('Location: destinations.php');
    exit;
}

$currentPage = 'destinations';
$pageTitle = $destination['name'];
$additionalCSS = ['css/destination-detail.css'];
include 'includes/header.php'; 
?>

<div class="destination-detail-container">
    <!-- Hero Section -->
    <div class="hero-section-enhanced">
        <img src="<?php echo $destination['image']; ?>" alt="<?php echo $destination['name']; ?>">
        <div class="hero-gradient"></div>
        <div class="hero-content">
            <div class="hero-badges">
                <span class="badge badge-primary"><?php echo ucfirst($destination['category']); ?></span>
                <?php if($destination['rating'] >= 4.5): ?>
                <span class="badge badge-success">Top Rated</span>
                <?php endif; ?>
            </div>
            <h1><?php echo $destination['name']; ?></h1>
            <div class="hero-meta">
                <span class="hero-location"><i class="fas fa-map-marker-alt"></i> <?php echo $destination['location']; ?></span>
                <div class="hero-rating">
                    <span class="rating-stars"><i class="fas fa-star"></i><i class="fas fa-star"></i><i class="fas fa-star"></i><i class="fas fa-star"></i><i class="fas fa-star"></i></span>
                    <span><?php echo $destination['rating']; ?> (<?php echo number_format($destination['reviews']); ?> reviews)</span>
                </div>
            </div>
            <div class="hero-actions">
                <button class="btn btn-primary">
                    <span><i class="far fa-bookmark"></i></span>
                    Save Destination
                </button>
                <button class="btn btn-outline">
                    <span><i class="fas fa-share-alt"></i></span>
                    Share
                </button>
            </div>
            <p style="margin-top: 15px; color: var(--text-secondary); font-size: 14px;">
                <i class="fas fa-info-circle"></i> Prices shown are for reference only. We're a free community platform.
            </p>
        </div>
    </div>

    <!-- Quick Stats -->
    <div class="stats-grid">
        <div class="stat-item">
            <span class="stat-value"><?php echo $destination['entry_fee']; ?></span>
            <span class="stat-label">Entry Fee</span>
        </div>
        <div class="stat-item">
            <span class="stat-value"><?php echo $destination['duration']; ?></span>
            <span class="stat-label">Visit Duration</span>
        </div>
        <div class="stat-item">
            <span class="stat-value"><?php echo $destination['opens_at']; ?></span>
            <span class="stat-label">Opens At</span>
        </div>
        <div class="stat-item">
            <span class="stat-value"><?php echo $destination['best_season']; ?></span>
            <span class="stat-label">Best Season</span>
        </div>
    </div>

    <!-- Overview -->
    <section class="content-section">
        <h2 class="section-title">Overview</h2>
        <p class="section-text"><?php echo $destination['description']; ?></p>
    </section>

    <!-- How to Get There -->
    <section class="content-section">
        <h2 class="section-title"><i class="fas fa-car"></i> How to Get There</h2>
        <?php foreach($destination['how_to_get_there'] as $title => $description): ?>
        <div class="info-box">
            <div class="info-box-title">
                <i class="fas fa-plane"></i>
                <?php echo $title; ?>
            </div>
            <div class="info-box-content">
                <?php echo $description; ?>
            </div>
        </div>
        <?php endforeach; ?>
    </section>

    <!-- Best Time to Visit -->
    <section class="content-section">
        <h2 class="section-title"><i class="far fa-calendar-alt"></i> Best Time to Visit</h2>
        <div class="grid-2">
            <?php $colors = ['primary', 'secondary']; $i = 0; ?>
            <?php foreach($destination['best_time'] as $season => $description): ?>
            <div class="tip-card-enhanced" style="background: linear-gradient(135deg, var(--<?php echo $colors[$i]; ?>-color), <?php echo $i == 0 ? 'var(--accent-color)' : '#fbbf24'; ?>);">
                <h3><?php echo $season; ?></h3>
                <p><?php echo $description; ?></p>
            </div>
            <?php $i++; ?>
            <?php endforeach; ?>
        </div>
    </section>

    <!-- Things to Do -->
    <section class="content-section">
        <h2 class="section-title"><i class="fas fa-bullseye"></i> Things to Do</h2>
        <div class="activities-list">
            <?php foreach($destination['things_to_do'] as $activity): ?>
            <div class="activity-item">
                <span class="activity-icon"><?php echo $activity['icon']; ?></span>
                <div class="activity-info">
                    <h3><?php echo $activity['title']; ?></h3>
                    <p><?php echo $activity['description']; ?></p>
                </div>
            </div>
            <?php endforeach; ?>
        </div>
    </section>

    <!-- Travel Tips -->
    <section class="content-section">
        <h2 class="section-title"><i class="fas fa-lightbulb"></i> Travel Tips</h2>
        <div class="tips-grid">
            <?php foreach($destination['tips'] as $tip): ?>
            <div class="tip-card">
                <span class="tip-icon"><?php echo $tip['icon']; ?></span>
                <h3><?php echo $tip['title']; ?></h3>
                <p><?php echo $tip['description']; ?></p>
            </div>
            <?php endforeach; ?>
        </div>
    </section>

    <!-- Photo Gallery -->
    <section class="content-section">
        <h2 class="section-title"><i class="fas fa-camera"></i> Photo Gallery</h2>
        <div class="photo-gallery">
            <div class="gallery-item-large">
                <img src="<?php echo $destination['gallery'][0]; ?>" alt="<?php echo $destination['name']; ?>">
            </div>
            <?php for($i = 1; $i < count($destination['gallery']); $i++): ?>
            <div class="gallery-item">
                <img src="<?php echo $destination['gallery'][$i]; ?>" alt="<?php echo $destination['name']; ?>">
            </div>
            <?php endfor; ?>
        </div>
    </section>

    <!-- Map Location -->
    <section class="content-section">
        <h2 class="section-title"><i class="fas fa-map-marker-alt"></i> Location</h2>
        <div class="map-embed">
            <iframe src="https://www.google.com/maps/embed?pb=!1m14!1m8!1m3!1d89594.20449476248!2d103.80951771007437!3d13.392715982119654!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x3110168aea9a272d%3A0x3eaba81157b0418d!2sAngkor%20Wat!5e1!3m2!1sen!2skh!4v1772970272655!5m2!1sen!2skh" 
                    width="100%" 
                    height="450" 
                    style="border:0; border-radius: 12px;" 
                    allowfullscreen="" 
                    loading="lazy" 
                    referrerpolicy="no-referrer-when-downgrade">
            </iframe>
        </div>
    </section>

    <!-- Ask Question Section -->
    <section class="content-section">
        <h2 class="section-title"><i class="far fa-comment"></i> Have Questions?</h2>
        <div class="question-form-card">
            <p>Ask us anything about visiting <?php echo $destination['name']; ?>!</p>
            <textarea id="destinationQuestion" placeholder="Your question..." rows="4"></textarea>
            <button class="btn btn-primary" id="submitQuestion">Submit Question</button>
        </div>
    </section>
</div>

<?php include 'includes/footer.php'; ?>
