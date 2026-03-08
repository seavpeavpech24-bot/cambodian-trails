# Cambodian Trails - Advanced Tourism Platform for Cambodia

A comprehensive, modern tourism discovery platform built with pure HTML, CSS, and JavaScript. Designed specifically for Cambodia travel content where admins post and users interact through reactions, saves, questions, and advanced travel planning tools.

## 🏔️ Brand Identity

**Platform Name:** Cambodian Trails  
**Focus:** Tourism discovery, travel knowledge, and community questions for Cambodia destinations

### Color Palette
- **Primary (Ocean Blue):** `#0284c7` - Represents Cambodia's beautiful waters
- **Secondary (Sunset Orange):** `#f97316` - Captures the stunning Cambodian sunsets
- **Accent (Tropical Green):** `#10b981` - Reflects the lush landscapes
- **Background:** `#f8fafc` - Soft, clean interface
- **Surface:** `#ffffff` - Pure white cards

### Icon System
Uses a consistent Unicode icon system for:
- Navigation (⌂ ◉ ⊕ ☰ ◈ ⌕ ◆ ◔)
- Actions (♡ ♥ 💬 ◇ ◆)
- Visual elements (🏔️ 🏖️ 🛕 🏙️ 🌿)

## 📱 Main Sections

### 1. **Home Feed** (`index.html`)
   - Instagram-style social feed
   - Multiple post types: Image, Video, Blog Preview, Destination Preview, Q&A
   - Love, Ask Question, and Save actions
   - Sidebar navigation (desktop) / Bottom navigation (mobile)

### 2. **Destinations** (`destinations.html`)
   - Browse all Cambodia destinations
   - Filter by category: Beaches, Temples, Cities, Nature
   - Beautiful destination cards with ratings
   - Quick "Explore" buttons

### 3. **Destination Detail** (`destination-detail.html`)
   - Hero image with gradient overlay
   - Quick stats (price, duration, best season)
   - Comprehensive sections:
     - Overview
     - How to get there
     - Best time to visit
     - Things to do
     - Travel tips
     - Photo gallery
     - Map location
     - Ask questions

### 4. **Travel Map** (`travel-map.html`)
   - Interactive map with destination markers
   - Click markers to view destination info
   - Sidebar with popular destinations
   - Popup cards with quick details

### 5. **Travel Guides** (`travel-guides.html`)
   - Comprehensive travel guides
   - Categories: Planning, Culture, Food, Tips
   - Reading time estimates
   - Beautifully designed guide cards

### 6. **Activities** (`activities.html`)
   - Browse activities and experiences
   - Filter by type: Water Sports, Adventure, Culture, Nature
   - Activity cards with:
     - Images
     - Duration
     - Price estimates
     - Ratings
     - Location

### 7. **Budget Calculator** (`budget-calculator.html`)
   - Estimate trip costs
   - Select destination and duration
   - Choose travel style: Budget, Mid-Range, Luxury
   - Detailed cost breakdown:
     - Accommodation
     - Food & Drinks
     - Transportation
     - Activities
   - Money-saving tips
   - Save budget plans

### 8. **Search** (`search.html`)
   - Advanced search functionality
   - Filter by type: Posts, Blogs, Destinations, Activities
   - Live search results
   - Beautiful result cards

### 9. **User Profile** (`profile.html`)
   - Profile information
   - Tabs:
     - Saved Posts
     - My Questions
     - Answers from Admin
   - Grid layout for saved content
   - Question status tracking

### 10. **Notifications** (`notifications.html`)
   - Real-time notification feed
   - Types:
     - Admin answered question
     - New destination added
     - New blog published
   - Unread indicators

### 11. **Authentication**
   - Login (`login.html`)
   - Register (`register.html`)
   - Forgot Password (`forgot-password.html`)
   - Google login option

## 🎯 Key Features

### Interactive Elements
- **Love/React**: Click heart to love posts (with counter)
- **Save**: Bookmark content (stored in localStorage)
- **Ask Questions**: Submit questions on any post/destination
- **Search**: Find posts, blogs, destinations, activities
- **Dark Mode**: Toggle themes with persistence

### Tourism Tools
- **Budget Calculator**: Estimate trip costs by style
- **Travel Map**: Interactive destination explorer
- **Itinerary Builder**: Plan day-by-day trips (coming soon)
- **Activity Finder**: Discover experiences

