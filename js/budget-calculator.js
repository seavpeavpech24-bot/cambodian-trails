// Budget Calculator Logic
const budgetRates = {
    budget: {
        hotel: 15,
        food: 10,
        transport: 5,
        activities: 15
    },
    'mid-range': {
        hotel: 40,
        food: 25,
        transport: 15,
        activities: 35
    },
    luxury: {
        hotel: 120,
        food: 60,
        transport: 40,
        activities: 80
    }
};

const calculateBtn = document.getElementById('calculateBtn');
const results = document.getElementById('results');

calculateBtn?.addEventListener('click', () => {
    const destination = document.getElementById('destination').value;
    const days = parseInt(document.getElementById('days').value) || 7;
    const style = document.querySelector('input[name="style"]:checked').value;
    
    if (!destination) {
        alert('Please select a destination');
        return;
    }
    
    const rates = budgetRates[style];
    
    const hotelCost = rates.hotel * days;
    const foodCost = rates.food * days;
    const transportCost = rates.transport * days;
    const activitiesCost = rates.activities * days;
    const totalCost = hotelCost + foodCost + transportCost + activitiesCost;
    
    // Update UI
    document.getElementById('hotelCost').textContent = `$${hotelCost}`;
    document.getElementById('foodCost').textContent = `$${foodCost}`;
    document.getElementById('transportCost').textContent = `$${transportCost}`;
    document.getElementById('activitiesCost').textContent = `$${activitiesCost}`;
    document.getElementById('totalCost').textContent = `$${totalCost}`;
    
    // Show results with animation
    results.style.display = 'block';
    results.style.animation = 'fadeIn 0.5s ease-out';
    
    // Scroll to results
    results.scrollIntoView({ behavior: 'smooth', block: 'nearest' });
});

// Save budget plan
document.getElementById('saveBtn')?.addEventListener('click', () => {
    const budgetPlan = {
        destination: document.getElementById('destination').value,
        days: document.getElementById('days').value,
        style: document.querySelector('input[name="style"]:checked').value,
        totalCost: document.getElementById('totalCost').textContent,
        timestamp: new Date().toISOString()
    };
    
    let savedBudgets = JSON.parse(localStorage.getItem('savedBudgets') || '[]');
    savedBudgets.push(budgetPlan);
    localStorage.setItem('savedBudgets', JSON.stringify(savedBudgets));
    
    alert('Budget plan saved! View it in your profile.');
});
