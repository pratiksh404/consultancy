<div class="row">
    <div class="col-lg-8">
        <div class="card">
            <div class="card-body shadow-lg p-3">
                <div class="row">
                    <div class="col-12 mt-3">
                        <label for="name">{{ label('popups', 'name') }}</label>
                        <div class="input-group">
                            <input type="text" name="name" id="name" class="form-control"
                                value="{{ $popup->name ?? old('name') }}" placeholder="popup Name">
                        </div>
                    </div>
                </div>
                <br>
                <div class="row">
                    <div class="col-12 mt-3">
                        <label for="excerpt">{{ label('popups', 'description') }}</label>
                        <div class="input-group">
                            <textarea name="description" id="heavytexteditor" cols="30" rows="20" class="form-control">
                                @isset($popup->description)
{!! $popup->description !!}
@endisset
                            </textarea>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <br>
        <x-adminetic-edit-add-button :model="$popup ?? null" name="popup" />
    </div>
    <div class="col-lg-4">
        <div class="card">
            <div class="card-header">
                Popup Image
            </div>
            <div class="card-body shadow-lg p-3">
                @livewire('admin.system.upload-image', ['model' => $popup ?? null, 'attribute' => 'image'])
            </div>
        </div>
        <div class="card">
            <div class="card-body shadow-lg p-3">
                <div class="row">
                    <div class="col-lg-6">
                        <label>{{ label('popups', 'active') }}</label> <br>
                        <input type="hidden" name="active" value="0">
                        <input type="checkbox" name="active" id="active" value="1"
                            {{ isset($popup->active) ? ($popup->active ? 'checked' : '') : 'checked' }}>
                    </div>
                </div>
                <br>
                <div class="mt-4">
                    <label for="expire">{{ label('popups', 'expire', 'Expire Date') }}</label>
                    <div class="input-group">
                        <span class="input-group-text">URL</span>
                        <input type="text" name="data[url]" id="expire" class="form-control"
                            value="{{ $popup->url ?? old('expire') }}">
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
