// Search functionality
const searchInput = document.getElementById('searchInput');
const filterButtons = document.querySelectorAll('.filter-btn');
const resultCards = document.querySelectorAll('.result-card');

// Filter by type
filterButtons.forEach(button => {
    button.addEventListener('click', (e) => {
        e.preventDefault();
        const filter = button.getAttribute('data-filter');
        
        // Update active button
        filterButtons.forEach(btn => btn.classList.remove('active'));
        button.classList.add('active');
        
        // Filter results
        resultCards.forEach(card => {
            const cardType = card.getAttribute('data-type');
            if (filter === 'all' || cardType === filter) {
                card.style.display = 'flex';
            } else {
                card.style.display = 'none';
            }
        });
    });
});

// Search input
searchInput?.addEventListener('input', (e) => {
    const searchTerm = e.target.value.toLowerCase();
    
    resultCards.forEach(card => {
        const title = card.querySelector('h3')?.textContent.toLowerCase() || '';
        const description = card.querySelector('p')?.textContent.toLowerCase() || '';
        
        if (title.includes(searchTerm) || description.includes(searchTerm)) {
            card.style.display = 'flex';
        } else {
            card.style.display = 'none';
        }
    });
});
