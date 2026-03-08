// Theme Toggle
const themeToggle = document.getElementById('themeToggle');
const html = document.documentElement;

// Load saved theme
const savedTheme = localStorage.getItem('theme') || 'light';
html.setAttribute('data-theme', savedTheme);
updateThemeIcon();

themeToggle?.addEventListener('click', () => {
    const currentTheme = html.getAttribute('data-theme');
    const newTheme = currentTheme === 'light' ? 'dark' : 'light';
    html.setAttribute('data-theme', newTheme);
    localStorage.setItem('theme', newTheme);
    updateThemeIcon();
});

function updateThemeIcon() {
    const theme = html.getAttribute('data-theme');
    const icon = themeToggle?.querySelector('.icon');
    if (icon) {
        icon.innerHTML = theme === 'light' ? '<i class="fas fa-moon"></i>' : '<i class="fas fa-sun"></i>';
    }
}

// Love Button
document.querySelectorAll('.love-btn').forEach(btn => {
    btn.addEventListener('click', function(e) {
        e.preventDefault();
        const isLoved = this.getAttribute('data-loved') === 'true';
        this.setAttribute('data-loved', !isLoved);
        
        const icon = this.querySelector('.icon i');
        if (icon) {
            if (isLoved) {
                icon.className = 'far fa-heart';
            } else {
                icon.className = 'fas fa-heart';
            }
        }
        
        const countSpan = this.querySelector('.count');
        if (countSpan) {
            let count = parseInt(countSpan.textContent.replace('K', '000').replace('.', ''));
            count = isLoved ? count - 1 : count + 1;
            countSpan.textContent = formatCount(count);
        }
    });
});

// Save Button
document.querySelectorAll('.save-btn').forEach(btn => {
    btn.addEventListener('click', function(e) {
        e.preventDefault();
        const isSaved = this.getAttribute('data-saved') === 'true';
        this.setAttribute('data-saved', !isSaved);
        
        const icon = this.querySelector('.icon i');
        if (icon) {
            if (isSaved) {
                icon.className = 'far fa-bookmark';
            } else {
                icon.className = 'fas fa-bookmark';
            }
        }
        
        // Save to localStorage
        const postCard = this.closest('.post-card');
        const postId = postCard?.getAttribute('data-post-id');
        if (postId) {
            toggleSavedPost(postId);
        }
    });
});

// Question Modal
const questionModal = document.getElementById('questionModal');
const closeModal = document.getElementById('closeModal');
const cancelBtn = document.getElementById('cancelBtn');
const submitQuestion = document.getElementById('submitQuestion');
let currentPostId = null;

document.querySelectorAll('.ask-btn').forEach(btn => {
    btn.addEventListener('click', function() {
        const postCard = this.closest('.post-card');
        currentPostId = postCard?.getAttribute('data-post-id');
        questionModal?.classList.add('active');
    });
});

closeModal?.addEventListener('click', () => {
    questionModal?.classList.remove('active');
});

cancelBtn?.addEventListener('click', () => {
    questionModal?.classList.remove('active');
});

questionModal?.addEventListener('click', (e) => {
    if (e.target === questionModal) {
        questionModal.classList.remove('active');
    }
});

submitQuestion?.addEventListener('click', () => {
    const questionText = document.getElementById('questionText');
    if (questionText && questionText.value.trim()) {
        // Save question
        saveQuestion(currentPostId, questionText.value);
        questionText.value = '';
        questionModal?.classList.remove('active');
        alert('Your question has been submitted! The admin will answer it soon.');
    }
});

// Helper Functions
function formatCount(count) {
    if (count >= 1000) {
        return (count / 1000).toFixed(1) + 'K';
    }
    return count.toString();
}

function toggleSavedPost(postId) {
    let savedPosts = JSON.parse(localStorage.getItem('savedPosts') || '[]');
    const index = savedPosts.indexOf(postId);
    
    if (index > -1) {
        savedPosts.splice(index, 1);
    } else {
        savedPosts.push(postId);
    }
    
    localStorage.setItem('savedPosts', JSON.stringify(savedPosts));
}

function saveQuestion(postId, questionText) {
    let questions = JSON.parse(localStorage.getItem('questions') || '[]');
    questions.push({
        id: Date.now(),
        postId: postId,
        text: questionText,
        answered: false,
        timestamp: new Date().toISOString()
    });
    localStorage.setItem('questions', JSON.stringify(questions));
}

// Load saved posts state
function loadSavedStates() {
    const savedPosts = JSON.parse(localStorage.getItem('savedPosts') || '[]');
    savedPosts.forEach(postId => {
        const postCard = document.querySelector(`[data-post-id="${postId}"]`);
        const saveBtn = postCard?.querySelector('.save-btn');
        if (saveBtn) {
            saveBtn.setAttribute('data-saved', 'true');
        }
    });
}

// Initialize
document.addEventListener('DOMContentLoaded', () => {
    loadSavedStates();
});
