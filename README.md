# AgriGrow - PHP Website

A professional agricultural services website built with PHP, featuring a modern design and responsive layout.

## Features

- **Responsive Design**: Mobile-first approach with Tailwind CSS
- **Modular Structure**: Clean PHP includes for easy maintenance
- **Contact Form**: Functional contact form with validation
- **Modern UI**: Professional design with smooth animations
- **SEO Friendly**: Semantic HTML structure

## File Structure

```
/
├── index.php              # Main homepage
├── contact-form.php       # Contact form page
├── includes/              # PHP includes
│   ├── header.php         # Site header
│   ├── hero.php           # Hero section
│   ├── services.php       # Services section
│   ├── products.php       # Products section
│   ├── about.php          # About section
│   ├── contact.php        # Contact section
│   └── footer.php         # Site footer
├── config/                # Configuration files
│   └── database.php       # Database configuration
├── js/                    # JavaScript files
│   └── main.js            # Main JavaScript functionality
└── README.md              # This file
```

## Setup Instructions

1. **Web Server**: Place files in your web server directory (htdocs, www, etc.)

2. **Database** (Optional): If you want to store contact form submissions:
   - Create a MySQL database named `agrigrow_db`
   - Update database credentials in `config/database.php`

3. **Email Configuration**: To enable contact form emails:
   - Uncomment the mail() function in `contact-form.php`
   - Configure your server's mail settings

## Customization

### Colors and Styling
- The site uses Tailwind CSS via CDN
- Primary color scheme: Green (#059669)
- Modify colors in the HTML classes or add custom CSS

### Content
- Edit the PHP arrays in each include file to modify content
- Update images by changing the Pexels URLs
- Modify contact information in `includes/contact.php`

### Navigation
- Update navigation items in `includes/header.php`
- Add new sections by creating new include files

## Browser Support

- Modern browsers (Chrome, Firefox, Safari, Edge)
- Mobile responsive design
- Progressive enhancement approach

## Performance

- Uses CDN for Tailwind CSS and fonts
- Optimized images from Pexels
- Minimal JavaScript for enhanced functionality
- Clean, semantic HTML structure

## Contact Form Features

- Server-side validation
- XSS protection with input sanitization
- Error handling and user feedback
- Email integration ready (requires server configuration)

## License

This project is open source and available under the MIT License.#   T e c h n o p r e n e u r s h i p  
 