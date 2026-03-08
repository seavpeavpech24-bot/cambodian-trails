<?php 
$currentPage = 'home';
$pageTitle = 'Discover Siem Reap';
include 'includes/header.php'; 
?>

<div class="feed-container">
    <!-- Post 1: Image Post -->
    <article class="post-card" data-post-id="1">
        <div class="post-header">
            <img src="https://i.pinimg.com/736x/e8/7a/b0/e87ab0a15b2b65662020e614f7e05ef1.jpg" alt="Admin" class="avatar">
            <div class="post-info">
                <h3 class="username">Siem Reap Travel Guide</h3>
                <p class="post-time">2 hours ago <span class="post-type">• Post</span></p>
            </div>
        </div>
        <div class="post-image">
            <img src="https://i.pinimg.com/1200x/38/e7/6f/38e76f3e31609410d50d88dac39b4451.jpg" alt="Pub Street">
        </div>
        <div class="post-actions">
            <button class="action-btn love-btn" data-loved="false">
                <span class="icon"><i class="far fa-heart"></i></span>
                <span class="count">567</span>
            </button>
            <button class="action-btn ask-btn">
                <span class="icon"><i class="far fa-comment"></i></span>
                <span>Ask</span>
            </button>
            <button class="action-btn save-btn" data-saved="false">
                <span class="icon"><i class="far fa-bookmark"></i></span>
            </button>
        </div>
        <div class="post-caption">
            <p><strong>Pub Street Nightlife Experience</strong></p>
            <p>Discover the vibrant heart of Siem Reap! 🎉 Pub Street comes alive every evening with $1 beers, amazing street food, and live music. The perfect place to meet fellow travelers and experience local culture!</p>
            <a href="post.php?id=1" class="view-more">View details</a>
        </div>
    </article>

    <!-- Post 2: Blog Preview -->
    <article class="post-card blog-preview" data-post-id="2">
        <div class="post-header">
            <img src="https://i.pinimg.com/736x/e8/7a/b0/e87ab0a15b2b65662020e614f7e05ef1.jpg" alt="Admin" class="avatar">
            <div class="post-info">
                <h3 class="username">Siem Reap Travel Guide</h3>
                <p class="post-time">5 hours ago <span class="post-type">• Blog</span></p>
            </div>
        </div>
        <div class="blog-content">
            <div class="blog-image">
                <img src="https://i.pinimg.com/736x/c8/e7/15/c8e7159cdda0f9923127dcd85675be08.jpg" alt="Angkor Wat">
                <span class="category-badge">Travel Guide</span>
            </div>
            <div class="blog-text">
                <h2>Ultimate Guide to Angkor Wat Sunrise</h2>
                <p>Everything you need to know about visiting Angkor Wat at sunrise. From the best viewing spots to photography tips, temple passes, and avoiding crowds...</p>
                <a href="guide-detail.php?slug=angkor-temples-guide" class="read-more-btn">Read More →</a>
            </div>
        </div>
        <div class="post-actions">
            <button class="action-btn love-btn" data-loved="false">
                <span class="icon"><i class="far fa-heart"></i></span>
                <span class="count">1.2K</span>
            </button>
            <button class="action-btn ask-btn">
                <span class="icon"><i class="far fa-comment"></i></span>
                <span>Ask</span>
            </button>
            <button class="action-btn save-btn" data-saved="false">
                <span class="icon"><i class="far fa-bookmark"></i></span>
            </button>
        </div>
    </article>

    <!-- Post 3: Destination Preview -->
    <article class="post-card destination-preview" data-post-id="3">
        <div class="post-header">
            <img src="https://i.pinimg.com/736x/e8/7a/b0/e87ab0a15b2b65662020e614f7e05ef1.jpg" alt="Admin" class="avatar">
            <div class="post-info">
                <h3 class="username">Siem Reap Travel Guide</h3>
                <p class="post-time">1 day ago <span class="post-type">• Destination</span></p>
            </div>
        </div>
        <div class="destination-content">
            <div class="destination-image">
                <img src="https://i.pinimg.com/1200x/83/6f/35/836f352d68e26c625eb8cc1b453f8e3d.jpg" alt="Tonle Sap">
            </div>
            <div class="destination-overlay">
                <h2>Tonle Sap Floating Villages</h2>
                <p><i class="fas fa-map-marker-alt"></i> Tonle Sap Lake, Siem Reap</p>
                <p class="destination-desc">Experience life on Southeast Asia's largest lake. Visit floating villages, schools, and markets where entire communities live on water.</p>
                <a href="destination-detail.php?slug=tonle-sap-lake" class="explore-btn">Explore Destination</a>
            </div>
        </div>
        <div class="post-actions">
            <button class="action-btn love-btn" data-loved="false">
                <span class="icon"><i class="far fa-heart"></i></span>
                <span class="count">892</span>
            </button>
            <button class="action-btn ask-btn">
                <span class="icon"><i class="far fa-comment"></i></span>
                <span>Ask</span>
            </button>
            <button class="action-btn save-btn" data-saved="false">
                <span class="icon"><i class="far fa-bookmark"></i></span>
            </button>
        </div>
    </article>

    <!-- Blog Post 1: Budget Travel -->
    <article class="post-card blog-preview" data-post-id="blog-1">
        <div class="post-header">
            <img src="https://i.pinimg.com/736x/e8/7a/b0/e87ab0a15b2b65662020e614f7e05ef1.jpg" alt="Admin" class="avatar">
            <div class="post-info">
                <h3 class="username">Siem Reap Travel Guide</h3>
                <p class="post-time">2 days ago <span class="post-type">• Blog</span></p>
            </div>
        </div>
        <div class="blog-content">
            <div class="blog-image">
                <img src="https://i.pinimg.com/1200x/83/6f/35/836f352d68e26c625eb8cc1b453f8e3d.jpg" alt="Budget Travel">
                <span class="category-badge">Budget Travel</span>
            </div>
            <div class="blog-text">
                <h2>Budget Travel Guide: Exploring Siem Reap on $30 a Day</h2>
                <p>Discover how to experience the best of Siem Reap without breaking the bank. Complete budget breakdown and money-saving tips for accommodation, food, and activities...</p>
                <a href="blog-detail.php?slug=siem-reap-budget-travel" class="read-more-btn">Read More →</a>
            </div>
        </div>
        <div class="post-actions">
            <button class="action-btn love-btn" data-loved="false">
                <span class="icon"><i class="far fa-heart"></i></span>
                <span class="count">845</span>
            </button>
            <button class="action-btn ask-btn">
                <span class="icon"><i class="far fa-comment"></i></span>
                <span>Ask</span>
            </button>
            <button class="action-btn save-btn" data-saved="false">
                <span class="icon"><i class="far fa-bookmark"></i></span>
            </button>
        </div>
    </article>

    <!-- Post 4: Q&A Answer Post -->
    <article class="post-card qa-post" data-post-id="4">
        <div class="post-header">
            <img src="https://i.pinimg.com/736x/e8/7a/b0/e87ab0a15b2b65662020e614f7e05ef1.jpg" alt="Admin" class="avatar">
            <div class="post-info">
                <h3 class="username">Siem Reap Travel Guide</h3>
                <p class="post-time">1 week ago <span class="post-type">• Q&A</span></p>
            </div>
            <span class="qa-badge">Q&A</span>
        </div>
        <div class="qa-content">
            <div class="question-box">
                <p class="question-label">Question from @traveler_sarah:</p>
                <p class="question-text">"How many days do I need to explore Angkor temples?"</p>
            </div>
            <div class="answer-box">
                <p class="answer-label">✅ Answered by Admin:</p>
                <p class="answer-text">Great question! I recommend 3 days minimum to see the main temples without rushing. Day 1: Angkor Wat sunrise + small circuit (Bayon, Ta Prohm). Day 2: Grand circuit temples. Day 3: Outer temples like Banteay Srei. The 3-day pass ($62) is valid for 10 days, so you can spread visits out. Hire a tuk-tuk driver ($15-20/day) who knows the best routes!</p>
            </div>
        </div>
        <div class="post-actions">
            <button class="action-btn love-btn" data-loved="false">
                <span class="icon"><i class="far fa-heart"></i></span>
                <span class="count">234</span>
            </button>
            <button class="action-btn ask-btn">
                <span class="icon"><i class="far fa-comment"></i></span>
                <span>Ask</span>
            </button>
            <button class="action-btn save-btn" data-saved="false">
                <span class="icon"><i class="far fa-bookmark"></i></span>
            </button>
        </div>
    </article>

    <!-- Post 5: Video Post -->
    <article class="post-card" data-post-id="5">
        <div class="post-header">
            <img src="https://i.pinimg.com/736x/e8/7a/b0/e87ab0a15b2b65662020e614f7e05ef1.jpg" alt="Admin" class="avatar">
            <div class="post-info">
                <h3 class="username">Siem Reap Travel Guide</h3>
                <p class="post-time">1 month ago <span class="post-type">• Video</span></p>
            </div>
        </div>
        <div class="post-video">
            <video controls poster="https://i.pinimg.com/1200x/d0/e9/69/d0e969aea3edcd4ccb235c6ce6ae0a0b.jpg">
                <source src="#" type="video/mp4">
                Your browser does not support the video tag.
            </video>
        </div>
        <div class="post-actions">
            <button class="action-btn love-btn" data-loved="false">
                <span class="icon"><i class="far fa-heart"></i></span>
                <span class="count">1.5K</span>
            </button>
            <button class="action-btn ask-btn">
                <span class="icon"><i class="far fa-comment"></i></span>
                <span>Ask</span>
            </button>
            <button class="action-btn save-btn" data-saved="false">
                <span class="icon"><i class="far fa-bookmark"></i></span>
            </button>
        </div>
        <div class="post-caption">
            <p><strong>Apsara Dance Performance at Angkor Village</strong></p>
            <p>Experience traditional Khmer culture with this stunning Apsara dance show 💃 Includes buffet dinner with authentic Khmer cuisine. A must-see cultural experience in Siem Reap!</p>
            <a href="destination-detail.php?slug=angkor-village-apsara-theatre" class="view-more">View details</a>
        </div>
    </article>

    <!-- Blog Post 2: Photography Tips -->
    <article class="post-card blog-preview" data-post-id="blog-2">
        <div class="post-header">
            <img src="https://i.pinimg.com/736x/e8/7a/b0/e87ab0a15b2b65662020e614f7e05ef1.jpg" alt="Admin" class="avatar">
            <div class="post-info">
                <h3 class="username">Siem Reap Travel Guide</h3>
                <p class="post-time">2 months ago <span class="post-type">• Blog</span></p>
            </div>
        </div>
        <div class="blog-content">
            <div class="blog-image">
                <img src="https://i.pinimg.com/736x/c8/e7/15/c8e7159cdda0f9923127dcd85675be08.jpg" alt="Photography">
                <span class="category-badge">Photography</span>
            </div>
            <div class="blog-text">
                <h2>Photography Guide: Capturing the Perfect Angkor Wat Shot</h2>
                <p>Master the art of temple photography with our comprehensive guide. Best times, camera settings, composition tips, and shooting locations for stunning Angkor photos...</p>
                <a href="blog-detail.php?slug=angkor-wat-photography-tips" class="read-more-btn">Read More →</a>
            </div>
        </div>
        <div class="post-actions">
            <button class="action-btn love-btn" data-loved="false">
                <span class="icon"><i class="far fa-heart"></i></span>
                <span class="count">1.1K</span>
            </button>
            <button class="action-btn ask-btn">
                <span class="icon"><i class="far fa-comment"></i></span>
                <span>Ask</span>
            </button>
            <button class="action-btn save-btn" data-saved="false">
                <span class="icon"><i class="far fa-bookmark"></i></span>
            </button>
        </div>
    </article>
</div>

<!-- Question Modal -->
<div class="modal" id="questionModal">
    <div class="modal-content">
        <div class="modal-header">
            <h2>Ask a Question</h2>
            <button class="close-btn" id="closeModal">&times;</button>
        </div>
        <div class="modal-body">
            <textarea id="questionText" placeholder="What would you like to know about this post?" rows="5"></textarea>
        </div>
        <div class="modal-footer">
            <button class="btn btn-secondary" id="cancelBtn">Cancel</button>
            <button class="btn btn-primary" id="submitQuestion">Submit Question</button>
        </div>
    </div>
</div>

<?php include 'includes/footer.php'; ?>
