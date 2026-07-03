# Kids AI Coding - Product Requirements Document (PRD)

## 1. Project Vision
Create a modern, high-trust, and engaging coding education platform for children aged 7-18 in India. The platform focuses on live interactive classes (Zoom) and recorded content, providing a safe and progressive learning environment.

## 2. Target Audience
*   **Students (7-18):** Need an exciting, gamified, and easy-to-use interface.
*   **Parents:** Need transparency, progress tracking, and professional reports.
*   **Teachers:** Need efficient batch management and attendance tracking tools.
*   **Admins:** Need a centralized cockpit for managing courses, payments, and users.

## 3. Design System (Version 2.0 - Bright & Energetic)
The theme must be as **bright as possible**, avoiding dark "hacker" elements.

*   **Primary Color:** #F97316 (Vibrant Orange) - *Used for main actions, headers, and highlights.*
*   **Secondary Color:** #0EA5E9 (Clear Blue) - *Used for secondary actions, accents, and information.*
*   **Background:** #F8FAFC (Clean White/Gray) - *Used for the main canvas to keep it bright.*
*   **Success:** #22C55E (Green)
*   **Warning:** #F59E0B (Amber)
*   **Danger:** #EF4444 (Red)
*   **Border Radius:** 12px (Smooth, friendly corners)
*   **Shadows:** Soft, modern elevation (low intensity)
*   **Typography:** 
    *   **Headings:** Poppins (Bold, friendly)
    *   **Body Text:** Inter (Clean, readable)

## 4. Phase 1 Scope (Technically Easy MVP)
The goal for Phase 1 is to establish the UI/UX foundation and the public-facing funnel with minimal backend complexity.

### A. Public Website
*   **Homepage:** Hero section with "Book Free Demo", Trust markers, Popular Courses, Learning Journey.
*   **Course Listing:** Filterable grid of available coding tracks.
*   **Course Detail:** Full syllabus, pricing, and batch details.
*   **Auth:** Simple Registration and Login layouts.

### B. Portal Foundations (Static UI Skeletons)
*   **Universal Portal Layout:** A bright, responsive sidebar-based layout used across all roles.
*   **Student Dashboard:** Upcoming classes, recent achievements, and course progress.
*   **Parent Dashboard:** Child's progress overview and attendance summary.
*   **Teacher Dashboard:** Today's batch schedule and pending assignments.
*   **Admin Panel:** Overview stats (Total students, revenue) and navigation to management modules.

## 5. Development Guidelines
*   **Framework:** CodeIgniter 4 (PHP 8.2+).
*   **Styling:** Vanilla CSS (using CSS Variables for the theme).
*   **Responsive:** Mobile-first approach for all pages.
*   **Aesthetics:** Premium, modern EdTech feeling. Avoid placeholders; use vibrant, curated colors.