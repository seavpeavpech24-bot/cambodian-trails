# Tools Hub - User Guide

## 🛠️ Overview

The **Tools Hub** is a centralized location where users can:
1. Access all travel planning tools
2. View and manage their saved plans
3. Get planning tips and recommendations

## 📍 How to Access

### Desktop Navigation
- Click **"Tools"** (⚙ icon) in the left sidebar
- Located between "Travel Guides" and "Search"

### Mobile Navigation
- Tap **"Tools"** (⚙ icon) in the bottom navigation bar
- Third icon from the left

### Direct Link
- URL: `tools.html`

## 🎯 Available Tools

### 1. Budget Calculator 💰
- **Purpose:** Estimate trip costs
- **Features:**
  - Select destination
  - Choose travel style (Budget/Mid-Range/Luxury)
  - Set trip duration
  - Get detailed cost breakdown
- **Saves:** Budget plans to localStorage

### 2. Itinerary Builder 📅
- **Purpose:** Create day-by-day travel plans
- **Features:**
  - Add destinations
  - Plan daily activities
  - Set dates and times
- **Saves:** Complete itineraries

### 3. Packing List 🎒
- **Purpose:** Never forget essentials
- **Features:**
  - Customizable checklist
  - Category organization
  - Check off items
- **Saves:** Packing lists

### 4. Weather Guide 🌤️
- **Purpose:** Find best time to visit
- **Features:**
  - Monthly weather patterns
  - Temperature ranges
  - Rainfall data

### 5. Currency Converter 💱
- **Purpose:** Convert currencies
- **Features:**
  - USD to Cambodian Riel
  - Real-time rates
  - Quick calculations

### 6. Khmer Phrases 💬
- **Purpose:** Learn basic Khmer
- **Features:**
  - Essential phrases
  - Pronunciation guide
  - Common situations

## 💾 Saved Plans Management

### How Saved Plans Work

1. **Create a Plan**
   - Use any tool (Budget Calculator, Itinerary Builder, etc.)
   - Click "Save" button in the tool
   - Plan is stored in browser localStorage

2. **View Saved Plans**
   - Go to Tools Hub (`tools.html`)
   - Scroll to "My Saved Plans" section
   - Plans are organized by type

3. **Manage Plans**
   - **View:** Click eye icon (👁️) to open plan
   - **Delete:** Click trash icon (🗑️) to remove
   - **Clear All:** Use "Clear All" button to delete everything

### Saved Plan Categories

#### Budget Plans 💰
- Shows: Destination, days, style, total cost
- Displays: Creation date
- Actions: View, Delete

#### Itineraries 📅
- Shows: Title, days, destinations count
- Displays: Creation date
- Actions: View, Delete

#### Packing Lists 🎒
- Shows: Title, items count, category
- Displays: Creation date
- Actions: View, Delete

### Data Storage

**Location:** Browser localStorage
- `savedBudgets` - Array of budget plans
- `savedItineraries` - Array of itineraries
- `savedPackingLists` - Array of packing lists

**Format:**
```javascript
{
  destination: "Siem Reap",
  days: 7,
  style: "mid-range",
  totalCost: "$840",
  timestamp: "2026-03-08T..."
}
```

### Empty State

When no plans are saved:
- Shows friendly empty state message
- Displays icon and description
- Provides "Create Budget Plan" button
- Encourages users to start planning

## 🎨 UI Features

### Tool Cards
- Large icons for easy recognition
- Clear descriptions
- Usage statistics
- "Popular" and "New" badges
- Hover effects with lift animation

### Saved Plan Cards
- Compact information display
- Quick action buttons
- Relative timestamps ("2 days ago")
- Organized by category
- Responsive grid layout

### Planning Tips
- Colorful gradient cards
- Quick planning advice
- Best practices
- Tool usage recommendations

## 📱 Responsive Design

### Desktop (>1024px)
- 3-column tool grid
- 3-column saved plans grid
- Full sidebar navigation

### Tablet (769-1024px)
- 2-column grids
- Adjusted spacing
- Collapsed sidebar

### Mobile (<768px)
- Single column layout
- Bottom navigation
- Touch-friendly buttons
- Stacked cards

## 🔄 User Flow

### Creating and Saving a Plan

1. **Navigate to Tools Hub**
   ```
   Home → Tools (sidebar/bottom nav)
   ```

2. **Select a Tool**
   ```
   Click on tool card (e.g., Budget Calculator)
   ```

3. **Use the Tool**
   ```
   Fill in details → Calculate/Create
   ```

4. **Save the Plan**
   ```
   Click "Save" button → Confirmation message
   ```

5. **View Saved Plan**
   ```
   Return to Tools Hub → Scroll to "My Saved Plans"
   ```

### Managing Saved Plans

1. **View a Plan**
   ```
   Tools Hub → Find plan → Click eye icon
   → Redirects to tool with plan loaded
   ```

2. **Delete a Plan**
   ```
   Tools Hub → Find plan → Click trash icon
   → Confirm deletion → Plan removed
   ```

3. **Clear All Plans**
   ```
   Tools Hub → Click "Clear All" button
   → Confirm action → All plans deleted
   ```

## 🎯 Integration Points

### From Other Pages

**Budget Calculator:**
- Save button stores plan
- Redirects back to Tools Hub option

**Itinerary Builder:**
- Save button stores itinerary
- Link to view all itineraries

**Profile Page:**
- Could show saved plans count
- Link to Tools Hub

**Home Feed:**
- Could promote tools
- Quick access buttons

## 🚀 Future Enhancements

### Planned Features
- [ ] Export plans as PDF
- [ ] Share plans with friends
- [ ] Duplicate existing plans
- [ ] Plan templates
- [ ] Collaborative planning
- [ ] Cloud sync (with backend)
- [ ] Plan comparison
- [ ] Budget tracking
- [ ] Expense logging

### Potential Tools
- [ ] Distance Calculator
- [ ] Visa Requirements Checker
- [ ] Travel Insurance Guide
- [ ] Emergency Contacts
- [ ] Language Translator
- [ ] Tipping Calculator
- [ ] Time Zone Converter

## 💡 Tips for Users

1. **Save Early, Save Often**
   - Don't lose your planning work
   - Save multiple versions

2. **Use Multiple Tools**
   - Budget → Itinerary → Packing List
   - Complete planning workflow

3. **Review Before Trip**
   - Check saved plans
   - Update as needed
   - Print or screenshot

4. **Clear Old Plans**
   - Keep Tools Hub organized
   - Delete completed trips
   - Archive important plans

## 🔧 Technical Notes

### localStorage Limits
- ~5-10MB per domain
- Plans are lightweight
- Can store hundreds of plans

### Browser Compatibility
- Works in all modern browsers
- Requires JavaScript enabled
- localStorage must be available

### Data Persistence
- Survives page refresh
- Survives browser restart
- Cleared if user clears browser data
- Not synced across devices (yet)

---

**Tools Hub Status:** ✅ Fully Functional  
**Integration:** Complete  
**User Experience:** Optimized  
**Mobile Support:** Full
