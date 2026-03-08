<?php 
$currentPage = 'destinations';
$pageTitle = 'Destinations';
$additionalCSS = ['css/destinations.css'];
$additionalJS = ['js/destinations.js'];
include 'includes/header.php'; 
?>

<div class="destinations-container">
    <div class="page-header">
        <div>
            <h1>Discover Siem Reap</h1>
            <p class="page-subtitle">Explore the most visited attractions in Siem Reap</p>
        </div>
        <div class="header-actions">
            <button class="btn btn-outline">
                <i class="fas fa-map"></i>
                View on Map
            </button>
        </div>
    </div>

    <div class="filter-section">
        <div class="filter-chips">
            <button class="filter-chip active" data-filter="all">
                <i class="fas fa-star"></i>
                <span>All</span>
            </button>
            <button class="filter-chip" data-filter="temples">
                <i class="fas fa-gopuram"></i>
                <span>Temples</span>
            </button>
            <button class="filter-chip" data-filter="culture">
                <i class="fas fa-theater-masks"></i>
                <span>Culture</span>
            </button>
            <button class="filter-chip" data-filter="nature">
                <i class="fas fa-leaf"></i>
                <span>Nature</span>
            </button>
            <button class="filter-chip" data-filter="adventure">
                <i class="fas fa-mountain"></i>
                <span>Adventure</span>
            </button>
            <button class="filter-chip" data-filter="water">
                <i class="fas fa-water"></i>
                <span>Water Sports</span>
            </button>
        </div>
    </div>

    <div class="destinations-grid">
        <!-- Pub Street -->
        <div class="tourism-card" data-category="cities">
            <div class="tourism-card-image">
                <img src="https://i.pinimg.com/1200x/38/e7/6f/38e76f3e31609410d50d88dac39b4451.jpg" alt="Pub Street">
                <div class="tourism-card-badge"><i class="fas fa-star"></i> 4.7</div>
            </div>
            <div class="tourism-card-content">
                <h3 class="tourism-card-title">Pub Street</h3>
                <div class="tourism-card-location">
                    <i class="fas fa-map-marker-alt"></i>
                    <span>Siem Reap City Center</span>
                </div>
                <p class="tourism-card-description">
                    The heart of Siem Reap's nightlife with restaurants, bars, street food, and vibrant atmosphere.
                </p>
                <div class="tourism-card-footer">
                    <div class="rating">
                        <span class="rating-stars"><i class="fas fa-star"></i><i class="fas fa-star"></i><i class="fas fa-star"></i><i class="fas fa-star"></i><i class="fas fa-star"></i></span>
                        <span class="rating-count">(3.4K)</span>
                    </div>
                    <a href="destination-detail.php?slug=pub-street" class="btn-explore">
                        Explore
                        <span>→</span>
                    </a>
                </div>
            </div>
        </div>

        <!-- Angkor Village Apsara Theatre -->
        <div class="tourism-card" data-category="culture">
            <div class="tourism-card-image">
                <img src="https://i.pinimg.com/1200x/d0/e9/69/d0e969aea3edcd4ccb235c6ce6ae0a0b.jpg" alt="Apsara Theatre">
                <div class="tourism-card-badge"><i class="fas fa-star"></i> 4.8</div>
            </div>
            <div class="tourism-card-content">
                <h3 class="tourism-card-title">Angkor Village Apsara Theatre</h3>
                <div class="tourism-card-location">
                    <i class="fas fa-map-marker-alt"></i>
                    <span>Siem Reap</span>
                </div>
                <p class="tourism-card-description">
                    Traditional Khmer dance performances with authentic costumes and live music in a beautiful setting.
                </p>
                <div class="tourism-card-footer">
                    <div class="rating">
                        <span class="rating-stars"><i class="fas fa-star"></i><i class="fas fa-star"></i><i class="fas fa-star"></i><i class="fas fa-star"></i><i class="fas fa-star"></i></span>
                        <span class="rating-count">(1.6K)</span>
                    </div>
                    <a href="destination-detail.php?slug=angkor-village-apsara-theatre" class="btn-explore">
                        Explore
                        <span>→</span>
                    </a>
                </div>
            </div>
        </div>

        <!-- Phnom Bakheng -->
        <div class="tourism-card" data-category="temples">
            <div class="tourism-card-image">
                <img src="https://i.pinimg.com/736x/5c/89/13/5c89133f587383abecbb39eff48eb4c8.jpg" alt="Phnom Bakheng">
                <div class="tourism-card-badge"><i class="fas fa-star"></i> 4.5</div>
            </div>
            <div class="tourism-card-content">
                <h3 class="tourism-card-title">Phnom Bakheng</h3>
                <div class="tourism-card-location">
                    <i class="fas fa-map-marker-alt"></i>
                    <span>Angkor Archaeological Park</span>
                </div>
                <p class="tourism-card-description">
                    Ancient hilltop temple famous for spectacular sunset views over Angkor Wat and the surrounding jungle.
                </p>
                <div class="tourism-card-footer">
                    <div class="rating">
                        <span class="rating-stars"><i class="fas fa-star"></i><i class="fas fa-star"></i><i class="fas fa-star"></i><i class="fas fa-star"></i></span>
                        <span class="rating-count">(2.1K)</span>
                    </div>
                    <a href="destination-detail.php?slug=phnom-bakheng" class="btn-explore">
                        Explore
                        <span>→</span>
                    </a>
                </div>
            </div>
        </div>

        <!-- Phnom Kulen National Park -->
        <div class="tourism-card" data-category="nature">
            <div class="tourism-card-image">
                <img src="https://i.pinimg.com/736x/38/97/1b/38971bc352da719abd689916a302c40f.jpg" alt="Phnom Kulen">
                <div class="tourism-card-badge"><i class="fas fa-star"></i> 4.7</div>
            </div>
            <div class="tourism-card-content">
                <h3 class="tourism-card-title">Phnom Kulen National Park</h3>
                <div class="tourism-card-location">
                    <i class="fas fa-map-marker-alt"></i>
                    <span>50km North of Siem Reap</span>
                </div>
                <p class="tourism-card-description">
                    Sacred mountain with stunning waterfalls, ancient carvings, and the birthplace of the Khmer Empire.
                </p>
                <div class="tourism-card-footer">
                    <div class="rating">
                        <span class="rating-stars"><i class="fas fa-star"></i><i class="fas fa-star"></i><i class="fas fa-star"></i><i class="fas fa-star"></i><i class="fas fa-star"></i></span>
                        <span class="rating-count">(1.9K)</span>
                    </div>
                    <a href="destination-detail.php?slug=phnom-kulen-national-park" class="btn-explore">
                        Explore
                        <span>→</span>
                    </a>
                </div>
            </div>
        </div>

        <!-- Tonle Sap Lake -->
        <div class="tourism-card" data-category="nature">
            <div class="tourism-card-image">
                <img src="https://i.pinimg.com/1200x/83/6f/35/836f352d68e26c625eb8cc1b453f8e3d.jpg" alt="Tonle Sap">
                <div class="tourism-card-badge"><i class="fas fa-star"></i> 4.4</div>
            </div>
            <div class="tourism-card-content">
                <h3 class="tourism-card-title">Tonle Sap Lake</h3>
                <div class="tourism-card-location">
                    <i class="fas fa-map-marker-alt"></i>
                    <span>15km South of Siem Reap</span>
                </div>
                <p class="tourism-card-description">
                    Southeast Asia's largest freshwater lake with floating villages and unique ecosystem.
                </p>
                <div class="tourism-card-footer">
                    <div class="rating">
                        <span class="rating-stars"><i class="fas fa-star"></i><i class="fas fa-star"></i><i class="fas fa-star"></i><i class="fas fa-star"></i></span>
                        <span class="rating-count">(2.3K)</span>
                    </div>
                    <a href="destination-detail.php?slug=tonle-sap-lake" class="btn-explore">
                        Explore
                        <span>→</span>
                    </a>
                </div>
            </div>
        </div>

        <!-- Angkor Wildlife & Aquarium -->
        <div class="tourism-card" data-category="nature">
            <div class="tourism-card-image">
                <img src="https://i.pinimg.com/1200x/ee/b2/e6/eeb2e630b14a2441904a4a09a47496ef.jpg" alt="Wildlife Aquarium">
                <div class="tourism-card-badge"><i class="fas fa-star"></i> 4.3</div>
            </div>
            <div class="tourism-card-content">
                <h3 class="tourism-card-title">Angkor Wildlife & Aquarium</h3>
                <div class="tourism-card-location">
                    <i class="fas fa-map-marker-alt"></i>
                    <span>Siem Reap</span>
                </div>
                <p class="tourism-card-description">
                    Conservation center showcasing Cambodia's wildlife and freshwater fish species.
                </p>
                <div class="tourism-card-footer">
                    <div class="rating">
                        <span class="rating-stars"><i class="fas fa-star"></i><i class="fas fa-star"></i><i class="fas fa-star"></i><i class="fas fa-star"></i></span>
                        <span class="rating-count">(876)</span>
                    </div>
                    <a href="destination-detail.php?slug=angkor-wildlife-aquarium" class="btn-explore">
                        Explore
                        <span>→</span>
                    </a>
                </div>
            </div>
        </div>

        <!-- Angkor Eye Ferris Wheel -->
        <div class="tourism-card" data-category="cities">
            <div class="tourism-card-image">
                <img src="https://i.pinimg.com/736x/5c/ce/99/5cce995c6a4d1ed11d1d4b9758d72cfb.jpg" alt="Angkor Eye">
                <div class="tourism-card-badge"><i class="fas fa-star"></i> 4.2</div>
            </div>
            <div class="tourism-card-content">
                <h3 class="tourism-card-title">Angkor Eye Ferris Wheel</h3>
                <div class="tourism-card-location">
                    <i class="fas fa-map-marker-alt"></i>
                    <span>Siem Reap</span>
                </div>
                <p class="tourism-card-description">
                    Giant observation wheel offering panoramic views of Siem Reap city and surrounding countryside.
                </p>
                <div class="tourism-card-footer">
                    <div class="rating">
                        <span class="rating-stars"><i class="fas fa-star"></i><i class="fas fa-star"></i><i class="fas fa-star"></i><i class="fas fa-star"></i></span>
                        <span class="rating-count">(654)</span>
                    </div>
                    <a href="destination-detail.php?slug=angkor-eye-ferris-wheel" class="btn-explore">
                        Explore
                        <span>→</span>
                    </a>
                </div>
            </div>
        </div>

        <!-- Banteay Srei Butterfly Centre -->
        <div class="tourism-card" data-category="nature">
            <div class="tourism-card-image">
                <img src="https://i.pinimg.com/1200x/2b/c1/6e/2bc16e1b37dca2944c2da4cbb827a7a0.jpg" alt="Butterfly Centre">
                <div class="tourism-card-badge"><i class="fas fa-star"></i> 4.6</div>
            </div>
            <div class="tourism-card-content">
                <h3 class="tourism-card-title">Banteay Srei Butterfly Centre</h3>
                <div class="tourism-card-location">
                    <i class="fas fa-map-marker-alt"></i>
                    <span>25km North of Siem Reap</span>
                </div>
                <p class="tourism-card-description">
                    Cambodia's largest butterfly sanctuary with hundreds of species in a natural habitat setting.
                </p>
                <div class="tourism-card-footer">
                    <div class="rating">
                        <span class="rating-stars"><i class="fas fa-star"></i><i class="fas fa-star"></i><i class="fas fa-star"></i><i class="fas fa-star"></i><i class="fas fa-star"></i></span>
                        <span class="rating-count">(1.2K)</span>
                    </div>
                    <a href="destination-detail.php?slug=banteay-srei-butterfly-centre" class="btn-explore">
                        Explore
                        <span>→</span>
                    </a>
                </div>
            </div>
        </div>

        <!-- Angkor Speedway -->
        <div class="tourism-card" data-category="adventure">
            <div class="tourism-card-image">
                <img src="https://i.pinimg.com/736x/f3/75/fe/f375fe99fcfdbcf1d557d04d9f2a838d.jpg" alt="Go-Kart">
                <div class="tourism-card-badge"><i class="fas fa-star"></i> 4.5</div>
            </div>
            <div class="tourism-card-content">
                <h3 class="tourism-card-title">Angkor Speedway (Go-Kart)</h3>
                <div class="tourism-card-location">
                    <i class="fas fa-map-marker-alt"></i>
                    <span>Siem Reap</span>
                </div>
                <p class="tourism-card-description">
                    Professional go-kart racing track offering high-speed thrills and family-friendly fun.
                </p>
                <div class="tourism-card-footer">
                    <div class="rating">
                        <span class="rating-stars"><i class="fas fa-star"></i><i class="fas fa-star"></i><i class="fas fa-star"></i><i class="fas fa-star"></i></span>
                        <span class="rating-count">(543)</span>
                    </div>
                    <a href="destination-detail.php?slug=angkor-speedway" class="btn-explore">
                        Explore
                        <span>→</span>
                    </a>
                </div>
            </div>
        </div>

        <!-- Wake Park Cambodia -->
        <div class="tourism-card" data-category="water">
            <div class="tourism-card-image">
                <img src="https://i.pinimg.com/1200x/e3/5f/a9/e35fa9f2b207e96c8183a99132f36a0e.jpg" alt="Wake Park">
                <div class="tourism-card-badge"><i class="fas fa-star"></i> 4.7</div>
            </div>
            <div class="tourism-card-content">
                <h3 class="tourism-card-title">Wake Park Cambodia</h3>
                <div class="tourism-card-location">
                    <i class="fas fa-map-marker-alt"></i>
                    <span>Siem Reap</span>
                </div>
                <p class="tourism-card-description">
                    Cable wakeboarding park with obstacles, jumps, and lessons for all skill levels.
                </p>
                <div class="tourism-card-footer">
                    <div class="rating">
                        <span class="rating-stars"><i class="fas fa-star"></i><i class="fas fa-star"></i><i class="fas fa-star"></i><i class="fas fa-star"></i><i class="fas fa-star"></i></span>
                        <span class="rating-count">(432)</span>
                    </div>
                    <a href="destination-detail.php?slug=wake-park-cambodia" class="btn-explore">
                        Explore
                        <span>→</span>
                    </a>
                </div>
            </div>
        </div>
    </div>
</div>

<?php include 'includes/footer.php'; ?>
