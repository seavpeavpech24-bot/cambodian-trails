// Submit question on blog page
document.getElementById('submitBlogQuestion')?.addEventListener('click', () => {
    const questionText = document.getElementById('blogQuestion');
    if (questionText && questionText.value.trim()) {
        const urlParams = new URLSearchParams(window.location.search);
        const blogId = urlParams.get('id');
        
        let questions = JSON.parse(localStorage.getItem('questions') || '[]');
        questions.push({
            id: Date.now(),
            blogId: blogId,
            text: questionText.value,
            answered: false,
            timestamp: new Date().toISOString()
        });
        localStorage.setItem('questions', JSON.stringify(questions));
        
        questionText.value = '';
        alert('Your question has been submitted! The admin will answer it soon.');
    }
});
