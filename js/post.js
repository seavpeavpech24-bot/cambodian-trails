// Submit new question on post detail page
document.getElementById('submitNewQuestion')?.addEventListener('click', () => {
    const questionText = document.getElementById('newQuestion');
    if (questionText && questionText.value.trim()) {
        // Save question
        const urlParams = new URLSearchParams(window.location.search);
        const postId = urlParams.get('id');
        
        let questions = JSON.parse(localStorage.getItem('questions') || '[]');
        questions.push({
            id: Date.now(),
            postId: postId,
            text: questionText.value,
            answered: false,
            timestamp: new Date().toISOString()
        });
        localStorage.setItem('questions', JSON.stringify(questions));
        
        questionText.value = '';
        alert('Your question has been submitted! The admin will answer it soon.');
    }
});
