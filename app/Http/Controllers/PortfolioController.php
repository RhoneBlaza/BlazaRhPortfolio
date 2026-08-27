<?php

namespace App\Http\Controllers;

class PortfolioController extends Controller
{
    public function index()
    {
        $personalInfo = [
            'name' => 'Rhone Blaza',
            'title' => 'BSIT STUDENT',
            'bio' => 'Passionate web developer with a love for creating elegant solutions to complex problems. Experienced in modern web technologies and committed to writing clean, maintainable code.',
            'email' => 'rhoneblaza019@gmail.com',
            'phone' => '09 123 456 7890',
            'location' => 'Bangued, Abra',
            'linkedin' => 'https://linkedin.com/in/rhone-blaza-a15106422',
            'github' => 'https://github.com/RhoneBlaza',
        ];

        $education = collect([
            [
                'type' => 'formal',
                'institution' => 'Data Center College of the Philippines - Bangued',
                'degree' => 'Bachelor of Science in Information Technology',
                'year' => '2023 - TO PRESENT',
                'start_year' => 2023,
                'description' => 'Currently pursuing a degree in Information Technology.',
            ],
            [
                'type' => 'formal',
                'institution' => 'Data Center College of the Philippines - Bangued',
                'degree' => 'Humanities and Social Sciences',
                'year' => '2021 - 2023',
                'start_year' => 2021,
                'description' => 'Senior High School.',
            ],
            [
                'type' => 'certification',
                'institution' => 'TESDA',
                'degree' => 'Computer System Servicing NC II',
                'year' => '2025',
                'start_year' => 2025,
                'description' => 'Completed a vocational course in computer system servicing, gaining practical skills in hardware and software troubleshooting.',
            ],
        ])->sortByDesc('start_year')->groupBy('type');

        $skills = [
            'Languages' => ['PHP', 'JavaScript', 'HTML', 'CSS', 'SQL'],
            'Frameworks & Libraries' => ['Laravel', 'Vue.js', 'Tailwind CSS', 'Bootstrap', 'Blade'],
            'Databases' => ['MySQL', 'SQLite'],
            'Tools' => ['Git', 'GitHub', 'Composer', 'VS Code'],
        ];

        $projects = [
            [
                'title' => 'E-Commerce Platform',
                'description' => 'A full-featured e-commerce platform built with Laravel and Vue.js. Includes product management, shopping cart, and payment integration.',
                'image' => 'https://picsum.photos/seed/project1/600/400',
                'technologies' => ['Laravel', 'Vue.js', 'MySQL', 'Stripe'],
                'github' => 'https://github.com/ronrhone/ecommerce',
                'demo' => 'https://demo.example.com',
            ],
            [
                'title' => 'Portfolio Website',
                'description' => 'This portfolio website, built with Laravel and Blade templating.',
                'image' => 'https://picsum.photos/seed/project4/600/400',
                'technologies' => ['Laravel', 'Blade', 'Tailwind CSS'],
                'github' => 'https://github.com/ronrhone/portfolio',
                'demo' => 'https://ronrhone.dev',
            ],
        ];

        $githubRepos = [
            ['name' => 'laravel-portfolio', 'url' => 'https://github.com/ronrhone/portfolio', 'description' => 'This portfolio website'],
            ['name' => 'ecommerce-platform', 'url' => 'https://github.com/ronrhone/ecommerce', 'description' => 'Full-stack e-commerce solution'],
        ];

        return view('portfolio', compact('personalInfo', 'education', 'skills', 'projects', 'githubRepos'));
    }
}
