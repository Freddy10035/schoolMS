<x-layout>

    @section('content')

        <body>

            <section class="bg-white dark:bg-gray-900">
                <div class="gap-16 items-center py-8 px-4 mx-auto max-w-screen-xl lg:grid lg:grid-cols-2 lg:py-16 lg:px-6">
                    <div class="font-light text-gray-500 sm:text-lg dark:text-gray-400">
                        <h2 class="mb-4 text-4xl font-extrabold text-gray-900 dark:text-white">We didn't reinvent the wheel
                        </h2>
                        <p class="mb-4">We are strategists, designers and developers. Innovators and problem solvers.
                            Small enough to be simple and quick, but big enough to deliver the scope you want at the pace
                            you need. Small enough to be simple and quick, but big enough to deliver the scope you want at
                            the pace you need.</p>
                        <p>We are strategists, designers and developers. Innovators and problem solvers. Small enough to be
                            simple and quick.</p>
                    </div>
                    <div class="grid grid-cols-2 gap-4 mt-8">
                        <img class="w-full rounded-lg"
                            src="https://flowbite.s3.amazonaws.com/blocks/marketing-ui/content/office-long-2.png"
                            alt="office content 1">
                        <img class="mt-4 w-full rounded-lg lg:mt-10"
                            src="https://flowbite.s3.amazonaws.com/blocks/marketing-ui/content/office-long-1.png"
                            alt="office content 2">
                    </div>
                </div>
            </section>

            <section class="bg-gray-50 dark:bg-gray-900 dark:bg-gray-800">
                <div class="py-8 px-4 mx-auto max-w-screen-xl lg:py-16 lg:px-6">
                    <div class="max-w-screen-lg text-gray-500 sm:text-lg dark:text-gray-400">
                        <h2 class="mb-4 text-4xl font-bold text-gray-900 dark:text-white">Powering innovation at <span
                                class="font-extrabold">200,000+</span> companies worldwide</h2>
                        <p class="mb-4 font-light">Track work across the enterprise through an open, collaborative
                            platform. Link issues across Jira and ingest data from other software development tools, so your
                            IT support and operations teams have richer contextual information to rapidly respond to
                            requests, incidents, and changes.</p>
                        <p class="mb-4 font-medium">Deliver great service experiences fast - without the complexity of
                            traditional ITSM solutions.Accelerate critical development work, eliminate toil, and deploy
                            changes with ease.</p>
                        <a href="#"
                            class="inline-flex items-center font-medium text-primary-600 hover:text-primary-800 dark:text-primary-500 dark:hover:text-primary-700">
                            Learn more
                            <svg class="ml-1 w-6 h-6" fill="currentColor" viewBox="0 0 20 20"
                                xmlns="http://www.w3.org/2000/svg">
                                <path fill-rule="evenodd"
                                    d="M7.293 14.707a1 1 0 010-1.414L10.586 10 7.293 6.707a1 1 0 011.414-1.414l4 4a1 1 0 010 1.414l-4 4a1 1 0 01-1.414 0z"
                                    clip-rule="evenodd"></path>
                            </svg>
                        </a>
                    </div>
                </div>
            </section>

            <section class="bg-white dark:bg-gray-900">
                <div class="py-8 px-4 mx-auto max-w-screen-xl sm:py-16 lg:px-6">
                    <div class="mx-auto max-w-screen-sm text-center">
                        <h2 class="mb-4 text-4xl font-extrabold leading-tight text-gray-900 dark:text-white">Start your
                            free trial today</h2>
                        <p class="mb-6 font-light text-gray-500 dark:text-gray-400 md:text-lg">Try Flowbite Platform for 30
                            days. No credit card required.</p>
                        <a href="#"
                            class="text-white bg-primary-700 hover:bg-primary-800 focus:ring-4 focus:ring-primary-300 font-medium rounded-lg text-sm px-5 py-2.5 mr-2 mb-2 dark:bg-primary-600 dark:hover:bg-primary-700 focus:outline-none dark:focus:ring-primary-800">Free
                            trial for 30 days</a>
                    </div>
                </div>
            </section>
            <script src="https://unpkg.com/flowbite@1.4.7/dist/flowbite.js"></script>
        </body>
    @endsection
</x-layout>