# 🇰🇭 Siem Reap Travel Guide

A modern, responsive web application for discovering and exploring Siem Reap, Cambodia's cultural heart and gateway to the magnificent Angkor temples.

## 📖 About

Siem Reap Travel Guide is a comprehensive travel companion that helps visitors plan their perfect trip to Siem Reap. The platform features curated content about destinations, temples, activities, nightlife, and local experiences, all presented in an intuitive social media-style interface.

**Focus:** Exclusively Siem Reap content - temples, nightlife, culture, nature, and adventure activities

## ✨ Features

### 🏠 News Feed (`index.php`)

- Social media-style feed with posts, blogs, destinations, and Q&A content
- Real-time content type indicators (Post, Blog, Destination, Q&A, Video)
- Relative timestamps (2 hours ago, 1 day ago, 1 week ago, 1 month ago, etc.)
- Interactive love, save, and ask question buttons
- Dark/Light theme toggle with localStorage persistence
- Mixed content types:
  - Image posts
  - Blog previews
  - Destination showcases
  - Q&A answers
  - Video posts

### 🗺️ Destinations (`destinations.php`)

10+ curated Siem Reap destinations including:

- **Pub Street** - Nightlife hub with bars, restaurants, and street food
- **Angkor Village Apsara Theatre** - Traditional Khmer dance performances
- **Phnom Bakheng** - Hilltop temple with sunset views
- **Phnom Kulen National Park** - Waterfalls and sacred mountain
- **Tonle Sap Lake** - Floating villages and unique ecosystem
- **Angkor Wildlife & Aquarium** - Conservation center
- **Angkor Eye Ferris Wheel** - Panoramic city views
- **Banteay Srei Butterfly Centre** - Butterfly sanctuary
- **Angkor Speedway** - Go-kart racing
- **Wake Park Cambodia** - Cable wakeboarding

**Features:**

- Filter by category: Temples, Nature, Culture, Cities, Adventure, Water
- Detailed destination pages with:
  - Ratings and reviews
  - Entry fees and duration
  - Best season to visit
  - How to get there
  - Things to do
  - Travel tips
  - Photo gallery
  - Interactive elements

### 📝 Travel Blogs (`blog.php`)

Expert travel guides and tips:

- **Pub Street Nightlife Guide** - Complete party scene overview
- **Angkor Wat Photography Tips** - Camera settings and best spots
- **Budget Travel Guide** - Exploring Siem Reap on $30/day
- **Tonle Sap Floating Villages** - Responsible tourism guide

**Features:**

- Category filtering: Nightlife, Photography, Budget, Culture
- Reading time estimates (8-12 min read)
- Author information
- Publication dates
- Related posts suggestions
- Love, save, and ask question interactions
- Detailed blog detail pages with:
  - Full article content
  - Quick tips sections
  - Related posts
  - Q&A section

### 🔍 Search (`search.php`)

- Unified search across blogs and destinations
- Real-time filtering by content type (All, Blogs, Destinations)
- Keyword search functionality
- Search results show:
  - Content type badges
  - Images from actual data
  - Descriptions
  - Metadata (ratings, dates, locations)

### 👤 User Features

**Profile Page (`profile.php`)**

- User information and bio
- Profile statistics (saved posts, questions, answers)
- Three tabs:
  - **Saved Posts**: Grid of saved blogs and destinations
  - **My Questions**: Track question status (answered/pending)
  - **Answers**: View admin responses
- Clickable saved items linking to detail pages

**Notifications (`notifications.php`)**

- Real-time notification feed
- Notification types:
  - Admin answered your question
  - New blog post published
  - New destination added
  - Question featured
- Unread indicators
- Links to relevant content

**Saved Posts (`saved.php`)**

- Collection of bookmarked content
- Mix of blogs and destinations
- Grid layout with hover effects
- Direct links to saved items

**Settings (`settings.php`)**

- User preferences
- Account management
- Theme settings

### � DesFign System

**Color Palette:**

