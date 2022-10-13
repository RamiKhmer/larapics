<x-layout title='Edit an Image'>
    <div class="container-fluid mt-4">
        <div class="row">
            <div class="col-md-6 offset-md-3">
                <div class="card">
                    <div class="card-header">Upload your photo</div>

                    <div class="card-body">
                        <x-form action="{{ route('images.update', $image->id) }}" method="PUT">
                            <div class="mb-3">
                                <label class="form-label" for="file">Photo</label>
                                <img src="{{ $image->fileUrl() }}" width="300" class="form-control" />
                                @error('file')
                                    <div>{{ $message }}</div>
                                    <div class="form-text">
                                        You can only upload your photo in following types: jpg & png
                                    </div>
                                @enderror

                            </div>
                            <div class="mb-3">
                                <label class="form-label" for="title">Photo Title</label>
                                <input type="text" name="title" id="title" value="{{ $image->title }}"
                                    class="form-control">
                                @error('title')
                                    {{ $message }}
                                @enderror
                            </div>
                            <div class="mb-3">
                                <button type="submit" class="btn btn-success">Update</button>
                                <a href="{{ URL::previous() }}" class="btn btn-outline-secondary">Cancel</a>
                            </div>
                        </x-form>
                    </div>
                </div>

            </div>
        </div>
    </div>
</x-layout>
