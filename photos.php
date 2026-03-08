<?php 
$currentPage = 'photos';
$pageTitle = 'Photo Gallery';
$additionalCSS = ['css/photos.css'];
$additionalJS = ['js/photos.js'];
include 'includes/header.php'; 
?>

<div class="photos-container">
    <div class="photos-header">
        <h1>Photo Gallery</h1>
        <p>Professional travel photography from Siem Reap. All photos available for purchase.</p>
        <a href="https://wa.me/855123456789?text=Hi, I'm interested in purchasing photos" target="_blank" class="btn btn-whatsapp">
            Contact on WhatsApp to Buy Photos
        </a>
    </div>
    
    <div class="photos-grid">
        <div class="photo-card">
            <div class="photo-wrapper">
                <img src="https://i.pinimg.com/736x/c8/e7/15/c8e7159cdda0f9923127dcd85675be08.jpg" alt="Angkor Wat">
                <div class="watermark">Siem Reap Travel Guide</div>
            </div>
            <div class="photo-info">
                <h3>Angkor Wat Sunrise</h3>
                <p>Majestic temple at dawn</p>
            </div>
        </div>
        
        <div class="photo-card">
            <div class="photo-wrapper">
                <img src="https://i.pinimg.com/1200x/38/e7/6f/38e76f3e31609410d50d88dac39b4451.jpg" alt="Pub Street">
                <div class="watermark">Siem Reap Travel Guide</div>
            </div>
            <div class="photo-info">
                <h3>Pub Street Nightlife</h3>
                <p>Vibrant evening atmosphere</p>
            </div>
        </div>
        
        <div class="photo-card">
            <div class="photo-wrapper">
                <img src="https://i.pinimg.com/1200x/d0/e9/69/d0e969aea3edcd4ccb235c6ce6ae0a0b.jpg" alt="Apsara Dance">
                <div class="watermark">Siem Reap Travel Guide</div>
            </div>
            <div class="photo-info">
                <h3>Apsara Dance Performance</h3>
                <p>Traditional Khmer culture</p>
            </div>
        </div>
        
        <div class="photo-card">
            <div class="photo-wrapper">
                <img src="https://i.pinimg.com/1200x/83/6f/35/836f352d68e26c625eb8cc1b453f8e3d.jpg" alt="Tonle Sap">
                <div class="watermark">Siem Reap Travel Guide</div>
            </div>
            <div class="photo-info">
                <h3>Tonle Sap Floating Village</h3>
                <p>Life on the water</p>
            </div>
        </div>
        
        <div class="photo-card">
            <div class="photo-wrapper">
                <img src="https://i.pinimg.com/736x/38/97/1b/38971bc352da719abd689916a302c40f.jpg" alt="Phnom Kulen">
                <div class="watermark">Siem Reap Travel Guide</div>
            </div>
            <div class="photo-info">
                <h3>Phnom Kulen Waterfall</h3>
                <p>Sacred mountain paradise</p>
            </div>
        </div>
        
        <div class="photo-card">
            <div class="photo-wrapper">
                <img src="https://i.pinimg.com/736x/c8/e7/15/c8e7159cdda0f9923127dcd85675be08.jpg" alt="Phnom Bakheng">
                <div class="watermark">Siem Reap Travel Guide</div>
            </div>
            <div class="photo-info">
                <h3>Phnom Bakheng Sunset</h3>
                <p>Panoramic temple views</p>
            </div>
        </div>
        
        <div class="photo-card">
            <div class="photo-wrapper">
                <img src="https://i.pinimg.com/1200x/2b/c1/6e/2bc16e1b37dca2944c2da4cbb827a7a0.jpg" alt="Butterfly Centre">
                <div class="watermark">Siem Reap Travel Guide</div>
            </div>
            <div class="photo-info">
                <h3>Banteay Srei Butterfly Centre</h3>
                <p>Colorful butterfly sanctuary</p>
            </div>
        </div>
        
        <div class="photo-card">
            <div class="photo-wrapper">
                <img src="https://i.pinimg.com/1200x/38/e7/6f/38e76f3e31609410d50d88dac39b4451.jpg" alt="Khmer Food">
                <div class="watermark">Siem Reap Travel Guide</div>
            </div>
            <div class="photo-info">
                <h3>Traditional Khmer Cuisine</h3>
                <p>Authentic local dishes</p>
            </div>
        </div>
        
        <div class="photo-card">
            <div class="photo-wrapper">
                <img src="https://i.pinimg.com/736x/5c/ce/99/5cce995c6a4d1ed11d1d4b9758d72cfb.jpg" alt="Angkor Eye">
                <div class="watermark">Siem Reap Travel Guide</div>
            </div>
            <div class="photo-info">
                <h3>Angkor Eye Ferris Wheel</h3>
                <p>City views from above</p>
            </div>
        </div>
        
        <div class="photo-card">
            <div class="photo-wrapper">
                <img src="https://i.pinimg.com/736x/f3/75/fe/f375fe99fcfdbcf1d557d04d9f2a838d.jpg" alt="Go-Kart">
                <div class="watermark">Siem Reap Travel Guide</div>
            </div>
            <div class="photo-info">
                <h3>Angkor Speedway Racing</h3>
                <p>High-speed adventure</p>
            </div>
        </div>
        
        <div class="photo-card">
            <div class="photo-wrapper">
                <img src="https://i.pinimg.com/1200x/ee/b2/e6/eeb2e630b14a2441904a4a09a47496ef.jpg" alt="Wildlife">
                <div class="watermark">Siem Reap Travel Guide</div>
            </div>
            <div class="photo-info">
                <h3>Angkor Wildlife & Aquarium</h3>
                <p>Conservation and education</p>
            </div>
        </div>
        
        <div class="photo-card">
            <div class="photo-wrapper">
                <img src="https://i.pinimg.com/1200x/e3/5f/a9/e35fa9f2b207e96c8183a99132f36a0e.jpg" alt="Wake Park">
                <div class="watermark">Siem Reap Travel Guide</div>
            </div>
            <div class="photo-info">
                <h3>Wake Park Cambodia</h3>
                <p>Wakeboarding adventure</p>
            </div>
        </div>
    </div>
</div>

<?php include 'includes/footer.php'; ?>
