# Contributing to Kids AI Coding Platform

First off, thank you for considering contributing to the **Kids AI Coding Platform**! We are building the world's most accessible, high-trust open-source EdTech ecosystem for kids aged 7-18.

---

## 🛠️ Tech Stack & Prerequisites

- **Framework:** CodeIgniter 4.5+ (PHP 8.2+)
- **Database:** MySQL 8.0+
- **Frontend:** Bootstrap 5, Vanilla JS, CSS Variables (Bright Design Tokens)
- **Local Web Server:** Apache / Nginx / Built-in PHP Development Server (`php spark serve`)

---

## 🚀 Quickstart Local Environment Setup

1. **Clone the Repository:**
   ```bash
   git clone https://github.com/Sukhman369/kidsaicoding.com.git
   cd kidsaicoding.com
   ```

2. **Install Composer Dependencies:**
   ```bash
   composer install
   ```

3. **Configure Environment (`.env`):**
   ```bash
   cp env .env
   ```
   Configure your MySQL database credentials in `.env`:
   ```ini
   database.default.hostname = localhost
   database.default.database = kidsaicoding
   database.default.username = root
   database.default.password = 
   database.default.DBDriver = MySQLi
   ```

4. **Run Migrations & Seeders:**
   ```bash
   php spark migrate
   ```

5. **Start Local Development Server:**
   ```bash
   php spark serve
   ```
   Open `http://localhost:8080` in your browser.

---

## 📐 Architecture & Development Guidelines

We follow a strict **MVC + Service Layer Pattern** as defined in our Technical Requirements Document (`TRD.md`):

1. **Thin Controllers:** Controllers validate incoming requests, call Services or Models, and return views or JSON. Controllers **never** execute raw business logic or SQL directly.
2. **Services (`app/Services/`):** All business rules, calculations, external API calls (Razorpay, Zoom, WhatsApp), and split fee logic live in Service classes.
3. **Models & Migrations:** All database schema changes MUST be managed via migrations (`app/Database/Migrations`). Direct SQL schema modifications are strictly forbidden.
4. **Design System:** Follow the bright & energetic design tokens (Vibrant Orange `#F97316`, Clear Blue `#0EA5E9`, Light Canvas `#F8FAFC`, 12px border radius).

---

## 💬 Paid Services & Ecosystem

- **Free Core:** Live Zoom schedules, Course management, Student/Parent/Teacher portals.
- **Paid Services:** Enterprise Consultation, White-labeling, Custom Server Deployments, and Teacher Certification Workshops.

---

## 📜 Pull Request Guidelines

1. Fork the repo and create a new feature branch: `git checkout -b feature/amazing-feature`.
2. Follow PSR-12 code styling standards for PHP.
3. Commit with descriptive commit messages: `feat(course): add interactive quiz widget`.
4. Ensure all database migrations run cleanly.
5. Push to your fork and submit a Pull Request to `main`.
