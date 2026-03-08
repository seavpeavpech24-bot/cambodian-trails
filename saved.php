<?php 
require_once 'data/blogs.php';
require_once 'data/destinations.php';

$currentPage = 'saved';
$pageTitle = 'Saved Posts';
$additionalCSS = ['css/saved.css'];
include 'includes/header.php'; 

// Get all blogs and destinations
$allBlogs = getAllBlogs();
$allDestinations = getAllDestinations();

// Combine and limit to show some saved items
$savedItems = [];

// Add first 2 blogs
$blogCount = 0;
foreach($allBlogs as $blog) {
    if($blogCount < 2) {
        $savedItems[] = [
            'type' => 'blog',
            'slug' => $blog['slug'],
            'title' => $blog['title'],
            'image' => $blog['image'],
            'link' => 'blog-detail.php?slug=' . $blog['slug']
        ];
        $blogCount++;
    }
}

// Add first 4 destinations
$destCount = 0;
foreach($allDestinations as $destination) {
    if($destCount < 4) {
        $savedItems[] = [
            'type' => 'destination',
            'slug' => $destination['slug'],
            'title' => $destination['name'],
            'image' => $destination['image'],
            'link' => 'destination-detail.php?slug=' . $destination['slug']
        ];
        $destCount++;
    }
}
?>

<div class="saved-container">
    <h1>Saved Posts</h1>
    
    <div class="saved-grid">
        <?php foreach($savedItems as $item): ?>
        <a href="<?php echo $item['link']; ?>" class="saved-item">
            <img src="<?php echo $item['image']; ?>" alt="<?php echo $item['title']; ?>">
            <div class="saved-overlay">
                <h3><?php echo $item['title']; ?></h3>
                <p><i class="fas fa-map-marker-alt"></i> Siem Reap</p>
            </div>
        </a>
        <?php endforeach; ?>
    </div>
</div>

<?php include 'includes/footer.php'; ?>
