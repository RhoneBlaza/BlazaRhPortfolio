# RhonePortfolio

A static personal portfolio website for **Rhone Blaza**, a BSIT student and web developer. Showcases education, skills, and projects — built with Vite, Tailwind CSS, and vanilla JavaScript.

## Features

- Personal introduction with contact details and links to LinkedIn and GitHub
- Education history grouped by type (formal education and certifications)
- Categorized skills section
- Project showcase with GitHub links and live demos
- Dark mode toggle with localStorage persistence and OS preference fallback
- Active navigation highlighting with IntersectionObserver

## Tech Stack

- Vite (build tool)
- Tailwind CSS v4 (styling)
- Vanilla JavaScript (interactivity)

## Setup & Development

```bash
# Install dependencies
npm install

# Start the dev server with hot reload
npm run dev

# Build for production (outputs to dist/)
npm run build

# Preview the production build
npm run preview
```

## Deployment (Vercel)

The project is configured for Vercel deployment via `vercel.json`.

**Dashboard build settings:**
- **Build Command:** `npm run build`
- **Output Directory:** `dist`

Framework preset: **Vite**

## Project Structure

```
src/
├── public/          # Static files copied as-is (favicon, robots.txt)
├── css/
│   └── style.css    # Tailwind import + custom styles
├── js/
│   └── main.js      # Theme toggle, mobile menu, scroll effects
└── index.html       # Single-page portfolio
vite.config.js       # Vite config (root: src, output: dist)
vercel.json          # Vercel deployment configuration
```

## License

This project is open-sourced under the MIT License.
