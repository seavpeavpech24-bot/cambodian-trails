<?php 
require_once 'data/activities.php';

// Get slug from URL
$slug = isset($_GET['slug']) ? $_GET['slug'] : '';
$activity = getActivity($slug);

// If activity not found, redirect to activities page
if (!$activity) {
    header('Location: activities.php');
    exit;
}

$currentPage = 'activities';
$pageTitle = $activity['name'];
$additionalCSS = ['css/destination-detail.css'];
include 'includes/header.php'; 
?>

<div class="destination-detail-container">
    <!-- Hero Section -->
    <div class="hero-section-enhanced">
        <img src="<?php echo $activity['image']; ?>" alt="<?php echo $activity['name']; ?>">
        <div class="hero-gradient"></div>
        <div class="hero-content">
            <div class="hero-badges">
                <span class="badge badge-primary"><?php echo ucfirst($activity['category']); ?></span>
                <?php if($activity['rating'] >= 4.8): ?>
                <span class="badge badge-success">Highly Rated</span>
                <?php endif; ?>
            </div>
            <h1><?php echo $activity['name']; ?></h1>
            <div class="hero-meta">
                <span class="hero-location"><i class="fas fa-map-marker-alt"></i> <?php echo $activity['location']; ?></span>
                <div class="hero-rating">
                    <span class="rating-stars"><i class="fas fa-star"></i><i class="fas fa-star"></i><i class="fas fa-star"></i><i class="fas fa-star"></i><i class="fas fa-star"></i></span>
                    <span><?php echo $activity['rating']; ?> (<?php echo $activity['reviews']; ?> reviews)</span>
                </div>
            </div>
            <div class="hero-actions">
                <button class="btn btn-primary">
                    <span><i class="far fa-bookmark"></i></span>
                    Save Activity
                </button>
                <button class="btn btn-outline">
                    <span><i class="fas fa-share-alt"></i></span>
                    Share
                </button>
            </div>
            <p style="margin-top: 15px; color: var(--text-secondary); font-size: 14px;">
                <i class="fas fa-info-circle"></i> This is informational only. We don't provide booking services.
            </p>
        </div>
    </div>

    <!-- Quick Stats -->
    <div class="stats-grid">
        <?php if(isset($activity['price'])): ?>
        <div class="stat-item">
            <span class="stat-value">$<?php echo $activity['price']; ?></span>
            <span class="stat-label">Estimated Cost</span>
        </div>
        <?php endif; ?>
        <div class="stat-item">
            <span class="stat-value"><?php echo $activity['duration']; ?></span>
            <span class="stat-label">Duration</span>
        </div>
        <div class="stat-item">
            <span class="stat-value"><?php echo $activity['rating']; ?> <i class="fas fa-star"></i></span>
            <span class="stat-label">Rating</span>
        </div>
        <div class="stat-item">
            <span class="stat-value"><?php echo $activity['reviews']; ?></span>
            <span class="stat-label">Reviews</span>
        </div>
    </div>

    <!-- Overview -->
    <section class="content-section">
        <h2 class="section-title">Overview</h2>
        <p class="section-text"><?php echo $activity['description']; ?></p>
    </section>

    <!-- Highlights -->
    <section class="content-section">
        <h2 class="section-title"><i class="fas fa-sparkles"></i> Highlights</h2>
        <div class="highlights-grid">
            <?php foreach($activity['highlights'] as $highlight): ?>
            <div class="highlight-item">
                <span class="highlight-icon">✓</span>
                <span><?php echo $highlight; ?></span>
            </div>
            <?php endforeach; ?>
        </div>
    </section>

    <!-- What's Included -->
    <section class="content-section">
        <h2 class="section-title"><i class="fas fa-box"></i> What's Included</h2>
        <div class="included-list">
            <?php foreach($activity['included'] as $item): ?>
            <div class="included-item">
                <span class="included-icon">✓</span>
                <span><?php echo $item; ?></span>
            </div>
            <?php endforeach; ?>
        </div>
    </section>

    <!-- Itinerary -->
    <?php if(isset($activity['itinerary'])): ?>
    <section class="content-section">
        <h2 class="section-title"><i class="far fa-calendar-alt"></i> Itinerary</h2>
        <div class="itinerary-timeline">
            <?php foreach($activity['itinerary'] as $time => $description): ?>
            <div class="timeline-item">
                <div class="timeline-time"><?php echo $time; ?></div>
                <div class="timeline-content"><?php echo $description; ?></div>
            </div>
            <?php endforeach; ?>
        </div>
    </section>
    <?php endif; ?>

    <!-- Menu (for cooking class) -->
    <?php if(isset($activity['menu'])): ?>
    <section class="content-section">
        <h2 class="section-title"><i class="fas fa-utensils"></i> Menu</h2>
        <div class="menu-list">
            <?php foreach($activity['menu'] as $dish): ?>
            <div class="menu-item">
                <span class="menu-icon"><i class="fas fa-utensils"></i></span>
                <span><?php echo $dish; ?></span>
            </div>
            <?php endforeach; ?>
        </div>
    </section>
    <?php endif; ?>

    <!-- What to Bring -->
    <section class="content-section">
        <h2 class="section-title"><i class="fas fa-backpack"></i> What to Bring</h2>
        <div class="bring-list">
            <?php foreach($activity['what_to_bring'] as $item): ?>
            <div class="bring-item">
                <span class="bring-icon">•</span>
                <span><?php echo $item; ?></span>
            </div>
            <?php endforeach; ?>
        </div>
    </section>

    <!-- Requirements -->
    <section class="content-section">
        <h2 class="section-title"><i class="fas fa-exclamation-triangle"></i> Requirements</h2>
        <div class="requirements-list">
            <?php foreach($activity['requirements'] as $requirement): ?>
            <div class="requirement-item">
                <span class="requirement-icon">!</span>
                <span><?php echo $requirement; ?></span>
            </div>
            <?php endforeach; ?>
        </div>
    </section>

    <!-- Photo Gallery -->
    <section class="content-section">
        <h2 class="section-title"><i class="fas fa-camera"></i> Photo Gallery</h2>
        <div class="photo-gallery">
            <?php foreach($activity['gallery'] as $index => $photo): ?>
            <?php if($index == 0): ?>
            <div class="gallery-item-large">
                <img src="<?php echo $photo; ?>" alt="<?php echo $activity['name']; ?>">
            </div>
            <?php else: ?>
            <div class="gallery-item">
                <img src="<?php echo $photo; ?>" alt="<?php echo $activity['name']; ?>">
            </div>
            <?php endif; ?>
            <?php endforeach; ?>
        </div>
    </section>

    <!-- Ask Question Section -->
    <section class="content-section">
        <h2 class="section-title"><i class="far fa-comment"></i> Have Questions?</h2>
        <div class="question-form-card">
            <p>Ask us anything about this activity!</p>
            <textarea id="activityQuestion" placeholder="Your question..." rows="4"></textarea>
            <button class="btn btn-primary" id="submitQuestion">Submit Question</button>
        </div>
    </section>
