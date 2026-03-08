// Video gallery functionality
console.log('Video gallery loaded');

// Track YouTube link clicks
const youtubeButtons = document.querySelectorAll('.btn-youtube');
youtubeButtons.forEach(button => {
    button.addEventListener('click', () => {
        const videoTitle = button.closest('.video-card').querySelector('h3').textContent;
        console.log('User clicked to watch on YouTube:', videoTitle);
    });
});
