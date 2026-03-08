// Currency Converter with Real-Time Exchange Rates
// Using ExchangeRate-API (free tier: 1,500 requests/month)

let exchangeRates = {};
let lastUpdate = null;

const fromAmountInput = document.getElementById('fromAmount');
const toAmountInput = document.getElementById('toAmount');
const fromCurrencySelect = document.getElementById('fromCurrency');
const toCurrencySelect = document.getElementById('toCurrency');
const swapBtn = document.getElementById('swapBtn');
const rateInfo = document.getElementById('rateInfo');
const lastUpdatedSpan = document.getElementById('lastUpdated');

// Format date and time
function formatDateTime(date) {
    const options = {
        year: 'numeric',
        month: 'short',
        day: 'numeric',
        hour: '2-digit',
        minute: '2-digit',
        timeZone: 'Asia/Phnom_Penh'
    };
    return date.toLocaleString('en-US', options);
}

// Update last updated time
function updateLastUpdatedTime() {
    if (lastUpdatedSpan) {
        lastUpdatedSpan.textContent = formatDateTime(new Date());
    }
}

// Fetch real-time exchange rates
async function fetchExchangeRates() {
    try {
        // Using ExchangeRate-API (free, no API key needed for basic usage)
        const response = await fetch('https://api.exchangerate-api.com/v4/latest/USD');
        const data = await response.json();
        
        exchangeRates = data.rates;
        exchangeRates.USD = 1; // Add USD base
        lastUpdate = new Date(data.time_last_updated);
        
        console.log('Exchange rates loaded:', exchangeRates);
        updateLastUpdatedTime();
        convertCurrency();
    } catch (error) {
        console.error('Error fetching exchange rates:', error);
        // Fallback to approximate rates if API fails
        exchangeRates = {
            USD: 1,
            KHR: 4100,
            EUR: 0.92,
            GBP: 0.79,
            AUD: 1.52,
            CAD: 1.36,
            JPY: 149.50,
            CNY: 7.24,
            THB: 35.50,
            VND: 24500
        };
        updateLastUpdatedTime();
        convertCurrency();
    }
}

// Convert currency
function convertCurrency() {
    const amount = parseFloat(fromAmountInput.value) || 0;
    const fromCurrency = fromCurrencySelect.value;
    const toCurrency = toCurrencySelect.value;

    if (!exchangeRates[fromCurrency] || !exchangeRates[toCurrency]) {
        return;
    }

    // Convert to USD first, then to target currency
    const amountInUSD = amount / exchangeRates[fromCurrency];
    const convertedAmount = amountInUSD * exchangeRates[toCurrency];

    toAmountInput.value = convertedAmount.toFixed(2);

    // Update rate info
    const rate = exchangeRates[toCurrency] / exchangeRates[fromCurrency];
    rateInfo.innerHTML = `1 ${fromCurrency} = ${rate.toFixed(4)} ${toCurrency}`;

    // Update quick conversions
    updateQuickConversions();
}

// Swap currencies
swapBtn.addEventListener('click', () => {
    const tempCurrency = fromCurrencySelect.value;
    const tempAmount = fromAmountInput.value;
    
    fromCurrencySelect.value = toCurrencySelect.value;
    toCurrencySelect.value = tempCurrency;
    fromAmountInput.value = toAmountInput.value;
    
    convertCurrency();
});

// Event listeners
fromAmountInput.addEventListener('input', convertCurrency);
fromCurrencySelect.addEventListener('change', convertCurrency);
toCurrencySelect.addEventListener('change', convertCurrency);

// Update quick conversions
function updateQuickConversions() {
    const quickConversions = document.getElementById('quickConversions');
    const fromCurrency = fromCurrencySelect.value;
    const toCurrency = toCurrencySelect.value;
    const amounts = [1, 5, 10, 20, 50, 100];

    if (!exchangeRates[fromCurrency] || !exchangeRates[toCurrency]) {
        return;
    }

    quickConversions.innerHTML = amounts.map(amount => {
        const amountInUSD = amount / exchangeRates[fromCurrency];
        const converted = amountInUSD * exchangeRates[toCurrency];
        return `
            <div class="conversion-item">
                <div class="amount">${amount} ${fromCurrency}</div>
                <div class="result">${converted.toFixed(2)} ${toCurrency}</div>
            </div>
        `;
    }).join('');
}

// Initialize - fetch rates on page load
fetchExchangeRates();

// Refresh rates every 1 hour
setInterval(fetchExchangeRates, 3600000);

