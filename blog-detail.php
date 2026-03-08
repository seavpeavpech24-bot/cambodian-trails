<?php 
require_once 'data/blogs.php';

// Get slug from URL
$slug = isset($_GET['slug']) ? $_GET['slug'] : '';
$blog = getBlog($slug);

// If blog not found, redirect to blog page
if (!$blog) {
    header('Location: blog.php');
    exit;
}

$currentPage = 'blog';
$pageTitle = $blog['title'];
$additionalCSS = ['css/blog.css'];
include 'includes/header.php'; 
?>

<div class="blog-container">
    <div class="blog-header-image">
        <img src="<?php echo $blog['image']; ?>" alt="<?php echo $blog['title']; ?>">
    </div>

    <div class="blog-content-wrapper">
        <div class="blog-meta">
            <span class="category"><?php echo ucfirst($blog['category']); ?></span>
            <span class="date"><?php echo date('F j, Y', strtotime($blog['date'])); ?></span>
        </div>

        <h1 class="blog-title"><?php echo $blog['title']; ?></h1>

        <div class="author-info">
            <img src="https://i.pinimg.com/736x/e8/7a/b0/e87ab0a15b2b65662020e614f7e05ef1.jpg" alt="<?php echo $blog['author']; ?>" class="avatar">
            <div>
                <strong><?php echo $blog['author']; ?></strong>
                <p><?php echo $blog['read_time']; ?></p>
            </div>
        </div>

        <div class="blog-article">
            <p class="lead"><?php echo $blog['content']['intro']; ?></p>

            <?php foreach($blog['content']['sections'] as $section): ?>
            <h2><?php echo $section['title']; ?></h2>
            <p><?php echo $section['content']; ?></p>
            <?php endforeach; ?>

            <?php if(isset($blog['tips']) && count($blog['tips']) > 0): ?>
            <h2>Quick Tips</h2>
            <ul>
                <?php foreach($blog['tips'] as $tip): ?>
                <li><?php echo $tip; ?></li>
                <?php endforeach; ?>
            </ul>
            <?php endif; ?>
        </div>

        <div class="blog-footer">
            <div class="blog-actions">
                <button class="action-btn love-btn" data-loved="false">
                    <span class="icon"><i class="far fa-heart"></i></span>
                    <span class="count">234</span>
                </button>
                <button class="action-btn save-btn" data-saved="false">
                    <span class="icon"><i class="far fa-bookmark"></i></span>
                    <span>Save</span>
                </button>
                <button class="action-btn share-btn">
                    <span class="icon"><i class="fas fa-share-alt"></i></span>
                    <span>Share</span>
                </button>
            </div>
        </div>
    </div>

    <div class="ask-section">
        <h2>Have Questions About This Post?</h2>
        <p>Ask us anything about <?php echo strtolower($blog['title']); ?>!</p>
        <textarea id="blogQuestion" placeholder="Your question..." rows="4"></textarea>
        <button class="btn btn-primary" id="submitBlogQuestion">Submit Question</button>
    </div>

    <!-- Related Posts -->
    <div class="related-posts-section">
        <h2>Related Posts</h2>
        <div class="related-posts-grid">
            <?php 
            $allBlogs = getAllBlogs();
            $relatedCount = 0;
            foreach($allBlogs as $relatedBlog): 
                if($relatedBlog['slug'] !== $blog['slug'] && $relatedCount < 3):
                    $relatedCount++;
            ?>
            <a href="blog-detail.php?slug=<?php echo $relatedBlog['slug']; ?>" class="related-post-card">
                <img src="<?php echo $relatedBlog['image']; ?>" alt="<?php echo $relatedBlog['title']; ?>">
                <div class="related-post-content">
                    <span class="related-category"><?php echo ucfirst($relatedBlog['category']); ?></span>
                    <h3><?php echo $relatedBlog['title']; ?></h3>
                    <p><?php echo substr($relatedBlog['excerpt'], 0, 100); ?>...</p>
                    <span class="read-time"><?php echo $relatedBlog['read_time']; ?></span>
                </div>
            </a>
            <?php 
                endif;
            endforeach; 
            ?>
        </div>
    </div>
</div>

<style>
.related-posts-section {
    margin-top: 40px;
}

.related-posts-section h2 {
    font-size: 28px;
    font-weight: 700;
    margin-bottom: 30px;
    color: var(--text-primary);
}

.related-posts-grid {
    display: grid;
    grid-template-columns: repeat(auto-fit, minmax(280px, 1fr));
    gap: 24px;
}

.related-post-card {
    background: var(--surface);
    border: 2px solid var(--border-color);
    border-radius: 16px;
    overflow: hidden;
    text-decoration: none;
    color: inherit;
    transition: all 0.3s;
    display: flex;
    flex-direction: column;
}

.related-post-card:hover {
    transform: translateY(-5px);
    box-shadow: 0 10px 30px rgba(0, 0, 0, 0.15);
    border-color: var(--primary-color);
}

.related-post-card img {
    width: 100%;
    height: 180px;
    object-fit: cover;
}

.related-post-content {
    padding: 20px;
}

.related-category {
    display: inline-block;
    padding: 4px 12px;
    background: var(--primary-color);
    color: white;
    border-radius: 12px;
    font-size: 11px;
    font-weight: 600;
    text-transform: uppercase;
    margin-bottom: 12px;
}

.related-post-card h3 {
    font-size: 16px;
    font-weight: 700;
    margin-bottom: 8px;
    color: var(--text-primary);
    line-height: 1.4;
}

.related-post-card p {
    font-size: 14px;
    color: var(--text-secondary);
    margin-bottom: 12px;
    line-height: 1.5;
}

.read-time {
    font-size: 12px;
    color: var(--text-secondary);
}

.action-btn.share-btn {
    background: var(--background);
    border: 2px solid var(--border-color);
}

.action-btn.share-btn:hover {
    border-color: var(--accent-color);
    background: var(--accent-color);
    color: white;
}

@media (max-width: 768px) {
    .related-posts-grid {
        grid-template-columns: 1fr;
    }
}
</style>

<script>
// Love button functionality
document.querySelector('.love-btn').addEventListener('click', function() {
    const isLoved = this.getAttribute('data-loved') === 'true';
    this.setAttribute('data-loved', !isLoved);
    const countSpan = this.querySelector('.count');
    const currentCount = parseInt(countSpan.textContent);
    countSpan.textContent = isLoved ? currentCount - 1 : currentCount + 1;
});

// Save button functionality
document.querySelector('.save-btn').addEventListener('click', function() {
    const isSaved = this.getAttribute('data-saved') === 'true';
    this.setAttribute('data-saved', !isSaved);
    this.querySelector('span:last-child').textContent = isSaved ? 'Save' : 'Saved';
});

// Share button functionality
document.querySelector('.share-btn').addEventListener('click', function() {
    if (navigator.share) {
        navigator.share({
            title: '<?php echo addslashes($blog['title']); ?>',
            text: '<?php echo addslashes($blog['excerpt']); ?>',
            url: window.location.href
        });
    } else {
        // Fallback: copy to clipboard
        navigator.clipboard.writeText(window.location.href);
        alert('Link copied to clipboard!');
    }
});

// Submit question
document.getElementById('submitBlogQuestion').addEventListener('click', function() {
    const question = document.getElementById('blogQuestion').value;
    if (question.trim()) {
        alert('Thank you for your question! We\'ll get back to you soon.');
        document.getElementById('blogQuestion').value = '';
    } else {
        alert('Please enter a question.');
    }
});
</script>

<?php include 'includes/footer.php'; ?>
