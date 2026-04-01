// Dark Mode Toggle
function initDarkMode() {
    const toggleBtn = document.getElementById('dark-mode-toggle');
    const htmlElement = document.documentElement;
    
    // Check for saved theme preference
    const savedTheme = localStorage.getItem('theme') || 'light';
    htmlElement.setAttribute('data-theme', savedTheme);
    
    toggleBtn.addEventListener('click', () => {
        const currentTheme = htmlElement.getAttribute('data-theme');
        const newTheme = currentTheme === 'light' ? 'dark' : 'light';
        
        htmlElement.setAttribute('data-theme', newTheme);
        localStorage.setItem('theme', newTheme);
        toggleBtn.textContent = newTheme === 'dark' ? '☀️ Light' : '🌙 Dark';
    });
    
    // Set initial button text
    toggleBtn.textContent = savedTheme === 'dark' ? '☀️ Light' : '🌙 Dark';
}

// Smooth Scrolling
function initSmoothScroll() {
    document.querySelectorAll('a[href^="#"]').forEach(anchor => {
        anchor.addEventListener('click', function (e) {
            e.preventDefault();
            const target = document.querySelector(this.getAttribute('href'));
            if (target) {
                target.scrollIntoView({ behavior: 'smooth' });
            }
        });
    });
}

// Active Section Highlighting
function initActiveSection() {
    const sections = document.querySelectorAll('section');
    const navLinks = document.querySelectorAll('nav a');
    
    window.addEventListener('scroll', () => {
        let current = '';
        
        sections.forEach(section => {
            const sectionTop = section.offsetTop;
            const sectionHeight = section.clientHeight;
            
            if (pageYOffset >= sectionTop - 200) {
                current = section.getAttribute('id');
            }
        });
    });
}

// Expandable Job Cards
function initExpandableCards() {
    const jobEntries = document.querySelectorAll('.job-entry');
    
    jobEntries.forEach(entry => {
        // Check if there's content after the job-entry to collapse
        let nextElement = entry.nextElementSibling;
        let contentToCollapse = [];
        
        while (nextElement && !nextElement.classList.contains('job-entry') && nextElement.tagName !== 'SECTION') {
            contentToCollapse.push(nextElement);
            nextElement = nextElement.nextElementSibling;
        }
        
        if (contentToCollapse.length > 0) {
            // Add expandable styling
            entry.style.cursor = 'pointer';
            entry.classList.add('expandable');
            entry.setAttribute('aria-expanded', 'true');
            
            entry.addEventListener('click', function() {
                const isExpanded = this.getAttribute('aria-expanded') === 'true';
                
                contentToCollapse.forEach(element => {
                    if (isExpanded) {
                        element.style.display = 'none';
                    } else {
                        element.style.display = '';
                    }
                });
                
                this.setAttribute('aria-expanded', !isExpanded);
                this.classList.toggle('collapsed');
            });
        }
    });
}

// Mobile Menu Toggle
function initMobileMenu() {
    const menuBtn = document.getElementById('mobile-menu-toggle');
    const nav = document.querySelector('nav');
    
    if (menuBtn) {
        menuBtn.addEventListener('click', () => {
            nav.classList.toggle('mobile-active');
            menuBtn.setAttribute('aria-expanded', nav.classList.contains('mobile-active'));
        });
        
        // Close menu when a link is clicked
        document.querySelectorAll('nav a').forEach(link => {
            link.addEventListener('click', () => {
                nav.classList.remove('mobile-active');
                menuBtn.setAttribute('aria-expanded', 'false');
            });
        });
    }
}

// Scroll to Top Button
function initScrollToTop() {
    const scrollBtn = document.getElementById('scroll-to-top');
    
    window.addEventListener('scroll', () => {
        if (window.scrollY > 300) {
            scrollBtn.classList.add('show');
        } else {
            scrollBtn.classList.remove('show');
        }
    });
    
    scrollBtn.addEventListener('click', () => {
        window.scrollTo({ top: 0, behavior: 'smooth' });
    });
}

// Initialize all features when DOM is loaded
document.addEventListener('DOMContentLoaded', () => {
    initDarkMode();
    initSmoothScroll();
    initActiveSection();
    initExpandableCards();
    initMobileMenu();
    initScrollToTop();
});
