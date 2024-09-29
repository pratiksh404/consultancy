<div class="row">
    <div class="mt-2">
        <div class="form-control">
            <label for="name">{{ label('branches', 'name') }}</label>
            <div class="input-group">
                <input type="text" name="name" id="name" class="form-control"
                    value="{{ $branch->name ?? old('name') }}" placeholder="Branch Name">
            </div>
        </div>
    </div>
    <div class="mt-2">
        <div class="form-control">
            <label for="name">Map</label>
            <div class="input-group">
                <input type="text" name="data[map]" id="map" class="form-control"
                    value="{{ $branch->map ?? old('map') }}" placeholder="Branch Map">
            </div>
        </div>
    </div>
    @livewire('admin.branch.branch-contact-management', ['emails' => $branch->emails ?? [], 'phones' => $branch->phones ?? []])
    <br>
    <x-adminetic-edit-add-button :model="$branch ?? null" name="Branch" />
</div>
