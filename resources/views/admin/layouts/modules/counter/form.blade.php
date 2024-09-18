<div class="row">
    <div class="col-lg-8">
        <div class="card">
            <div class="card-body shadow-lg p-2">
                <div class="row">
                    <div class="col-lg-8">
                        <label for="name">{{ label('counters', 'name') }}</label>
                        <div class="input-group">
                            <input type="text" name="name" id="name" class="form-control"
                                value="{{ $counter->name ?? old('name') }}" placeholder="Counter Name">
                        </div>
                    </div>
                    <div class="col-lg-4">
                        <label for="icon">{{ label('counters', 'icon') }}</label>
                        <div class="input-group">
                            <span class="input-group-text"><i id="showIcon" class="fa fa-concierge-bell"></i></span>
                            <button type="button" class="btn btn-primary" id="iconPicker" data-iconpicker-input="#icon"
                                data-iconpicker-preview="#showIcon">Select
                                Icon</button>
                            <input type="hidden" name="icon" id="icon"
                                value="{{ $counter->icon ?? (old('icon') ?? 'fa fa-concierge-bell') }}">
                        </div>
                    </div>
                </div>
                <div class="row">
                    <div class="col-lg-6">
                        <label for="count">{{ label('counters', 'count') }}</label>
                        <div class="input-group">
                            <input type="text" name="count" class="form-control" id="count"
                                value="{{ $counter->count ?? old('count') }}" placeholder="Count">
                        </div>
                    </div>
                    <div class="col-lg-6">
                        <label for="suffix">Suffix</label>
                        <div class="input-group">
                            <input type="text" name="data[suffix]" class="form-control" id="suffix"
                                value="{{ $counter->suffix ?? old('suffix') }}" placeholder="+,k,yrs....">
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="col-lg-4">
        <div class="card">
            <div class="card-body shadow-lg p-3">
                <div class="mt-2">
                    <label>Icon <a href="https://www.flaticon.com/" target="_blank">Explore ..</a></label>
                    @livewire('admin.system.upload-image', ['model' => $counter ?? null, 'attribute' => 'icon_image'])
                </div>
            </div>
        </div>
    </div>
</div>
<br>
<x-adminetic-edit-add-button :model="$counter ?? null" name="Counter" />
