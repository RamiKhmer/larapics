<x-layout title='Uplaod an Image'>
    <h1>upload image</h1>
    <div class="container-fluid mt-4">
        <div class="row">
            <div class="col-md-6 offset-md-3">
                <div class="card">
                    <div class="card-header">Upload your photo</div>

                    <div class="card-body">
                        <x-form action="{{ route('images.store') }}" method="POST" enctype="multipart/form-data">
                            <div class="mb-3">
                                <label class="form-label" for="file">Photo</label>
                                <input class="form-control" type="file" name="file" id="file">
                                @error('file')
                                    <div>{{ $message }}</div>
                                    <div class="form-text">
                                        You can only upload your photo in following types: jpg & png
                                    </div>
                                @enderror

                            </div>
                            <div class="mb-3">
                                <label class="form-label" for="title">Photo Title</label>
                                <input type="text" name="title" id="title" value="{{ old('title') }}"
                                    class="form-control is-invalid">
                                @error('title')
                                    <div>{{ $message }}</div>
                                    <div class="invalid-feedback">
                                        Title is required
                                    </div>
                                @enderror

                            </div>
                            <div class="mb-3">
                                <button type="submit" class="btn btn-primary">Upload</button>
                                <a href="{{URL::previous()}}" class="btn btn-outline-secondary">Cancel</a>
                            </div>
                        </x-form>
                    </div>
                </div>

            </div>
        </div>
    </div>
</x-layout>
