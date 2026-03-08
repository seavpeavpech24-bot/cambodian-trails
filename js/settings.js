// Settings tab switching
const settingsTabs = document.querySelectorAll('.settings-tab');
const settingsPanels = document.querySelectorAll('.settings-panel');

settingsTabs.forEach(tab => {
    tab.addEventListener('click', () => {
        const targetTab = tab.getAttribute('data-tab');
        
        // Update active tab
        settingsTabs.forEach(t => t.classList.remove('active'));
        tab.classList.add('active');
        
        // Update active panel
        settingsPanels.forEach(panel => {
            panel.classList.remove('active');
            if (panel.id === `${targetTab}-panel`) {
                panel.classList.add('active');
            }
        });
    });
});

// Form submission handlers
const forms = document.querySelectorAll('.settings-form');
forms.forEach(form => {
    form.addEventListener('submit', (e) => {
        e.preventDefault();
        alert('Settings saved successfully!');
    });
});

// Delete account confirmation
const deleteBtn = document.querySelector('.btn-danger');
if (deleteBtn) {
    deleteBtn.addEventListener('click', () => {
        if (confirm('Are you sure you want to delete your account? This action cannot be undone.')) {
            alert('Account deletion requested. This feature will be implemented soon.');
        }
    });
}
