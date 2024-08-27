<div>
    @if (count($contacts ?? []) > 0)
        <div class="d-flex justify-content-end mb-3">
            <button type="button" wire:click="save" class="btn btn-primary btn-air-primary mx-2">Save</button>
            <button type="button" wire:click="add_branch" class="btn btn-primary btn-air-primary mx-2">Add Branch</button>
        </div>
        @foreach ($contacts as $branch_index => $branch)
            <div class="card">
                <div class="card-header">
                    <div class="row">
                        <div class="col-lg-10">
                            <div class="input-group">
                                <span class="input-group-text">Branch Name</span>
                                <input type="text" wire:model.defer="contacts.{{ $branch_index }}.title"
                                    class="form-control">
                            </div>
                        </div>
                        <div class="col-lg-2">
                            <button type="button" wire:click="remove_branch({{ $branch_index }})"
                                class="btn btn-danger btn-air-danger"><i class="fa fa-trash"></i></button>
                        </div>
                    </div>
                </div>
                <div class="card-body shadow-lg p-2">
                    <div class="row mb-2">
                        <div class="col-lg-6">
                            <div class="input-group">
                                <span class="input-group-text">
                                    Sub Title
                                </span>
                                <input type="text" wire:model="contacts.{{ $branch_index }}.sub_title"
                                    class="form-control">
                            </div>
                        </div>
                        <div class="col-lg-6">
                            <div class="input-group">
                                <span class="input-group-text">
                                    Address
                                </span>
                                <input type="text" wire:model="contacts.{{ $branch_index }}.address"
                                    class="form-control">
                            </div>
                        </div>
                    </div>
                    <div class="card">
                        <div class="card-header">
                            <div class="d-flex justify-content-between mb-3">
                                Branch Gorups
                                <div>
                                    <button type="button" wire:click="add_branch_group({{ $branch_index }})"
                                        class="btn btn-primary btn-air-primary">Add Group</button>
                                    <button type="button" wire:click="remove_all_branch_group({{ $branch_index }})"
                                        class="btn btn-danger btn-air-danger">Remove Group</button>
                                </div>
                            </div>
                        </div>
                        <div class="card-body shadow-md p-2">

                            @if (count($contacts[$branch_index]['groups'] ?? []) > 0)
                                @foreach ($contacts[$branch_index]['groups'] as $branch_group_index => $branch_group)
                                    <div class="card">
                                        <div class="card-header">
                                            <div class="row">
                                                <div class="col-lg-10">
                                                    <div class="input-group">
                                                        <span class="input-group-text">Group Name</span>
                                                        <input type="text"
                                                            wire:model.defer="contacts.{{ $branch_index }}.groups.{{ $branch_group_index }}.title"
                                                            class="form-control">
                                                    </div>
                                                </div>
                                                <div class="col-lg-2">
                                                    <button type="button"
                                                        wire:click="remove_branch_group({{ $branch_index }},{{ $branch_group_index }})"
                                                        class="btn btn-danger btn-air-danger"><i
                                                            class="fa fa-trash"></i></button>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="card-body shadow-lg p-2">
                                            <div class="table-responsive mb-2">
                                                <table class="table table-bordered">
                                                    <thead>
                                                        <tr>
                                                            <td colspan="3"><span class="text-center">Emails</span>
                                                            </td>
                                                        </tr>
                                                        <tr>
                                                            <td><span class="text-center">Title</span></td>
                                                            <td><span class="text-center">Email</span></td>
                                                            <td>
                                                                <button type="button"
                                                                    wire:click="add_branch_group_email({{ $branch_index }},{{ $branch_group_index }})"
                                                                    class="btn btn-success btn-air-success"
                                                                    title="Add Email"><i
                                                                        class="fa fa-plus"></i></button>
                                                            </td>
                                                        </tr>
                                                    </thead>
                                                    <tbody>
                                                        @if (count($contacts[$branch_index]['groups'][$branch_group_index]['emails'] ?? []) > 0)
                                                            @foreach ($contacts[$branch_index]['groups'][$branch_group_index]['emails'] as $branch_group_email_index => $branch_group_email)
                                                                <tr>
                                                                    <td>
                                                                        <div class="input-group">
                                                                            <input type="text"
                                                                                wire:model.defer="contacts.{{ $branch_index }}.groups.{{ $branch_group_index }}.emails.{{ $branch_group_email_index }}.title"
                                                                                name="data[contacts][{{ $branch_index }}][groups][{{ $branch_group_index }}][emails][{{ $branch_group_email_index }}][title]"
                                                                                class="form-control">
                                                                        </div>
                                                                    </td>
                                                                    <td>
                                                                        <input type="text"
                                                                            wire:model.defer="contacts.{{ $branch_index }}.groups.{{ $branch_group_index }}.emails.{{ $branch_group_email_index }}.email"
                                                                            name="data[contacts][{{ $branch_index }}][groups][{{ $branch_group_index }}][emails][{{ $branch_group_email_index }}][email]"
                                                                            class="form-control">
                                                                    </td>
                                                                    <td>
                                                                        <button type="button"
                                                                            class="btn btn-danger btn-air-danger"
                                                                            wire:click="remove_branch_group_email({{ $branch_index }},{{ $branch_group_index }},{{ $branch_group_email_index }})"><i
                                                                                class="fa fa-trash"></i></button>
                                                                    </td>
                                                                </tr>
                                                            @endforeach
                                                        @else
                                                            <tr>
                                                                <td colspan="3"><span class="text-center">No
                                                                        Emails</span>
                                                            </tr>
                                                        @endif
                                                    </tbody>
                                                </table>
                                            </div>
                                            <div class="table-responsive mb-2">
                                                <table class="table table-bordered">
                                                    <thead>
                                                        <tr>
                                                            <td colspan="3"><span class="text-center">Phones</span>
                                                            </td>
                                                        </tr>
                                                        <tr>
                                                            <td><span class="text-center">Title</span></td>
                                                            <td><span class="text-center">Phone</span></td>
                                                            <td>
                                                                <button type="button"
                                                                    wire:click="add_branch_group_phone({{ $branch_index }},{{ $branch_group_index }})"
                                                                    class="btn btn-success btn-air-success"
                                                                    title="Add Phone"><i
                                                                        class="fa fa-plus"></i></button>
                                                            </td>
                                                        </tr>
                                                    </thead>
                                                    <tbody>
                                                        @if (count($contacts[$branch_index]['groups'][$branch_group_index]['phones'] ?? []) > 0)
                                                            @foreach ($contacts[$branch_index]['groups'][$branch_group_index]['phones'] as $branch_group_phone_index => $branch_group_phone)
                                                                <tr>
                                                                    <td>
                                                                        <div class="input-group">
                                                                            <input type="text"
                                                                                wire:model.defer="contacts.{{ $branch_index }}.groups.{{ $branch_group_index }}.phones.{{ $branch_group_phone_index }}.title"
                                                                                name="data[contacts][{{ $branch_index }}][groups][{{ $branch_group_index }}][phones][{{ $branch_group_phone_index }}][title]"
                                                                                class="form-control">
                                                                        </div>
                                                                    </td>
                                                                    <td>
                                                                        <input type="text"
                                                                            wire:model.defer="contacts.{{ $branch_index }}.groups.{{ $branch_group_index }}.phones.{{ $branch_group_phone_index }}.phone"
                                                                            name="data[contacts][{{ $branch_index }}][groups][{{ $branch_group_index }}][phones][{{ $branch_group_phone_index }}][phone]"
                                                                            class="form-control">
                                                                    </td>
                                                                    <td>
                                                                        <button type="button"
                                                                            class="btn btn-danger btn-air-danger"
                                                                            wire:click="remove_branch_group_phone({{ $branch_index }},{{ $branch_group_index }},{{ $branch_group_phone_index }})"><i
                                                                                class="fa fa-trash"></i></button>
                                                                    </td>
                                                                </tr>
                                                            @endforeach
                                                        @else
                                                            <tr>
                                                                <td colspan="3"><span class="text-center">No
                                                                        Phones</span>
                                                            </tr>
                                                        @endif
                                                    </tbody>
                                                </table>
                                            </div>
                                        </div>
                                    </div>
                                @endforeach
                            @else
                                <div class="container-fluid p-0 m-0">
                                    <div class="comingsoon comingsoon-bgimg"
                                        style="background: url({{ asset('adminetic/static/free-booking-bg.jpg') }});background-repeat: no-repeat;background-size: cover;">
                                        <div class="comingsoon-inner text-center">
                                            <h5>No branch group yet.</h5>
                                            <button type="button" wire:click="add_branch_group({{ $branch_index }})"
                                                class="btn btn-primary btn-air-primary">
                                                Add branch group
                                            </button>
                                        </div>
                                    </div>
                                </div>
                            @endif
                        </div>
                    </div>
                </div>
            </div>
        @endforeach
    @else
        <div class="container-fluid p-0 m-0">
            <div class="comingsoon comingsoon-bgimg"
                style="background: url({{ asset('adminetic/static/free-booking-bg.jpg') }});background-repeat: no-repeat;background-size: cover;">
                <div class="comingsoon-inner text-center">
                    <h5>No branch contacts yet.</h5>
                    <button type="button" wire:click="add_branch" class="btn btn-primary btn-air-primary">
                        Add branch contact
                    </button>
                </div>
            </div>
        </div>
    @endif
    @push('livewire_third_party')
        <script>
            document.addEventListener('livewire:load', function(e) {
                Livewire.on('branch_contact_saved', message => {
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
                        message: "Branch contacts saved successfully"
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
