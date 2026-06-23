# Priyamvada Singh - Website (PHP Version)

## 📋 Overview
This is a PHP-based website for Priyamvada Singh's Tarot and Spiritual Guidance services. The website includes:
- Home page with hero section and services overview
- About page with biography and journey timeline
- Services page with detailed service listings and FAQ
- Contact page with form handling and contact information

## 🎯 Key Features
✅ **Reusable Header & Footer** - All pages share the same header (navbar) and footer
✅ **Dynamic Navigation** - Active page highlighting in navigation
✅ **Responsive Design** - Mobile-friendly CSS styling
✅ **Form Handling** - Contact form with PHP validation
✅ **Clean Structure** - Organized file system with separate includes

## 📁 File Structure
```
priyamvada-php/
├── header.php           # Shared header (navbar) - included on all pages
├── footer.php           # Shared footer - included on all pages
├── index.php            # Home page
├── about.php            # About page
├── services.php         # Services & Courses page
├── contact.php          # Contact & Booking page
├── css/
│   └── style.css        # Main styling
├── js/
│   └── main.js          # JavaScript functionality
└── README.md            # This file
```

## 🚀 Setup Instructions

### Prerequisites
- PHP 7.0 or higher
- A web server (Apache, Nginx, or built-in PHP server)
- No database required for basic functionality

### Local Development (Using PHP Built-in Server)
1. Navigate to the project directory:
   ```bash
   cd priyamvada-php
   ```

2. Start the PHP server:
   ```bash
   php -S localhost:8000
   ```

3. Open your browser and visit:
   ```
   http://localhost:8000
   ```

### Deployment (On Hosting Server)
1. Extract the zip file to your hosting server's public directory (usually `public_html/` or `www/`)
2. Ensure your hosting provider supports PHP
3. Update contact information in `contact.php` if needed
4. Access the website via your domain

## 📝 Important Notes

### Contact Form Handling
The contact form in `contact.php` currently:
- ✅ Validates all required fields
- ✅ Checks email validity
- ✅ Sanitizes user input
- ✅ Shows success/error messages

To actually send emails, uncomment the mail() function in contact.php:
```php
$to = "your-email@example.com";
$subject = "New Contact Form Submission from $fname $lname";
$body = "Name: $fname $lname\nEmail: $email\nPhone: $phone\nService: $service\n\nMessage:\n$message";
mail($to, $subject, $body);
```

### Customization
1. **Update Contact Information**
   - Edit phone, email, and location in `contact.php`
   - Update footer links in `footer.php`

2. **Update Navigation Links**
   - Edit navbar links in `header.php`
   - Ensure page names match your file names

3. **Styling Changes**
   - Modify CSS variables in `css/style.css`
   - Update colors, fonts, and spacing as needed

4. **Replace Placeholder Images**
   - The site uses emoji placeholders. Replace with actual images if needed
   - Update image URLs in respective `.php` files

## 🔄 How the Header & Footer Work

### Header (header.php)
- Included at the beginning of each page using `<?php include 'header.php'; ?>`
- Sets page title and description via PHP variables:
  ```php
  $page_title = "Your Page Title";
  $page_description = "Your page description";
  include 'header.php';
  ```
- Automatically highlights active navigation link based on current page

### Footer (footer.php)
- Included at the end of each page using `<?php include 'footer.php'; ?>`
- Contains closing HTML tags for the page
- Includes JavaScript file reference

### Example (from index.php):
```php
<?php
$page_title = "Priyamvada Singh | Tarot Mentor & Spiritual Guide";
$page_description = "Connect with your inner wisdom...";
include 'header.php';
?>

<!-- Page content here -->

<?php include 'footer.php'; ?>
```

## 🐛 Troubleshooting

### Pages Not Loading
- Check that PHP is installed and running
- Verify file permissions are correct
- Ensure `.php` extensions are recognized by your server

### Styling Issues
- Clear browser cache (Ctrl+Shift+Delete)
- Check that CSS files are in the correct `css/` folder
- Verify CSS file paths in `header.php`

### Form Not Working
- Check PHP error logs on your server
- Verify form method is POST
- Test with a simple echo statement in contact.php

### Navigation Links Broken
- Ensure all `.html` links are changed to `.php`
- Check that file names match exactly (case-sensitive on Linux servers)

## 📧 Mail Configuration
For email functionality, you may want to use:
1. **PHPMailer** - More reliable email sending
2. **SendGrid/Mailgun APIs** - Professional email services
3. **Contact form services** - Formspree, Netlify Forms, etc.

Example using PHPMailer would require additional installation.

## 📱 Mobile Responsive
The site is fully responsive and works on:
- Desktop browsers
- Tablets
- Mobile devices (iOS & Android)

## 🔒 Security Notes
- Always validate and sanitize user input
- Use HTTPS in production
- Don't expose sensitive information in comments
- Keep PHP updated for security patches
- Consider adding CSRF tokens for forms in production

## 📞 Support
For modifications or issues with this PHP conversion, ensure your hosting:
- Supports PHP 7.0+
- Has `error_reporting` enabled during development
- Has proper file permissions (644 for files, 755 for directories)

## 📄 License
All content and design by MMBO. Copyright © 2025 Priyamvada Singh.

---

**Happy coding! 🔮✨**
