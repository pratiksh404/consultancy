<div class="row">
    <div class="col-lg-8">
        <div class="card">
            <div class="card-body shadow-lg p-2">
                <div class="mt-2">
                    <label for="name">{{ label('universities', 'name') }} </label>
                    <input type="text" name="name" id="name" class="form-control"
                        value="{{ $university->name ?? old('name') }}" placeholder="University Name">
                </div>
                <div class="mt-2">
                    <label for="excerpt">{{ label('universities', 'excerpt') }}</label>
                    <input type="text" name="excerpt" id="excerpt" class="form-control"
                        value="{{ $university->excerpt ?? old('excerpt') }}" placeholder="University Excerpt">
                </div>
                <div class="mt-2">
                    <label for="description">{{ label('universities', 'description') }}</label>
                    <textarea name="description" id="heavytexteditor" cols="30" rows="10">
                        @isset($university->description)
{!! $university->description !!}
@endisset
                    </textarea>
                </div>
            </div>
        </div>
    </div>
    <div class="col-lg-4">
        <div class="card">
            <div class="card-header">Multimedia</div>
            <div class="card-body shadow-lg p-2">
                <label>Logo</label> <br>
                @livewire('admin.system.upload-image', ['model' => $university ?? null, 'attribute' => 'logo'])
            </div>
        </div>
        @if (countries()->count() > 0)
            <div class="card">
                <div class="card-header">Interested Country</div>
                <div class="card-body shadow-lg p-2">
                    <select name="country_id" id="country_id" class="select2">
                        <option selected disabled>Select ...</option>
                        @foreach (countries() as $country)
                            <option value="{{ $country->id }}"
                                {{ isset($university) ? ($university->country_id == $country->id ? 'selected' : '') : (old('country_id') == $country->id ? 'selected' : '') }}>
                                {{ $country->name }}</option>
                        @endforeach
                    </select>
                </div>
            </div>
        @endif
        <div class="card">
            <div class="card-body shadow-lg p-3">
                <div class="mt-4">
                    <label for="meta_name">{{ label('facilities', 'meta_name', 'Meta Name') }}</label>
                    <div class="input-group">
                        <input type="text" name="meta_name" id="meta_name" class="form-control"
                            value="{{ $university->meta_name ?? old('meta_name') }}" placeholder="Meta Name">
                    </div>
                </div>
                <br>
                <div class="mt-4">
                    <label
                        for="meta_description">{{ label('facilities', 'meta_description', 'Meta Description') }}</label>
                    <textarea name="meta_description" id="meta_description" cols="30" rows="10" class="form-control">{{ $university->meta_description ?? old('meta_description') }}</textarea>
                </div>
                <br>
                <div class="mt-4">
                    <label for="meta_keywords">{{ label('facilities', 'meta_keywords', 'Meta Keywords') }}</label>
                    <div class="input-group">
                        <input type="text" name="meta_keywords" id="meta_keywords" class="form-control"
                            value="{{ $university->meta_keywords ?? old('meta_keywords') }}"
                            placeholder="Meta Keywords">
                    </div>
                </div>
            </div>
        </div>
    </div>
    <br>
    <x-adminetic-edit-add-button :model="$university ?? null" name="University" />
</div>
