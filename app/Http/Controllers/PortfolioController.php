<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PortfolioController extends Controller
{
    public function index()
    {
        $personalInfo = [
            'name' => 'Ron Rhone',
            'title' => 'Web Developer',
            'bio' => 'Passionate web developer with a love for creating elegant solutions to complex problems. Experienced in modern web technologies and committed to writing clean, maintainable code.',
            'email' => 'ron@example.com',
            'phone' => '+1 (555) 123-4567',
            'location' => 'San Francisco, CA',
            'linkedin' => 'https://linkedin.com/in/ronrhone',
            'github' => 'https://github.com/ronrhone',
        ];

        $education = [
            [
                'institution' => 'University of California, Berkeley',
                'degree' => 'Bachelor of Science in Computer Science',
                'year' => '2018 - 2022',
                'description' => 'Graduated with honors. Focus on software engineering and web technologies.',
            ],
            [
                'institution' => 'San Francisco Coding Bootcamp',
                'degree' => 'Full Stack Web Development Certificate',
                'year' => '2022',
                'description' => 'Intensive 12-week program covering modern web development frameworks.',
            ],
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
                'title' => 'Task Management App',
                'description' => 'A collaborative task management application with real-time updates using WebSockets.',
                'image' => 'https://picsum.photos/seed/project2/600/400',
                'technologies' => ['Laravel', 'React', 'Socket.io', 'Redis'],
                'github' => 'https://github.com/ronrhone/taskmanager',
                'demo' => 'https://taskapp.example.com',
            ],
            [
                'title' => 'Weather Dashboard',
                'description' => 'A responsive weather dashboard that displays current conditions and forecasts using third-party APIs.',
                'image' => 'https://picsum.photos/seed/project3/600/400',
                'technologies' => ['PHP', 'JavaScript', 'OpenWeather API', 'Chart.js'],
                'github' => 'https://github.com/ronrhone/weather',
                'demo' => 'https://weather.example.com',
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
            ['name' => 'task-manager', 'url' => 'https://github.com/ronrhone/taskmanager', 'description' => 'Collaborative task management app'],
            ['name' => 'weather-dashboard', 'url' => 'https://github.com/ronrhone/weather', 'description' => 'Weather forecasting dashboard'],
            ['name' => 'api-tools', 'url' => 'https://github.com/ronrhone/api-tools', 'description' => 'REST API development toolkit'],
        ];

        return view('portfolio', compact('personalInfo', 'education', 'projects', 'githubRepos'));
    }
}
