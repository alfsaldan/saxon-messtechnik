# DESIGN.md

# SAXON MESSTECHNIK WEBSITE

## Tech Stack

* Laravel 13
* Blade Template
* Tailwind CSS
* AlpineJS
* Vite
* Fully Responsive
* Offline Assets

---

# Asset Strategy

Semua asset harus disimpan lokal dalam project.

## Font

Download dan simpan ke:

```text
public/assets/fonts/
```

Font yang digunakan:

```text
Inter
```

Download:

* Inter Regular 400
* Inter Medium 500
* Inter SemiBold 600
* Inter Bold 700
* Inter ExtraBold 800

Contoh:

```text
public/assets/fonts/inter/
├── Inter-Regular.ttf
├── Inter-Medium.ttf
├── Inter-SemiBold.ttf
├── Inter-Bold.ttf
└── Inter-ExtraBold.ttf
```

---

## Images

```text
public/assets/images/
```

Struktur:

```text
hero/
products/
industries/
logo/
icons/
```

---

# Color System

## Primary

```css
#6EDC44
```

## Primary Hover

```css
#52C22D
```

## Dark Background

```css
#05080D
```

## Dark Card

```css
#0E131B
```

## White

```css
#FFFFFF
```

## Gray

```css
#6C7480
```

---

# Typography

## Font Family

```css
font-family: 'Inter', sans-serif;
```

---

# Navbar

## Layout

```text
Logo
Home
About
Product
Contact

Get A Quote
```

---

## Desktop

Height

```css
88px
```

Style

```css
background: rgba(5,8,13,.85)
backdrop-blur
```

Border Radius

```css
24px
```

---

## Menu

Home

About

Product

Contact

---

## Active Menu

Color

```css
#6EDC44
```

Bottom Border

```css
2px solid #6EDC44
```

---

## CTA Button

Text

```text
Get A Quote
```

Background

```css
#6EDC44
```

Hover

```css
#52C22D
```

---

# Home Page

Route

```php
/
```

---

## Section 1 Hero

Background:

Dark industrial environment.

Hero image:

* Sensor
* Controller
* Flow Cell

Layout:

Desktop

```text
50% Text
50% Image
```

Mobile

```text
Stack Vertical
```

---

### Hero Text

```text
Precision Sensors.
Reliable Results.
Better Processes.
```

---

### Description

High-performance sensors for chlorine, dissolved oxygen, and TSS monitoring in challenging environments.

---

### Buttons

Primary

```text
Explore Products
```

Secondary

```text
Watch Overview
```

---

## Section 2 Features

Dark floating card.

Items:

* High Accuracy
* Built To Last
* Real-time Monitoring
* Easy Integration

Desktop:

4 Columns

Mobile:

2 Columns

---

## Section 3 Products

Title:

```text
Smart Sensors for Every Need
```

Cards:

* Chlorine Sensor
* Dissolved Oxygen Sensor
* TSS Sensor

Card Content:

* Image
* Title
* Description
* Learn More

---

## Section 4 Industries

Background image:

Industrial water treatment facility.

Items:

* Water & Wastewater
* Power Generation
* Chemical Processing
* Food & Beverage
* Pulp & Paper

Dark overlay.

---

## Section 5 Why Choose Us

Cards:

### German Engineering Quality

### Expert Support

### Proven Performance

---

# About Page

Route

```php
/about
```

Hero:

```text
Engineering Precision for Smarter Water Quality Management
```

Sections:

* Company Overview
* Vision & Mission
* Technologies
* Industries
* Statistics
* CTA

---

# Product Page

Route

```php
/products
```

Sections:

### Hero

### Product Categories

* Chlorine
* DO
* TSS
* Controllers
* Accessories

### Product Listing

Desktop

```css
grid-cols-4
```

Tablet

```css
grid-cols-2
```

Mobile

```css
grid-cols-1
```

---

# Contact Page

Route

```php
/contact
```

Sections:

### Hero

### Contact Form

Fields:

* Name
* Company
* Email
* Phone
* Subject
* Message

### Contact Information

### Global Presence

---

# Get A Quote

Route

```php
/get-a-quote
```

Purpose:

Lead generation.

Fields:

* Company Name
* Contact Person
* Email
* Phone
* Industry
* Product Type
* Project Details

Button:

```text
Request Quote
```

---

# Footer

Background

```css
#05080D
```

Columns:

Company

Products

Solutions

Support

Contact

Bottom:

Copyright

Privacy Policy

Terms of Use

---

# Responsive

Mobile First

Breakpoints:

```css
sm 640px
md 768px
lg 1024px
xl 1280px
2xl 1536px
```

---

# Project Structure

```text
resources/views/

layouts/
app.blade.php

components/
navbar.blade.php
footer.blade.php
hero.blade.php
product-card.blade.php
cta.blade.php

pages/
home.blade.php
about.blade.php
products.blade.php
contact.blade.php
quote.blade.php
```

---

# Development Rules

* Semua asset lokal (offline)
* Tidak menggunakan CDN
* Font disimpan di project
* Tailwind build via Vite
* Responsive desktop/tablet/mobile
* Menggunakan Blade Component untuk reusable UI
* Navbar sticky
* Smooth scrolling
* Hover animation menggunakan Tailwind
* Optimasi Lighthouse minimal 90+
