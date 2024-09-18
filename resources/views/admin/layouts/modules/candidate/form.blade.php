<div class="row">
    <div class="col-lg-8">
        <div class="card">
            <div class="card-body shadow-lg p-2">
                <div class="mt-2">
                    <label for="name">{{ label('candidates', 'name') }}</label>
                    <div class="input-group">
                        <input type="text" name="name" id="name" class="form-control"
                            value="{{ $candidate->name ?? old('name') }}" placeholder="Candidate Name">
                    </div>
                </div>
                <div class="mt-2">
                    <label for="email">{{ label('candidates', 'email') }}</label>
                    <div class="input-group">
                        <input type="email" name="email" id="email" class="form-control"
                            value="{{ $candidate->email ?? old('email') }}" placeholder="Candidate Email">
                    </div>
                </div>
                <div class="row">
                    <div class="col-lg-5">
                        <div class="mt-2">
                            <label for="phone">{{ label('candidates', 'phone') }}</label>
                            <div class="input-group">
                                <input type="number" name="phone" id="phone" class="form-control"
                                    value="{{ $candidate->phone ?? old('phone') }}" placeholder="Candidate Phone" />
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-7">
                        <div class="mt-2">
                            <label for="address">{{ label('candidates', 'address') }}</label>
                            <div class="input-group">
                                <input type="text" name="address" id="address" class="form-control"
                                    value="{{ $candidate->address ?? old('address') }}"
                                    placeholder="Candidate Address" />
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="col-lg-4">
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
<x-adminetic-edit-add-button :model="$candidate ?? null" name="Candidate" />
