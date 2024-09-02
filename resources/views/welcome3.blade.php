
@extends('template')
@section('title')
    {{-- {{ Auth::user()->name }} --}}


@section('content')


<script src="https://cdn.tailwindcss.com"></script>
</head>
<body class="bg-gradient-to-br from-purple-400 to-pink-500 min-h-screen">
    <header class="container mx-auto px-4 py-12 text-center">
        <h1 class="text-5xl font-bold text-white mb-4">John Doe</h1>
        <p class="text-xl text-white mb-8">Web Developer | Game Developer | AI Enthusiast</p>
        <div class="flex justify-center space-x-4">
            <button onclick="showProjects('web')" class="bg-white text-purple-600 px-6 py-2 rounded-full hover:bg-gray-100 transition duration-300">Web Projects</button>
            <button onclick="showProjects('game')" class="bg-white text-purple-600 px-6 py-2 rounded-full hover:bg-gray-100 transition duration-300">Game Projects</button>
            <a href="#contact" class="bg-white text-purple-600 px-6 py-2 rounded-full hover:bg-gray-100 transition duration-300">Contact Me</a>
        </div>
    </header>

    <main class="container mx-auto px-4 py-12">
        <section id="projects" class="mb-20">
            <div id="webProjects" class="hidden">
                <h2 class="text-3xl font-bold text-white mb-8">Web Projects</h2>
                <div class="bg-white rounded-lg shadow-lg p-6 mb-4">
                    <h3 class="text-xl font-semibold mb-2">E-commerce Platform</h3>
                    <p class="text-gray-600">A fully responsive online store with AI-powered product recommendations.</p>
                </div>
                <div class="bg-white rounded-lg shadow-lg p-6">
                    <h3 class="text-xl font-semibold mb-2">Portfolio Generator</h3>
                    <p class="text-gray-600">An AI-assisted tool for creating personalized portfolio websites.</p>
                </div>
            </div>
            <div id="gameProjects" class="hidden">
                <h2 class="text-3xl font-bold text-white mb-8">Game Projects</h2>
                <div class="bg-white rounded-lg shadow-lg p-6 mb-4">
                    <h3 class="text-xl font-semibold mb-2">AI Dungeon Master</h3>
                    <p class="text-gray-600">A text-based RPG with an AI-powered storyteller and dynamic world generation.</p>
                </div>
                <div class="bg-white rounded-lg shadow-lg p-6">
                    <h3 class="text-xl font-semibold mb-2">Eco Simulator</h3>
                    <p class="text-gray-600">An educational game using AI to simulate complex ecosystems and environmental changes.</p>
                </div>
            </div>
        </section>

        <section id="skills" class="mb-20">
            <h2 class="text-3xl font-bold text-white mb-8">Skills & Tools</h2>
            <div class="grid grid-cols-1 md:grid-cols-2 gap-6">
                <div class="bg-white rounded-lg shadow-lg p-6">
                    <h3 class="text-xl font-semibold mb-2">Web Developer</h3>
                    <p class="text-gray-600 mb-4">Creating responsive and user-friendly web applications</p>
                    <div class="flex flex-wrap gap-2">
                        <span class="bg-gray-200 text-gray-800 px-2 py-1 rounded">React</span>
                        <span class="bg-gray-200 text-gray-800 px-2 py-1 rounded">Next.js</span>
                        <span class="bg-gray-200 text-gray-800 px-2 py-1 rounded">Tailwind CSS</span>
                        <span class="bg-gray-200 text-gray-800 px-2 py-1 rounded">Node.js</span>
                    </div>
                </div>
                <div class="bg-gray-900 text-white rounded-lg shadow-lg p-6">
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

        <section id="contact">
            <h2 class="text-3xl font-bold text-white mb-8">Contact Me</h2>
            <div class="bg-white rounded-lg shadow-lg p-6">
                <form class="space-y-4">
                    <div>
                        <label for="email" class="block text-sm font-medium text-gray-700">Email</label>
                        <input type="email" id="email" name="email" required class="mt-1 block w-full rounded-md border-gray-300 shadow-sm focus:border-purple-500 focus:ring-purple-500">
                    </div>
                    <div>
                        <label for="subject" class="block text-sm font-medium text-gray-700">Subject</label>
                        <input type="text" id="subject" name="subject" required class="mt-1 block w-full rounded-md border-gray-300 shadow-sm focus:border-purple-500 focus:ring-purple-500">
                    </div>
                    <div>
                        <label for="message" class="block text-sm font-medium text-gray-700">Message</label>
                        <textarea id="message" name="message" rows="4" required class="mt-1 block w-full rounded-md border-gray-300 shadow-sm focus:border-purple-500 focus:ring-purple-500"></textarea>
                    </div>
                    <div>
                        <label for="file" class="block text-sm font-medium text-gray-700">Upload Image (JPG or PNG)</label>
                        <input type="file" id="file" name="file" accept=".jpg,.jpeg,.png" class="mt-1 block w-full text-sm text-gray-500 file:mr-4 file:py-2 file:px-4 file:rounded-full file:border-0 file:text-sm file:font-semibold file:bg-purple-50 file:text-purple-700 hover:file:bg-purple-100">
                    </div>
                    <div>
                        <button type="submit" class="w-full flex justify-center py-2 px-4 border border-transparent rounded-md shadow-sm text-sm font-medium text-white bg-purple-600 hover:bg-purple-700 focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-purple-500">Send Message</button>
                    </div>
                </form>
            </div>
        </section>
    </main>

    <footer class="bg-gray-900 text-white py-8 mt-12">
        <div class="container mx-auto px-4 text-center">
            <p>&copy; 2023 John Doe. All rights reserved.</p>
        </div>
    </footer>

    <script>
        function showProjects(type) {
            const webProjects = document.getElementById('webProjects');
            const gameProjects = document.getElementById('gameProjects');

            if (type === 'web') {
                webProjects.classList.remove('hidden');
                gameProjects.classList.add('hidden');
            } else if (type === 'game') {
                webProjects.classList.add('hidden');
                gameProjects.classList.remove('hidden');
            }
        }
    </script>
</body>

@endsection
