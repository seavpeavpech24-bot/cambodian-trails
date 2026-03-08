<?php 
$currentPage = 'travel-guides';
$pageTitle = 'Travel Guides';
$additionalCSS = ['css/destinations.css'];
$additionalJS = ['js/destinations.js'];
include 'includes/header.php'; 
?>

<div class="destinations-container">
    <div class="page-header">
        <div>
            <h1>Siem Reap Travel Guides</h1>
            <p class="page-subtitle">Comprehensive guides to help you plan your Siem Reap adventure</p>
        </div>
    </div>

    <div class="filter-section">
        <div class="filter-chips">
            <button class="filter-chip active" data-filter="all">
                <i class="fas fa-book"></i>
                <span>All Guides</span>
            </button>
            <button class="filter-chip" data-filter="planning">
                <i class="fas fa-clipboard-list"></i>
                <span>Planning</span>
            </button>
            <button class="filter-chip" data-filter="culture">
                <i class="fas fa-theater-masks"></i>
                <span>Culture</span>
            </button>
            <button class="filter-chip" data-filter="food">
                <i class="fas fa-utensils"></i>
                <span>Food</span>
            </button>
            <button class="filter-chip" data-filter="tips">
                <i class="fas fa-lightbulb"></i>
                <span>Tips</span>
            </button>
        </div>
    </div>

    <div class="destinations-grid">
        <!-- Guide 1 -->
        <div class="tourism-card" data-category="planning">
            <div class="tourism-card-image">
                <img src="https://i.pinimg.com/736x/c8/e7/15/c8e7159cdda0f9923127dcd85675be08.jpg" alt="Siem Reap">
                <div class="tourism-card-badge"><i class="fas fa-clipboard-list"></i> Planning</div>
            </div>
            <div class="tourism-card-content">
                <h3 class="tourism-card-title">First Time in Siem Reap: Complete Guide</h3>
                <p class="tourism-card-description">
                    Everything you need to know for your first visit to Siem Reap. Temple passes, best time to visit, and essential tips.
                </p>
                <div class="tourism-card-footer">
                    <div class="rating">
                        <span class="rating-count">15 min read</span>
                    </div>
                    <a href="guide-detail.php?slug=first-time-siem-reap" class="btn-explore">
                        Read Guide
                        <span>→</span>
                    </a>
                </div>
            </div>
        </div>

        <!-- Guide 2 -->
        <div class="tourism-card" data-category="culture">
            <div class="tourism-card-image">
                <img src="https://i.pinimg.com/736x/c8/e7/15/c8e7159cdda0f9923127dcd85675be08.jpg" alt="Angkor Temples">
                <div class="tourism-card-badge"><i class="fas fa-theater-masks"></i> Culture</div>
            </div>
            <div class="tourism-card-content">
                <h3 class="tourism-card-title">Ultimate Angkor Temples Guide</h3>
                <p class="tourism-card-description">
                    Complete guide to exploring Angkor Archaeological Park. Best temples, routes, and photography tips.
                </p>
                <div class="tourism-card-footer">
                    <div class="rating">
                        <span class="rating-count">20 min read</span>
                    </div>
                    <a href="guide-detail.php?slug=angkor-temples-guide" class="btn-explore">
                        Read Guide
                        <span>→</span>
                    </a>
                </div>
            </div>
        </div>

        <!-- Guide 3 -->
        <div class="tourism-card" data-category="food">
            <div class="tourism-card-image">
                <img src="https://images.unsplash.com/photo-1556910103-1c02745aae4d?w=600" alt="Food">
                <div class="tourism-card-badge"><i class="fas fa-utensils"></i> Food</div>
            </div>
            <div class="tourism-card-content">
                <h3 class="tourism-card-title">Ultimate Siem Reap Food Guide</h3>
                <p class="tourism-card-description">
                    Discover the best food in Siem Reap, from street food to fine dining. Where to eat and what to order.
                </p>
                <div class="tourism-card-footer">
                    <div class="rating">
                        <span class="rating-count">12 min read</span>
                    </div>
                    <a href="guide-detail.php?slug=siem-reap-food-guide" class="btn-explore">
                        Read Guide
                        <span>→</span>
                    </a>
                </div>
            </div>
        </div>

        <!-- Guide 4 -->
        <div class="tourism-card" data-category="tips">
            <div class="tourism-card-image">
                <img src="https://i.pinimg.com/1200x/38/e7/6f/38e76f3e31609410d50d88dac39b4451.jpg" alt="Pub Street">
                <div class="tourism-card-badge"><i class="fas fa-lightbulb"></i> Tips</div>
            </div>
            <div class="tourism-card-content">
                <h3 class="tourism-card-title">Siem Reap Nightlife Guide</h3>
                <p class="tourism-card-description">
                    Explore Pub Street and Siem Reap's vibrant nightlife. Best bars, clubs, and entertainment venues.
                </p>
                <div class="tourism-card-footer">
                    <div class="rating">
                        <span class="rating-count">8 min read</span>
                    </div>
                    <a href="blog.php?id=nightlife" class="btn-explore">
                        Read Guide
                        <span>→</span>
                    </a>
                </div>
            </div>
        </div>

        <!-- Guide 5 -->
        <div class="tourism-card" data-category="planning">
            <div class="tourism-card-image">
                <img src="https://i.pinimg.com/1200x/83/6f/35/836f352d68e26c625eb8cc1b453f8e3d.jpg" alt="Tonle Sap">
                <div class="tourism-card-badge"><i class="fas fa-clipboard-list"></i> Planning</div>
            </div>
            <div class="tourism-card-content">
                <h3 class="tourism-card-title">Day Trips from Siem Reap</h3>
                <p class="tourism-card-description">
                    Best day trips including Tonle Sap Lake, Phnom Kulen, Banteay Srei, and floating villages.
                </p>
                <div class="tourism-card-footer">
                    <div class="rating">
                        <span class="rating-count">10 min read</span>
                    </div>
                    <a href="blog.php?id=daytrips" class="btn-explore">
                        Read Guide
                        <span>→</span>
                    </a>
                </div>
            </div>
        </div>

        <!-- Guide 6 -->
        <div class="tourism-card" data-category="tips">
            <div class="tourism-card-image">
                <img src="https://i.pinimg.com/736x/c8/e7/15/c8e7159cdda0f9923127dcd85675be08.jpg" alt="Photography">
                <div class="tourism-card-badge"><i class="fas fa-lightbulb"></i> Tips</div>
            </div>
            <div class="tourism-card-content">
                <h3 class="tourism-card-title">Photography Guide for Angkor</h3>
                <p class="tourism-card-description">
                    Best spots for photos, golden hour timing, and tips for capturing stunning temple shots.
                </p>
                <div class="tourism-card-footer">
                    <div class="rating">
                        <span class="rating-count">7 min read</span>
                    </div>
                    <a href="blog.php?id=photography" class="btn-explore">
                        Read Guide
                        <span>→</span>
                    </a>
                </div>
            </div>
        </div>
    </div>
</div>

<?php include 'includes/footer.php'; ?>
