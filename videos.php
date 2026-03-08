<?php 
$currentPage = 'videos';
$pageTitle = 'Video Gallery';
$additionalCSS = ['css/videos.css'];
$additionalJS = ['js/videos.js'];
include 'includes/header.php'; 
?>

<div class="videos-container">
    <div class="videos-header">
        <h1>Video Gallery</h1>
        <p>Explore Siem Reap through our travel videos</p>
    </div>
    
    <div class="videos-grid">
        <div class="video-card">
            <div class="video-wrapper">
                <iframe src="https://www.youtube.com/embed/dQw4w9WgXcQ" 
                        title="Angkor Wat Sunrise Tour" 
                        frameborder="0" 
                        allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture" 
                        allowfullscreen>
                </iframe>
            </div>
            <div class="video-info">
                <h3>Angkor Wat Sunrise Tour</h3>
                <p>Experience the magical sunrise at Angkor Wat temple complex</p>
                <div class="video-actions">
                    <a href="https://www.youtube.com/watch?v=dQw4w9WgXcQ" target="_blank" class="btn-youtube">
                        <i class="fab fa-youtube"></i> Watch on YouTube
                    </a>
                </div>
            </div>
        </div>
        
        <div class="video-card">
            <div class="video-wrapper">
                <iframe src="https://www.youtube.com/embed/dQw4w9WgXcQ" 
                        title="Pub Street Nightlife" 
                        frameborder="0" 
                        allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture" 
                        allowfullscreen>
                </iframe>
            </div>
            <div class="video-info">
                <h3>Pub Street Nightlife Guide</h3>
                <p>Discover the vibrant nightlife and street food of Pub Street</p>
                <div class="video-actions">
                    <a href="https://www.youtube.com/watch?v=dQw4w9WgXcQ" target="_blank" class="btn-youtube">
                        <i class="fab fa-youtube"></i> Watch on YouTube
                    </a>
                </div>
            </div>
        </div>
        
        <div class="video-card">
            <div class="video-wrapper">
                <iframe src="https://www.youtube.com/embed/dQw4w9WgXcQ" 
                        title="Tonle Sap Floating Villages" 
                        frameborder="0" 
                        allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture" 
                        allowfullscreen>
                </iframe>
            </div>
            <div class="video-info">
                <h3>Tonle Sap Floating Villages</h3>
                <p>Explore life on Southeast Asia's largest freshwater lake</p>
                <div class="video-actions">
                    <a href="https://www.youtube.com/watch?v=dQw4w9WgXcQ" target="_blank" class="btn-youtube">
                        <i class="fab fa-youtube"></i> Watch on YouTube
                    </a>
                </div>
            </div>
        </div>
        
        <div class="video-card">
            <div class="video-wrapper">
                <iframe src="https://www.youtube.com/embed/dQw4w9WgXcQ" 
                        title="Siem Reap Street Food" 
                        frameborder="0" 
                        allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture" 
                        allowfullscreen>
                </iframe>
            </div>
            <div class="video-info">
                <h3>Siem Reap Street Food Tour</h3>
                <p>Taste the best local street food and Khmer cuisine</p>
                <div class="video-actions">
                    <a href="https://www.youtube.com/watch?v=dQw4w9WgXcQ" target="_blank" class="btn-youtube">
                        <i class="fab fa-youtube"></i> Watch on YouTube
                    </a>
                </div>
            </div>
        </div>
        
        <div class="video-card">
            <div class="video-wrapper">
                <iframe src="https://www.youtube.com/embed/dQw4w9WgXcQ" 
                        title="Phnom Kulen Waterfall" 
                        frameborder="0" 
                        allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture" 
                        allowfullscreen>
                </iframe>
            </div>
            <div class="video-info">
                <h3>Phnom Kulen Waterfall Adventure</h3>
                <p>Visit the sacred mountain and stunning waterfalls</p>
                <div class="video-actions">
                    <a href="https://www.youtube.com/watch?v=dQw4w9WgXcQ" target="_blank" class="btn-youtube">
                        <i class="fab fa-youtube"></i> Watch on YouTube
                    </a>
                </div>
            </div>
        </div>
        
        <div class="video-card">
            <div class="video-wrapper">
                <iframe src="https://www.youtube.com/embed/dQw4w9WgXcQ" 
                        title="Apsara Dance Show" 
                        frameborder="0" 
                        allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture" 
                        allowfullscreen>
                </iframe>
            </div>
            <div class="video-info">
                <h3>Traditional Apsara Dance Show</h3>
                <p>Experience authentic Khmer cultural performance</p>
                <div class="video-actions">
                    <a href="https://www.youtube.com/watch?v=dQw4w9WgXcQ" target="_blank" class="btn-youtube">
                        <i class="fab fa-youtube"></i> Watch on YouTube
                    </a>
                </div>
            </div>
        </div>
    </div>
</div>

<?php include 'includes/footer.php'; ?>
