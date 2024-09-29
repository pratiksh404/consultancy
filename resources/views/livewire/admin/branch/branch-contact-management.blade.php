<div>
    <div class="mt-2">
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
                            <button type="button" wire:click="addEmail" class="btn btn-success btn-air-success"
                                title="Add Email"><i class="fa fa-plus"></i></button>
                        </td>
                    </tr>
                </thead>
                <tbody>
                    @if (count($emails ?? []) > 0)
                        @foreach ($emails as $email_index => $email)
                            <tr>
                                <td>
                                    <div class="input-group">
                                        <input type="text" wire:model.defer="emails.{{ $email_index }}.title"
                                            name="data[emails][{{ $email_index }}][title]" class="form-control">
                                    </div>
                                </td>
                                <td>
                                    <input type="email" wire:model.defer="emails.{{ $email_index }}.value"
                                        name="data[emails][{{ $email_index }}][value]" class="form-control">
                                </td>
                                <td>
                                    <button type="button" class="btn btn-danger btn-air-danger"
                                        wire:click="removeEmail({{ $email_index }})"><i
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
    </div>
    <div class="mt-2">
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
                            <button type="button" wire:click="addPhone" class="btn btn-success btn-air-success"
                                title="Add Phone"><i class="fa fa-plus"></i></button>
                        </td>
                    </tr>
                </thead>
                <tbody>
                    @if (count($phones ?? []) > 0)
                        @foreach ($phones as $phone_index => $phone)
                            <tr>
                                <td>
                                    <div class="input-group">
                                        <input type="text" wire:model.defer="phones.{{ $phone_index }}.title"
                                            name="data[phones][{{ $phone_index }}][title]" class="form-control">
                                    </div>
                                </td>
                                <td>
                                    <input type="phone" wire:model.defer="phones.{{ $phone_index }}.value"
                                        name="data[phones][{{ $phone_index }}][value]" class="form-control">
                                </td>
                                <td>
                                    <button type="button" class="btn btn-danger btn-air-danger"
                                        wire:click="removePhone({{ $phone_index }})"><i
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
