<x-layout>
    <h1>Create form</h1>

    <form action="{{ route('note.store') }}" method="post">
        @csrf

        <div>
            <textarea name="note" rows="10"></textarea>
        </div>
        <div>
            <button type="submit">Submit</button>
        </div>
    </form>
</x-layout>
