# Agency Website
A dynamic website for abroad student consultancy built with Laravel and Bootstrap. Most pages are static, except the admin panel for managing student forms and countries.

---

## 🔹 Features
- Static frontend pages: Home, About Us, Services, Contact  
- Admin panel (dynamic):  
  - Read student application forms  
  - Upload and manage country information  
- Responsive design for desktop and mobile  
- Clean and professional UI for agency consultancy  

---

## 🔹 Screenshots
Place screenshots in `agencyadmin/project_overview_agency` folder in your repo:

![Homepage](agencyadmin/project_overview_agency/screencapture-127-0-0-1-8000-2025-11-19-13_56_44.png)
![Services Page](agencyadmin/project_overview_agency/screencapture-127-0-0-1-8000-scholarships-2025-11-19-13_59_19.png)
![dynamic](agencyadmin/project_overview_agency/screencapture-127-0-0-1-8000-admin-scholarship-australia-2025-11-19-14_16_44.png)
![Admin Panel](agencyadmin/project_overview_agency/screencapture-127-0-0-1-8000-view-inquiry-2025-11-19-14_16_29.png)
![australia](agencyadmin/project_overview_agency/screencapture-127-0-0-1-8000-scholarships-australia-2025-11-19-13_59_40.png)
![contact](agencyadmin/project_overview_agency/screencapture-127-0-0-1-8000-contact-2025-11-19-13_59_59.png)
---

## 🔹 Tech Stack
- **Backend:** PHP, Laravel  
- **Frontend:** HTML, CSS, Bootstrap, JavaScript  
- **Database:** MySQL  
- **Others:** Composer, Git

---

## 🔹 Installation Steps (Local Use)
```bash
# Clone the repository
git clone https://github.com/omerlatifi/Agency_website_Laravel.git

# Move into the project directory
cd News-Portal

# Install PHP dependencies
composer install

# Install Node.js dependencies and compile assets
npm install
npm run dev

# Copy environment file
cp .env.example .env

# Generate Laravel app key
php artisan key:generate

# Run migrations
php artisan migrate

# Serve the project locally
php artisan serve
```
---
## 🔹Demo
- **Local preview only:** Open http://127.0.0.1:8000 after running php artisan serve.
---
## 🔹Author
- **Name:** Omer Latifi
- **GitHub:** https://github.com/omerlatifi
- **Portfolio:** https://yourportfolio.com
---

