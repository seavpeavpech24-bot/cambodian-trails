// Photo gallery functionality
console.log('Photo gallery loaded');

// Add click tracking for analytics
const buyButtons = document.querySelectorAll('.btn-buy');
buyButtons.forEach(button => {
    button.addEventListener('click', () => {
        const photoTitle = button.closest('.photo-card').querySelector('h3').textContent;
        console.log('User clicked to buy:', photoTitle);
    });
});
