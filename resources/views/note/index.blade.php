<x-layout>
    <h1>Index</h1>

    <div>
        @foreach($notes as $note)
            <p>{{ Str::words($note->note, 30) }}</p>
        @endforeach
    </div>
</x-layout>
