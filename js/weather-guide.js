// Weather Guide with Real-Time Data
// Using Open-Meteo API (free, no API key required)

const monthButtons = document.querySelectorAll('.month-btn');
const weatherResult = document.getElementById('weatherResult');
const currentWeatherDiv = document.getElementById('currentWeather');
const lastUpdatedSpan = document.getElementById('lastUpdated');

// Phnom Penh coordinates (capital of Cambodia)
const CAMBODIA_LAT = 11.5564;
const CAMBODIA_LON = 104.9282;

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

// Weather code to icon mapping
const weatherIcons = {
    0: '☀️',    // Clear sky
    1: '🌤️',   // Mainly clear
    2: '⛅',   // Partly cloudy
    3: '☁️',   // Overcast
    45: '🌫️',  // Foggy
    48: '🌫️',  // Depositing rime fog
    51: '🌦️',  // Light drizzle
    53: '🌦️',  // Moderate drizzle
    55: '🌧️',  // Dense drizzle
    61: '🌧️',  // Slight rain
    63: '🌧️',  // Moderate rain
    65: '⛈️',  // Heavy rain
    71: '🌨️',  // Slight snow
    73: '🌨️',  // Moderate snow
    75: '❄️',  // Heavy snow
    77: '🌨️',  // Snow grains
    80: '🌦️',  // Slight rain showers
    81: '🌧️',  // Moderate rain showers
    82: '⛈️',  // Violent rain showers
    85: '🌨️',  // Slight snow showers
    86: '❄️',  // Heavy snow showers
    95: '⛈️',  // Thunderstorm
    96: '⛈️',  // Thunderstorm with slight hail
    99: '⛈️'   // Thunderstorm with heavy hail
};

// Weather code to description
const weatherDescriptions = {
    0: 'Clear sky',
    1: 'Mainly clear',
    2: 'Partly cloudy',
    3: 'Overcast',
    45: 'Foggy',
    48: 'Depositing rime fog',
    51: 'Light drizzle',
    53: 'Moderate drizzle',
    55: 'Dense drizzle',
    61: 'Slight rain',
    63: 'Moderate rain',
    65: 'Heavy rain',
    71: 'Slight snow',
    73: 'Moderate snow',
    75: 'Heavy snow',
    77: 'Snow grains',
    80: 'Slight rain showers',
    81: 'Moderate rain showers',
    82: 'Violent rain showers',
    85: 'Slight snow showers',
    86: 'Heavy snow showers',
    95: 'Thunderstorm',
    96: 'Thunderstorm with hail',
    99: 'Thunderstorm with heavy hail'
};

// Fetch current weather
async function fetchCurrentWeather() {
    try {
        const response = await fetch(
            `https://api.open-meteo.com/v1/forecast?latitude=${CAMBODIA_LAT}&longitude=${CAMBODIA_LON}&current=temperature_2m,relative_humidity_2m,apparent_temperature,weather_code,wind_speed_10m&timezone=Asia/Bangkok`
        );
        
        const data = await response.json();
        const current = data.current;
        
        const weatherCode = current.weather_code;
        const icon = weatherIcons[weatherCode] || '🌤️';
        const description = weatherDescriptions[weatherCode] || 'Unknown';
        
        currentWeatherDiv.innerHTML = `
            <div class="weather-now">
                <div class="weather-now-left">
                    <div class="weather-now-icon">${icon}</div>
                    <div class="weather-now-temp">
                        ${Math.round(current.temperature_2m)}<small>°C</small>
                    </div>
                </div>
                <div class="weather-now-right">
                    <div class="weather-now-location">
                        <i class="fas fa-map-marker-alt"></i>
                        Phnom Penh, Cambodia
                    </div>
                    <div class="weather-now-desc">${description}</div>
                    <div class="weather-now-details">
                        <span>
                            <i class="fas fa-temperature-high"></i>
                            Feels like ${Math.round(current.apparent_temperature)}°C
                        </span>
                        <span>
                            <i class="fas fa-tint"></i>
                            ${current.relative_humidity_2m}%
                        </span>
                        <span>
                            <i class="fas fa-wind"></i>
                            ${Math.round(current.wind_speed_10m)} km/h
                        </span>
                    </div>
                </div>
            </div>
        `;
        
        updateLastUpdatedTime();
    } catch (error) {
        console.error('Error fetching current weather:', error);
        currentWeatherDiv.innerHTML = `
            <div style="text-align: center; color: rgba(255, 255, 255, 0.9);">
                <i class="fas fa-exclamation-circle"></i> Unable to load current weather
            </div>
        `;
        updateLastUpdatedTime();
    }
}

