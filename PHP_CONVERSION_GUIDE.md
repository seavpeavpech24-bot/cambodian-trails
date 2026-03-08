# PHP Conversion Guide - Cambodian Trails

## ✅ Completed Conversions

- [x] includes/header.php (Reusable header with navigation)
- [x] includes/footer.php (Reusable footer with mobile nav)
- [x] index.php (Home feed)
- [x] destinations.php (Destinations browser)
- [x] tools.php (Tools hub)

## 📋 Remaining Pages to Convert

### Main Pages
- [ ] activities.php
- [ ] travel-map.php
- [ ] travel-guides.php
- [ ] search.php
- [ ] saved.php
- [ ] notifications.php
- [ ] profile.php

### Detail Pages
- [ ] destination-detail.php
- [ ] post.php
- [ ] blog.php

### Tool Pages
- [ ] budget-calculator.php
- [ ] itinerary-builder.php
- [ ] packing-list.php
- [ ] weather-guide.php
- [ ] currency-converter.php
- [ ] phrase-guide.php

### Auth Pages
- [ ] login.php
- [ ] register.php
- [ ] forgot-password.php

## 🔄 Conversion Pattern

### Step 1: Create PHP File Header
```php
<?php 
$currentPage = 'page-name';  // For active nav state
$pageTitle = 'Page Title';   // For <title> tag
$additionalCSS = ['css/page.css'];  // Optional extra CSS
$additionalJS = ['js/page.js'];     // Optional extra JS
include 'includes/header.php'; 
?>
```

### Step 2: Copy HTML Content
Copy everything between `<main class="main-content">` and `</main>` from the HTML file.

### Step 3: Add Footer
```php
<?php include 'includes/footer.php'; ?>
```

### Step 4: Update Links
Replace all `.html` extensions with `.php`:
- `index.html` → `index.php`
- `destinations.html` → `destinations.php`
- etc.

## 📝 Page-Specific Variables

### $currentPage Values
- `'home'` - index.php
- `'destinations'` - destinations.php
- `'travel-map'` - travel-map.php
- `'activities'` - activities.php
- `'travel-guides'` - travel-guides.php
- `'tools'` - tools.php
- `'search'` - search.php
- `'saved'` - saved.php
- `'notifications'` - notifications.php
- `'profile'` - profile.php

### $additionalCSS Examples
```php
// Single CSS file
$additionalCSS = ['css/destinations.css'];

// Multiple CSS files
$additionalCSS = ['css/destinations.css', 'css/components.css'];

// No additional CSS (omit variable)
```

### $additionalJS Examples
```php
// Single JS file
$additionalJS = ['js/destinations.js'];

// Multiple JS files
$additionalJS = ['js/app.js', 'js/destinations.js'];

// No additional JS (omit variable)
```

## 🎯 Quick Conversion Template

```php
<?php 
$currentPage = 'PAGE_NAME';
$pageTitle = 'PAGE_TITLE';
$additionalCSS = ['css/PAGE.css'];
$additionalJS = ['js/PAGE.js'];
include 'includes/header.php'; 
?>

<!-- PASTE YOUR HTML CONTENT HERE -->
<!-- Everything from <main> to </main> -->

<?php include 'includes/footer.php'; ?>
```

## 🔗 Link Updates Required

### In Content
Find and replace in all PHP files:
- `href="index.html"` → `href="index.php"`
- `href="destinations.html"` → `href="destinations.php"`
- `href="activities.html"` → `href="activities.php"`
- `href="travel-map.html"` → `href="travel-map.php"`
- `href="travel-guides.html"` → `href="travel-guides.php"`
- `href="tools.html"` → `href="tools.php"`
- `href="search.html"` → `href="search.php"`
- `href="saved.html"` → `href="saved.php"`
- `href="notifications.html"` → `href="notifications.php"`
- `href="profile.html"` → `href="profile.php"`
- `href="post.html"` → `href="post.php"`
- `href="blog.html"` → `href="blog.php"`
- `href="destination-detail.html"` → `href="destination-detail.php"`
- `href="budget-calculator.html"` → `href="budget-calculator.php"`
- `href="login.html"` → `href="login.php"`
- `href="register.html"` → `href="register.php"`
- `href="forgot-password.html"` → `href="forgot-password.php"`

## 🎨 Benefits of PHP Structure

### 1. Single Source of Truth
- Navigation menu defined once in `header.php`
- Changes to menu automatically apply to all pages
- No need to update 20+ HTML files

### 2. Active State Management
- `$currentPage` variable controls active nav item
- Automatic highlighting of current page
- Consistent across desktop and mobile

### 3. Easy Maintenance
- Update logo once in `header.php`
- Change navigation structure in one place
- Add/remove menu items globally

### 4. Flexible CSS/JS Loading
- Load page-specific CSS only when needed
- Include page-specific JS only where required
- Better performance

### 5. Future Backend Integration
- Easy to add database connections
- Simple to implement user authentication
- Ready for dynamic content

## 🚀 Testing

### Local PHP Server
```bash
# Navigate to project directory
cd cambodian-trails

# Start PHP built-in server
php -S localhost:8000

# Open in browser
http://localhost:8000
```

### XAMPP/WAMP
1. Copy project to `htdocs` folder
2. Access via `http://localhost/cambodian-trails`

### Live Server
- Upload to PHP-enabled hosting
- Ensure `.php` files are executable
- Test all navigation links

## ⚠️ Important Notes

### File Extensions
- All main pages should be `.php`
- CSS files remain `.css`
- JavaScript files remain `.js`
- Images remain as-is

### Include Paths
- `includes/header.php` - relative path
- Works from root directory
- Adjust if using subdirectories

### Variables Scope
- Variables set before `include` are available in included file
- `$currentPage`, `$pageTitle`, etc. must be set before header
- Optional variables can be omitted

## 📦 File Structure

```
cambodian-trails/
├── includes/
│   ├── header.php          ✅ Created
│   └── footer.php          ✅ Created
├── css/
│   ├── style.css
│   ├── components.css
│   ├── destinations.css
│   └── ... (all CSS files)
├── js/
│   ├── app.js
│   ├── destinations.js
│   └── ... (all JS files)
├── index.php               ✅ Created
├── destinations.php        ✅ Created
├── tools.php              ✅ Created
├── activities.php         ⏳ To create
├── travel-map.php         ⏳ To create
├── travel-guides.php      ⏳ To create
├── search.php             ⏳ To create
├── saved.php              ⏳ To create
├── notifications.php      ⏳ To create
├── profile.php            ⏳ To create
├── post.php               ⏳ To create
├── blog.php               ⏳ To create
├── destination-detail.php ⏳ To create
├── budget-calculator.php  ⏳ To create
├── login.php              ⏳ To create
├── register.php           ⏳ To create
└── forgot-password.php    ⏳ To create
```

## 🎯 Next Steps

1. **Convert remaining pages** using the template above
2. **Update all internal links** from `.html` to `.php`
3. **Test navigation** on all pages
4. **Verify active states** work correctly
5. **Check mobile navigation** functions properly
6. **Test all tools** and features
7. **Delete old HTML files** once conversion is complete

## 💡 Pro Tips

- Use find/replace in your editor for bulk link updates
- Test each page after conversion
- Keep HTML files as backup until fully tested
- Use version control (Git) to track changes
- Test on actual PHP server, not just file:// protocol
