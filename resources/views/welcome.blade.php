
@extends('template')
@section('title')
    {{-- {{ Auth::user()->name }} --}}

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
@section('content')


<div class="flex flex-col min-h-[100dvh] bg-background text-foreground ">
    <header class="sticky top-0 z-50 w-full bg-background/90 backdrop-blur-md">
      <div class="container flex items-center justify-between py-4 px-4 md:px-6">
        <a class="flex items-center gap-2" href="#">
          <svg
            xmlns="http://www.w3.org/2000/svg"
            width="24"
            height="24"
            viewBox="0 0 24 24"
            fill="none"
            stroke="currentColor"
            stroke-width="2"
            stroke-linecap="round"
            stroke-linejoin="round"
            class="h-6 w-6"
          >
            <polyline points="16 18 22 12 16 6"></polyline>
            <polyline points="8 6 2 12 8 18"></polyline>
          </svg>
          <span class="text-lg font-bold">Alegre Augusto</span>
        </a>
        <nav class="hidden md:flex items-center gap-4">
          <a class="text-sm font-medium hover:underline underline-offset-4" href="#">

          </a>
          <a href="#" class="text-sm font-medium hover:underline underline-offset-4">
            Linkedin
          </a>
          <a class="text-sm font-medium hover:underline underline-offset-4" href="#">

          </a>
        </nav>
        <button class="inline-flex items-center justify-center whitespace-nowrap rounded-md text-sm font-medium ring-offset-background transition-colors focus-visible:outline-none focus-visible:ring-2 focus-visible:ring-ring focus-visible:ring-offset-2 disabled:pointer-events-none disabled:opacity-50 border border-input bg-background hover:bg-accent hover:text-accent-foreground h-10 px-4 py-2 md:hidden">
          <svg
            xmlns="http://www.w3.org/2000/svg"
            width="24"
            height="24"
            viewBox="0 0 24 24"
            fill="none"
            stroke="currentColor"
            stroke-width="2"
            stroke-linecap="round"
            stroke-linejoin="round"
            class="h-6 w-6"
          >
            <line x1="4" x2="20" y1="12" y2="12"></line>
            <line x1="4" x2="20" y1="6" y2="6"></line>
            <line x1="4" x2="20" y1="18" y2="18"></line>
          </svg>
          <span class="sr-only">Toggle Menu</span>
        </button>
      </div>
    </header>
    <main class="flex-1  ">
        <h1 class="text-3xl font-bold text-center tracking-tighter sm:text-4xl md:text-5xl">
          Web Developer | Game Developer | AI Enthusiast
        </h1>
      <section class="w-full py-12 md:py-24 lg:py-32">
        <div class="container grid items-center gap-6 px-4 md:px-6 lg:grid-cols-2 lg:gap-10">
          <div class="space-y-4">
            <p class="max-w-[600px] text-muted-foreground md:text-xl/relaxed lg:text-base/relaxed xl:text-xl/relaxed">
              I'm a passionate web and game developer with a focus on creating beautiful and functional applications.
              Explore my portfolio to see some of my latest projects.
            </p>
            <div class="flex flex-col gap-4 min-[400px]:flex-row">
              <div class="flex gap-4">



                      <div class="flex justify-center space-x-4">
        <button onclick="showProjects('web')" class="inline-flex items-center justify-center whitespace-nowrap rounded-md text-sm font-medium ring-offset-background transition-colors focus-visible:outline-none focus-visible:ring-2  
                focus-visible:ring-ring focus-visible:ring-offset-2 disabled:pointer-events-none disabled:opacity-50 border border-input bg-background hover:bg-accent hover:text-accent-foreground h-10 px-4  
                py-2">Web Projects</button>
        <button onclick="showProjects('game')" class="inline-flex items-center justify-center whitespace-nowrap rounded-md text-sm font-medium ring-offset-background transition-colors focus-visible:outline-none focus-visible:ring-2  
                focus-visible:ring-ring focus-visible:ring-offset-2 disabled:pointer-events-none disabled:opacity-50 border border-input bg-background hover:bg-accent hover:text-accent-foreground h-10 px-4  
                py-2">Game Projects</button>
        <a href="#contact" class="bg-white inline-flex items-center justify-center whitespace-nowrap rounded-md text-sm font-medium ring-offset-background transition-colors focus-visible:outline-none focus-visible:ring-2  
                focus-visible:ring-ring focus-visible:ring-offset-2 disabled:pointer-events-none disabled:opacity-50 border border-input bg-background hover:bg-accent hover:text-accent-foreground h-10 px-4  
                py-2">Contact Me</a>
    </div>



              </div>
            </div>
            {{-- debajo de los botones --}}
          </div>








    <section id="projects" class="     ">


            <div id="webProjects" class="hidden">


                <h2 class="text-3xl font-bold text-white  ">Web Projects</h2>
                <div class="bg-white rounded-lg shadow-lg p-6 mb-4">
                    <h3 class="text-xl font-semibold mb-2">Gestión Apicultores</h3>
                    <p class="text-gray-600">A fully responsive online monitoring productión using IOT and IA </p>
{{--                     <img
                    src="2.jpg"

                    alt="Web Project 2"
                    style=""
                    class="mx-auto aspect-video overflow-hidden rounded-xl   object-center"
                  /> --}}
                    <div class="flex gap-2">

                        <a
                          href="https://micolmena.siliconmisiones.com.ar/"
                          class="inline-flex h-9 items-center justify-center rounded-md bg-primary px-4 py-2 text-sm font-medium text-primary-foreground shadow transition-colors hover:bg-primary/90 focus-visible:outline-none focus-visible:ring-1 focus-visible:ring-ring disabled:pointer-events-none disabled:opacity-50"
                        >
                          View Project
                        </a>
                        <a
                          href="https://github.com/AlegreAugustoGerman/colmenasinteligentes.git"
                          class="inline-flex h-9 items-center justify-center rounded-md border border-input bg-background px-4 py-2 text-sm font-medium shadow-sm transition-colors hover:bg-accent hover:text-accent-foreground focus-visible:outline-none focus-visible:ring-1 focus-visible:ring-ring disabled:pointer-events-none disabled:opacity-50"
                        >
                          GitHub
                        </a>
                      </div>
                </div>


                <div class="bg-white rounded-lg shadow-lg p-6">
                    <h3 class="text-xl font-semibold mb-2">Meteorologia Provincial</h3>
                    <p class="text-gray-600">An AI-assisted tool for  predictions and structure stations , Api , Satelite data.</p>

