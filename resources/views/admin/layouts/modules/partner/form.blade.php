<div class="row">
    <div class="col-12">
        <div class="mt-2">
            <label for="name">{{ label('partners', 'name') }}</label>
            <div class="input-group">
                <input type="text" name="name" id="name" class="form-control"
                    value="{{ $partner->name ?? old('name') }}" placeholder="Partner Name">
            </div>
        </div>
    </div>
    <div class="col-12">
        <div class="mt-2">
            <label for="name">{{ label('partners', 'url', 'URL') }}</label>
            <div class="input-group">
                <input type="text" name="url" id="url" class="form-control"
                    value="{{ $partner->url ?? old('url') }}" placeholder="Partner URL">
            </div>
        </div>
    </div>
    <div class="col-12">
        <div class="mt-2">
            <label>Logo</label> <br>
            @livewire('admin.system.upload-image', ['model' => $partner ?? null, 'attribute' => 'logo'])
        </div>
    </div>
</div>
<br>
<br>
<x-adminetic-edit-add-button :model="$partner ?? null" name="Partner" />
