<x-layout title='Discover Free Image'>
    @if ($message = session('message'))
        <x-alert type="success" dismissible id="my-alert" role="flash" class="mt-4 ">
            <x-slot:title>
                {{ $component->icon() }}

                </x-slot>
                <p class="mb-0">{{ $message }}. {{ $component->link('Undo') }}</p>
        </x-alert>
    @endif
    <h1>All images</h1>
    <div class="row" data-masonry='{"percentPosition": true }'>
        @foreach ($images as $image)
            <div class="col-sm-6 col-lg-4 mb-4">
                <div class="card">
                    <a href="{{ $image->permalink() }}"><img src="{{ $image->fileUrl() }}" alt="{{ $image->title }}"
                            class="card-img-top"></a>
                    <div class="photo-buttons">
                        <a href="{{ route('images.edit', $image->id) }}" class="btn btn-sm btn-info me-2">Edit</a>
                        <x-form action="{{ route('images.destroy', $image->id) }}" method="DELETE"
                            style="display: inline">

                            <button class="btn btn-sm btn-danger" type="submit"
                                onclick="return confirm('Are you sure?')">Delete</button>
                        </x-form>
                    </div>
                </div>
            </div>
        @endforeach
    </div>
    {{ $images->links('pagination::bootstrap-4') }}
</x-layout>
