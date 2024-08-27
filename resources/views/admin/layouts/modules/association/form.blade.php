<div class="row">
    <div class="col-12">
        <div class="mt-2">
            <label for="name">{{ label('associations', 'name') }}</label>
            <div class="input-group">
                <input type="text" name="name" id="name" class="form-control"
                    value="{{ $association->name ?? old('name') }}" placeholder="Association Name">
            </div>
        </div>
    </div>
    <div class="col-12">
        <div class="mt-2">
            <label for="name">{{ label('associations', 'url', 'URL') }}</label>
            <div class="input-group">
                <input type="text" name="url" id="url" class="form-control"
                    value="{{ $association->url ?? old('url') }}" placeholder="Association URL">
            </div>
        </div>
    </div>
    <div class="col-12">
        <div class="mt-2">
            <label>Logo</label> <br>
            @livewire('admin.system.upload-image', ['model' => $association ?? null, 'attribute' => 'logo'])
        </div>
    </div>
</div>
<br>
<br>
<x-adminetic-edit-add-button :model="$association ?? null" name="Association" />
