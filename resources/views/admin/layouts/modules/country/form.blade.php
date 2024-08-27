<div class="row">
    <div class="col-lg-8">
        <div class="mt-2">
            <label for="name">{{ label('countries', 'name') }}</label>
            <div class="input-group">
                <input type="text" name="name" id="name" class="form-control" placeholder="Country Name"
                    value="{{ $country->name ?? old('name') }}">
            </div>
        </div>
        <br>
        <x-adminetic-edit-add-button :model="$country ?? null" name="country" />
    </div>
    <div class="col-lg-4">
        <div class="card">
            <div class="card-header">
                Country's Flag
            </div>
            <div class="card-body shadow-lg p-3">
                @livewire('admin.system.upload-image', ['model' => $country ?? null, 'attribute' => 'image'])
            </div>
        </div>
        <div class="card">
            <div class="card-body shadow-lg p-3">
                <div class="mt-4">
                    <label for="meta_name">{{ label('countrys', 'meta_name', 'Meta Name') }}</label>
                    <div class="input-group">
                        <input type="text" name="meta_name" id="meta_name" class="form-control"
                            value="{{ $country->meta_name ?? old('meta_name') }}" placeholder="Meta Name">
                    </div>
                </div>
                <br>
                <div class="mt-4">
                    <label
                        for="meta_description">{{ label('countrys', 'meta_description', 'Meta Description') }}</label>
                    <textarea name="meta_description" id="meta_description" cols="30" rows="10" class="form-control">{{ $country->meta_description ?? old('meta_description') }}</textarea>
                </div>
                <br>
                <div class="mt-4">
                    <label for="meta_keywords">{{ label('countrys', 'meta_keywords', 'Meta Keywords') }}</label>
                    <div class="input-group">
                        <input type="text" name="meta_keywords" id="meta_keywords" class="form-control"
                            value="{{ $country->meta_keywords ?? old('meta_keywords') }}" placeholder="Meta Keywords">
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
