<x-layouts.app title="Login">
    <x-navigation />
    {{-- Log In form --}}
    <div class="flex justify-center items-center w-full">
        <div class="max-w-lg w-full p-2">
            <div style="box-shadow: 0 10px 25px -5px rgba(0, 0, 0, 0.1), 0 10px 10px -5px rgba(0, 0, 0, 0.04);" class="bg-gray-800 rounded-lg shadow-xl overflow-hidden">
                <div class="p-8">
                    <h2 class="text-center text-3xl font-extrabold text-white">
                        Welcome Back
                    </h2>
                    <p class="mt-4 text-center text-gray-400"> Login to continue</p>
                    <form method="POST" action="{{route('login')}}" class="mt-8 space-y-6">
                        @csrf
                        <div class="rounded-md shadow-sm">
                            <div class="mt-4">
                                <label class="sr-only" for="email">Email address</label>
                                <input placeholder="Email address" class="appearance-none relative block w-full px-3 py-3 border border-gray-700 bg-gray-700 text-white rounded-md focus:outline-none focus:ring-indigo-500 focus:border-indigo-500 focus:z-10 sm:text-sm" required="" autocomplete="email" type="email" name="email" id="email" value="{{old('email')}}" />
                            </div>
                            <div class="mt-4">
                                <label class="sr-only" for="password">Password</label>
                                <input placeholder="Password" class="appearance-none relative block w-full px-3 py-3 border border-gray-700 bg-gray-700 text-white rounded-md focus:outline-none focus:ring-indigo-500 focus:border-indigo-500 focus:z-10 sm:text-sm" required="" autocomplete="current-password" type="password" name="password" id="password" />
                            </div>
                        </div>
                        <div>
                            <button class="group relative w-full flex justify-center py-3 px-4 border border-transparent text-sm font-medium rounded-md text-gray-900 bg-indigo-500 hover:bg-indigo-600 focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-indigo-500 mb-4" type="submit">
                                Login
                            </button>
                            {{-- validation error --}}
                            @if($errors->any())
                            <ul class="px-4 py-2 bg-red-100">
                                @foreach($errors->all() as $error)
                                <li class="my-2 text-red-500">{{$error}}</li>
                                @endforeach
                            </ul>
                            @endif
                        </div>
                    </form>
                </div>
                <div class="px-8 py-4 bg-gray-700 text-center">
                    <span class="text-gray-400">Don't have an account?</span>
                    <a class="font-medium text-indigo-500 hover:text-indigo-400" href="#">Register</a>
                </div>
            </div>
        </div>
    </div>
</x-layouts.app>
