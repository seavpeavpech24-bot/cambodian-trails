<?php 
require_once 'data/blogs.php';
require_once 'data/destinations.php';

$currentPage = 'search';
$pageTitle = 'Search';
$additionalCSS = ['css/search.css'];
$additionalJS = ['js/search.js'];
include 'includes/header.php'; 

// Get all blogs and destinations
$allBlogs = getAllBlogs();
$allDestinations = getAllDestinations();
?>

<div class="search-container">
    <div class="search-header">
        <h1>Search Siem Reap</h1>
        <div class="search-box">
            <span class="search-icon"><i class="fas fa-search"></i></span>
            <input type="text" id="searchInput" placeholder="Search blogs and destinations in Siem Reap...">
        </div>
        
        <div class="filter-tabs">
            <button class="filter-btn active" data-filter="all">
                <i class="fas fa-star"></i>
                <span>All</span>
            </button>
            <button class="filter-btn" data-filter="blog">
                <i class="fas fa-edit"></i>
                <span>Blogs</span>
            </button>
            <button class="filter-btn" data-filter="destination">
                <i class="fas fa-map"></i>
                <span>Destinations</span>
            </button>
        </div>
    </div>
    
    <div class="search-results">
        <?php 
        // Display blogs
        foreach($allBlogs as $blog): 
        ?>
        <a href="blog-detail.php?slug=<?php echo $blog['slug']; ?>" class="result-card" data-type="blog">
            <img src="<?php echo $blog['image']; ?>" alt="<?php echo $blog['title']; ?>">
            <div class="result-info">
                <span class="result-type blog">Blog</span>
                <h3><?php echo $blog['title']; ?></h3>
                <p><?php echo substr($blog['excerpt'], 0, 100); ?>...</p>
                <div class="result-meta">
                    <span><i class="far fa-calendar"></i> <?php echo date('M j, Y', strtotime($blog['date'])); ?></span>
                    <span><?php echo $blog['read_time']; ?></span>
                </div>
            </div>
        </a>
        <?php endforeach; ?>
        
        <?php 
        // Display destinations
        foreach($allDestinations as $destination): 
        ?>
        <a href="destination-detail.php?slug=<?php echo $destination['slug']; ?>" class="result-card" data-type="destination">
            <img src="<?php echo $destination['image']; ?>" alt="<?php echo $destination['name']; ?>">
            <div class="result-info">
                <span class="result-type destination">Destination</span>
                <h3><?php echo $destination['name']; ?></h3>
                <p><?php echo $destination['short_description']; ?></p>
                <div class="result-meta">
                    <span><i class="fas fa-star"></i> <?php echo $destination['rating']; ?></span>
                    <span><i class="fas fa-map-marker-alt"></i> <?php echo $destination['location']; ?></span>
                </div>
            </div>
        </a>
        <?php endforeach; ?>
    </div>
</div>

<?php include 'includes/footer.php'; ?>