// Fetch weather data for a specific month
async function fetchWeatherData(month) {
    try {
        // Get current year
        const currentYear = new Date().getFullYear();
        
        // Calculate date range for the selected month
        const startDate = `${currentYear}-${String(month).padStart(2, '0')}-01`;
        const endDay = new Date(currentYear, month, 0).getDate();
        const endDate = `${currentYear}-${String(month).padStart(2, '0')}-${endDay}`;
        
        // Fetch weather data from Open-Meteo API
        const response = await fetch(
            `https://api.open-meteo.com/v1/forecast?latitude=${CAMBODIA_LAT}&longitude=${CAMBODIA_LON}&daily=temperature_2m_max,temperature_2m_min,precipitation_sum,relative_humidity_2m_mean&timezone=Asia/Bangkok&start_date=${startDate}&end_date=${endDate}`
        );
        
        const data = await response.json();
        
        // Calculate averages
        const avgMaxTemp = (data.daily.temperature_2m_max.reduce((a, b) => a + b, 0) / data.daily.temperature_2m_max.length).toFixed(1);
        const avgMinTemp = (data.daily.temperature_2m_min.reduce((a, b) => a + b, 0) / data.daily.temperature_2m_min.length).toFixed(1);
        const totalRainfall = data.daily.precipitation_sum.reduce((a, b) => a + b, 0).toFixed(0);
        const avgHumidity = (data.daily.relative_humidity_2m_mean.reduce((a, b) => a + b, 0) / data.daily.relative_humidity_2m_mean.length).toFixed(0);
        
        return {
            temperature: `${avgMinTemp}-${avgMaxTemp}°C`,
            rainfall: `${totalRainfall}mm`,
            humidity: `${avgHumidity}%`
        };
    } catch (error) {
        console.error('Error fetching weather data:', error);
        return null;
    }
}

// Static weather information by month
const weatherInfo = {
    1: {
        name: 'January',
        icon: '☀️',
        description: 'January is one of the best months to visit Cambodia. The weather is dry and pleasant with comfortable temperatures. Perfect for temple exploration and outdoor activities.',
        recommendation: 'Excellent time to visit! Peak tourist season with ideal weather conditions. Book accommodations in advance.',
        packing: ['Light, breathable clothing', 'Sunscreen and hat', 'Comfortable walking shoes', 'Light jacket for evenings', 'Sunglasses']
    },
    2: {
        name: 'February',
        icon: '☀️',
        description: 'February continues the dry season with warm, sunny days. Slightly warmer than January but still very comfortable for sightseeing.',
        recommendation: 'Excellent time to visit! Still peak season with fantastic weather. Great for all activities.',
        packing: ['Light summer clothes', 'Strong sunscreen', 'Hat and sunglasses', 'Sandals and walking shoes', 'Reusable water bottle']
    },
    3: {
        name: 'March',
        icon: '🌤️',
        description: 'March marks the transition to hot season. Temperatures rise significantly, especially in the afternoon. Still mostly dry with occasional showers.',
        recommendation: 'Good time to visit but getting hot. Visit temples early morning or late afternoon to avoid peak heat.',
        packing: ['Very light clothing', 'High SPF sunscreen', 'Wide-brimmed hat', 'Cooling towel', 'Plenty of water']
    },
    4: {
        name: 'April',
        icon: '🔥',
        description: 'April is the hottest month in Cambodia. Very high temperatures and humidity. Khmer New Year celebrations mid-month bring water festivals.',
        recommendation: 'Hot but festive! Experience Khmer New Year water festival. Stay hydrated and take breaks in air-conditioned spaces.',
        packing: ['Lightest possible clothing', 'Maximum sun protection', 'Quick-dry clothes', 'Electrolyte drinks', 'Cooling spray']
    },
    5: {
        name: 'May',
        icon: '🌦️',
        description: 'May marks the beginning of the wet season. Afternoon thunderstorms become common, but mornings are usually clear. Temperatures remain high.',
        recommendation: 'Shoulder season with fewer tourists. Rain usually comes in short bursts. Good deals on accommodations.',
        packing: ['Light rain jacket', 'Waterproof bag', 'Quick-dry clothes', 'Umbrella', 'Waterproof shoes']
    },
    6: {
        name: 'June',
        icon: '🌧️',
        description: 'Wet season is in full swing. Regular afternoon rains cool things down. Countryside becomes lush and green. Fewer tourists.',
        recommendation: 'Low season with great prices. Mornings often clear for sightseeing. Bring rain gear and embrace the green landscapes.',
        packing: ['Waterproof jacket', 'Waterproof backpack cover', 'Sandals', 'Mosquito repellent', 'Quick-dry everything']
    },
    7: {
        name: 'July',
        icon: '🌧️',
        description: 'Peak wet season with frequent rains. Temperatures are slightly cooler due to cloud cover. Waterfalls are at their most impressive.',
        recommendation: 'Quietest tourist period. Great for photography with dramatic skies. Some remote areas may be difficult to access.',
        packing: ['Full rain gear', 'Waterproof phone case', 'Dry bags', 'Sandals', 'Mosquito protection']
    },
    8: {
        name: 'August',
        icon: '🌧️',
        description: 'Continued wet season with regular rainfall. Rivers and lakes are full. Countryside is beautifully green. Good time for boat trips.',
        recommendation: 'Low season continues. Excellent prices and fewer crowds. Plan indoor activities for rainy afternoons.',
        packing: ['Rain protection', 'Waterproof bags', 'Light layers', 'Insect repellent', 'Waterproof footwear']
    },
    9: {
        name: 'September',
        icon: '🌧️',
        description: 'Wettest month of the year. Heavy rains can last for hours. Some areas may experience flooding. Nature is at its most vibrant.',
        recommendation: 'Challenging for travel but adventurous. Significant discounts available. Check weather forecasts and road conditions.',
        packing: ['Heavy-duty rain gear', 'Multiple waterproof bags', 'Sandals only', 'Mosquito net', 'Patience and flexibility']
    },
    10: {
        name: 'October',
        icon: '🌦️',
        description: 'Wet season continues but starting to ease. Water Festival (Bon Om Touk) usually occurs this month. Rivers are at their highest.',
        recommendation: 'Shoulder season begins. Experience Water Festival if timing is right. Weather improving towards month end.',
        packing: ['Rain jacket', 'Mix of rain and sun gear', 'Comfortable shoes', 'Festival clothes', 'Camera protection']
    },
    11: {
        name: 'November',
        icon: '🌤️',
        description: 'Transition to dry season. Rainfall decreases significantly. Temperatures become more comfortable. Countryside still green from rains.',
        recommendation: 'Great time to visit! Weather improving, fewer tourists than peak season, and landscapes are lush.',
        packing: ['Light layers', 'Light rain jacket', 'Sunscreen', 'Comfortable walking shoes', 'Camera for green landscapes']
    },
    12: {
        name: 'December',
        icon: '☀️',
        description: 'Dry season in full effect. Coolest month of the year with pleasant temperatures. Perfect weather for all activities. Peak tourist season begins.',
        recommendation: 'Excellent time to visit! Ideal weather conditions. Book early as this is high season.',
        packing: ['Light clothing', 'Light sweater for evenings', 'Sunscreen', 'Comfortable shoes', 'Sunglasses and hat']
    }
};

