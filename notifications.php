<?php 
require_once 'data/blogs.php';
require_once 'data/destinations.php';

$currentPage = 'notifications';
$pageTitle = 'Notifications';
$additionalCSS = ['css/notifications.css'];
include 'includes/header.php'; 

// Get some blogs and destinations for notifications
$allBlogs = getAllBlogs();
$allDestinations = getAllDestinations();
$blogArray = array_values($allBlogs);
$destArray = array_values($allDestinations);
?>

<div class="notifications-container">
    <div class="notifications-header">
        <h1>Notifications</h1>
        <button class="btn btn-secondary">Mark all as read</button>
    </div>
    
    <div class="notifications-list">
        <a href="blog-detail.php?slug=<?php echo $blogArray[0]['slug']; ?>" class="notification-item unread">
            <div class="notification-icon answer"><i class="fas fa-check-circle"></i></div>
            <div class="notification-content">
                <p><strong>Admin answered your question</strong></p>
                <p class="notification-text">Your question about "Best time to visit Pub Street?" has been answered.</p>
                <span class="notification-time">2 hours ago</span>
            </div>
            <span class="unread-dot"></span>
        </a>
        
        <a href="blog-detail.php?slug=<?php echo $blogArray[0]['slug']; ?>" class="notification-item unread">
            <div class="notification-icon new-post"><i class="fas fa-edit"></i></div>
            <div class="notification-content">
                <p><strong>New blog post from Siem Reap Travel Guide</strong></p>
                <p class="notification-text">Check out: <?php echo $blogArray[0]['title']; ?></p>
                <span class="notification-time">5 hours ago</span>
            </div>
            <span class="unread-dot"></span>
        </a>
        
        <a href="blog-detail.php?slug=<?php echo $blogArray[1]['slug']; ?>" class="notification-item unread">
            <div class="notification-icon answer"><i class="fas fa-check-circle"></i></div>
            <div class="notification-content">
                <p><strong>Admin answered your question</strong></p>
                <p class="notification-text">Your question about "Photography tips for Angkor Wat" has been answered.</p>
                <span class="notification-time">1 day ago</span>
            </div>
            <span class="unread-dot"></span>
        </a>
        
        <a href="blog-detail.php?slug=<?php echo $blogArray[2]['slug']; ?>" class="notification-item">
            <div class="notification-icon new-post"><i class="fas fa-edit"></i></div>
            <div class="notification-content">
                <p><strong>New blog post published</strong></p>
                <p class="notification-text"><?php echo $blogArray[2]['title']; ?> is now available</p>
                <span class="notification-time">2 days ago</span>
            </div>
        </a>
        
        <a href="destination-detail.php?slug=<?php echo $destArray[0]['slug']; ?>" class="notification-item">
            <div class="notification-icon new-post"><i class="fas fa-map"></i></div>
            <div class="notification-content">
                <p><strong>New destination added</strong></p>
                <p class="notification-text">Explore <?php echo $destArray[0]['name']; ?> destination guide</p>
                <span class="notification-time">3 days ago</span>
            </div>
        </a>
        
        <a href="destination-detail.php?slug=<?php echo $destArray[4]['slug']; ?>" class="notification-item">
            <div class="notification-icon qa"><i class="far fa-comment"></i></div>
            <div class="notification-content">
                <p><strong>Your question was featured</strong></p>
                <p class="notification-text">Admin created a guide about <?php echo $destArray[4]['name']; ?> based on your question</p>
                <span class="notification-time">1 week ago</span>
            </div>
        </a>
    </div>
</div>

<?php include 'includes/footer.php'; ?>
