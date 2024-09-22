<div class="row">
    <div class="col-lg-8">
        <div class="card">
            <div class="card-body shadow-lg p-2">
                <div class="mt-2">
                    <label for="name">{{ label('teams', 'name') }} </label>
                    <input type="text" name="name" id="name" class="form-control"
                        value="{{ $team->name ?? old('name') }}">
                </div>
                <div class="mt-2">
                    <label for="designation">{{ label('teams', 'designation') }} </label>
                    <input type="text" name="designation" id="designation" class="form-control"
                        value="{{ $team->designation ?? old('designation') }}">
                </div>
                <div class="mt-2">
                    <label for="message">{{ label('teams', 'message') }}</label>
                    <textarea name="message" id="heavytexteditor" cols="30" rows="10">'
                        @isset($team->message)
{!! $team->message !!}
@endisset
                    </textarea>
                </div>
            </div>
        </div>
    </div>
    <div class="col-lg-4" style="height: 70vh;overflow-y: auto">
        <div class="card">
            <div class="card-header">
                Profile Picture
            </div>
            <div class="card-body shadow-lg p-3">
                @livewire('admin.system.upload-image', ['model' => $team ?? null, 'attribute' => 'image'])
            </div>
        </div>
        <div class="card">
            <div class="card-body shadow-lg p-3">
                <div class="mt-2">
                    <label for="experience">Expereince</label>
                    <div class="input-group">
                        <input type="number" name="data[experience]" class="form-control" step="any"
                            value="{{ isset($team) ? (!is_null($team->experience) ? $team->experience : old('experience')) : old('experience') }}">
                        <span class="input-group-text">Years</span>
                    </div>
                </div>
                <div class="mt-2">
                    <label for="email">{{ label('teams', 'email') }}</label>
                    <input type="email" name="email" id="email" class="form-control"
                        value="{{ $team->email ?? old('email') }}">
                </div>
                <div class="mt-2">
                    <label for="phone">{{ label('teams', 'phone') }}</label>
                    <input type="text" name="phone" id="phone" class="form-control"
                        value="{{ $team->phone ?? old('phone') }}">
                </div>
            </div>
        </div>
        <div class="card">
            <div class="card-header">Social Media</div>
            <div class="card-body shadow-lg p-2">
                <ul class="list-group">
                    @foreach (config('consultancy.social_media') as $social_media_name => $social_media_icon)
                        <li class="list-group-item">
                            <div class="input-group">
                                <span class="input-group-text"><i class="{{ $social_media_icon }}"></i></span>
                                <input type="text" name="data[social_media][{{ $social_media_name }}]"
                                    class="form-control"
                                    value="{{ isset($team) ? (!is_null($team->social_media) ? $team->social_media[$social_media_name] : old('social_media.' . $social_media_name)) : old('social_media.' . $social_media_name) }}">
                            </div>
                        </li>
                    @endforeach
                </ul>
            </div>
        </div>
    </div>
    <br>
    <x-adminetic-edit-add-button :model="$team ?? null" name="team" />
</div>