- **Primary (Ocean Blue):** `#0284c7` - Cambodia's waters
- **Secondary (Sunset Orange):** `#f97316` - Cambodian sunsets
- **Accent (Tropical Green):** `#10b981` - Lush landscapes
- **Background:** `#f8fafc` - Clean interface
- **Surface:** `#ffffff` - Pure white cards

**Dark Mode:**

- Complete dark theme support
- Smooth transitions
- Preserved readability
- localStorage persistence

**Responsive Design:**

- Mobile-first approach
- Breakpoints:
  - Mobile: < 768px
  - Tablet: 768px - 1024px
  - Desktop: > 1024px
- Bottom navigation on mobile
- Sidebar navigation on desktop

## 🛠️ Tech Stack

- **Frontend**: HTML5, CSS3, JavaScript (ES6+)
- **Backend**: PHP 7.4+
- **Icons**: Font Awesome 6.5.1
- **Images**: Pinterest CDN
- **Architecture**:
  - Component-based CSS
  - Modular PHP includes
  - Data-driven content from PHP arrays

## 📁 Project Structure

```
siem-reap-travel-guide/
├── index.php                    # News feed homepage
├── blog.php                     # Blog listing page
├── blog-detail.php              # Individual blog post
├── destinations.php             # Destinations listing
├── destination-detail.php       # Individual destination
├── activity-detail.php          # Activity details
├── guide-detail.php             # Guide details
├── search.php                   # Search page
├── profile.php                  # User profile
├── notifications.php            # Notifications
├── saved.php                    # Saved posts
├── settings.php                 # User settings
├── css/
│   ├── style.css               # Main styles with CSS variables
│   ├── components.css          # Reusable components
│   ├── destinations.css        # Destination styles
│   ├── blog.css                # Blog styles
│   ├── search.css              # Search styles
│   ├── profile.css             # Profile styles
│   ├── notifications.css       # Notification styles
│   ├── saved.css               # Saved posts styles
│   └── settings.css            # Settings styles
├── js/
│   ├── theme.js                # Theme switcher
│   ├── destinations.js         # Destination filtering
│   ├── search.js               # Search functionality
│   └── profile.js              # Profile tabs
├── data/
│   ├── blogs.php               # Blog data array
│   └── destinations.php        # Destination data array
├── includes/
│   ├── header.php              # Site header with navigation
│   └── footer.php              # Site footer
└── README.md                    # This file
```

## 🚀 Getting Started

### Prerequisites

- PHP 7.4 or higher
- Web server (Apache, Nginx, or PHP built-in server)
- Modern web browser

### Installation

1. **Clone the repository:**

```bash
git clone https://github.com/yourusername/siem-reap-travel-guide.git
cd siem-reap-travel-guide
```

2. **Start a local PHP server:**

```bash
php -S localhost:8000
```

3. **Open your browser:**

```
http://localhost:8000
```

### Alternative Setup (Apache/Nginx)

1. Copy files to your web server directory:

```bash
# For Apache (XAMPP/WAMP)
cp -r siem-reap-travel-guide /path/to/htdocs/

# For Nginx
cp -r siem-reap-travel-guide /path/to/www/
```

2. Access via browser:

```
http://localhost/siem-reap-travel-guide
```

## 🎯 Key Pages

| Page               | URL                                                | Description                       |
| ------------------ | -------------------------------------------------- | --------------------------------- |
| Home Feed          | `/index.php`                                       | Social feed with mixed content    |
| Destinations       | `/destinations.php`                                | Browse all Siem Reap destinations |
| Destination Detail | `/destination-detail.php?slug=pub-street`          | Individual destination info       |
| Blog Listing       | `/blog.php`                                        | All travel blogs and guides       |
| Blog Detail        | `/blog-detail.php?slug=pub-street-nightlife-guide` | Full blog article                 |
| Search             | `/search.php`                                      | Search across all content         |
| Profile            | `/profile.php`                                     | User dashboard and saved items    |
| Notifications      | `/notifications.php`                               | Activity notifications            |
| Saved Posts        | `/saved.php`                                       | Bookmarked content                |
| Settings           | `/settings.php`                                    | User preferences                  |