{{--                     <img
                    src="2.jpg"

                    alt="Web Project 2"
                    style=" "
                    class="mx-auto aspect-video overflow-hidden rounded-xl   object-center"
                  /> --}}
                    <div class="flex gap-2">



                        <a
                          href="https://misio-clima.siliconmisiones.com.ar/"
                          class="inline-flex h-9 items-center justify-center rounded-md bg-primary px-4 py-2 text-sm font-medium text-primary-foreground shadow transition-colors hover:bg-primary/90 focus-visible:outline-none focus-visible:ring-1 focus-visible:ring-ring disabled:pointer-events-none disabled:opacity-50"
                        >
                          View Project
                        </a>
                        <a
                          href="https://github.com/LucasNFlores/app-meteorologica-idi.git"
                          class="inline-flex h-9 items-center justify-center rounded-md border border-input bg-background px-4 py-2 text-sm font-medium shadow-sm transition-colors hover:bg-accent hover:text-accent-foreground focus-visible:outline-none focus-visible:ring-1 focus-visible:ring-ring disabled:pointer-events-none disabled:opacity-50"
                        >
                          GitHub
                        </a>
                      </div>
                </div>



            </div>



            <div id="gameProjects" class="hidden">
                <h2 class="text-3xl font-bold text-white  ">Game Projects</h2>
                <div class="bg-white rounded-lg shadow-lg p-6 mb-4">
                    <h3 class="text-xl font-semibold mb-2">AI Dungeon Master</h3>
                    <p class="text-gray-600">A text-based RPG with an AI-powered storyteller and dynamic world generation.</p>
{{--                     <img
                    src="2.jpg"

                    alt="Web Project 2"
                    style=""
                    class="mx-auto aspect-video overflow-hidden rounded-xl   object-center"
                  /> --}}
                    <div class="flex gap-2">

                        <a
                          href="#"
                          class="inline-flex h-9 items-center justify-center rounded-md bg-primary px-4 py-2 text-sm font-medium text-primary-foreground shadow transition-colors hover:bg-primary/90 focus-visible:outline-none focus-visible:ring-1 focus-visible:ring-ring disabled:pointer-events-none disabled:opacity-50"
                        >
                        Project in Progress
                        </a>
{{--                         <a
                          href="#"
                          class="inline-flex h-9 items-center justify-center rounded-md border border-input bg-background px-4 py-2 text-sm font-medium shadow-sm transition-colors hover:bg-accent hover:text-accent-foreground focus-visible:outline-none focus-visible:ring-1 focus-visible:ring-ring disabled:pointer-events-none disabled:opacity-50"
                        >
                          GitHub
                        </a> --}}
                      </div>

                </div>


                <div class="bg-white rounded-lg shadow-lg p-6">
                    <h3 class="text-xl font-semibold mb-2">Eco Simulator</h3>
                    <p class="text-gray-600">An educational game using AI to simulate complex ecosystems and environmental changes.</p>

