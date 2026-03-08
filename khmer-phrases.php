<?php 
$currentPage = 'tools';
$pageTitle = 'Khmer Phrases';
$additionalCSS = ['css/khmer-phrases.css'];
include 'includes/header.php'; 
?>

<div class="tool-container">
    <div class="tool-header">
        <div class="tool-icon">
            <i class="fas fa-language"></i>
        </div>
        <h1>Essential Khmer Phrases</h1>
        <p>Learn essential Khmer phrases for your trip</p>
        <div class="tool-stats">
            <span><i class="fas fa-eye"></i> 789 uses</span>
        </div>
    </div>

    <div class="phrase-search">
        <input type="text" id="phraseSearch" placeholder="Search phrases...">
        <i class="fas fa-search"></i>
    </div>

    <div class="phrase-categories">
        <button class="category-btn active" data-category="all">
            <i class="fas fa-star"></i> All Phrases
        </button>
        <button class="category-btn" data-category="greetings">
            <i class="fas fa-hand-wave"></i> Greetings
        </button>
        <button class="category-btn" data-category="basics">
            <i class="fas fa-comment"></i> Basics
        </button>
        <button class="category-btn" data-category="food">
            <i class="fas fa-utensils"></i> Food & Dining
        </button>
        <button class="category-btn" data-category="shopping">
            <i class="fas fa-shopping-bag"></i> Shopping
        </button>
        <button class="category-btn" data-category="directions">
            <i class="fas fa-map-signs"></i> Directions
        </button>
        <button class="category-btn" data-category="emergency">
            <i class="fas fa-exclamation-triangle"></i> Emergency
        </button>
    </div>

    <div class="phrases-list" id="phrasesList">
        <!-- Greetings -->
        <div class="phrase-card" data-category="greetings">
            <div class="phrase-content">
                <h3>Hello</h3>
                <p class="khmer-text">ជំរាបសួរ</p>
                <p class="pronunciation">Jum-reap-suor</p>
            </div>
            <button class="play-btn" data-text="Jum-reap-suor">
                <i class="fas fa-volume-up"></i>
            </button>
        </div>

        <div class="phrase-card" data-category="greetings">
            <div class="phrase-content">
                <h3>Goodbye</h3>
                <p class="khmer-text">លាហើយ</p>
                <p class="pronunciation">Lea-haey</p>
            </div>
            <button class="play-btn" data-text="Lea-haey">
                <i class="fas fa-volume-up"></i>
            </button>
        </div>

        <div class="phrase-card" data-category="greetings">
            <div class="phrase-content">
                <h3>Good morning</h3>
                <p class="khmer-text">អរុណសួស្តី</p>
                <p class="pronunciation">Arun suosdey</p>
            </div>
            <button class="play-btn" data-text="Arun suosdey">
                <i class="fas fa-volume-up"></i>
            </button>
        </div>

        <!-- Basics -->
        <div class="phrase-card" data-category="basics">
            <div class="phrase-content">
                <h3>Thank you</h3>
                <p class="khmer-text">អរគុណ</p>
                <p class="pronunciation">Or-kun</p>
            </div>
            <button class="play-btn" data-text="Or-kun">
                <i class="fas fa-volume-up"></i>
            </button>
        </div>

        <div class="phrase-card" data-category="basics">
            <div class="phrase-content">
                <h3>Yes</h3>
                <p class="khmer-text">បាទ / ចាស</p>
                <p class="pronunciation">Baat (male) / Jah (female)</p>
            </div>
            <button class="play-btn" data-text="Baat or Jah">
                <i class="fas fa-volume-up"></i>
            </button>
        </div>

        <div class="phrase-card" data-category="basics">
            <div class="phrase-content">
                <h3>No</h3>
                <p class="khmer-text">ទេ</p>
                <p class="pronunciation">Teh</p>
            </div>
            <button class="play-btn" data-text="Teh">
                <i class="fas fa-volume-up"></i>
            </button>
        </div>

        <div class="phrase-card" data-category="basics">
            <div class="phrase-content">
                <h3>Please</h3>
                <p class="khmer-text">សូម</p>
                <p class="pronunciation">Som</p>
            </div>
            <button class="play-btn" data-text="Som">
                <i class="fas fa-volume-up"></i>
            </button>
        </div>

        <div class="phrase-card" data-category="basics">
            <div class="phrase-content">
                <h3>Excuse me / Sorry</h3>
                <p class="khmer-text">សុំទោស</p>
                <p class="pronunciation">Som-toh</p>
            </div>
            <button class="play-btn" data-text="Som-toh">
                <i class="fas fa-volume-up"></i>
            </button>
        </div>

        <!-- Food & Dining -->
        <div class="phrase-card" data-category="food">
            <div class="phrase-content">
                <h3>How much?</h3>
                <p class="khmer-text">ថ្លៃប៉ុន្មាន?</p>
                <p class="pronunciation">Tlay pon-maan?</p>
            </div>
            <button class="play-btn" data-text="Tlay pon-maan">
                <i class="fas fa-volume-up"></i>
            </button>
        </div>

        <div class="phrase-card" data-category="food">
            <div class="phrase-content">
                <h3>Delicious</h3>
                <p class="khmer-text">ឆ្ងាញ់</p>
                <p class="pronunciation">Chh-ngan</p>
            </div>
            <button class="play-btn" data-text="Chh-ngan">
                <i class="fas fa-volume-up"></i>
            </button>
        </div>

        <div class="phrase-card" data-category="food">
            <div class="phrase-content">
                <h3>Water</h3>
                <p class="khmer-text">ទឹក</p>
                <p class="pronunciation">Teuk</p>
            </div>
            <button class="play-btn" data-text="Teuk">
                <i class="fas fa-volume-up"></i>
            </button>
        </div>

        <div class="phrase-card" data-category="food">
            <div class="phrase-content">
                <h3>I'm vegetarian</h3>
                <p class="khmer-text">ខ្ញុំញុំតែបន្លែ</p>
                <p class="pronunciation">Knyom nyam tae bon-lae</p>
            </div>
            <button class="play-btn" data-text="Knyom nyam tae bon-lae">
                <i class="fas fa-volume-up"></i>
            </button>
        </div>

        <!-- Shopping -->
        <div class="phrase-card" data-category="shopping">
            <div class="phrase-content">
                <h3>Too expensive</h3>
                <p class="khmer-text">ថ្លៃពេក</p>
                <p class="pronunciation">Tlay peek</p>
            </div>
            <button class="play-btn" data-text="Tlay peek">
                <i class="fas fa-volume-up"></i>
            </button>
        </div>

        <div class="phrase-card" data-category="shopping">
            <div class="phrase-content">
                <h3>Can you reduce the price?</h3>
                <p class="khmer-text">អាចថយថ្លៃបានទេ?</p>
                <p class="pronunciation">Ach toy tlay ban teh?</p>
            </div>
            <button class="play-btn" data-text="Ach toy tlay ban teh">
                <i class="fas fa-volume-up"></i>
            </button>
        </div>

        <!-- Directions -->
        <div class="phrase-card" data-category="directions">
            <div class="phrase-content">
                <h3>Where is...?</h3>
                <p class="khmer-text">...នៅឯណា?</p>
                <p class="pronunciation">...nov ai-na?</p>
            </div>
            <button class="play-btn" data-text="nov ai-na">
                <i class="fas fa-volume-up"></i>
            </button>
        </div>

        <div class="phrase-card" data-category="directions">
            <div class="phrase-content">
                <h3>Left</h3>
                <p class="khmer-text">ឆ្វេង</p>
                <p class="pronunciation">Chveng</p>
            </div>
            <button class="play-btn" data-text="Chveng">
                <i class="fas fa-volume-up"></i>
            </button>
        </div>

        <div class="phrase-card" data-category="directions">
            <div class="phrase-content">
                <h3>Right</h3>
                <p class="khmer-text">ស្តាំ</p>
                <p class="pronunciation">Sdam</p>
            </div>
            <button class="play-btn" data-text="Sdam">
                <i class="fas fa-volume-up"></i>
            </button>
        </div>

        <div class="phrase-card" data-category="directions">
            <div class="phrase-content">
                <h3>Straight</h3>
                <p class="khmer-text">ត្រង់</p>
                <p class="pronunciation">Trong</p>
            </div>
            <button class="play-btn" data-text="Trong">
                <i class="fas fa-volume-up"></i>
            </button>
        </div>

        <!-- Emergency -->
        <div class="phrase-card" data-category="emergency">
            <div class="phrase-content">
                <h3>Help!</h3>
                <p class="khmer-text">ជួយផង!</p>
                <p class="pronunciation">Juoy pong!</p>
            </div>
            <button class="play-btn" data-text="Juoy pong">
                <i class="fas fa-volume-up"></i>
            </button>
        </div>

        <div class="phrase-card" data-category="emergency">
            <div class="phrase-content">
                <h3>I need a doctor</h3>
                <p class="khmer-text">ខ្ញុំត្រូវការគ្រូពេទ្យ</p>
                <p class="pronunciation">Knyom trov kar kru pet</p>
            </div>
            <button class="play-btn" data-text="Knyom trov kar kru pet">
                <i class="fas fa-volume-up"></i>
            </button>
        </div>

        <div class="phrase-card" data-category="emergency">
            <div class="phrase-content">
                <h3>Call the police</h3>
                <p class="khmer-text">ហៅប៉ូលីស</p>
                <p class="pronunciation">Hao police</p>
            </div>
            <button class="play-btn" data-text="Hao police">
                <i class="fas fa-volume-up"></i>
            </button>
        </div>
    </div>

    <div class="learning-tips">
        <h2><i class="fas fa-graduation-cap"></i> Learning Tips</h2>
        <div class="tips-grid">
            <div class="tip-card">
                <i class="fas fa-smile"></i>
                <h3>Locals Appreciate Effort</h3>
                <p>Even basic attempts at Khmer will be met with smiles and appreciation.</p>
            </div>
            <div class="tip-card">
                <i class="fas fa-volume-up"></i>
                <h3>Practice Pronunciation</h3>
                <p>Khmer has unique sounds. Listen carefully and practice regularly.</p>
            </div>
            <div class="tip-card">
                <i class="fas fa-hands-helping"></i>
                <h3>Use Gestures</h3>
                <p>Combine phrases with hand gestures for better communication.</p>
            </div>
            <div class="tip-card">
                <i class="fas fa-book"></i>
                <h3>Start Simple</h3>
                <p>Master greetings and basic phrases before moving to complex sentences.</p>
            </div>
        </div>
    </div>
</div>

<script src="js/khmer-phrases.js"></script>

<?php include 'includes/footer.php'; ?>
