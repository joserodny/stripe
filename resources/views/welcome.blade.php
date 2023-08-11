<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>Laravel</title>

        <!-- Fonts -->
        <link rel="preconnect" href="https://fonts.bunny.net">
        <link href="https://fonts.bunny.net/css?family=figtree:400,600&display=swap" rel="stylesheet" />
        @vite('resources/css/app.css')

    </head>
    <body>

        <div class="min-w-screen min-h-screen bg-gray-100 px-5 py-5">
            <div class="w-full mx-auto bg-white px-5 py-10 text-gray-600 mb-10">
                <div class="text-center max-w-xl mx-auto">
                    <h1 class="text-5xl md:text-6xl font-bold mb-5">Pricing</h1>
                    <h3 class="text-xl font-medium mb-10">Lorem ipsum dolor sit amet consectetur adipisicing elit repellat dignissimos laboriosam odit accusamus porro</h3>
                </div>

                    <form class="max-w-4xl mx-auto md:flex" method="POST" action="{{ route('checkout') }}">
                        @csrf
                        <div class="w-full md:w-1/3 md:max-w-none bg-white px-8 md:px-10 py-8 md:py-10 mb-3 mx-auto md:my-6 rounded-md shadow-lg shadow-gray-600 md:flex md:flex-col">
                            <div class="w-full flex-grow">
                                <h2 class="text-center font-bold uppercase mb-4">PERSONAL</h2>
                                <h3 class="text-center font-bold text-4xl mb-5">$5/mo</h3>
                                <ul class="text-sm px-5 mb-8">
                                    <li class="leading-tight"><i class="mdi mdi-check-bold text-lg"></i> Lorem ipsum</li>
                                    <li class="leading-tight"><i class="mdi mdi-check-bold text-lg"></i> Dolor sit amet</li>
                                </ul>
                            </div>
                            <div class="w-full">
                                <button type="submit" name="amount" value="5" class="font-bold bg-gray-600 hover:bg-gray-700 text-white rounded-md px-10 py-2 transition-colors w-full">Buy Now</button>
                            </div>
                        </div>
                        <div class="w-full md:w-1/3 md:max-w-none bg-white px-8 md:px-10 py-8 md:py-10 mb-3 mx-auto md:-mx-3 md:mb-0 rounded-md shadow-lg shadow-gray-600 md:relative md:z-50 md:flex md:flex-col">
                            <div class="w-full flex-grow">
                                <h2 class="text-center font-bold uppercase mb-4">TEAM</h2>
                                <h3 class="text-center font-bold text-4xl md:text-5xl mb-5">$15/mo</h3>
                                <ul class="text-sm px-5 mb-8">
                                    <li class="leading-tight"><i class="mdi mdi-check-bold text-lg"></i> Lorem ipsum</li>
                                    <li class="leading-tight"><i class="mdi mdi-check-bold text-lg"></i> Dolor sit amet</li>
                                    <li class="leading-tight"><i class="mdi mdi-check-bold text-lg"></i> Consectetur</li>
                                    <li class="leading-tight"><i class="mdi mdi-check-bold text-lg"></i> Adipisicing</li>
                                    <li class="leading-tight"><i class="mdi mdi-check-bold text-lg"></i> Elit repellat</li>
                                </ul>
                            </div>
                            <div class="w-full">
                                <button type="submit" name="amount" value="15" class="font-bold bg-gray-600 hover:bg-gray-700 text-white rounded-md px-10 py-2 transition-colors w-full">Buy Now</button>
                            </div>
                        </div>
                        <div class="w-full md:w-1/3 md:max-w-none bg-white px-8 md:px-10 py-8 md:py-10 mb-3 mx-auto md:my-6 rounded-md shadow-lg shadow-gray-600 md:flex md:flex-col">
                            <div class="w-full flex-grow">
                                <h2 class="text-center font-bold uppercase mb-4">PRO</h2>
                                <h3 class="text-center font-bold text-4xl mb-5">$35/mo</h3>
                                <ul class="text-sm px-5 mb-8">
                                    <li class="leading-tight"><i class="mdi mdi-check-bold text-lg"></i> Lorem ipsum</li>
                                    <li class="leading-tight"><i class="mdi mdi-check-bold text-lg"></i> Dolor sit amet</li>
                                    <li class="leading-tight"><i class="mdi mdi-check-bold text-lg"></i> Consectetur</li>
                                    <li class="leading-tight"><i class="mdi mdi-check-bold text-lg"></i> Adipisicing</li>
                                    <li class="leading-tight"><i class="mdi mdi-check-bold text-lg"></i> Much more...</li>
                                </ul>
                            </div>
                            <div class="w-full">
                                <button type="submit" name="amount" value="35" class="font-bold bg-gray-600 hover:bg-gray-700 text-white rounded-md px-10 py-2 transition-colors w-full">Buy Now</button>
                            </div>
                        </div>
                    </form>

            </div>
        </div>

    </body>
</html>