{{--                     <img
                    src="2.jpg"

                    alt="Web Project 2"
                    style=""
                    class="mx-auto aspect-video overflow-hidden rounded-xl   object-center"
                  /> --}}
                    <div class="flex gap-2">

                        <a
                          href="#"
                          class="inline-flex h-9 items-center justify-center rounded-md bg-primary px-4 py-2 text-sm font-medium text-primary-foreground shadow transition-colors hover:bg-primary/90 focus-visible:outline-none focus-visible:ring-1 focus-visible:ring-ring disabled:pointer-events-none disabled:opacity-50"
                        >
                        Project in Progress
                        </a>
{{--                         <a
                          href="#"
                          class="inline-flex h-9 items-center justify-center rounded-md border border-input bg-background px-4 py-2 text-sm font-medium shadow-sm transition-colors hover:bg-accent hover:text-accent-foreground focus-visible:outline-none focus-visible:ring-1 focus-visible:ring-ring disabled:pointer-events-none disabled:opacity-50"
                        >
                          GitHub
                        </a> --}}
                      </div>
            </div>
        </section>

















{{--         <div class="rounded-lg border bg-card text-card-foreground shadow-sm" data-v0-t="card">



            <div class="flex flex-col gap-4 ">
              <img
                src=" "
                width="500 "
                height="  500"
                alt="Hero"
                class="mx-auto aspect-square overflow-hidden rounded-xl object-cover"
              />
            </div>


          </div> --}}




      </section>





    <section id="skills" class="mb-20 ">
        <h2 class="text-3xl font-bold text-white mb-8">Skills & Tools</h2>
        <div class="grid grid-cols-1 md:grid-cols-2 gap-6">
            <div class="bg-white rounded-lg shadow-lg p-6">
                <h3 class="text-xl font-semibold mb-2">Web Developer</h3>
                <p class="text-gray-600 mb-4">Creating responsive and user-friendly web applications</p>
                <div class="flex flex-wrap gap-2">
                    <span class="bg-gray-200 text-gray-800 px-2 py-1 rounded">Laravel</span>
                    <span class="bg-gray-200 text-gray-800 px-2 py-1 rounded">Symphony</span>
                    <span class="bg-gray-200 text-gray-800 px-2 py-1 rounded">Tailwind CSS</span>
                    <span class="bg-gray-200 text-gray-800 px-2 py-1 rounded">IA Vercel</span>
                    <span class="bg-gray-200 text-gray-800 px-2 py-1 rounded">Prompt Engeniering</span>
                    <span class="bg-gray-200 text-gray-800 px-2 py-1 rounded">Diagramación y Analisis </span>
                    <span class="bg-gray-200 text-gray-800 px-2 py-1 rounded">SQL Normalización</span>
                    <span class="bg-gray-200 text-gray-800 px-2 py-1 rounded">PHP 8</span>
                    <span class="bg-gray-200 text-gray-800 px-2 py-1 rounded">Html 5</span>
                    <span class="bg-gray-200 text-gray-800 px-2 py-1 rounded">Css 3</span>
                    <span class="bg-gray-200 text-gray-800 px-2 py-1 rounded">Prompt Engeniering</span>
                  </div>
            </div>
            <div class="bg-gray-900 text-white rounded-lg shadow-lg p-6">
                <h3 class="text-xl font-semibold mb-2">Game Developer</h3>
                <p class="text-gray-400 mb-4">Crafting immersive gaming experiences with cutting-edge technologies</p>
                <div class="flex flex-wrap gap-2">
                    <span class="bg-gray-700 text-gray-200 px-2 py-1 rounded">Blender</span>
                    <span class="bg-gray-700 text-gray-200 px-2 py-1 rounded">Godot</span>
                    <span class="bg-gray-700 text-gray-200 px-2 py-1 rounded">IA 3d </span>
                    <span class="bg-gray-700 text-gray-200 px-2 py-1 rounded">IA Concept</span>
                    <span class="bg-gray-700 text-gray-200 px-2 py-1 rounded">IA Texture</span>

                </div>
            </div>
        </div>
    </section>








    <div class=" md:w-full md:flex md:justify-center md:content-center">






    <section id="contact" class=" ">
        <h2 class="text-3xl font-bold tracking-tighter md:text-4xl/tight">Get in Touch</h2>
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



</div>

<footer class="bg-gray-900 text-white py-8 mt-12">
    <div class="container mx-auto px-4 text-center">
        {{-- <p>&copy; 2023 John Doe. All rights reserved.</p> --}}
    </div>
</footer>


    </main>
  </div>




@endsection
