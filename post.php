<?php 
$currentPage = 'home';
$pageTitle = 'Post Details';
include 'includes/header.php'; 

// Get post ID from URL
$postId = isset($_GET['id']) ? intval($_GET['id']) : 1;
?>

<div class="post-detail-container">
    <article class="post-detail">
        <div class="post-header">
            <img src="https://via.placeholder.com/40" alt="Admin" class="avatar">
            <div class="post-info">
                <h3 class="username">Cambodia Travel Guide</h3>
                <p class="post-time">2 hours ago</p>
            </div>
        </div>
        
        <div class="post-image">
            <img src="https://images.unsplash.com/photo-1514933651103-005eec06c04b?w=1200" alt="Pub Street">
        </div>
        
        <div class="post-actions">
            <button class="action-btn love-btn" data-loved="false">
                <span class="icon"><i class="far fa-heart"></i></span>
                <span class="count">234</span>
            </button>
            <button class="action-btn comment-btn">
                <span class="icon"><i class="far fa-comment"></i></span>
                <span>Comment</span>
            </button>
            <button class="action-btn save-btn" data-saved="false">
                <span class="icon"><i class="far fa-bookmark"></i></span>
            </button>
        </div>
        
        <div class="post-content">
            <h1>Pub Street: Siem Reap's Nightlife Hub</h1>
            <p>Discover the vibrant heart of Siem Reap's nightlife! 🎉 Pub Street is where locals and travelers come together for food, drinks, and unforgettable experiences. From $1 beers to gourmet dining, this pedestrian street has it all.</p>
            
            <p>Pub Street is the epicenter of Siem Reap's social scene. Every evening, this pedestrian-only street transforms into a bustling hub of activity with colorful lights, live music, and the aroma of street food filling the air. Whether you're looking for a quiet dinner or a night of partying, Pub Street delivers.</p>
            
            <h2>What to Expect</h2>
            <ul>
                <li><strong>Street Food Galore:</strong> Try everything from traditional Khmer BBQ to fried insects (if you're brave!). Fresh fruit shakes and local snacks are everywhere.</li>
                <li><strong>Bar Hopping:</strong> Famous for $1 draft beers and creative cocktails. Many bars offer happy hour deals from 5-8 PM.</li>
                <li><strong>Live Entertainment:</strong> Enjoy live bands, DJs, and even traditional Apsara dance performances at various venues.</li>
                <li><strong>Night Market:</strong> Adjacent to Pub Street, browse souvenirs, clothing, and handicrafts at the bustling night market.</li>
            </ul>
            
            <h2>Best Time to Visit</h2>
            <p>Pub Street comes alive around 6 PM and stays busy until 2 AM. Arrive early for dinner and a good seat at popular restaurants. The atmosphere peaks between 9 PM and midnight when the street is packed with energy.</p>
            
            <h2>Getting There</h2>
            <p>Located in the heart of Siem Reap city center, Pub Street is within walking distance of most hotels. Tuk-tuks are readily available for $1-3 from anywhere in town.</p>
        </div>
        
        <div class="post-tags">
            <span class="tag">#PubStreet</span>
            <span class="tag">#SiemReap</span>
            <span class="tag">#Nightlife</span>
            <span class="tag">#Cambodia</span>
        </div>
        
        <div class="comments-section">
            <h3>Comments</h3>
            <div class="comment">
                <img src="https://via.placeholder.com/40" alt="User" class="avatar">
                <div class="comment-content">
                    <strong>Travel Enthusiast</strong>
                    <p>Pub Street is amazing! The energy is incredible and the food is so good. Don't miss the $1 beers!</p>
                    <span class="comment-time">1 hour ago</span>
                </div>
            </div>
            
            <div class="comment">
                <img src="https://via.placeholder.com/40" alt="User" class="avatar">
                <div class="comment-content">
                    <strong>Foodie Explorer</strong>
                    <p>Best street food in Siem Reap! Try the BBQ skewers and fresh fruit shakes 🍹</p>
                    <span class="comment-time">30 minutes ago</span>
                </div>
            </div>
            
            <div class="comment-form">
                <textarea placeholder="Write a comment..."></textarea>
                <button class="btn btn-primary">Post Comment</button>
            </div>
        </div>
    </article>
    
    <aside class="related-posts">
        <h3>Related Posts</h3>
        <a href="post.php?id=2" class="related-post-card">
            <img src="https://images.unsplash.com/photo-1518709268805-4e9042af9f23?w=300" alt="Apsara">
            <div>
                <h4>Apsara Dance Shows</h4>
                <p>Traditional performances...</p>
            </div>
        </a>
        <a href="post.php?id=3" class="related-post-card">
            <img src="https://images.unsplash.com/photo-1563640214-4b8cf4f6c6e3?w=300" alt="Angkor">
            <div>
                <h4>Angkor Wat Sunrise</h4>
                <p>Best viewing spots...</p>
            </div>
        </a>
    </aside>
</div>

<style>
.post-detail-container {
    max-width: 1200px;
    margin: 0 auto;
    display: grid;
    grid-template-columns: 1fr 300px;
    gap: 30px;
    padding: 20px;
}

.post-detail {
    background: var(--card-bg);
    border-radius: 16px;
    padding: 30px;
    box-shadow: var(--shadow-md);
}

.post-header {
    display: flex;
    align-items: center;
    gap: 12px;
    margin-bottom: 20px;
}

.avatar {
    width: 40px;
    height: 40px;
    border-radius: 50%;
}

.username {
    font-weight: 600;
    margin: 0;
}

.post-time {
    font-size: 14px;
    color: var(--text-secondary);
    margin: 0;
}

.post-image {
    margin-bottom: 20px;
    border-radius: 12px;
    overflow: hidden;
}

.post-image img {
    width: 100%;
    height: auto;
}

.post-actions {
    display: flex;
    gap: 20px;
    padding: 20px 0;
    border-bottom: 1px solid var(--border-color);
    margin-bottom: 20px;
}

.action-btn {
    display: flex;
    align-items: center;
    gap: 8px;
    background: none;
    border: none;
    cursor: pointer;
    color: var(--text-primary);
    font-size: 16px;
    transition: all 0.3s;
}

.action-btn:hover {
    color: var(--primary-color);
}

.post-content h1 {
    font-size: 32px;
    margin-bottom: 20px;
}

.post-content h2 {
    font-size: 24px;
    margin: 30px 0 15px;
}

.post-content p {
    line-height: 1.8;
    margin-bottom: 15px;
    color: var(--text-primary);
}

.post-content ul {
    margin: 15px 0;
    padding-left: 25px;
}

.post-content li {
    margin-bottom: 10px;
    line-height: 1.6;
}

.post-tags {
    display: flex;
    gap: 10px;
    flex-wrap: wrap;
    margin: 30px 0;
}

.tag {
    padding: 6px 12px;
    background: var(--bg-primary);
    border-radius: 20px;
    font-size: 14px;
    color: var(--primary-color);
}

.comments-section {
    margin-top: 40px;
}

.comments-section h3 {
    margin-bottom: 20px;
}

.comment {
    display: flex;
    gap: 12px;
    margin-bottom: 20px;
}

.comment-content {
    flex: 1;
    background: var(--bg-primary);
    padding: 15px;
    border-radius: 12px;
}

.comment-content strong {
    display: block;
    margin-bottom: 5px;
}

.comment-time {
    font-size: 12px;
    color: var(--text-secondary);
}

.comment-form {
    margin-top: 30px;
}

.comment-form textarea {
    width: 100%;
    padding: 15px;
    border: 1px solid var(--border-color);
    border-radius: 12px;
    background: var(--bg-primary);
    color: var(--text-primary);
    resize: vertical;
    min-height: 100px;
    margin-bottom: 10px;
}

.related-posts h3 {
    margin-bottom: 20px;
}

.related-post-card {
    display: flex;
    gap: 12px;
    padding: 12px;
    background: var(--card-bg);
    border-radius: 12px;
    margin-bottom: 15px;
    text-decoration: none;
    color: inherit;
    transition: all 0.3s;
}

.related-post-card:hover {
    transform: translateY(-2px);
    box-shadow: var(--shadow-md);
}

.related-post-card img {
    width: 80px;
    height: 80px;
    object-fit: cover;
    border-radius: 8px;
}

.related-post-card h4 {
    font-size: 14px;
    margin-bottom: 5px;
}

.related-post-card p {
    font-size: 12px;
    color: var(--text-secondary);
}

@media (max-width: 768px) {
    .post-detail-container {
        grid-template-columns: 1fr;
    }
}
</style>

<?php include 'includes/footer.php'; ?>