</div>

<style>
.highlights-grid, .included-list, .bring-list, .requirements-list, .menu-list {
    display: grid;
    grid-template-columns: repeat(auto-fit, minmax(250px, 1fr));
    gap: 12px;
}

.highlight-item, .included-item, .bring-item, .requirement-item, .menu-item {
    display: flex;
    align-items: flex-start;
    gap: 12px;
    padding: 12px;
    background: var(--background);
    border-radius: var(--radius-sm);
}

.highlight-icon, .included-icon {
    color: var(--accent-color);
    font-weight: bold;
}

.bring-icon, .requirement-icon, .menu-icon {
    color: var(--primary-color);
    font-weight: bold;
}

.itinerary-timeline {
    position: relative;
    padding-left: 40px;
}

.timeline-item {
    position: relative;
    padding-bottom: 24px;
}

.timeline-item::before {
    content: '';
    position: absolute;
    left: -28px;
    top: 8px;
    width: 12px;
    height: 12px;
    border-radius: 50%;
    background: var(--primary-color);
}

.timeline-item::after {
    content: '';
    position: absolute;
    left: -23px;
    top: 20px;
    width: 2px;
    height: calc(100% - 12px);
    background: var(--border-color);
}

.timeline-item:last-child::after {
    display: none;
}

.timeline-time {
    font-weight: 700;
    color: var(--primary-color);
    margin-bottom: 4px;
}

.timeline-content {
    color: var(--text-secondary);
}
</style>

<?php include 'includes/footer.php'; ?>
