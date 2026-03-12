import React from 'react';

function Home() {
    return (
        <div className="min-h-screen bg-gradient-to-br from-blue-50 to-indigo-100">
            {/* Hero Section */}
            <section className="py-20 px-4">
                <div className="max-w-7xl mx-auto">
                    <div className="text-center">
                        <h1 className="text-5xl md:text-6xl font-bold text-gray-900 mb-6">
                            Hi, I'm <span className="text-blue-600">Your Name</span>
                        </h1>
                        <p className="text-xl md:text-2xl text-gray-600 mb-8 max-w-2xl mx-auto">
                            A passionate Full Stack Developer specializing in building exceptional digital experiences
                        </p>
                        <div className="flex justify-center gap-4">
                            <button className="px-8 py-3 bg-blue-600 text-white font-semibold rounded-lg hover:bg-blue-700 transition-colors shadow-lg">
                                View My Work
                            </button>
                            <button className="px-8 py-3 bg-white text-blue-600 font-semibold rounded-lg hover:bg-gray-50 transition-colors shadow-lg border border-blue-200">
                                Contact Me
                            </button>
                        </div>
                    </div>
                </div>
            </section>

            {/* Skills Preview */}
            <section className="py-16 px-4 bg-white">
                <div className="max-w-7xl mx-auto">
                    <h2 className="text-3xl font-bold text-center text-gray-900 mb-12">Tech Stack</h2>
                    <div className="grid grid-cols-2 md:grid-cols-4 gap-8">
                        {['JavaScript', 'React', 'Laravel', 'Node.js', 'Python', 'TypeScript', 'PostgreSQL', 'Docker'].map((skill) => (
                            <div key={skill} className="text-center p-6 bg-gray-50 rounded-xl hover:shadow-lg transition-shadow">
                                <span className="text-lg font-semibold text-gray-700">{skill}</span>
                            </div>
                        ))}
                    </div>
                </div>
            </section>

            {/* CTA Section */}
            <section className="py-16 px-4">
                <div className="max-w-4xl mx-auto text-center">
                    <h2 className="text-3xl font-bold text-gray-900 mb-4">Ready to Start a Project?</h2>
                    <p className="text-gray-600 mb-8">Let's collaborate and bring your ideas to life.</p>
                    <button className="px-8 py-3 bg-indigo-600 text-white font-semibold rounded-lg hover:bg-indigo-700 transition-colors shadow-lg">
                        Get In Touch
                    </button>
                </div>
            </section>
        </div>
    );
}

export default Home;
