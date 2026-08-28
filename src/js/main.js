import '../css/style.css';

document.getElementById('current-year').textContent = new Date().getFullYear();

function getTheme() {
    return localStorage.getItem('theme');
}

function setTheme(mode) {
    localStorage.setItem('theme', mode);
}

function applyTheme(dark) {
    document.documentElement.classList.toggle('dark', dark);
}

function toggleTheme() {
    const isDark = document.documentElement.classList.contains('dark');
    applyTheme(!isDark);
    setTheme(!isDark ? 'dark' : 'light');
}

document.getElementById('theme-toggle-desktop').addEventListener('click', toggleTheme);
document.getElementById('theme-toggle-mobile').addEventListener('click', toggleTheme);

document.getElementById('mobile-menu-btn').addEventListener('click', function () {
    document.getElementById('mobile-menu').classList.toggle('hidden');
});

document.querySelectorAll('a[href^="#"]').forEach((anchor) => {
    anchor.addEventListener('click', function (e) {
        e.preventDefault();
        const target = document.querySelector(this.getAttribute('href'));
        if (target) {
            target.scrollIntoView({ behavior: 'smooth', block: 'start' });
            document.getElementById('mobile-menu').classList.add('hidden');
        }
    });
});

const sections = document.querySelectorAll('section[id]');
const navLinks = document.querySelectorAll('.nav-link');

const observer = new IntersectionObserver(
    (entries) => {
        entries.forEach((entry) => {
            if (entry.isIntersecting) {
                navLinks.forEach((link) => {
                    link.classList.toggle('active', link.getAttribute('href') === '#' + entry.target.id);
                });
            }
        });
    },
    { rootMargin: '-40% 0px -55% 0px' }
);

sections.forEach((section) => observer.observe(section));

window.addEventListener('scroll', function () {
    document.querySelector('nav').classList.toggle('shadow-md', window.scrollY > 50);
});
