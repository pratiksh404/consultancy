<div>
    <div class="table-responsive">
        <table class="table table-bordered">
            <thead>
                <tr>
                    <th>
                        Frquently Asked Questions
                    </th>
                    <th>
                        <button type="button" wire:click="add" class="btn btn-success btn-air-success"><i
                                class="fa fa-plus"></i></button>
                    </th>
                </tr>
            </thead>
            <tbody>
                @if (count($faqs ?? []) > 0)
                    @foreach ($faqs as $index => $faq)
                        <tr>
                            <td>
                                <label>Question</label> <br>
                                <textarea wire:model.defer="faqs.{{ $index }}.question" name="data[faqs][{{ $index }}][question]"
                                    cols="30" rows="2" class="form-control"></textarea>
                            </td>
                            <td rowspan="2">
                                <button type="button" wire:click="remove({{ $index }})"
                                    class="btn btn-danger btn-air-danger"><i class="fa fa-trash"></i></button>
                            </td>
                        </tr>
                        <tr>
                            <td>
                                <label>Answer</label> <br>
                                <textarea wire:model.defer="faqs.{{ $index }}.answer" name="data[faqs][{{ $index }}][answer]"
                                    cols="30" rows="4" class="form-control"></textarea>
                            </td>
                        </tr>
                    @endforeach
                @else
                    <tr>
                        <td colspan="2">No FAQs Found</td>
                    </tr>
                @endif
            </tbody>
        </table>
    </div>
</div>