## 📊 Data Structure

### Blogs Data (`data/blogs.php`)

```php
$blogs = [
    'slug' => [
        'slug' => 'unique-identifier',
        'title' => 'Blog Title',
        'category' => 'nightlife|photography|budget|culture',
        'author' => 'Author Name',
        'date' => 'YYYY-MM-DD',
        'read_time' => '8 min read',
        'image' => 'image-url',
        'excerpt' => 'Short description',
        'content' => [
            'intro' => 'Introduction text',
            'sections' => [
                ['title' => 'Section Title', 'content' => 'Section content']
            ]
        ],
        'tips' => ['Tip 1', 'Tip 2']
    ]
];
```

### Destinations Data (`data/destinations.php`)

```php
$destinations = [
    'slug' => [
        'slug' => 'unique-identifier',
        'name' => 'Destination Name',
        'location' => 'Location in Siem Reap',
        'category' => 'temples|nature|culture|cities|adventure|water',
        'rating' => 4.7,
        'reviews' => 1234,
        'image' => 'image-url',
        'short_description' => 'Brief description',
        'description' => 'Full description',
        'entry_fee' => 'Price or Free',
        'duration' => 'Time needed',
        'opens_at' => 'Opening time',
        'best_season' => 'Best time to visit',
        'how_to_get_there' => ['Method' => 'Instructions'],
        'best_time' => ['Time' => 'Description'],
        'things_to_do' => [
            ['icon' => 'fa-icon', 'title' => 'Activity', 'description' => 'Details']
        ],
        'tips' => [
            ['icon' => 'fa-icon', 'title' => 'Tip', 'description' => 'Details']
        ],
        'gallery' => ['image-url-1', 'image-url-2']
    ]
];
```

## 🌟 Content Highlights

### Featured Destinations

**Nightlife & Entertainment:**

- Pub Street - $1 beers and vibrant atmosphere
- Angkor Village Apsara Theatre - Traditional dance shows

**Temples & Culture:**

- Phnom Bakheng - Sunset temple views
- Angkor Archaeological Park access

**Nature & Adventure:**

- Phnom Kulen National Park - Waterfalls and hiking
- Tonle Sap Lake - Floating villages
- Banteay Srei Butterfly Centre - 30+ butterfly species

**Activities:**

- Angkor Speedway - Go-kart racing
- Wake Park Cambodia - Cable wakeboarding
- Angkor Wildlife & Aquarium - Conservation center

### Blog Topics

**Nightlife:**

- Complete Pub Street guide
- Bar hopping tips
- Happy hour deals

**Photography:**

- Angkor Wat camera settings
- Best shooting locations
- Golden hour tips

**Budget Travel:**

- $30/day breakdown
- Money-saving strategies
- Free activities

**Culture:**

- Floating village etiquette
- Responsible tourism
- Local customs

## 💡 Features in Detail

### Interactive Elements

**Love Button:**

- Click to love posts
- Counter updates
- Icon changes (outline ↔ filled)
- Stored in localStorage

**Save Button:**

- Bookmark content
- Icon changes (outline ↔ filled)
- Saved items appear in profile
- Persistent storage

**Ask Question:**

- Modal popup
- Submit questions on any content
- Track question status
- Receive notifications when answered

**Theme Toggle:**

- Switch between light/dark mode
- Smooth transitions
- Preference saved in localStorage
- Consistent across all pages

### Filtering & Search

**Destination Filtering:**

- Filter by category chips
- Smooth animations
- Real-time updates
- Active state indicators

**Blog Filtering:**

- Category-based filtering
- Visual feedback
- Maintains layout

**Search Functionality:**

- Live search results
- Filter by content type
- Keyword matching in titles and descriptions
- Highlighted results

### Responsive Navigation

**Desktop (>768px):**

- Sidebar navigation
- Always visible
- Icon + text labels
- Active page highlighting

**Mobile (<768px):**

