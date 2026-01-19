# 🎨 CSS Color Reference & Styling Guide

## Color Palette

```css
/* Main Colors */
--primary-blue: #0066CC;      /* Biru Utama - Headings, Links, Primary Buttons */
--dark-blue: #004C99;         /* Biru Gelap - Hover states, Gradients */
--light-blue: #E8F4F8;        /* Biru Muda - Backgrounds, Hover states */
--accent-light: #ADD8E6;      /* Biru Aksen - Borders, Dividers */

/* Neutral Colors */
--white: #FFFFFF;             /* Putih - Main background */
--off-white: #F0F8FB;         /* Putih Abu - Secondary background */
--text-dark: #333333;         /* Teks Gelap - Main text */
--text-muted: #666666;        /* Teks Muted - Secondary text */
```

---

## Elemen Styling

### 📌 Navbar
```
Background: Gradient white to light blue
Border: 2px solid #ADD8E6 (light blue)
Shadow: 0 4px 15px rgba(0,102,204,0.1)
Logo Color: #0066CC (primary blue)
Links: #333333 on hover: #0066CC
```

### 🏷️ Cards
```
Background: Gradient white to off-white
Border: 1px solid #ADD8E6
Shadow: 0 8px 20px rgba(0,102,204,0.08)
Border Radius: 12px
Hover: Box shadow 0 12px 30px, translateY(-2px)
```

### 🔵 Buttons

#### Primary Button
```
Background: Gradient #0066CC to #004C99
Color: White
Shadow: 0 4px 15px rgba(0,102,204,0.3)
Hover: brightness(0.95), larger shadow
```

#### Secondary Button
```
Background: #E8F4F8 (light blue)
Color: #0066CC (primary blue)
Border: 1px solid #ADD8E6
Hover: #ADD8E6 background, white text
```

#### Danger Button
```
Background: Gradient #DC3545 to #C82333
Color: White
```

### 📝 Form Elements

#### Labels
```
Color: #0066CC (primary blue)
Font Weight: 600
```

#### Inputs
```
Border: 1px solid #ADD8E6
Background: #FFFFFF
Focus: 
  - Border color: #0066CC
  - Shadow: 0 0 12px rgba(0,102,204,0.2)
  - Background: #F5FAFE
```

#### Textarea
```
Same as input styling
```

### 📊 Tables

#### Table Header
```
Background: #0066CC (primary blue)
Text Color: White
Border: 1px solid #0052A3
Font Weight: 600
```

#### Table Rows
```
Text Color: #333333
Border: 1px solid #E8F4F8
Hover: Background #F5FAFE
```

### ⚠️ Alerts

#### Success Alert
```
Background: #E8F5E9 (light green)
Text: #2E7D32 (dark green)
Border: 1px solid #A5D6A7
Border Left: 4px
```

#### Danger Alert
```
Background: #FFEBEE (light red)
Text: #C62828 (dark red)
Border: 1px solid #EF9A9A
Border Left: 4px
```

#### Info Alert
```
Background: #E8F4F8 (light blue)
Text: #0066CC (primary blue)
Border: 1px solid #ADD8E6
Border Left: 4px
```

---

## Typography

### Headings
```
Color: #0066CC (primary blue)
Font Weight: 700-800
Sizes: h1(2rem+), h2(1.75rem), h3(1.5rem), h4(1.25rem)
```

### Paragraphs
```
Color: #555555 (muted)
Line Height: 1.6-1.8
Font Size: 1rem
```

### Links
```
Color: #0066CC
On Hover: #004C99 (dark blue)
Text Decoration: Underline on hover
Transition: 0.2s
```

---

## Shadow System

### Shadow Small (sm)
```
box-shadow: 0 4px 12px rgba(0,102,204,0.08);
```

### Shadow Normal
```
box-shadow: 0 8px 20px rgba(0,102,204,0.1);
```

### Shadow Large (lg)
```
box-shadow: 0 12px 30px rgba(0,102,204,0.15);
```

---

## Gradient Backgrounds

### Navbar/Header Gradient
```
background: linear-gradient(90deg, #FFFFFF 0%, #F0F8FB 100%);
```

### Hero Section Gradient
```
background: linear-gradient(135deg, #E8F4F8 0%, #F5FAFE 50%, #FFFFFF 100%);
```

### Button Gradient
```
background: linear-gradient(180deg, #0066CC, #004C99);
```

### Body Gradient
```
background: linear-gradient(180deg, #FFFFFF 0%, #F0F8FB 100%);
```

---

## Spacing Scale

```
Tiny:    4px
Small:   8px
Medium:  16px
Large:   24px
XL:      32px
2XL:     48px
3XL:     64px
```

---

## Border Radius

```
Small:   4px (minimal)
Medium:  8px (normal)
Large:   12px (cards, buttons)
Full:    50% (avatars, circles)
```

---

## Transitions

```
Fast:     0.15s ease
Normal:   0.3s ease
Slow:     0.5s ease
```

---

## Responsive Breakpoints

```
Mobile:  < 768px
Tablet:  768px - 1023px
Desktop: 1024px+
```

---

## Usage Examples

### Card Component
```html
<div class="card shadow-lg" style="border: none;">
  <div class="card-body p-4">
    <h5 class="card-title" style="color: #0066CC; font-weight: 700;">
      Title
    </h5>
    <p class="card-text text-muted">Description</p>
  </div>
</div>
```

### Button
```html
<a href="#" class="btn btn-primary">Primary Action</a>
<a href="#" class="btn btn-secondary">Secondary Action</a>
<a href="#" class="btn btn-danger">Delete</a>
```

### Alert
```html
<div class="alert alert-success">Success message!</div>
<div class="alert alert-danger">Error message!</div>
```

### Form Group
```html
<div class="mb-4">
  <label for="input" class="form-label">Label</label>
  <input type="text" class="form-control" id="input" placeholder="Placeholder">
</div>
```

---

## Best Practices

✅ Gunakan `--primary-blue` untuk elemen utama
✅ Gunakan shadow classes untuk depth
✅ Gunakan gradient untuk background subtly
✅ Maintain consistent spacing
✅ Use emojis for visual interest
✅ Keep text contrast high (WCAG AA)
✅ Use transitions for smooth interactions
✅ Test on mobile devices

---

*Last Updated: 2024*
*Color Theme: White & Light Blue*
