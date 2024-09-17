<div class="card">
    <div class="card-body shadow-lg p-2">
        <div class="mt-2">
            <label for="name">{{ label('steps', 'name') }}</label>
            <input type="text" name="name" id="name" class="form-control"
                value="{{ $step->name ?? old('name') }}">
        </div>
        <div class="mt-2">
            <label for="excerpt">{{ label('steps', 'excerpt', 'Short Introduction') }}</label>
            <input type="text" name="excerpt" id="excerpt" class="form-control"
                value="{{ $step->excerpt ?? old('excerpt') }}">
        </div>
    </div>
    <div class="card-footer">
        <x-adminetic-edit-add-button :model="$step ?? null" name="step" />
    </div>
</div>
