<x-layout>

    @section('content')

        <div class="lg:grid lg:grid-cols-2 gap-4 space-y-4 md:space-y-0 mx-4">

            @unless(count($studentAdmission) == 0)
                @foreach ($studentAdmission as $student)
                    <x-student-card :student="$student" />
                @endforeach
            @else
                <p>No Students found</p>
            @endunless

        </div>

        <div class="mt-6 p-4">
            {{$studentAdmission->links()}}
        </div>

    @endsection
</x-layout>
