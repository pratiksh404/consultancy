<div>
    <x-media-library-attachment name="{{ $attribute }}" multiple editableName rules="mimes:docx,pdf" />
    @if (!is_null($model))
        @if ($model->getMedia($attribute)->count() > 0)
            <div class="table-responsive">
                <table class="table table-bordered">
                    <tbody>
                        <tr>
                            <td colspan="2" style="text-align: center">{{ strtoupper($attribute) }}</td>
                        </tr>
                        @foreach ($model->getMedia($attribute) as $attachment)
                            <tr>
                                <td>
                                    {{ $attachment->name }}
                                </td>
                                <td>
                                    <div wire:loading wire:target="removeAttachment">
                                        <i class="fa fa-spinner fa-spin"></i>
                                    </div>
                                    <div wire:loading.remove wire:target="removeAttachment">
                                        <span class="text-primary" style="cursor: pointer"
                                            wire:click="removeAttachment({{ $attachment->id }})">Remove</span>
                                    </div>
                                </td>
                            </tr>
                        @endforeach
                    </tbody>
                </table>
            </div>
        @endif
    @endif
</div>
