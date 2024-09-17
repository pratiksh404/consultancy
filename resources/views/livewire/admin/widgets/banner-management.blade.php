<div>
    <form wire:submit.prevent="save">
        <div class="row">
            <div class="col-lg-8">
                <div class="card">
                    <div class="card-body shadow-lg p-2">
                        <div class="mt-2">
                            <label for="title">Banner Title</label>
                            <input type="text" name="title" wire:model.defer="title" id="title"
                                class="form-control" placeholder="Banner Title">
                            @error('title')
                                <br>
                                <small class="text-danger">{{ $message }}</small>
                            @enderror
                        </div>
                        <div class="mt-2">
                            <label for="subtitle">Banner Subtitle</label>
                            <input type="text" name="subtitle" wire:model.defer="subtitle" id="subtitle"
                                class="form-control" placeholder="Banner Subtitle">
                            @error('subtitle')
                                <br>
                                <small class="text-danger">{{ $message }}</small>
                            @enderror
                        </div>
                        <div class="mt-2">
                            <label for="short_description">Banner Short Description</label>
                            @livewire('admin.system.trix', ['value' => $short_description], key('banner_short_description'))
                            @error('short_description')
                                <br>
                                <small class="text-danger">{{ $message }}</small>
                            @enderror
                        </div>
                    </div>
                </div>
                <div class="card">
                    <div class="card-header">Feature Points</div>
                    <div class="card-body shadow-lg p-2">
                        <div class="table-responsive">
                            <table class="table table-bordered">
                                <thead>
                                    <th>Feature</th>
                                    <th><button type="button" wire:click="addFeature"
                                            class="btn btn-success btn-air-success"><i class="fa fa-plus"></i></button>
                                    </th>
                                </thead>
                                <tbody>
                                    @if (!is_null($features))
                                        @foreach ($features as $index => $feature)
                                            <tr>
                                                <td><input type="text" name="data[features][{{ $index }}]"
                                                        wire:model.defer="features.{{ $index }}"
                                                        class="form-control"></td>
                                                <td><button type="button"
                                                        wire:click="removeFeature({{ $index }})"
                                                        class="btn btn-danger btn-air-danger"><i
                                                            class="fa fa-trash"></i></button></td>
                                            </tr>
                                        @endforeach
                                    @endif
                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-lg-4">
                <div class="card">
                    <div class="card-header">Buttons</div>
                    <div class="card-body shadow-lg p-2">
                        <div class="mt-2">
                            <label for="primary_button_title">Primary Button Title</label>
                            <input type="text" wire:model.defer="primary_button_title" id=""
                                class="form-control">
                            @error('primary_button_title')
                                <br>
                                <small class="text-danger">{{ $message }}</small>
                            @enderror
                        </div>
                        <div class="mt-2">
                            <label for="primary_button_link">Primary Button Link</label>
                            <input type="text" wire:model.defer="primary_button_link" class="form-control">
                            @error('primary_button_link')
                                <br>
                                <small class="text-danger">{{ $message }}</small>
                            @enderror
                        </div>
                        <div class="mt-2">
                            <label for="secondary_button_title">Secondary Button Title</label>
                            <input type="text" wire:model.defer="secondary_button_title" id=""
                                class="form-control">
                            @error('secondary_button_title')
                                <br>
                                <small class="text-danger">{{ $message }}</small>
                            @enderror
                        </div>
                        <div class="mt-2">
                            <label for="secondary_button_link">Secondary Button Link</label>
                            <input type="text" wire:model.defer="secondary_button_link" class="form-control">
                            @error('secondary_button_link')
                                <br>
                                <small class="text-danger">{{ $message }}</small>
                            @enderror
                        </div>
                    </div>
                </div>
                <div class="card">
                    <div class="card-body shadow-lg p-2">
                        <div class="mt-2">
                            <label for="image">Banner Image</label>
                            <input type="file" name="image" wire:model.defer="image" id="image"
                                class="form-control">
                            @error('image')
                                <br>
                                <small class="text-danger">{{ $message }}</small>
                            @enderror

                            <hr>
                            @if (!is_null($image))
                                <img src="{{ asset('storage/' . $image) }}" class="img-fluid">
                                <hr>
                                <button class="btn btn-danger btn-air-danger" wire:click="$set('image', null)"
                                    style="width: 100%">Remove <i class="fa fa-trash mx-2"></i></button>
                            @else
                                <img src="{{ banner()->image }}" class="img-fluid">
                            @endif
                        </div>
                    </div>
                </div>
                <hr>
                <div wire:loading wire:target="save">
                    <button type="button" disabled class="btn btn-primary btn-air-primary" style="width: 100%"> Saving
                        ...
                        <i class="fa fa-spinner fa-spin"></i></button>
                </div>
                <div wire:loading.remove wire:target="save">
                    <button type="button" wire:click="save" class="btn btn-primary btn-air-primary"
                        style="width: 100%">Save</button>
                </div>
            </div>
        </div>
    </form>
    @push('livewire_third_party')
        <script>
            document.addEventListener('livewire:load', function(e) {
                Livewire.on('banner_management_saved', message => {
                    var notify_allow_dismiss = Boolean(
                        {{ config('adminetic.notify_allow_dismiss', true) }});
                    var notify_delay = {{ config('adminetic.notify_delay', 2000) }};
                    var notify_showProgressbar = Boolean(
                        {{ config('adminetic.notify_showProgressbar', true) }});
                    var notify_timer = {{ config('adminetic.notify_timer', 300) }};
                    var notify_newest_on_top = Boolean(
                        {{ config('adminetic.notify_newest_on_top', true) }});
                    var notify_mouse_over = Boolean(
                        {{ config('adminetic.notify_mouse_over', true) }});
                    var notify_spacing = {{ config('adminetic.notify_spacing', 1) }};
                    var notify_notify_animate_in =
                        "{{ config('adminetic.notify_animate_in', 'animated fadeInDown') }}";
                    var notify_notify_animate_out =
                        "{{ config('adminetic.notify_animate_out', 'animated fadeOutUp') }}";
                    var notify = $.notify({
                        title: "<i class='{{ config('adminetic.notify_icon', 'fa fa-bell-o') }}'></i> " +
                            "Alert",
                        message: "Banner content saved successfully"
                    }, {
                        type: 'success',
                        allow_dismiss: notify_allow_dismiss,
                        delay: notify_delay,
                        showProgressbar: notify_showProgressbar,
                        timer: notify_timer,
                        newest_on_top: notify_newest_on_top,
                        mouse_over: notify_mouse_over,
                        spacing: notify_spacing,
                        animate: {
                            enter: notify_notify_animate_in,
                            exit: notify_notify_animate_out
                        }
                    });
                });
            });
        </script>
    @endpush
</div>
