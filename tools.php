<?php 
$currentPage = 'tools';
$pageTitle = 'Travel Tools';
$additionalCSS = ['css/tools.css', 'css/tools-hub.css'];
$additionalJS = ['js/tools-hub.js'];
include 'includes/header.php'; 
?>

<div class="tools-hub-container">
    <div class="page-header">
        <div>
            <h1>Travel Planning Tools</h1>
            <p class="page-subtitle">Plan your perfect Cambodia adventure with our free tools</p>
        </div>
    </div>

    <!-- Available Tools -->
    <section class="tools-section">
        <h2 class="section-title">Planning Tools</h2>
        <div class="tools-grid">
            <a href="budget-calculator.php" class="tool-card-large">
                <div class="tool-icon-large"><i class="fas fa-dollar-sign"></i></div>
                <h3>Budget Calculator</h3>
                <p>Estimate your trip costs based on travel style and duration</p>
                <div class="tool-meta">
                    <span class="tool-badge">Popular</span>
                    <span class="tool-usage">1.2K uses</span>
                </div>
            </a>

            <a href="itinerary-builder.php" class="tool-card-large">
                <div class="tool-icon-large"><i class="far fa-calendar-alt"></i></div>
                <h3>Itinerary Builder</h3>
                <p>Create day-by-day travel plans for your Cambodia trip</p>
                <div class="tool-meta">
                    <span class="tool-badge new">New</span>
                    <span class="tool-usage">856 uses</span>
                </div>
            </a>

            <a href="packing-list.php" class="tool-card-large">
                <div class="tool-icon-large"><i class="fas fa-backpack"></i></div>
                <h3>Packing List</h3>
                <p>Never forget essentials with our customizable packing checklist</p>
                <div class="tool-meta">
                    <span class="tool-usage">643 uses</span>
                </div>
            </a>

            <a href="weather-guide.php" class="tool-card-large">
                <div class="tool-icon-large"><i class="fas fa-cloud-sun"></i></div>
                <h3>Weather Guide</h3>
                <p>Find the best time to visit based on weather patterns</p>
                <div class="tool-meta">
                    <span class="tool-usage">921 uses</span>
                </div>
            </a>

            <a href="currency-converter.php" class="tool-card-large">
                <div class="tool-icon-large"><i class="fas fa-exchange-alt"></i></div>
                <h3>Currency Converter</h3>
                <p>Convert USD to Cambodian Riel and other currencies</p>
                <div class="tool-meta">
                    <span class="tool-usage">1.5K uses</span>
                </div>
            </a>

            <a href="khmer-phrases.php" class="tool-card-large">
                <div class="tool-icon-large"><i class="far fa-comment"></i></div>
                <h3>Khmer Phrases</h3>
                <p>Learn essential Khmer phrases for your trip</p>
                <div class="tool-meta">
                    <span class="tool-usage">789 uses</span>
                </div>
            </a>
        </div>
    </section>

    <!-- My Saved Plans -->
    <section class="saved-plans-section">
        <div class="section-header">
            <h2 class="section-title">My Saved Plans</h2>
            <button class="btn btn-outline btn-sm" id="clearAllBtn">Clear All</button>
        </div>

        <div id="savedPlansContainer">
            <!-- Saved Budget Plans -->
            <div class="saved-category">
                <h3 class="category-title">
                    <span class="category-icon"><i class="fas fa-dollar-sign"></i></span>
                    Budget Plans
                </h3>
                <div id="budgetPlansList" class="saved-items-list">
                    <!-- Dynamically loaded -->
                </div>
            </div>

            <!-- Saved Itineraries -->
            <div class="saved-category">
                <h3 class="category-title">
                    <span class="category-icon">📅</span>
                    Itineraries
                </h3>
                <div id="itinerariesList" class="saved-items-list">
                    <!-- Dynamically loaded -->
                </div>
            </div>

            <!-- Saved Packing Lists -->
            <div class="saved-category">
                <h3 class="category-title">
                    <span class="category-icon">🎒</span>
                    Packing Lists
                </h3>
                <div id="packingListsList" class="saved-items-list">
                    <!-- Dynamically loaded -->
                </div>
            </div>
        </div>

        <!-- Empty State -->
        <div id="emptyState" class="empty-state" style="display: none;">
            <div class="empty-state-icon">📋</div>
            <h3 class="empty-state-title">No Saved Plans Yet</h3>
            <p class="empty-state-description">Start using our tools to create and save your travel plans</p>
            <a href="budget-calculator.php" class="btn btn-primary">Create Budget Plan</a>
        </div>
    </section>

    <!-- Quick Tips -->
    <section class="tips-section">
        <h2 class="section-title">Planning Tips</h2>
        <p class="section-subtitle">Essential steps to plan your perfect Cambodia adventure</p>
        <div class="tips-grid">
            <div class="tip-card-enhanced tip-budget">
                <div class="tip-icon">💡</div>
                <h3>Start with Budget</h3>
                <p>Use the budget calculator first to understand your trip costs and plan accordingly.</p>
                <div class="tip-number">01</div>
            </div>
            <div class="tip-card-enhanced tip-itinerary">
                <div class="tip-icon">📅</div>
                <h3>Build Itinerary</h3>
                <p>Create a day-by-day plan to make the most of your time in Cambodia.</p>
                <div class="tip-number">02</div>
            </div>
            <div class="tip-card-enhanced tip-pack">
                <div class="tip-icon">🎒</div>
                <h3>Pack Smart</h3>
                <p>Use our packing list to ensure you don't forget any essentials for your trip.</p>
                <div class="tip-number">03</div>
            </div>
        </div>
    </section>
</div>

<?php include 'includes/footer.php'; ?>
