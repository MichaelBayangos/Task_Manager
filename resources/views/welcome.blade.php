<x-layouts.app title="Welcome">
    <body class="bg-gray-100 flex items-center justify-center h-screen">
        <div class="text-center">
            <!-- Heading -->
            <h1 class="text-6xl font-bold text-gray-800 mb-4">
                Welcome to Task Manager
            </h1>
            <!-- Subheading -->
            <p class="text-xl text-gray-600 mb-8">
                We're excited to have you here. Explore and enjoy!
            </p>
            <!-- Call-to-action Button -->
            <a href="{{route('home.index')}}" class="bg-blue-500 text-white px-6 py-3 rounded-lg shadow-lg hover:bg-blue-600 transition duration-300">
                Get Started
            </a>
        </div>
    </body>

</x-layouts.app>
