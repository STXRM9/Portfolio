import React from 'react';

function Projects() {
    const projects = [
        {
            title: 'E-Commerce Platform',
            description: 'A full-featured online store with cart functionality, payment processing, and admin dashboard.',
            tech: ['React', 'Laravel', 'PostgreSQL', 'Stripe'],
            link: '#',
        },
        {
            title: 'Task Management App',
            description: 'Collaborative project management tool with real-time updates and team workspaces.',
            tech: ['Vue.js', 'Node.js', 'MongoDB', 'Socket.io'],
            link: '#',
        },
        {
            title: 'Portfolio Website',
            description: 'Personal portfolio with blog integration, contact forms, and admin panel.',
            tech: ['React', 'Tailwind CSS', 'Laravel', 'MySQL'],
            link: '#',
        },
        {
            title: 'API Gateway',
            description: 'RESTful API gateway with authentication, rate limiting, and request logging.',
            tech: ['Node.js', 'Express', 'Redis', 'Docker'],
            link: '#',
        },
        {
            title: 'Chat Application',
            description: 'Real-time messaging platform with group chats, file sharing, and notifications.',
            tech: ['React', 'Firebase', 'WebSocket', 'Cloud Storage'],
            link: '#',
        },
        {
            title: 'Analytics Dashboard',
            description: 'Data visualization dashboard with charts, reports, and exportable data.',
            tech: ['React', 'D3.js', 'Python', 'PostgreSQL'],
            link: '#',
        },
    ];

    return (
        <div className="min-h-screen bg-gray-50 py-16 px-4">
            <div className="max-w-7xl mx-auto">
                <h1 className="text-4xl font-bold text-center text-gray-900 mb-4">My Projects</h1>
                <p className="text-center text-gray-600 mb-12 max-w-2xl mx-auto">
                    Here are some of the projects I've worked on. Each project represents unique challenges and solutions.
                </p>

                <div className="grid md:grid-cols-2 lg:grid-cols-3 gap-8">
                    {projects.map((project, index) => (
                        <div key={index} className="bg-white rounded-xl shadow-md overflow-hidden hover:shadow-xl transition-shadow">
                            <div className="h-48 bg-gradient-to-br from-blue-500 to-indigo-600 flex items-center justify-center">
                                <svg className="w-16 h-16 text-white opacity-75" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                    <path strokeLinecap="round" strokeLinejoin="round" strokeWidth={1.5} d="M9.75 17L9 20l-1 1h8l-1-1-.75-3M3 13h18M5 17h14a2 2 0 002-2V5a2 2 0 00-2-2H5a2 2 0 00-2 2v10a2 2 0 002 2z" />
                                </svg>
                            </div>
                            <div className="p-6">
                                <h3 className="text-xl font-semibold text-gray-900 mb-2">{project.title}</h3>
                                <p className="text-gray-600 mb-4">{project.description}</p>
                                <div className="flex flex-wrap gap-2 mb-4">
                                    {project.tech.map((tech) => (
                                        <span key={tech} className="px-3 py-1 bg-blue-50 text-blue-600 text-sm rounded-full">
                                            {tech}
                                        </span>
                                    ))}
                                </div>
                                <a
                                    href={project.link}
                                    className="inline-flex items-center text-blue-600 hover:text-blue-700 font-medium"
                                >
                                    View Project
                                    <svg className="w-4 h-4 ml-1" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                        <path strokeLinecap="round" strokeLinejoin="round" strokeWidth={2} d="M17 8l4 4m0 0l-4 4m4-4H3" />
                                    </svg>
                                </a>
                            </div>
                        </div>
                    ))}
                </div>
            </div>
        </div>
    );
}

export default Projects;
