<?php 
require_once 'data/blogs.php';

$currentPage = 'blog';
$pageTitle = 'Travel Blog';
$additionalCSS = ['css/destinations.css'];
$additionalJS = ['js/destinations.js'];
include 'includes/header.php'; 

// Get all blogs
$blogs = getAllBlogs();
?>

<div class="destinations-container">
    <div class="page-header">
        <div>
            <h1>Siem Reap Travel Blog</h1>
            <p class="page-subtitle">Stories, tips, and guides from experienced travelers</p>
        </div>
    </div>

    <div class="filter-section">
        <div class="filter-chips">
            <button class="filter-chip active" data-filter="all">
                <i class="fas fa-globe"></i>
                <span>All Posts</span>
            </button>
            <button class="filter-chip" data-filter="nightlife">
                <i class="fas fa-cocktail"></i>
                <span>Nightlife</span>
            </button>
            <button class="filter-chip" data-filter="photography">
                <i class="fas fa-camera"></i>
                <span>Photography</span>
            </button>
            <button class="filter-chip" data-filter="budget">
                <i class="fas fa-dollar-sign"></i>
                <span>Budget Travel</span>
            </button>
            <button class="filter-chip" data-filter="culture">
                <i class="fas fa-theater-masks"></i>
                <span>Culture</span>
            </button>
        </div>
    </div>

    <div class="destinations-grid">
        <?php foreach($blogs as $blog): ?>
        <div class="tourism-card" data-category="<?php echo $blog['category']; ?>">
            <div class="tourism-card-image">
                <img src="<?php echo $blog['image']; ?>" alt="<?php echo $blog['title']; ?>">
                <div class="tourism-card-badge">
                    <i class="fas fa-book-open"></i> <?php echo ucfirst($blog['category']); ?>
                </div>
            </div>
            <div class="tourism-card-content">
                <h3 class="tourism-card-title"><?php echo $blog['title']; ?></h3>
                <div class="tourism-card-location">
                    <i class="far fa-calendar"></i>
                    <span><?php echo date('F j, Y', strtotime($blog['date'])); ?></span>
                </div>
                <p class="tourism-card-description">
                    <?php echo $blog['excerpt']; ?>
                </p>
                <div class="tourism-card-footer">
                    <div class="rating">
                        <span class="rating-count"><?php echo $blog['read_time']; ?></span>
                    </div>
                    <a href="blog-detail.php?slug=<?php echo $blog['slug']; ?>" class="btn-explore">
                        Read More
                        <span>→</span>
                    </a>
                </div>
            </div>
        </div>
        <?php endforeach; ?>
    </div>
</div>

<?php include 'includes/footer.php'; ?>
