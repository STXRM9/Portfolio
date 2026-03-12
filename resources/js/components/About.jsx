import React from 'react';

function About() {
    const skills = [
        { name: 'Frontend', items: ['React', 'JavaScript', 'TypeScript', 'HTML/CSS', 'Tailwind'] },
        { name: 'Backend', items: ['Laravel', 'Node.js', 'Python', 'PHP', 'REST APIs'] },
        { name: 'Database', items: ['PostgreSQL', 'MySQL', 'MongoDB', 'Redis'] },
        { name: 'Tools', items: ['Git', 'Docker', 'AWS', 'CI/CD', 'Linux'] },
    ];

    return (
        <div className="min-h-screen bg-gray-50 py-16 px-4">
            <div className="max-w-7xl mx-auto">
                <h1 className="text-4xl font-bold text-center text-gray-900 mb-12">About Me</h1>
                
                <div className="grid md:grid-cols-2 gap-12 items-start">
                    {/* Bio Section */}
                    <div className="bg-white p-8 rounded-xl shadow-md">
                        <h2 className="text-2xl font-semibold text-gray-900 mb-4">Who I Am</h2>
                        <p className="text-gray-600 mb-4">
                            I'm a passionate Full Stack Developer with expertise in building modern web applications.
                            With several years of experience in both frontend and backend development, I specialize
                            in creating scalable, user-friendly solutions.
                        </p>
                        <p className="text-gray-600 mb-4">
                            My journey started with curiosity about how websites work, and it has evolved into a
                            career where I get to build products that make a difference. I love solving complex
                            problems and turning ideas into reality through code.
                        </p>
                        <p className="text-gray-600">
                            When I'm not coding, you can find me exploring new technologies, contributing to open
                            source projects, or sharing knowledge with the developer community.
                        </p>
                    </div>

                    {/* Skills Section */}
                    <div className="space-y-6">
                        <h2 className="text-2xl font-semibold text-gray-900">My Skills</h2>
                        <div className="grid grid-cols-2 gap-4">
                            {skills.map((category) => (
                                <div key={category.name} className="bg-white p-6 rounded-xl shadow-md">
                                    <h3 className="text-lg font-semibold text-blue-600 mb-3">{category.name}</h3>
                                    <ul className="space-y-2">
                                        {category.items.map((item) => (
                                            <li key={item} className="text-gray-600 flex items-center">
                                                <span className="w-2 h-2 bg-blue-400 rounded-full mr-2"></span>
                                                {item}
                                            </li>
                                        ))}
                                    </ul>
                                </div>
                            ))}
                        </div>
                    </div>
                </div>

                {/* Experience Timeline */}
                <div className="mt-16">
                    <h2 className="text-2xl font-semibold text-center text-gray-900 mb-8">Experience</h2>
                    <div className="space-y-6">
                        {[
                            { year: '2023 - Present', title: 'Senior Full Stack Developer', company: 'Tech Company' },
                            { year: '2021 - 2023', title: 'Full Stack Developer', company: 'Startup Inc' },
                            { year: '2019 - 2021', title: 'Frontend Developer', company: 'Web Agency' },
                        ].map((exp, index) => (
                            <div key={index} className="bg-white p-6 rounded-xl shadow-md flex flex-col md:flex-row md:items-center gap-4">
                                <div className="md:w-32 text-blue-600 font-semibold">{exp.year}</div>
                                <div className="flex-1">
                                    <h3 className="text-lg font-semibold text-gray-900">{exp.title}</h3>
                                    <p className="text-gray-600">{exp.company}</p>
                                </div>
                            </div>
                        ))}
                    </div>
                </div>
            </div>
        </div>
    );
}

export default About;
