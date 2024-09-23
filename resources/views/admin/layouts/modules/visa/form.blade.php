<div class="row">
    <div class="col-lg-8">
        <div class="mt-2">
            <label for="name">{{ label('visas', 'name') }}</label>
            <div class="input-group">
                <input type="text" name="name" id="name" class="form-control" placeholder="Visa Name"
                    value="{{ $visa->name ?? old('name') }}">
            </div>
        </div>
        <div class="mt-2">
            <label for="excerpt">{{ label('visas', 'excerpt', 'Short Introduction') }}</label>
            <div class="input-group">
                <input type="text" name="excerpt" id="excerpt" class="form-control"
                    placeholder="Short Introduction" value="{{ $visa->excerpt ?? old('excerpt') }}">
            </div>
        </div>
        <div class="mt-2">
            @livewire('admin.counter.appended-counter', ['counters' => $visa->counters ?? null])
        </div>
        <div class="mt-2">
            <label for="excerpt">{{ label('visas', 'excerpt', 'Short Introduction') }}</label>
            <textarea name="description" id="heavytexteditor" cols="30" rows="10">
                @isset($visa->description)
{!! $visa->description !!}
@endisset
            </textarea>
        </div>
    </div>
    <div class="col-lg-4">
        <div class="card">
            <div class="card-header">
                Visa's Multimedia
            </div>
            <div class="card-body shadow-lg p-3">
                <div class="mt-2">
                    <label>Thumbnail</label>
                    @livewire('admin.system.upload-image', ['model' => $visa ?? null, 'attribute' => 'thumbnail'])
                </div>
                <div class="mt-2">
                    <label>Icon <a href="https://www.flaticon.com/" target="_blank">Explore ..</a></label>
                    @livewire('admin.system.upload-image', ['model' => $visa ?? null, 'attribute' => 'icon'])
                </div>
            </div>
        </div>
        <div class="card">
            <div class="card-header">
                Visa's Downloads
            </div>
            <div class="card-body shadow-lg p-3">
                @livewire('admin.system.upload-attachment', ['model' => $visa ?? null, 'attribute' => 'downloads'])
            </div>
        </div>
        <div class="card">
            <div class="card-body shadow-lg p-3">
                <div class="mt-4">
                    <label for="meta_name">{{ label('visas', 'meta_name', 'Meta Name') }}</label>
                    <div class="input-group">
                        <input type="text" name="meta_name" id="meta_name" class="form-control"
                            value="{{ $visa->meta_name ?? old('meta_name') }}" placeholder="Meta Name">
                    </div>
                </div>
                <br>
                <div class="mt-4">
                    <label for="meta_description">{{ label('visas', 'meta_description', 'Meta Description') }}</label>
                    <textarea name="meta_description" id="meta_description" cols="30" rows="10" class="form-control">{{ $visa->meta_description ?? old('meta_description') }}</textarea>
                </div>
                <br>
                <div class="mt-4">
                    <label for="meta_keywords">{{ label('visas', 'meta_keywords', 'Meta Keywords') }}</label>
                    <div class="input-group">
                        <input type="text" name="meta_keywords" id="meta_keywords" class="form-control"
                            value="{{ $visa->meta_keywords ?? old('meta_keywords') }}" placeholder="Meta Keywords">
                    </div>
                </div>
            </div>
        </div>
    </div>
    <br>
    <x-adminetic-edit-add-button :model="$visa ?? null" name="visa" />
</div>
