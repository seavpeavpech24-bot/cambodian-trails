# Cambodian Trails - Branding Update Guide

## Brand Name
**Old:** TravelGram  
**New:** Cambodian Trails

## Logo
Replace all instances of:
- `🌴 TravelGram` → `Cambodian Trails`

## Icon System

### Navigation Icons (Unicode)
- Home: `⌂`
- Destinations: `◉`
- Travel Map: `⊕`
- Travel Guides: `☰`
- Activities: `◈`
- Search: `⌕`
- Saved: `◆`
- Notifications: `◔`
- Profile: `◉`
- Theme Toggle: `◐` (light) / `◑` (dark)

### Action Icons
- Love (outline): `♡`
- Love (filled): `♥`
- Comment: `💬`
- Bookmark (outline): `◇`
- Bookmark (filled): `◆`
- Share: `⇪`
- Location: `📍`
- Star (outline): `☆`
- Star (filled): `★`

### Emoji Icons (Keep for visual elements)
- Mountain: `🏔️`
- Beach: `🏖️`
- Temple: `🛕`
- City: `🏙️`
- Nature: `🌿`
- Water: `🌊`
- Adventure: `🏔️`
- Culture: `🎭`
- Food: `🍜`

## Color Palette

### Primary (Ocean Blue)
- Main: `#0284c7`
- Dark: `#0369a1`
- Light: `#38bdf8`

### Secondary (Sunset Orange)
- Main: `#f97316`
- Dark: `#ea580c`
- Light: `#fb923c`

### Accent (Tropical Green)
- Main: `#10b981`
- Dark: `#059669`

### Neutrals
- Background: `#f8fafc`
- Surface: `#ffffff`
- Text Primary: `#0f172a`
- Text Secondary: `#64748b`
- Border: `#e2e8f0`

## Files to Update

### HTML Files
- [x] index.html
- [x] destinations.html
- [ ] destination-detail.html
- [ ] travel-map.html
- [ ] travel-guides.html
- [ ] activities.html
- [ ] budget-calculator.html
- [ ] post.html
- [ ] blog.html
- [ ] profile.html
- [ ] search.html
- [ ] notifications.html
- [ ] saved.html
- [ ] login.html
- [ ] register.html
- [ ] forgot-password.html

### CSS Files
- [x] css/style.css (colors and icons)
- All other CSS files inherit from style.css

### JavaScript Files
- [x] js/app.js (theme toggle icon)

## Update Pattern

### 1. Title Tag
```html
<title>Page Name - Cambodian Trails</title>
```

### 2. Logo
```html
<div class="logo">
    <h1>Cambodian Trails</h1>
</div>
```

### 3. Navigation Icons
Replace emoji icons with Unicode symbols as listed above.

### 4. Theme Toggle
```html
<button class="theme-toggle" id="themeToggle">
    <span class="icon">◐</span>
    <span class="label">Dark Mode</span>
</button>
```

### 5. Mobile Navigation
Use simplified icon set: ⌂ ◉ ◈ ⌕ ◉

## Brand Voice
- Professional yet approachable
- Focus on discovery and adventure
- Emphasize Cambodia's unique culture and beauty
- Community-driven travel knowledge
