// Destinations filtering
const filterChips = document.querySelectorAll('.filter-chip');
const destinationCards = document.querySelectorAll('.tourism-card');

filterChips.forEach(chip => {
    chip.addEventListener('click', () => {
        const filter = chip.getAttribute('data-filter');
        
        // Update active chip
        filterChips.forEach(c => c.classList.remove('active'));
        chip.classList.add('active');
        
        // Filter destinations
        destinationCards.forEach(card => {
            const category = card.getAttribute('data-category');
            if (filter === 'all' || category === filter) {
                card.style.display = 'block';
                card.style.animation = 'fadeIn 0.5s ease-out';
            } else {
                card.style.display = 'none';
            }
        });
    });
});

// View on Map button
document.querySelector('.header-actions .btn-outline')?.addEventListener('click', () => {
    window.location.href = 'travel-map.html';
});
