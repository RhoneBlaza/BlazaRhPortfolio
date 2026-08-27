<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>{{ $personalInfo['name'] }} - Portfolio</title>
    <script src="https://cdn.tailwindcss.com"></script>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css">
    <style>
        html {
            scroll-behavior: smooth;
        }
        .gradient-text {
            background: linear-gradient(135deg, #667eea 0%, #764ba2 100%);
            -webkit-background-clip: text;
            -webkit-text-fill-color: transparent;
            background-clip: text;
        }
        .card-hover {
            transition: transform 0.3s ease, box-shadow 0.3s ease;
        }
        .card-hover:hover {
            transform: translateY(-5px);
            box-shadow: 0 20px 40px rgba(0, 0, 0, 0.1);
        }
        .nav-link {
            position: relative;
        }
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
        .nav-link.active::after {
            width: 100%;
        }
        .nav-link.active {
            color: #111827;
            font-weight: 600;
        }
    </style>
</head>
<body class="bg-gray-50 text-gray-800">
    <!-- Navigation -->
    <nav class="fixed top-0 left-0 right-0 bg-white/90 backdrop-blur-md z-50 shadow-sm">
        <div class="max-w-6xl mx-auto px-4 py-4">
            <div class="flex justify-between items-center">
                <a href="#" class="text-2xl font-bold gradient-text">{{ $personalInfo['name'] }}</a>
                <div class="hidden md:flex space-x-8">
                    <a href="#about" class="nav-link text-gray-600 hover:text-gray-900">About</a>
                    <a href="#education" class="nav-link text-gray-600 hover:text-gray-900">Education</a>
                    <a href="#projects" class="nav-link text-gray-600 hover:text-gray-900">Projects</a>
                    <a href="#github" class="nav-link text-gray-600 hover:text-gray-900">GitHub</a>
                    <a href="#contact" class="nav-link text-gray-600 hover:text-gray-900">Contact</a>
                </div>
            </div>
        </div>
    </nav>

    <!-- Hero Section / Basic Information -->
    <section id="about" class="min-h-screen flex items-center justify-center pt-20 bg-gradient-to-br from-indigo-50 via-white to-purple-50">
        <div class="max-w-6xl mx-auto px-4 py-16">
            <div class="flex flex-col md:flex-row items-center gap-12">
                <div class="flex-shrink-0">
                    <img src="https://avatars.githubusercontent.com/u/144599852?v=4/seed/avatar/300/300" 
                         alt="{{ $personalInfo['name'] }}" 
                         class="w-64 h-64 rounded-full object-cover shadow-2xl border-4 border-white">
                </div>
                <div class="text-center md:text-left">
                    <h1 class="text-5xl font-bold mb-4">
                        Hi, I'm <span class="gradient-text">{{ $personalInfo['name'] }}</span>
                    </h1>
                    <h2 class="text-2xl text-gray-600 mb-6">{{ $personalInfo['title'] }}</h2>
                    <p class="text-lg text-gray-600 mb-8 max-w-xl leading-relaxed">{{ $personalInfo['bio'] }}</p>
                    <div class="flex flex-wrap justify-center md:justify-start gap-4">
                        <a href="#contact" class="px-6 py-3 bg-gradient-to-r from-indigo-500 to-purple-600 text-white rounded-full font-semibold hover:shadow-lg transition-all">
                            Get In Touch
                        </a>
                        <a href="#projects" class="px-6 py-3 border-2 border-indigo-500 text-indigo-600 rounded-full font-semibold hover:bg-indigo-50 transition-all">
                            View Projects
                        </a>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- Education Section -->
    <section id="education" class="py-20 bg-white">
        <div class="max-w-6xl mx-auto px-4">
            <h2 class="text-4xl font-bold text-center mb-4 gradient-text">Educational Background</h2>
            <p class="text-center text-gray-600 mb-12">My academic journey and certifications</p>
            
            <div class="space-y-8">
                @foreach($education as $edu)
                <div class="card-hover bg-gray-50 rounded-2xl p-8 shadow-sm">
                    <div class="flex flex-col md:flex-row md:items-start gap-6">
                        <div class="flex-shrink-0">
                            <div class="w-16 h-16 bg-gradient-to-br from-indigo-500 to-purple-600 rounded-full flex items-center justify-center">
                                <i class="fas fa-graduation-cap text-2xl text-white"></i>
                            </div>
                        </div>
                        <div class="flex-grow">
                            <div class="flex flex-col md:flex-row md:items-center md:justify-between mb-2">
                                <h3 class="text-xl font-bold text-gray-800">{{ $edu['institution'] }}</h3>
                                <span class="text-indigo-600 font-semibold">{{ $edu['year'] }}</span>
                            </div>
                            <p class="text-lg text-gray-700 font-medium mb-2">{{ $edu['degree'] }}</p>
                            <p class="text-gray-600">{{ $edu['description'] }}</p>
                        </div>
                    </div>
                </div>
                @endforeach
            </div>
        </div>
    </section>

    <!-- Projects Section -->
    <section id="projects" class="py-20 bg-gray-50">
        <div class="max-w-6xl mx-auto px-4">
            <h2 class="text-4xl font-bold text-center mb-4 gradient-text">My Projects</h2>
            <p class="text-center text-gray-600 mb-12">A showcase of my recent work</p>
            
            <div class="grid md:grid-cols-2 gap-8">
                @foreach($projects as $project)
                <div class="card-hover bg-white rounded-2xl overflow-hidden shadow-sm">
                    <img src="{{ $project['image'] }}" 
                         alt="{{ $project['title'] }}" 
                         class="w-full h-48 object-cover">
                    <div class="p-6">
                        <h3 class="text-xl font-bold text-gray-800 mb-2">{{ $project['title'] }}</h3>
                        <p class="text-gray-600 mb-4">{{ $project['description'] }}</p>
                        <div class="flex flex-wrap gap-2 mb-4">
                            @foreach($project['technologies'] as $tech)
                            <span class="px-3 py-1 bg-indigo-100 text-indigo-700 text-sm rounded-full">{{ $tech }}</span>
                            @endforeach
                        </div>
                        <div class="flex gap-4">
                            <a href="{{ $project['github'] }}" 
                               target="_blank" 
                               class="flex items-center gap-2 text-gray-600 hover:text-indigo-600 transition-colors">
                                <i class="fab fa-github text-xl"></i>
                                <span>Code</span>
                            </a>
                            <a href="{{ $project['demo'] }}" 
                               target="_blank" 
                               class="flex items-center gap-2 text-gray-600 hover:text-indigo-600 transition-colors">
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
    <section id="github" class="py-20 bg-white">
        <div class="max-w-6xl mx-auto px-4">
            <h2 class="text-4xl font-bold text-center mb-4 gradient-text">GitHub Repositories</h2>
            <p class="text-center text-gray-600 mb-12">Open source projects and contributions</p>
            
            <div class="grid md:grid-cols-2 lg:grid-cols-3 gap-6">
                @foreach($githubRepos as $repo)
                <a href="{{ $repo['url'] }}" 
                   target="_blank" 
                   class="card-hover block bg-gray-50 rounded-xl p-6 border border-gray-100">
                    <div class="flex items-start gap-4">
                        <div class="flex-shrink-0">
                            <div class="w-12 h-12 bg-gray-800 rounded-lg flex items-center justify-center">
                                <i class="fab fa-github text-2xl text-white"></i>
                            </div>
                        </div>
                        <div>
                            <h3 class="font-bold text-gray-800 hover:text-indigo-600 transition-colors">{{ $repo['name'] }}</h3>
                            <p class="text-sm text-gray-600 mt-1">{{ $repo['description'] }}</p>
                        </div>
                    </div>
                </a>
                @endforeach
            </div>
            
            <div class="text-center mt-8">
                <a href="https://github.com/ronrhone" 
                   target="_blank" 
                   class="inline-flex items-center gap-2 px-6 py-3 bg-gray-800 text-white rounded-full font-semibold hover:bg-gray-700 transition-colors">
                    <i class="fab fa-github"></i>
                    View All on GitHub
                </a>
            </div>
        </div>
    </section>

    <!-- Contact Section -->
    <section id="contact" class="py-20 bg-gradient-to-br from-indigo-50 via-white to-purple-50">
        <div class="max-w-6xl mx-auto px-4">
            <h2 class="text-4xl font-bold text-center mb-4 gradient-text">Get In Touch</h2>
            <p class="text-center text-gray-600 mb-12">Feel free to reach out for collaborations or just a friendly hello</p>
            
            <div class="max-w-2xl mx-auto">
                <div class="grid md:grid-cols-3 gap-8 mb-12">
                    <div class="text-center">
                        <div class="w-16 h-16 bg-gradient-to-br from-indigo-500 to-purple-600 rounded-full flex items-center justify-center mx-auto mb-4">
                            <i class="fas fa-envelope text-2xl text-white"></i>
                        </div>
                        <h3 class="font-semibold text-gray-800 mb-1">Email</h3>
                        <a href="mailto:{{ $personalInfo['email'] }}" class="text-indigo-600 hover:underline">{{ $personalInfo['email'] }}</a>
                    </div>
                    <div class="text-center">
                        <div class="w-16 h-16 bg-gradient-to-br from-indigo-500 to-purple-600 rounded-full flex items-center justify-center mx-auto mb-4">
                            <i class="fas fa-phone text-2xl text-white"></i>
                        </div>
                        <h3 class="font-semibold text-gray-800 mb-1">Phone</h3>
                        <a href="tel:{{ $personalInfo['phone'] }}" class="text-indigo-600 hover:underline">{{ $personalInfo['phone'] }}</a>
                    </div>
                    <div class="text-center">
                        <div class="w-16 h-16 bg-gradient-to-br from-indigo-500 to-purple-600 rounded-full flex items-center justify-center mx-auto mb-4">
                            <i class="fas fa-map-marker-alt text-2xl text-white"></i>
                        </div>
                        <h3 class="font-semibold text-gray-800 mb-1">Location</h3>
                        <p class="text-indigo-600">{{ $personalInfo['location'] }}</p>
                    </div>
                </div>
                
                <div class="flex justify-center gap-6">
                    <a href="{{ $personalInfo['github'] }}" 
                       target="_blank" 
                       class="w-12 h-12 bg-gray-800 rounded-full flex items-center justify-center text-white hover:bg-gray-700 transition-colors">
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
    <footer class="bg-gray-900 text-white py-8">
        <div class="max-w-6xl mx-auto px-4 text-center">
            <p class="text-gray-400">&copy; {{ date('Y') }} {{ $personalInfo['name'] }}. All rights reserved.</p>
            <p class="text-gray-500 text-sm mt-2">Built with Laravel & Blade</p>
        </div>
    </footer>

    <script>
        document.querySelectorAll('a[href^="#"]').forEach(anchor => {
            anchor.addEventListener('click', function (e) {
                e.preventDefault();
                const target = document.querySelector(this.getAttribute('href'));
                if (target) {
                    target.scrollIntoView({ behavior: 'smooth', block: 'start' });
                }
            });
        });

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

        window.addEventListener('scroll', function() {
            const nav = document.querySelector('nav');
            nav.classList.toggle('shadow-md', window.scrollY > 50);
        });
    </script>
</body>
</html>
