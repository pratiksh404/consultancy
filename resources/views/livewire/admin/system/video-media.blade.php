<div>
    @if ($single_mode)
        <div class="input-group">
            <span class="input-group-text"><i class="fab fa-youtube"></i></span>
            <input type="text" name="{{ $name }}" class="form-control" wire:model="data">
        </div>
        @if (!is_null($data))
            <hr>
            {!! parseYoutube($data) !!}
        @endif
    @else
        <div class="row">
            <div class="col-8">
                <b>Video Link</b>
            </div>
            <div class="col-2">
                <button type="button" class="btn btn-danger btn-air-danger" wire:click="removeAllVideo"><i
                        class="fa fa-trash"></i></button>
            </div>
            <div class="col-2">
                <button type="button" class="btn btn-success btn-air-success" wire:click="addVideos"><i
                        class="fa fa-plus"></i></button>
            </div>
        </div>
        <hr>
        @if (!is_null($data))
            @foreach ($data as $index => $data)
                <div class="row">
                    <div class="col-10">
                        <div class="input-group">
                            <span class="input-group-text"><i class="fab fa-youtube"></i></span>
                            <input type="text" name="{{ $name }}[]" wire:model="data.{{ $index }}"
                                class="form-control">
                        </div>
                    </div>
                    <div class="col-2">
                        <button type="button" class="btn btn-danger btn-air-danger"
                            wire:click="removeVideo({{ $index }})"><i class="fa fa-trash"></i></button>
                    </div>
                </div>

                @if (!is_null($data))
                    <br>
                    <div class="row">
                        <div class="col-12">
                            {!! parseYoutube($data) !!}
                        </div>
                    </div>
                @endif
                <hr>
            @endforeach
        @endif
    @endif
</div>
