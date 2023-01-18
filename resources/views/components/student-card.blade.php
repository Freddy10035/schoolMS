@props(['student'])

<x-card>
    <div class="flex">
        <div>
            <h3 class="text-2xl">
                <a href="/studentAdmission/{{ $student->id }}">{{ $student->name }}</a>
            </h3>

            <div class="text-xl font-bold mb-4">{{ $student->email }}</div>
        </div>
    </div>
</x-card>