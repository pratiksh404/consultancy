<div class="row">
    <div class="col-lg-8">
        <div class="card">
            <div class="card-body shadow-lg p-3">
                <div class="row">
                    <div class="col-12 mt-3">
                        <label for="name">{{ label('pages', 'name') }}</label>
                        <div class="input-group">
                            <input type="text" name="name" id="name" class="form-control"
                                value="{{ $page->name ?? old('name') }}" placeholder="page Name">
                        </div>
                    </div>
                </div>
                <div class="mt-2">
                    <label>Page's Gallery Images</label> <br>
                    @livewire('admin.system.upload-image', ['model' => $page ?? null, 'attribute' => 'images', 'multiple' => true])
                </div>
                <div class="mt-2">
                    @livewire('admin.counter.appended-counter', ['counters' => $page->counters ?? null])
                </div>
                <div class="mt-2">
                    @livewire('admin.faq.appended-faq', ['faqs' => $page->faqs ?? null])
                </div>
                <br>
                <div class="row">
                    <div class="col-12 mt-3">
                        <label for="excerpt">{{ label('pages', 'description') }}</label>
                        <div class="input-group">
                            <textarea name="description" id="heavytexteditor" cols="30" rows="20" class="form-control">
                                @isset($page->description)
{!! $page->description !!}
@endisset
                            </textarea>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <br>
        <x-adminetic-edit-add-button :model="$page ?? null" name="page" />
    </div>
    <div class="col-lg-4">

        <div class="card">
            <div class="card-body shadow-lg p-3">
                <label for="excerpt">{{ label('pages', 'excerpt') }}</label>
                <div class="input-group">
                    <textarea name="excerpt" id="excerpt" cols="30" rows="3" class="form-control">{{ $page->excerpt ?? old('excerpt') }}</textarea>
                </div>
            </div>
        </div>
        <div class="card">
            <div class="card-body shadow-lg p-3">
                @livewire('admin.category.quick-category', ['model' => 'Page', 'category_id' => $page->category_id ?? null, 'attribute' => 'category_id'])
                <br>
                <div class="mt-2">
                    <label for="parent_page">Parent Page</label>
                    <div class="input-group">
                        <select name="data[parent_page]" id="parent_page" id="parent_page" class="select2 form-control">
                            <option value="">None</option>
                            @foreach ($parent_pages as $parent_page)
                                <option value="{{ $parent_page->id }}"
                                    {{ isset($page->parent_page) ? ($page->parent_page->id == $parent_page->id ? 'selected' : '') : (old('parent_page') == $parent_page->id ? 'selected' : '') }}>
                                    {{ $parent_page->name }}
                                </option>
                            @endforeach
                        </select>
                    </div>
                </div>
            </div>
        </div>
        <div class="card">
            <div class="card-header">
                Page's Thumbnail
            </div>
            <div class="card-body shadow-lg p-3">
                @livewire('admin.system.upload-image', ['model' => $page ?? null, 'attribute' => 'thumbnail'])
            </div>
        </div>
        <div class="card">
            <div class="card-header">
                Page's Downloads
            </div>
            <div class="card-body shadow-lg p-3">
                @livewire('admin.system.upload-attachment', ['model' => $page ?? null, 'attribute' => 'downloads'])
            </div>
        </div>
        {{-- <div class="card">
            <div class="card-header">
                Page Icon Image
            </div>
            <div class="card-body shadow-lg p-3">
                @livewire('admin.system.upload-image', ['model' => $page ?? null, 'attribute' => 'icon_image'])
            </div>
        </div> --}}
        <div class="card">
            <div class="card-body shadow-lg p-3">
                <div class="row">
                    <div class="col-lg-6">
                        <label>{{ label('pages', 'active') }}</label> <br>
                        <input type="hidden" name="active" value="0">
                        <input type="checkbox" name="active" id="active" value="1"
                            {{ isset($page->active) ? ($page->active ? 'checked' : '') : 'checked' }}>
                    </div>
                    <div class="col-lg-6">
                        <label>{{ label('pages', 'featured') }}</label> <br>
                        <input type="hidden" name="featured" value="0">
                        <input type="checkbox" name="featured" id="featured" value="1"
                            {{ isset($page->featured) ? ($page->featured ? 'checked' : '') : '' }}>
                    </div>
                </div>
            </div>
        </div>
        <div class="card">
            <div class="card-body shadow-lg p-3">
                <div class="mt-4">
                    <label for="meta_name">{{ label('pages', 'meta_name', 'Meta Name') }}</label>
                    <div class="input-group">
                        <input type="text" name="meta_name" id="meta_name" class="form-control"
                            value="{{ $page->meta_name ?? old('meta_name') }}" placeholder="Meta Name">
                    </div>
                </div>
                <br>
                <div class="mt-4">
                    <label for="meta_description">{{ label('pages', 'meta_description', 'Meta Description') }}</label>
                    <textarea name="meta_description" id="meta_description" cols="30" rows="10" class="form-control">{{ $page->meta_description ?? old('meta_description') }}</textarea>
                </div>
                <br>
                <div class="mt-4">
                    <label for="meta_keywords">{{ label('pages', 'meta_keywords', 'Meta Keywords') }}</label>
                    <div class="input-group">
                        <input type="text" name="meta_keywords" id="meta_keywords" class="form-control"
                            value="{{ $page->meta_keywords ?? old('meta_keywords') }}" placeholder="Meta Keywords">
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
