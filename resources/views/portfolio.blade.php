<!DOCTYPE html>
<html lang="en" class="">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>{{ $personalInfo['name'] }} - Portfolio</title>
    <script>
        (function() {
            const stored = localStorage.getItem('theme');
            if (stored === 'dark' || (!stored && window.matchMedia('(prefers-color-scheme: dark)').matches)) {
                document.documentElement.classList.add('dark');
            }
        })();
    </script>
    <script src="https://cdn.tailwindcss.com"></script>
    <script>
        tailwind.config = { darkMode: 'class' }
    </script>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css">
    <style>
        html { scroll-behavior: smooth; }
        body { transition: background-color 0.3s ease, color 0.3s ease; }
        .gradient-text {
            background: linear-gradient(135deg, #667eea 0%, #764ba2 100%);
            -webkit-background-clip: text;
            -webkit-text-fill-color: transparent;
            background-clip: text;
        }
        .card-hover {
            transition: transform 0.3s ease, box-shadow 0.3s ease, background-color 0.3s ease;
        }
        .card-hover:hover {
            transform: translateY(-5px);
            box-shadow: 0 20px 40px rgba(0, 0, 0, 0.1);
        }
        .nav-link { position: relative; }
        .nav-link::after {
            content: '';
            position: absolute;
            width: 0;
            height: 2px;
            bottom: 0;
            left: 0;
            background: linear-gradient(135deg, #667eea 0%, #764ba2 100%);
            transition: width 0.3s ease;
        }
        .nav-link:hover::after,
        .nav-link.active::after { width: 100%; }
        .nav-link.active { font-weight: 600; }
    </style>
</head>
<body class="bg-gray-50 text-gray-800 dark:bg-gray-900 dark:text-gray-200 transition-colors duration-300">
    <!-- Navigation -->
    <nav class="fixed top-0 left-0 right-0 bg-white/90 dark:bg-gray-900/90 backdrop-blur-md z-50 shadow-sm transition-colors duration-300">
        <div class="max-w-6xl mx-auto px-4 py-4">
            <div class="flex justify-between items-center">
                <a href="#" class="text-2xl font-bold gradient-text">{{ $personalInfo['name'] }}</a>

                <!-- Desktop nav -->
                <div class="hidden md:flex items-center space-x-8">
                    <a href="#about" class="nav-link text-gray-600 dark:text-gray-400 hover:text-gray-900 dark:hover:text-white">About</a>
                    <a href="#education" class="nav-link text-gray-600 dark:text-gray-400 hover:text-gray-900 dark:hover:text-white">Education</a>
                    <a href="#projects" class="nav-link text-gray-600 dark:text-gray-400 hover:text-gray-900 dark:hover:text-white">Projects</a>
                    <a href="#github" class="nav-link text-gray-600 dark:text-gray-400 hover:text-gray-900 dark:hover:text-white">GitHub</a>
                    <a href="#contact" class="nav-link text-gray-600 dark:text-gray-400 hover:text-gray-900 dark:hover:text-white">Contact</a>
                    <button id="theme-toggle-desktop" class="p-2 rounded-full hover:bg-gray-200 dark:hover:bg-gray-700 transition-colors" aria-label="Toggle dark mode">
                        <i class="fas fa-sun text-gray-600 dark:text-yellow-300 text-lg hidden dark:block"></i>
                        <i class="fas fa-moon text-gray-600 dark:hidden text-lg"></i>
                    </button>
                </div>

                <!-- Mobile hamburger + toggle -->
                <div class="md:hidden flex items-center space-x-3">
                    <button id="theme-toggle-mobile" class="p-2 rounded-full hover:bg-gray-200 dark:hover:bg-gray-700 transition-colors" aria-label="Toggle dark mode">
                        <i class="fas fa-sun text-gray-600 dark:text-yellow-300 text-lg hidden dark:block"></i>
                        <i class="fas fa-moon text-gray-600 dark:hidden text-lg"></i>
                    </button>
                    <button id="mobile-menu-btn" class="p-2 rounded-full hover:bg-gray-200 dark:hover:bg-gray-700 transition-colors" aria-label="Open menu">
                        <i class="fas fa-bars text-gray-600 dark:text-gray-300 text-lg"></i>
                    </button>
                </div>
            </div>

            <!-- Mobile menu dropdown -->
            <div id="mobile-menu" class="hidden md:hidden mt-4 pb-4 border-t border-gray-200 dark:border-gray-700 pt-4 space-y-3">
                <a href="#about" class="nav-link block text-gray-600 dark:text-gray-400 hover:text-gray-900 dark:hover:text-white py-2">About</a>
                <a href="#education" class="nav-link block text-gray-600 dark:text-gray-400 hover:text-gray-900 dark:hover:text-white py-2">Education</a>
                <a href="#projects" class="nav-link block text-gray-600 dark:text-gray-400 hover:text-gray-900 dark:hover:text-white py-2">Projects</a>
                <a href="#github" class="nav-link block text-gray-600 dark:text-gray-400 hover:text-gray-900 dark:hover:text-white py-2">GitHub</a>
                <a href="#contact" class="nav-link block text-gray-600 dark:text-gray-400 hover:text-gray-900 dark:hover:text-white py-2">Contact</a>
            </div>
        </div>
    </nav>

    <!-- Hero Section / Basic Information -->
    <section id="about" class="min-h-screen flex items-center justify-center pt-20 bg-gradient-to-br from-indigo-50 via-white to-purple-50 dark:from-gray-900 dark:via-gray-900 dark:to-gray-800 transition-colors duration-300">
        <div class="max-w-6xl mx-auto px-4 py-16">
            <div class="flex flex-col md:flex-row items-center gap-12">
                <div class="flex-shrink-0">
                    <img src="https://avatars.githubusercontent.com/u/144599852?v=4/seed/avatar/300/300" 
                         alt="{{ $personalInfo['name'] }}" 
                         class="w-64 h-64 rounded-full object-cover shadow-2xl border-4 border-white dark:border-gray-700">
                </div>
                <div class="text-center md:text-left">
                    <h1 class="text-5xl font-bold mb-4">
                        Hi, I'm <span class="gradient-text">{{ $personalInfo['name'] }}</span>
                    </h1>
                    <h2 class="text-2xl text-gray-600 dark:text-gray-400 mb-6">{{ $personalInfo['title'] }}</h2>
                    <p class="text-lg text-gray-600 dark:text-gray-400 mb-8 max-w-xl leading-relaxed">{{ $personalInfo['bio'] }}</p>
                    <div class="flex flex-wrap justify-center md:justify-start gap-4">
                        <a href="#contact" class="px-6 py-3 bg-gradient-to-r from-indigo-500 to-purple-600 text-white rounded-full font-semibold hover:shadow-lg transition-all">
                            Get In Touch
                        </a>
                        <a href="#projects" class="px-6 py-3 border-2 border-indigo-500 text-indigo-600 dark:text-indigo-400 rounded-full font-semibold hover:bg-indigo-50 dark:hover:bg-indigo-950 transition-all">
                            View Projects
                        </a>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- Education Section -->
    <section id="education" class="py-20 bg-white dark:bg-gray-800 transition-colors duration-300">
        <div class="max-w-6xl mx-auto px-4">
            <h2 class="text-4xl font-bold text-center mb-4 gradient-text">Educational Background</h2>
            <p class="text-center text-gray-600 dark:text-gray-400 mb-12">My academic journey and certifications</p>
            
            <div class="space-y-8">
                @foreach($education as $edu)
                <div class="card-hover bg-gray-50 dark:bg-gray-900 rounded-2xl p-8 shadow-sm">
                    <div class="flex flex-col md:flex-row md:items-start gap-6">
                        <div class="flex-shrink-0">
                            <div class="w-16 h-16 bg-gradient-to-br from-indigo-500 to-purple-600 rounded-full flex items-center justify-center">
                                <i class="fas fa-graduation-cap text-2xl text-white"></i>
                            </div>
                        </div>
                        <div class="flex-grow">
                            <div class="flex flex-col md:flex-row md:items-center md:justify-between mb-2">
                                <h3 class="text-xl font-bold text-gray-800 dark:text-gray-100">{{ $edu['institution'] }}</h3>
                                <span class="text-indigo-600 dark:text-indigo-400 font-semibold">{{ $edu['year'] }}</span>
                            </div>
                            <p class="text-lg text-gray-700 dark:text-gray-300 font-medium mb-2">{{ $edu['degree'] }}</p>
                            <p class="text-gray-600 dark:text-gray-400">{{ $edu['description'] }}</p>
                        </div>
                    </div>
                </div>
                @endforeach
            </div>
        </div>
    </section>

    <!-- Projects Section -->
    <section id="projects" class="py-20 bg-gray-50 dark:bg-gray-900 transition-colors duration-300">
        <div class="max-w-6xl mx-auto px-4">
            <h2 class="text-4xl font-bold text-center mb-4 gradient-text">My Projects</h2>
            <p class="text-center text-gray-600 dark:text-gray-400 mb-12">A showcase of my recent work</p>
            
            <div class="grid md:grid-cols-2 gap-8">
                @foreach($projects as $project)
                <div class="card-hover bg-white dark:bg-gray-800 rounded-2xl overflow-hidden shadow-sm">
                    <img src="{{ $project['image'] }}" 
                         alt="{{ $project['title'] }}" 
                         class="w-full h-48 object-cover">
                    <div class="p-6">
                        <h3 class="text-xl font-bold text-gray-800 dark:text-gray-100 mb-2">{{ $project['title'] }}</h3>
                        <p class="text-gray-600 dark:text-gray-400 mb-4">{{ $project['description'] }}</p>
                        <div class="flex flex-wrap gap-2 mb-4">
                            @foreach($project['technologies'] as $tech)
                            <span class="px-3 py-1 bg-indigo-100 dark:bg-indigo-900 text-indigo-700 dark:text-indigo-300 text-sm rounded-full">{{ $tech }}</span>
                            @endforeach
                        </div>
                        <div class="flex gap-4">
                            <a href="{{ $project['github'] }}" 
                               target="_blank" 
                               class="flex items-center gap-2 text-gray-600 dark:text-gray-400 hover:text-indigo-600 dark:hover:text-indigo-400 transition-colors">
                                <i class="fab fa-github text-xl"></i>
                                <span>Code</span>
                            </a>
                            <a href="{{ $project['demo'] }}" 
                               target="_blank" 
                               class="flex items-center gap-2 text-gray-600 dark:text-gray-400 hover:text-indigo-600 dark:hover:text-indigo-400 transition-colors">
                                <i class="fas fa-external-link-alt text-xl"></i>
                                <span>Demo</span>
                            </a>
                        </div>
                    </div>
                </div>
                @endforeach
            </div>
        </div>
    </section>

    <!-- GitHub Section -->
    <section id="github" class="py-20 bg-white dark:bg-gray-800 transition-colors duration-300">
        <div class="max-w-6xl mx-auto px-4">
            <h2 class="text-4xl font-bold text-center mb-4 gradient-text">GitHub Repositories</h2>
            <p class="text-center text-gray-600 dark:text-gray-400 mb-12">Open source projects and contributions</p>
            
            <div class="grid md:grid-cols-2 lg:grid-cols-3 gap-6">
                @foreach($githubRepos as $repo)
                <a href="{{ $repo['url'] }}" 
                   target="_blank" 
                   class="card-hover block bg-gray-50 dark:bg-gray-900 rounded-xl p-6 border border-gray-100 dark:border-gray-700">
                    <div class="flex items-start gap-4">
                        <div class="flex-shrink-0">
                            <div class="w-12 h-12 bg-gray-800 dark:bg-gray-700 rounded-lg flex items-center justify-center">
                                <i class="fab fa-github text-2xl text-white"></i>
                            </div>
                        </div>
                        <div>
                            <h3 class="font-bold text-gray-800 dark:text-gray-100 hover:text-indigo-600 dark:hover:text-indigo-400 transition-colors">{{ $repo['name'] }}</h3>
                            <p class="text-sm text-gray-600 dark:text-gray-400 mt-1">{{ $repo['description'] }}</p>
                        </div>
                    </div>
                </a>
                @endforeach
            </div>
            
            <div class="text-center mt-8">
                <a href="https://github.com/ronrhone" 
                   target="_blank" 
                   class="inline-flex items-center gap-2 px-6 py-3 bg-gray-800 dark:bg-gray-700 text-white rounded-full font-semibold hover:bg-gray-700 dark:hover:bg-gray-600 transition-colors">
                    <i class="fab fa-github"></i>
                    View All on GitHub
                </a>
            </div>
        </div>
    </section>

    <!-- Contact Section -->
    <section id="contact" class="py-20 bg-gradient-to-br from-indigo-50 via-white to-purple-50 dark:from-gray-900 dark:via-gray-900 dark:to-gray-800 transition-colors duration-300">
        <div class="max-w-6xl mx-auto px-4">
            <h2 class="text-4xl font-bold text-center mb-4 gradient-text">Get In Touch</h2>
            <p class="text-center text-gray-600 dark:text-gray-400 mb-12">Feel free to reach out for collaborations or just a friendly hello</p>
            
            <div class="max-w-2xl mx-auto">
                <div class="grid md:grid-cols-3 gap-8 mb-12">
                    <div class="text-center">
                        <div class="w-16 h-16 bg-gradient-to-br from-indigo-500 to-purple-600 rounded-full flex items-center justify-center mx-auto mb-4">
                            <i class="fas fa-envelope text-2xl text-white"></i>
                        </div>
                        <h3 class="font-semibold text-gray-800 dark:text-gray-100 mb-1">Email</h3>
                        <a href="mailto:{{ $personalInfo['email'] }}" class="text-indigo-600 dark:text-indigo-400 hover:underline">{{ $personalInfo['email'] }}</a>
                    </div>
                    <div class="text-center">
                        <div class="w-16 h-16 bg-gradient-to-br from-indigo-500 to-purple-600 rounded-full flex items-center justify-center mx-auto mb-4">
                            <i class="fas fa-phone text-2xl text-white"></i>
                        </div>
                        <h3 class="font-semibold text-gray-800 dark:text-gray-100 mb-1">Phone</h3>
                        <a href="tel:{{ $personalInfo['phone'] }}" class="text-indigo-600 dark:text-indigo-400 hover:underline">{{ $personalInfo['phone'] }}</a>
                    </div>
                    <div class="text-center">
                        <div class="w-16 h-16 bg-gradient-to-br from-indigo-500 to-purple-600 rounded-full flex items-center justify-center mx-auto mb-4">
                            <i class="fas fa-map-marker-alt text-2xl text-white"></i>
                        </div>
                        <h3 class="font-semibold text-gray-800 dark:text-gray-100 mb-1">Location</h3>
                        <p class="text-indigo-600 dark:text-indigo-400">{{ $personalInfo['location'] }}</p>
                    </div>
                </div>
                
                <div class="flex justify-center gap-6">
                    <a href="{{ $personalInfo['github'] }}" 
                       target="_blank" 
                       class="w-12 h-12 bg-gray-800 dark:bg-gray-700 rounded-full flex items-center justify-center text-white hover:bg-gray-700 dark:hover:bg-gray-600 transition-colors">
                        <i class="fab fa-github text-xl"></i>
                    </a>
                    <a href="{{ $personalInfo['linkedin'] }}" 
                       target="_blank" 
                       class="w-12 h-12 bg-blue-700 rounded-full flex items-center justify-center text-white hover:bg-blue-600 transition-colors">
                        <i class="fab fa-linkedin-in text-xl"></i>
                    </a>
                    <a href="mailto:{{ $personalInfo['email'] }}" 
                       class="w-12 h-12 bg-red-500 rounded-full flex items-center justify-center text-white hover:bg-red-400 transition-colors">
                        <i class="fas fa-envelope text-xl"></i>
                    </a>
                </div>
            </div>
        </div>
    </section>

    <!-- Footer -->
    <footer class="bg-gray-900 dark:bg-gray-950 text-white py-8 transition-colors duration-300">
        <div class="max-w-6xl mx-auto px-4 text-center">
            <p class="text-gray-400">&copy; {{ date('Y') }} {{ $personalInfo['name'] }}. All rights reserved.</p>
            <p class="text-gray-500 text-sm mt-2">Built with Laravel & Blade</p>
        </div>
    </footer>

    <script>
        // Theme toggle logic
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

        // Mobile menu
        document.getElementById('mobile-menu-btn').addEventListener('click', function() {
            document.getElementById('mobile-menu').classList.toggle('hidden');
        });

        // Smooth scroll
        document.querySelectorAll('a[href^="#"]').forEach(anchor => {
            anchor.addEventListener('click', function (e) {
                e.preventDefault();
                const target = document.querySelector(this.getAttribute('href'));
                if (target) {
                    target.scrollIntoView({ behavior: 'smooth', block: 'start' });
                    document.getElementById('mobile-menu').classList.add('hidden');
                }
            });
        });

        // Active nav link via IntersectionObserver
        const sections = document.querySelectorAll('section[id]');
        const navLinks = document.querySelectorAll('.nav-link');

        const observer = new IntersectionObserver((entries) => {
            entries.forEach(entry => {
                if (entry.isIntersecting) {
                    navLinks.forEach(link => {
                        link.classList.toggle('active', link.getAttribute('href') === '#' + entry.target.id);
                    });
                }
            });
        }, { rootMargin: '-40% 0px -55% 0px' });

        sections.forEach(section => observer.observe(section));

        // Navbar shadow on scroll
        window.addEventListener('scroll', function() {
            document.querySelector('nav').classList.toggle('shadow-md', window.scrollY > 50);
        });
    </script>
</body>
</html>
