<div class="row">
    <div class="col-lg-12">
        <div class="card">
            <div class="card-body shadow-lg p-2">
                <label for="test_date">{{ label('tests', 'test_date') }}</label>
                <div class="input-group">
                    <span class="input-group-text"><i class="fa fa-clock"></i></span>
                    <input type="text" name="test_date" id="test_date" class="form-control" value="{{ $test->test_date ?? old('test_date')  }}">
                </div>
            </div>
        </div>
        <div class="card">
            <div class="card-body shadow-lg p-2">
                @if (courses()->count() > 0)
                    <ul>
                        @foreach (courses() as $course)
                            <li>
                                <div class="d-flex justify-content-start">
                                    <input type="radio" name="course_id"
                                        {{ isset($test->course_id) ? ($test->course_id == $course->id ? 'checked' : '') : '' }}
                                        value="{{ $course->id }}" id="{{ $course->ud }}">
                                    <div class="mx-1">{{ $course->name }}</div>
                                </div>
                            </li>
                        @endforeach
                    </ul>
                @endif
            </div>
        </div>
    </div>
</div>
<div class="mt-2">
    <x-adminetic-edit-add-button :model="$test ?? null" name="Test" />
</div>