### Q&A System
- Users ask questions privately
- Admin can answer and choose to:
  - Keep answer private
  - Publish as feed post
  - Mark as travel tip
- Published answers appear as special Q&A cards

### Enhanced Components
- Destination cards with ratings
- Activity cards with pricing
- Blog preview cards
- Travel tip cards
- Map marker popups
- Skeleton loaders
- Info boxes
- Stats grids

## 🛠️ Technical Structure

```
├── index.html                    # Home feed
├── destinations.html             # Destinations browser
├── destination-detail.html       # Destination details
├── travel-map.html              # Interactive map
├── travel-guides.html           # Travel guides
├── activities.html              # Activities browser
├── budget-calculator.html       # Budget tool
├── post.html                    # Post detail
├── blog.html                    # Blog article
├── profile.html                 # User profile
├── search.html                  # Search page
├── notifications.html           # Notifications
├── saved.html                   # Saved posts
├── login.html                   # Login
├── register.html                # Registration
├── forgot-password.html         # Password reset
├── css/
│   ├── style.css               # Main styles with CSS variables
│   ├── components.css          # Reusable components
│   ├── destinations.css        # Destinations styles
│   ├── destination-detail.css  # Destination detail styles
│   ├── activities.css          # Activities styles
│   ├── travel-map.css          # Map styles
│   ├── tools.css               # Calculator & tools styles
│   ├── post.css                # Post detail styles
│   ├── blog.css                # Blog styles
│   ├── profile.css             # Profile styles
│   ├── search.css              # Search styles
│   ├── notifications.css       # Notification styles
│   ├── saved.css               # Saved posts styles
│   └── auth.css                # Authentication styles
└── js/
    ├── app.js                  # Main JavaScript
    ├── destinations.js         # Destinations filtering
    ├── activities.js           # Activities filtering
    ├── travel-map.js           # Map interactions
    ├── budget-calculator.js    # Budget calculations
    ├── post.js                 # Post interactions
    ├── blog.js                 # Blog interactions
    ├── auth.js                 # Authentication
    ├── search.js               # Search functionality
    └── profile.js              # Profile tabs
```

## 🎨 CSS Features

### CSS Variables
- Comprehensive color system
- Multiple shadow levels
- Border radius variations
- Transition timing functions
- Spacing system

### Responsive Design
- **Desktop (>1024px)**: Full sidebar, multi-column grids
- **Tablet (769-1024px)**: Collapsed sidebar, adjusted grids
- **Mobile (<768px)**: Bottom navigation, single column

### Animations
- Fade in animations
- Skeleton loading
- Hover effects
- Smooth transitions
- Bounce animations for markers

## 💾 Data Storage

Uses browser localStorage for:
- Theme preference (light/dark)
- Saved posts and destinations
- User questions
- Budget plans
- Authentication state

## 🌙 Dark Mode

Complete dark mode support across all pages with:
- Automatic color adjustments
- Preserved readability
- Smooth transitions
- localStorage persistence

## 📱 Mobile Optimization

- Touch-friendly interface
- Bottom navigation bar
- Swipeable cards
- Optimized images
- Responsive typography

## 🎯 Sample Content

Includes placeholder content for:
- **Destinations**: Angkor Wat, Koh Rong, Koh Rong Sanloem, Kampot, Battambang, Phnom Penh
- **Activities**: Snorkeling, Sunset Boat Tour, Fishing, Temple Tours, Jungle Trekking, Cooking Classes
- **Guides**: First-time visitors, Culture, Food, Safety, Transportation, Photography

## 🚀 Getting Started

1. Open `index.html` in a web browser
2. Navigate using sidebar (desktop) or bottom nav (mobile)
3. Try interactions:
   - Love and save posts
   - Ask questions
   - Calculate trip budget
   - Explore destinations on map
   - Filter activities
4. Toggle dark mode
5. Test responsive design by resizing browser

## 🌐 Browser Support

- Chrome (recommended)
- Firefox
- Safari
- Edge
- Mobile browsers

## 🔮 Future Enhancements

- Backend API integration
- Real user authentication
- Admin dashboard
- Real-time notifications
- Image upload
- Social sharing
- Comments system
- Booking integration
- Weather API
- Currency converter
- Language translations

## 📄 License

Demo project for educational purposes.
