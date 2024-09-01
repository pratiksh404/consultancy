<div>
    <div class="table-responsive">
        <table class="table table-bordered">
            <thead>
                <tr>
                    <th>Name</th>
                    <th>Full Marks</th>
                    <th><button type="button" wire:click="addSection" class="btn btn-success btn-air-success"><i
                                class="fa fa-plus"></i></button>
                    </th>
                </tr>
            </thead>
            <tbody>
                @if (!is_null($sections))
                    @foreach ($sections as $index => $section)
                        <tr>
                            <td><input type="text" name="data[sections][{{ $index }}][name]"
                                    wire:model.defer="sections.{{ $index }}.name" class="form-control"></td>
                            <td><input type="number" name="data[sections][{{ $index }}][full_marks]"
                                    min="0" wire:model.defer="sections.{{ $index }}.full_marks"
                                    class="form-control">
                            </td>
                            <td><button type="button" wire:click="removeSection({{ $index }})"
                                    class="btn btn-danger btn-air-danger"><i class="fa fa-trash"></i></button></td>
                        </tr>
                    @endforeach
                @endif
            </tbody>
        </table>
    </div>
</div>
