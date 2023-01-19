<x-layout>

    @section('content')

        <body>
            @include('partials._header')
            @include('partials._intro')
            @include('partials._logos')
            @include('partials._business-types')
            @include('partials._we')
            @include('partials._innovations')
            @include('partials._payments')
            @include('partials._footer')

            <script src="https://unpkg.com/flowbite@1.4.7/dist/flowbite.js"></script>
        </body>
    @endsection
</x-layout>