- Bottom navigation bar
- Icon-only display
- Fixed position
- Touch-optimized

## 🎨 CSS Architecture

### CSS Variables

```css
:root {
  /* Colors */
  --primary-color: #0284c7;
  --secondary-color: #f97316;
  --accent-color: #10b981;

  /* Spacing */
  --spacing-xs: 4px;
  --spacing-sm: 8px;
  --spacing-md: 16px;
  --spacing-lg: 24px;
  --spacing-xl: 32px;

  /* Shadows */
  --shadow: 0 1px 3px rgba(0, 0, 0, 0.1);
  --shadow-md: 0 4px 6px rgba(0, 0, 0, 0.1);
  --shadow-lg: 0 10px 15px rgba(0, 0, 0, 0.1);

  /* Transitions */
  --transition: all 0.3s ease;
}
```

### Component Classes

- `.post-card` - Feed post container
- `.tourism-card` - Destination/blog card
- `.action-btn` - Interactive buttons
- `.filter-chip` - Category filters
- `.modal` - Popup dialogs
- `.notification-item` - Notification cards

## 📱 Mobile Optimization

- Touch-friendly tap targets (min 44x44px)
- Optimized images for mobile bandwidth
- Responsive typography
- Swipe-friendly cards
- Bottom navigation for easy thumb access
- Collapsible sections
- Mobile-first CSS approach

## 🔒 Security Considerations

- XSS protection with `htmlspecialchars()`
- SQL injection prevention (when database added)
- CSRF token implementation (recommended)
- Input validation
- Secure session handling

## 🚀 Performance

- Minimal external dependencies
- Optimized CSS (component-based)
- Lazy loading ready
- CDN for Font Awesome
- Efficient PHP data structures
- localStorage for client-side caching

## 🌐 Browser Support

- ✅ Chrome 90+
- ✅ Firefox 88+
- ✅ Safari 14+
- ✅ Edge 90+
- ✅ Mobile browsers (iOS Safari, Chrome Mobile)

## 🔮 Future Enhancements

### Phase 1 (Backend)

- [ ] MySQL database integration
- [ ] User authentication system
- [ ] Admin dashboard
- [ ] Real Q&A submission
- [ ] Image upload functionality

### Phase 2 (Features)

- [ ] Comments system
- [ ] User reviews and ratings
- [ ] Booking integration
- [ ] Weather API integration
- [ ] Currency converter
- [ ] Multi-language support (Khmer, English, Chinese)

### Phase 3 (Advanced)

- [ ] Progressive Web App (PWA)
- [ ] Push notifications
- [ ] Offline mode
- [ ] Social sharing
- [ ] Trip planning tools
- [ ] Itinerary builder
- [ ] Budget calculator
- [ ] Interactive maps

## 🤝 Contributing

Contributions are welcome! Please follow these steps:

1. Fork the repository
2. Create a feature branch (`git checkout -b feature/AmazingFeature`)
3. Commit your changes (`git commit -m 'Add some AmazingFeature'`)
4. Push to the branch (`git push origin feature/AmazingFeature`)
5. Open a Pull Request

### Coding Standards

- Use consistent indentation (4 spaces)
- Follow PHP PSR-12 coding standards
- Write semantic HTML
- Use BEM methodology for CSS classes
- Comment complex logic
- Test on multiple browsers

## 📄 License

This project is open source and available under the [MIT License](LICENSE).

## 👨‍💻 Author

Created with ❤️ for travelers exploring Siem Reap, Cambodia

## 🙏 Acknowledgments

- Images sourced from Pinterest
- Icons by [Font Awesome](https://fontawesome.com/)
- Inspired by modern travel platforms like TripAdvisor and Airbnb Experiences
- Siem Reap tourism community for content inspiration

## 📞 Support

For questions or support:

- Open an issue on GitHub
- Email: [your-email@example.com]
- Website: [your-website.com]

---

**⭐ Star this repo if you find it helpful!**

**🔗 Live Demo**: [Add your demo link here]

---

Made with 🇰🇭 for Siem Reap travelers