// Handle month selection
monthButtons.forEach(btn => {
    btn.addEventListener('click', async function() {
        // Remove active class from all buttons
        monthButtons.forEach(b => b.classList.remove('active'));
        
        // Add active class to clicked button
        this.classList.add('active');
        
        // Get month data
        const month = parseInt(this.getAttribute('data-month'));
        const info = weatherInfo[month];
        
        // Show loading state
        weatherResult.style.display = 'block';
        document.getElementById('monthName').textContent = info.name;
        document.getElementById('weatherIcon').textContent = info.icon;
        document.getElementById('temperature').textContent = 'Loading...';
        document.getElementById('rainfall').textContent = 'Loading...';
        document.getElementById('humidity').textContent = 'Loading...';
        
        // Fetch real-time weather data
        const realTimeData = await fetchWeatherData(month);
        
        if (realTimeData) {
            document.getElementById('temperature').textContent = realTimeData.temperature;
            document.getElementById('rainfall').textContent = realTimeData.rainfall;
            document.getElementById('humidity').textContent = realTimeData.humidity;
        } else {
            // Fallback to approximate values if API fails
            document.getElementById('temperature').textContent = '25-32°C';
            document.getElementById('rainfall').textContent = 'N/A';
            document.getElementById('humidity').textContent = '70%';
        }
        
        document.getElementById('weatherDescription').textContent = info.description;
        document.getElementById('recommendation').textContent = info.recommendation;
        
        // Update packing list
        const packingList = document.getElementById('packingList');
        packingList.innerHTML = info.packing.map(item => `<li>${item}</li>`).join('');
        
        // Scroll to result
        weatherResult.scrollIntoView({ behavior: 'smooth', block: 'nearest' });
    });
});

// Initialize - fetch current weather on page load
fetchCurrentWeather();

// Refresh current weather every 10 minutes
setInterval(fetchCurrentWeather, 600000);

