<div class="row">
    <div class="col-lg-8">
        <div class="row">
            <div class="col-lg-6">
                <div class="mt-4">
                    <label for="name">{{ label('testimonials', 'name') }}</label>
                    <div class="input-group">
                        <input type="text" name="name" id="name" class="form-control"
                            value="{{ $testimonial->name ?? old('name') }}" placeholder="Testimonial Name">
                    </div>
                </div>
            </div>
            <div class="col-lg-6">
                <div class="mt-4">
                    <label for="email">{{ label('testimonials', 'email') }}</label>
                    <div class="input-group">
                        <input type="text" name="email" id="email" class="form-control"
                            value="{{ $testimonial->email ?? old('email') }}" placeholder="Testimonial Email">
                    </div>
                </div>
            </div>
        </div>
        <br>
        <div class="row">
            <div class="col-12">
                <label for="message">{{ label('testimonials', 'message') }}</label>
                <textarea name="message" id="heavytexteditor" cols="30" rows="10">
            @isset($testimonial->message)
{!! $testimonial->message !!}
@endisset
        </textarea>
            </div>
        </div>
    </div>
    <div class="col-lg-4">
        <div class="mt-4">
            <label for="rating">{{ label('testimonials', 'rating') }}</label>
            <div class="input-group">
                <input type="number" step="any" name="rating" id="rating" class="form-control"
                    value="{{ $testimonial->rating ?? old('rating') }}" placeholder="Testimonial Rating" max="5"
                    min="0">
            </div>
        </div>
        <br>
        <div class="mt-4">
            <label>{{ label('testimonials', 'approved') }}</label> <br>
            <input type="hidden" name="approved" value="0">
            <input type="checkbox" name="approved" id="approved" value="1"
                {{ isset($testimonial->approved) ? ($testimonial->approved ? 'checked' : '') : 'checked' }}>
        </div>
        <br>
        <div class="mt-4">
            @livewire('admin.system.upload-image', ['model' => $testimonial ?? null, 'attribute' => 'image'])
        </div>
        @if (countries()->count() > 0)
            <div class="card">
                <div class="card-header">Interested Country</div>
                <div class="card-body shadow-lg p-2">
                    <select name="country_id" id="country_id" class="select2">
                        <option selected disabled>Select ...</option>
                        @foreach (countries() as $country)
                            <option value="{{ $country->id }}"
                                {{ isset($candidate) ? ($candidate->country_id == $country->id ? 'selected' : '') : (old('country_id') == $country->id ? 'selected' : '') }}>
                                {{ $country->name }}</option>
                        @endforeach
                    </select>
                </div>
            </div>
        @endif
        @if (courses()->count() > 0)
            <div class="card">
                <div class="card-header">Interested Course</div>
                <div class="card-body shadow-lg p-2">
                    <select name="course_id" id="course_id" class="select2">
                        <option selected disabled>Select ...</option>
                        @foreach (courses() as $course)
                            <option value="{{ $course->id }}"
                                {{ isset($candidate) ? ($candidate->course_id == $course->id ? 'selected' : '') : (old('course_id') == $course->id ? 'selected' : '') }}>
                                {{ $course->name }}</option>
                        @endforeach
                    </select>
                </div>
            </div>
        @endif
        @if (visas()->count() > 0)
            <div class="card">
                <div class="card-header">Interested VISA</div>
                <div class="card-body shadow-lg p-2">
                    <select name="visa_id" id="visa_id" class="select2">
                        <option selected disabled>Select ...</option>
                        @foreach (visas() as $visa)
                            <option value="{{ $visa->id }}"
                                {{ isset($candidate) ? ($candidate->visa_id == $visa->id ? 'selected' : '') : (old('visa_id') == $visa->id ? 'selected' : '') }}>
                                {{ $visa->name }}</option>
                        @endforeach
                    </select>
                </div>
            </div>
        @endif
    </div>
</div>
<br>
<x-adminetic-edit-add-button :model="$testimonial ?? null" name="Testimonial" />
