<?php 
require_once 'data/guides.php';

// Get slug from URL
$slug = isset($_GET['slug']) ? $_GET['slug'] : '';
$guide = getGuide($slug);

// If guide not found, redirect to travel guides page
if (!$guide) {
    header('Location: travel-guides.php');
    exit;
}

$currentPage = 'travel-guides';
$pageTitle = $guide['title'];
$additionalCSS = ['css/blog.css'];
include 'includes/header.php'; 
?>

<div class="blog-container">
    <div class="blog-header-image">
        <img src="<?php echo $guide['image']; ?>" alt="<?php echo $guide['title']; ?>">
    </div>

    <div class="blog-content-wrapper">
        <div class="blog-meta">
            <span class="category"><?php echo ucfirst($guide['category']); ?></span>
            <span class="date"><?php echo date('F j, Y', strtotime($guide['date'])); ?></span>
        </div>

        <h1 class="blog-title"><?php echo $guide['title']; ?></h1>

        <div class="author-info">
            <img src="https://via.placeholder.com/48" alt="<?php echo $guide['author']; ?>" class="avatar">
            <div>
                <strong><?php echo $guide['author']; ?></strong>
                <p><?php echo $guide['read_time']; ?></p>
            </div>
        </div>

        <div class="blog-article">
            <p class="lead"><?php echo $guide['content']['intro']; ?></p>

            <?php foreach($guide['content']['sections'] as $section): ?>
            <h2><?php echo $section['title']; ?></h2>
            <p><?php echo $section['content']; ?></p>
            <?php endforeach; ?>

            <?php if(isset($guide['tips']) && count($guide['tips']) > 0): ?>
            <h2>Quick Tips</h2>
            <ul>
                <?php foreach($guide['tips'] as $tip): ?>
                <li><?php echo $tip; ?></li>
                <?php endforeach; ?>
            </ul>
            <?php endif; ?>
        </div>

        <div class="blog-footer">
            <div class="blog-actions">
                <button class="action-btn love-btn" data-loved="false">
                    <span class="icon"><i class="far fa-heart"></i></span>
                    <span class="count">567</span>
                </button>
                <button class="action-btn save-btn" data-saved="false">
                    <span class="icon"><i class="far fa-bookmark"></i></span>
                    <span>Save</span>
                </button>
            </div>
        </div>
    </div>

    <div class="ask-section">
        <h2>Have Questions About This Guide?</h2>
        <p>Ask us anything about <?php echo strtolower($guide['title']); ?>!</p>
        <textarea id="guideQuestion" placeholder="Your question..." rows="4"></textarea>
        <button class="btn btn-primary" id="submitGuideQuestion">Submit Question</button>
    </div>
</div>

<?php include 'includes/footer.php'; ?>
