<div class="row">
    <div class="col-lg-8">
        <div class="mt-2">
            <label for="name">{{ label('visas', 'name') }}</label>
            <div class="input-group">
                <input type="text" name="name" id="name" class="form-control" placeholder="Course Name"
                    value="{{ $course->name ?? old('name') }}">
            </div>
        </div>
        <div class="mt-2">
            <label for="excerpt">{{ label('visas', 'excerpt', 'Short Introduction') }}</label>
            <div class="input-group">
                <input type="text" name="excerpt" id="excerpt" class="form-control"
                    placeholder="Short Introduction" value="{{ $course->excerpt ?? old('excerpt') }}">
            </div>
        </div>
        <div class="mt-2">
            <label for="excerpt">{{ label('visas', 'excerpt', 'Short Introduction') }}</label>
            <textarea name="description" id="heavytexteditor" cols="30" rows="10">
                @isset($course->description)
{!! $course->description !!}
@endisset
            </textarea>
        </div>
    </div>
    <div class="col-lg-4">
        <div class="card">
            <div class="card-header">
                Course's Thumbnail
            </div>
            <div class="card-body shadow-lg p-3">
                @livewire('admin.system.upload-image', ['model' => $course ?? null, 'attribute' => 'thumbnail'])
            </div>
        </div>
        <div class="card">
            <div class="card-body shadow-lg p-3">
                <div class="mt-4">
                    <label for="meta_name">{{ label('visas', 'meta_name', 'Meta Name') }}</label>
                    <div class="input-group">
                        <input type="text" name="meta_name" id="meta_name" class="form-control"
                            value="{{ $course->meta_name ?? old('meta_name') }}" placeholder="Meta Name">
                    </div>
                </div>
                <br>
                <div class="mt-4">
                    <label for="meta_description">{{ label('visas', 'meta_description', 'Meta Description') }}</label>
                    <textarea name="meta_description" id="meta_description" cols="30" rows="10" class="form-control">{{ $course->meta_description ?? old('meta_description') }}</textarea>
                </div>
                <br>
                <div class="mt-4">
                    <label for="meta_keywords">{{ label('visas', 'meta_keywords', 'Meta Keywords') }}</label>
                    <div class="input-group">
                        <input type="text" name="meta_keywords" id="meta_keywords" class="form-control"
                            value="{{ $course->meta_keywords ?? old('meta_keywords') }}" placeholder="Meta Keywords">
                    </div>
                </div>
            </div>
        </div>
    </div>
    <br>
    <x-adminetic-edit-add-button :model="$course ?? null" name="course" />
</div>
