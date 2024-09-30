<div class="card">
    <div class="card-header">
        <div class="row">
            <div class="col-lg-12">
                <label for="name">{{ label('galleries', 'name') }}</label>
                <input type="text" name="name" class="form-control" value="{{ $gallery->name ?? old('name') }}"
                    placeholder="Gallery Name" />
            </div>
        </div>
    </div>
    <div class="card-body shadow-lg p-3">
        @livewire('admin.system.video-media', ['name' => 'videos', 'data' => isset($gallery) ? $gallery->videos : null, 'single_mode' => false])
        <hr>
        <label>Gallery Images</label>
        @livewire('admin.system.upload-image', ['model' => $gallery ?? null, 'attribute' => 'images', 'multiple' => true])
    </div>
</div>

<div class="card">
    <div class="card-body shadow-md p-2">
        <label for="description">{{ label('galleries', 'description') }}</label>
        <textarea name="description" id="heavytexteditor" cols="30" rows="10">
        @isset($gallery->description)
{!! $gallery->description !!}
@endisset
       </textarea>
    </div>
</div>

<br>
<x-adminetic-edit-add-button :model="$gallery ?? null" name="Gallery" />
