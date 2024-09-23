<div>
    <div class="table-responsive">
        <table class="table table-bordered">
            <thead>
                <tr>
                    <th>Name</th>
                    <th>Count</th>
                    <th>Suffix</th>
                    <th>
                        <button class="btn btn-success btn-air-success" type="button" wire:click="add"><i
                                class="fa fa-plus"></i></button>
                    </th>
                </tr>
            </thead>
            <tbody>
                @if (!is_null($counters))
                    @foreach ($counters as $index => $counter)
                        <tr>
                            <td><input type="text" name="data[counters][{{ $index }}][name]"
                                    wire:model.defer="counters.{{ $index }}.name" class="form-control"></td>
                            <td><input type="number" name="data[counters][{{ $index }}][count]" min="0"
                                    wire:model.defer="counters.{{ $index }}.count" class="form-control">
                            </td>
                            <td><input type="text" name="data[counters][{{ $index }}][suffix]"
                                    wire:model.defer="counters.{{ $index }}.suffix" class="form-control"></td>
                            <td><button type="button" wire:click="remove({{ $index }})"
                                    class="btn btn-danger btn-air-danger"><i class="fa fa-trash"></i></button></td>
                        </tr>
                    @endforeach
                @else
                    <tr>
                        <td colspan="4">No Counters Found</td>
                    </tr>
                @endif
            </tbody>
        </table>
    </div>
</div>
