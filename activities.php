<?php 
$currentPage = 'activities';
$pageTitle = 'Activities & Experiences';
$additionalCSS = ['css/activities.css'];
$additionalJS = ['js/activities.js'];
include 'includes/header.php'; 
?>

<div class="activities-container">
    <div class="page-header">
        <div>
            <h1>Activities & Experiences</h1>
            <p class="page-subtitle">Discover amazing things to do in Siem Reap</p>
        </div>
    </div>

    <div class="filter-section">
        <div class="filter-chips">
            <button class="filter-chip active" data-filter="all">
                <i class="fas fa-star"></i>
                <span>All Activities</span>
            </button>
            <button class="filter-chip" data-filter="water">
                <i class="fas fa-water"></i>
                <span>Water Sports</span>
            </button>
            <button class="filter-chip" data-filter="adventure">
                <i class="fas fa-mountain"></i>
                <span>Adventure</span>
            </button>
            <button class="filter-chip" data-filter="culture">
                <i class="fas fa-theater-masks"></i>
                <span>Culture</span>
            </button>
            <button class="filter-chip" data-filter="nature">
                <i class="fas fa-leaf"></i>
                <span>Nature</span>
            </button>
        </div>
    </div>

    <div class="activities-list">
        <!-- Pub Street Food Tour -->
        <div class="activity-card" data-category="culture">
            <div class="activity-card-image">
                <img src="https://i.pinimg.com/1200x/38/e7/6f/38e76f3e31609410d50d88dac39b4451.jpg" alt="Food Tour">
            </div>
            <div class="activity-card-body">
                <div class="activity-header">
                    <h3 class="activity-title">Pub Street Food Tour</h3>
                    <div class="price-tag">
                        <span class="price-tag-label">From</span>
                        <span>$15</span>
                    </div>
                </div>
                <div class="activity-location">
                    <i class="fas fa-map-marker-alt"></i>
                    <span>Pub Street, Siem Reap</span>
                </div>
                <p class="activity-description">
                    Explore Siem Reap's vibrant street food scene with a local guide. Taste authentic Khmer dishes and snacks.
                </p>
                <div class="activity-card-meta">
                    <div class="activity-meta-item">
                        <span class="icon"><i class="far fa-clock"></i></span>
                        <span>2-3 hours</span>
                    </div>
                    <div class="activity-meta-item">
                        <span class="icon"><i class="fas fa-star"></i></span>
                        <span>4.8 (567)</span>
                    </div>
                </div>
                <a href="activity-detail.php?slug=pub-street-food-tour" class="btn-explore">View Details →</a>
            </div>
        </div>

        <!-- Angkor Sunrise Tour -->
        <div class="activity-card" data-category="culture">
            <div class="activity-card-image">
                <img src="https://i.pinimg.com/736x/c8/e7/15/c8e7159cdda0f9923127dcd85675be08.jpg" alt="Angkor Sunrise">
            </div>
            <div class="activity-card-body">
                <div class="activity-header">
                    <h3 class="activity-title">Angkor Wat Sunrise Tour</h3>
                    <div class="price-tag">
                        <span class="price-tag-label">From</span>
                        <span>$25</span>
                    </div>
                </div>
                <div class="activity-location">
                    <i class="fas fa-map-marker-alt"></i>
                    <span>Angkor Archaeological Park</span>
                </div>
                <p class="activity-description">
                    Experience the magical sunrise over Angkor Wat. Includes temple pass, guide, and breakfast.
                </p>
                <div class="activity-card-meta">
                    <div class="activity-meta-item">
                        <span class="icon"><i class="far fa-clock"></i></span>
                        <span>5-6 hours</span>
                    </div>
                    <div class="activity-meta-item">
                        <span class="icon"><i class="fas fa-star"></i></span>
                        <span>4.9 (2.3K)</span>
                    </div>
                </div>
                <a href="activity-detail.php?slug=angkor-sunrise-tour" class="btn-explore">View Details →</a>
            </div>
        </div>

        <!-- Apsara Dance & Dinner -->
        <div class="activity-card" data-category="culture">
            <div class="activity-card-image">
                <img src="https://i.pinimg.com/1200x/d0/e9/69/d0e969aea3edcd4ccb235c6ce6ae0a0b.jpg" alt="Apsara Dance">
            </div>
            <div class="activity-card-body">
                <div class="activity-header">
                    <h3 class="activity-title">Apsara Dance & Dinner Show</h3>
                    <div class="price-tag">
                        <span class="price-tag-label">From</span>
                        <span>$35</span>
                    </div>
                </div>
                <div class="activity-location">
                    <i class="fas fa-map-marker-alt"></i>
                    <span>Angkor Village Theatre</span>
                </div>
                <p class="activity-description">
                    Traditional Khmer dance performance with buffet dinner. Experience authentic Cambodian culture.
                </p>
                <div class="activity-card-meta">
                    <div class="activity-meta-item">
                        <span class="icon"><i class="far fa-clock"></i></span>
                        <span>2 hours</span>
                    </div>
                    <div class="activity-meta-item">
                        <span class="icon"><i class="fas fa-star"></i></span>
                        <span>4.8 (1.9K)</span>
                    </div>
                </div>
                <a href="activity-detail.php?slug=apsara-dance-dinner-show" class="btn-explore">View Details →</a>
            </div>
        </div>

        <!-- Tonle Sap Tour -->
        <div class="activity-card" data-category="nature">
            <div class="activity-card-image">
                <img src="https://i.pinimg.com/1200x/83/6f/35/836f352d68e26c625eb8cc1b453f8e3d.jpg" alt="Tonle Sap">
            </div>
            <div class="activity-card-body">
                <div class="activity-header">
                    <h3 class="activity-title">Tonle Sap Floating Village Tour</h3>
                    <div class="price-tag">
                        <span class="price-tag-label">From</span>
                        <span>$30</span>
                    </div>
                </div>
                <div class="activity-location">
                    <i class="fas fa-map-marker-alt"></i>
                    <span>Tonle Sap Lake</span>
                </div>
                <p class="activity-description">
                    Boat tour of floating villages on Southeast Asia's largest lake. See unique water-based communities.
                </p>
                <div class="activity-card-meta">
                    <div class="activity-meta-item">
                        <span class="icon"><i class="far fa-clock"></i></span>
                        <span>Half day</span>
                    </div>
                    <div class="activity-meta-item">
                        <span class="icon"><i class="fas fa-star"></i></span>
                        <span>4.5 (1.2K)</span>
                    </div>
                </div>
                <a href="activity-detail.php?slug=tonle-sap-floating-village-tour" class="btn-explore">View Details →</a>
            </div>
        </div>

        <!-- Phnom Kulen Tour -->
        <div class="activity-card" data-category="nature">
            <div class="activity-card-image">
                <img src="https://i.pinimg.com/736x/38/97/1b/38971bc352da719abd689916a302c40f.jpg" alt="Waterfall">
            </div>
            <div class="activity-card-body">
                <div class="activity-header">
                    <h3 class="activity-title">Phnom Kulen Waterfall Tour</h3>
                    <div class="price-tag">
                        <span class="price-tag-label">From</span>
                        <span>$45</span>
                    </div>
                </div>
                <div class="activity-location">
                    <i class="fas fa-map-marker-alt"></i>
                    <span>Phnom Kulen National Park</span>
                </div>
                <p class="activity-description">
                    Full-day tour to sacred mountain with waterfalls, reclining Buddha, and river carvings.
                </p>
                <div class="activity-card-meta">
                    <div class="activity-meta-item">
                        <span class="icon"><i class="far fa-clock"></i></span>
                        <span>Full day</span>
                    </div>
                    <div class="activity-meta-item">
                        <span class="icon"><i class="fas fa-star"></i></span>
                        <span>4.7 (987)</span>
                    </div>
                </div>
                <a href="activity-detail.php?slug=phnom-kulen-waterfall-tour" class="btn-explore">View Details →</a>
            </div>
        </div>

        <!-- Cooking Class -->
        <div class="activity-card" data-category="culture">
            <div class="activity-card-image">
                <img src="https://images.unsplash.com/photo-1556910103-1c02745aae4d?w=400" alt="Cooking">
            </div>
            <div class="activity-card-body">
                <div class="activity-header">
                    <h3 class="activity-title">Khmer Cooking Class</h3>
                    <div class="price-tag">
                        <span class="price-tag-label">From</span>
                        <span>$30</span>
                    </div>
                </div>
                <div class="activity-location">
                    <i class="fas fa-map-marker-alt"></i>
                    <span>Siem Reap</span>
                </div>
                <p class="activity-description">
                    Learn to cook authentic Cambodian dishes. Market tour, cooking session, and lunch included.
                </p>
                <div class="activity-card-meta">
                    <div class="activity-meta-item">
                        <span class="icon"><i class="far fa-clock"></i></span>
                        <span>4 hours</span>
                    </div>
                    <div class="activity-meta-item">
                        <span class="icon"><i class="fas fa-star"></i></span>
                        <span>4.9 (1.5K)</span>
                    </div>
                </div>
                <a href="activity-detail.php?slug=khmer-cooking-class" class="btn-explore">View Details →</a>
            </div>
        </div>

        <!-- Go-Kart Racing -->
        <div class="activity-card" data-category="adventure">
            <div class="activity-card-image">
                <img src="https://i.pinimg.com/736x/f3/75/fe/f375fe99fcfdbcf1d557d04d9f2a838d.jpg" alt="Go-Kart">
            </div>
            <div class="activity-card-body">
                <div class="activity-header">
                    <h3 class="activity-title">Go-Kart Racing Experience</h3>
                    <div class="price-tag">
                        <span class="price-tag-label">From</span>
                        <span>$20</span>
                    </div>
                </div>
                <div class="activity-location">
                    <i class="fas fa-map-marker-alt"></i>
                    <span>Angkor Speedway</span>
                </div>
                <p class="activity-description">
                    High-speed go-kart racing on professional track. Fun for families and adrenaline seekers.
                </p>
                <div class="activity-card-meta">
                    <div class="activity-meta-item">
                        <span class="icon"><i class="far fa-clock"></i></span>
                        <span>30 minutes</span>
                    </div>
                    <div class="activity-meta-item">
                        <span class="icon"><i class="fas fa-star"></i></span>
                        <span>4.6 (654)</span>
                    </div>
                </div>
                <a href="activity-detail.php?slug=go-kart-racing" class="btn-explore">View Details →</a>
            </div>
        </div>
    </div>
</div>

<?php include 'includes/footer.php'; ?>
