// Activities filtering
const filterChips = document.querySelectorAll('.filter-chip');
const activityCards = document.querySelectorAll('.activity-card');

filterChips.forEach(chip => {
    chip.addEventListener('click', () => {
        const filter = chip.getAttribute('data-filter');
        
        // Update active chip
        filterChips.forEach(c => c.classList.remove('active'));
        chip.classList.add('active');
        
        // Filter activities
        activityCards.forEach(card => {
            const category = card.getAttribute('data-category');
            if (filter === 'all' || category === filter) {
                card.style.display = 'flex';
                card.style.animation = 'fadeIn 0.5s ease-out';
            } else {
                card.style.display = 'none';
            }
        });
    });
});
