
@extends('template')
@section('title')
    {{-- {{ Auth::user()->name }} --}}

    <script>

        const webProjectsButton = document.getElementById('web-projects-button');
        const gameProjectsButton = document.getElementById('game-projects-button');
        const webProjectsSection = document.getElementById('web-projects');
        const gameProjectsSection = document.getElementById('game-projects');

        webProjectsButton.addEventListener('click', () => {
          webProjectsSection.hidden = false;
          gameProjectsSection.hidden = true;
        });

        gameProjectsButton.addEventListener('click', () => {
          webProjectsSection.hidden = true;
          gameProjectsSection.hidden = false;
        });
                </script>
<script src="https://cdn.tailwindcss.com"></script>
    <link href="https://cdnjs.cloudflare.com/ajax/libs/flowbite/1.6.5/flowbite.min.css" rel="stylesheet" />
@section('content')



    <header class="bg-gray-900 text-white">
        <div class="container mx-auto px-4 py-6">
            <nav class="flex justify-between items-center">
                <div class="text-2xl font-bold">&lt;/&gt;</div>
                <ul class="flex space-x-4">
                    <li><a href="#about" class="hover:text-gray-300">About</a></li>
                    <li><a href="#projects" class="hover:text-gray-300">Projects</a></li>
                    <li><a href="#skills" class="hover:text-gray-300">Skills</a></li>
                    <li><a href="#contact" class="hover:text-gray-300">Contact</a></li>
                </ul>
            </nav>
        </div>
    </header>

    <main class="container mx-auto px-4 py-12">
        <section id="hero" class="text-center mb-20">
            <h1 class="text-5xl font-bold text-gray-900 mb-4">John Doe</h1>
            <p class="text-xl text-gray-600 mb-8">Web Developer | Game Developer | AI Enthusiast</p>
            <div class="flex justify-center space-x-4">
                <a href="#projects" class="bg-gray-900 text-white px-6 py-2 rounded hover:bg-gray-700">View Projects</a>
                <a href="#web-projects" class="bg-gray-200 text-gray-900 px-6 py-2 rounded hover:bg-gray-300">Web Projects</a>
                <a href="#game-projects" class="bg-gray-200 text-gray-900 px-6 py-2 rounded hover:bg-gray-300">Game Projects</a>
                <a href="#contact" class="bg-gray-200 text-gray-900 px-6 py-2 rounded hover:bg-gray-300">Contact Me</a>
            </div>
        </section>

        <section id="about" class="mb-20">
            <h2 class="text-3xl font-bold text-gray-900 mb-8">About Me</h2>
            <div class="bg-white shadow-lg rounded-lg p-6 flex items-center space-x-4">
                <div class="w-24 h-24 rounded-full bg-gray-300 flex-shrink-0"></div>
                <div>
                    <h3 class="text-2xl font-semibold mb-2">John Doe</h3>
                    <p class="text-gray-600">
                        Passionate developer with expertise in web and game development. Enthusiastic about leveraging AI and
                        prompt engineering to create innovative solutions.
                    </p>
                </div>
            </div>
        </section>

        <section id="projects" class="mb-20">
            <div id="web-projects" class="mb-12">
                <h3 class="text-2xl font-bold text-gray-900 mb-4">Web Projects</h3>
                <div class="bg-white shadow-lg rounded-lg p-6">
                    <ul class="space-y-2">
                        <li>
                            <strong>E-commerce Platform:</strong> A fully responsive online store with AI-powered product
                            recommendations.
                        </li>
                        <li>
                            <strong>Portfolio Generator:</strong> An AI-assisted tool for creating personalized portfolio
                            websites.
                        </li>
                    </ul>
                    <a href="#" class="mt-4 inline-block bg-gray-200 text-gray-900 px-4 py-2 rounded hover:bg-gray-300">View All Web Projects</a>
                </div>
            </div>
            <div id="game-projects">
                <h3 class="text-2xl font-bold text-gray-900 mb-4">Game Projects</h3>
                <div class="bg-white shadow-lg rounded-lg p-6">
                    <ul class="space-y-2">
                        <li>
                            <strong>AI Dungeon Master:</strong> A text-based RPG with an AI-powered storyteller and dynamic
                            world generation.
                        </li>
                        <li>
                            <strong>Eco Simulator:</strong> An educational game using AI to simulate complex ecosystems and
                            environmental changes.
                        </li>
                    </ul>
                    <a href="#" class="mt-4 inline-block bg-gray-200 text-gray-900 px-4 py-2 rounded hover:bg-gray-300">View All Game Projects</a>
                </div>
            </div>
        </section>

        <section id="skills" class="mb-20">
            <h2 class="text-3xl font-bold text-gray-900 mb-8">Skills & Tools</h2>
            <div class="grid grid-cols-1 md:grid-cols-2 gap-6">
                <div class="bg-white shadow-lg rounded-lg p-6">
                    <h3 class="text-xl font-semibold mb-2">Web Developer</h3>
                    <p class="text-gray-600 mb-4">Creating responsive and user-friendly web applications</p>
                    <div class="flex flex-wrap gap-2">
                        <span class="bg-gray-200 text-gray-800 px-2 py-1 rounded">React</span>
                        <span class="bg-gray-200 text-gray-800 px-2 py-1 rounded">Next.js</span>
                        <span class="bg-gray-200 text-gray-800 px-2 py-1 rounded">Tailwind CSS</span>
                        <span class="bg-gray-200 text-gray-800 px-2 py-1 rounded">Node.js</span>
                    </div>
                </div>
                <div class="bg-gray-900 text-white shadow-lg rounded-lg p-6">
                    <h3 class="text-xl font-semibold mb-2">Game Developer</h3>
                    <p class="text-gray-400 mb-4">Crafting immersive gaming experiences with cutting-edge technologies</p>
                    <div class="flex flex-wrap gap-2">
                        <span class="bg-gray-700 text-gray-200 px-2 py-1 rounded">Unity</span>
                        <span class="bg-gray-700 text-gray-200 px-2 py-1 rounded">Unreal Engine</span>
                        <span class="bg-gray-700 text-gray-200 px-2 py-1 rounded">C#</span>
                        <span class="bg-gray-700 text-gray-200 px-2 py-1 rounded">Python</span>
                    </div>
                </div>
            </div>
        </section>

        <section id="ai-tools" class="mb-20">
            <h2 class="text-3xl font-bold text-gray-900 mb-8">AI & Prompt Engineering</h2>
            <div class="bg-white shadow-lg rounded-lg p-6">
                <p class="mb-4">
                    I leverage various AI tools and prompt engineering techniques to enhance my development process:
                </p>
                <ul class="list-disc list-inside space-y-2 text-gray-600">
                    <li>GPT-3 for generating code snippets and brainstorming ideas</li>
                    <li>DALL-E for creating concept art and game assets</li>
                    <li>Custom-trained models for game AI and procedural content generation</li>
                    <li>Prompt engineering for optimizing AI-assisted development workflows</li>
                </ul>
            </div>
        </section>

        <section id="contact">
            <h2 class="text-3xl font-bold text-gray-900 mb-8">Contact Me</h2>
            <div class="bg-white shadow-lg rounded-lg p-6">
                <h3 class="text-xl font-semibold mb-2">Get in Touch</h3>
                <p class="text-gray-600 mb-4">I'd love to hear from you! Send me a message and I'll respond ASAP.</p>
                <form class="space-y-4">
                    <div class="grid grid-cols-2 gap-4">
                        <input type="text" placeholder="Name" class="w-full px-3 py-2 border border-gray-300 rounded-md">
                        <input type="email" placeholder="Email" class="w-full px-3 py-2 border border-gray-300 rounded-md">
                    </div>
                    <input type="text" placeholder="Subject" class="w-full px-3 py-2 border border-gray-300 rounded-md">
                    <textarea placeholder="Your message" rows="4" class="w-full px-3 py-2 border border-gray-300 rounded-md"></textarea>
                    <button type="submit" class="w-full bg-gray-900 text-white px-4 py-2 rounded-md hover:bg-gray-700">Send Message</button>
                </form>
            </div>
        </section>
    </main>

    <footer class="bg-gray-900 text-white py-8">
        <div class="container mx-auto px-4 text-center">
            <p>&copy; 2023 John Doe. All rights reserved.</p>
        </div>
    </footer>

    <script src="https://cdnjs.cloudflare.com/ajax/libs/flowbite/1.6.5/flowbite.min.js"></script>





@endsection
