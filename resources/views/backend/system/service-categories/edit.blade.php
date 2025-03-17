@extends('backend.system.layouts.master')

@section('content')
    <div class="container-xxl flex-grow-1 container-p-y">
        @include('backend.system.partials.errors')

        <div class="card mb-4">
            <h5 class="card-header">{{ __('Edit Service Category') }}</h5>

            <form class="card-body" action="{{ route('service-categories.update', $thisData->id) }}" method="post" enctype="multipart/form-data">
                @csrf
                @method('PUT')
                <input type="hidden" name="id" value="{{ $thisData->id }}">

                <div class="row g-3">

                    <!-- Title -->
                    <div class="col-md-6">
                        <label class="form-label" for="title">{{ __('Title') }}</label> *
                        <input required type="text" name="title" id="title" value="{{ old('title', $thisData->title) }}"
                               class="form-control @error('title') is-invalid @enderror" placeholder="Enter title">
                        <div class="invalid-feedback">{{ $errors->first('title') }}</div>
                    </div>

                    <!-- Sub Title -->
                    <div class="col-md-6">
                        <label class="form-label" for="sub_title">{{ __('Sub Title') }}</label>
                        <input type="text" name="sub_title" id="sub_title" value="{{ old('sub_title', $thisData->sub_title) }}"
                               class="form-control @error('sub_title') is-invalid @enderror" placeholder="Enter sub title">
                        <div class="invalid-feedback">{{ $errors->first('sub_title') }}</div>
                    </div>

                    <!-- Slug -->
                    <div class="col-md-6">
                        <label class="form-label" for="slug">{{ __('Slug') }}</label>
                        <input type="text" name="slug" id="slug" value="{{ old('slug', $thisData->slug) }}"
                               class="form-control @error('slug') is-invalid @enderror" placeholder="Enter slug">
                        <div class="invalid-feedback">{{ $errors->first('slug') }}</div>
                    </div>

                    <!-- Description -->
                    <div class="col-md-12">
                        <label class="form-label" for="description">{{ __('Description') }}</label>
                        <textarea name="description" id="description" rows="4"
                                  class="form-control @error('description') is-invalid @enderror"
                                  placeholder="Enter description">{{ old('description', $thisData->description) }}</textarea>
                        <div class="invalid-feedback">{{ $errors->first('description') }}</div>
                    </div>

                    <!-- Secondary Description -->
                    <div class="col-md-12">
                        <label class="form-label" for="secondary_description">{{ __('Secondary Description') }}</label>
                        <textarea name="secondary_description" id="secondary_description" rows="4"
                                  class="form-control @error('secondary_description') is-invalid @enderror"
                                  placeholder="Enter secondary description">{{ old('secondary_description', $thisData->secondary_description) }}</textarea>
                        <div class="invalid-feedback">{{ $errors->first('secondary_description') }}</div>
                    </div>

                    <!-- Icon (Image) -->
                    <div class="col-md-6">
                        <label class="form-label" for="icon">{{ __('Icon') }}</label>
                        <input type="file" name="icon" id="icon" class="form-control @error('icon') is-invalid @enderror">
                        @if($thisData->icon)
                            <div class="mt-2">
                                <img src="{{ asset( $thisData->icon) }}" alt="Icon" class="img-thumbnail_image" width="80">
                            </div>
                        @endif
                        <div class="invalid-feedback">{{ $errors->first('icon') }}</div>
                    </div>

                    <!-- Font Awesome Icon -->
                    <div class="col-md-6">
                        <label class="form-label" for="icon_fa">{{ __('Font Awesome Icon') }}</label>
                        <input type="text" name="icon_fa" id="icon_fa" value="{{ old('icon_fa', $thisData->icon_fa) }}"
                               class="form-control @error('icon_fa') is-invalid @enderror" placeholder="Enter FontAwesome icon (e.g., fas fa-user)">
                        <div class="invalid-feedback">{{ $errors->first('icon_fa') }}</div>
                    </div>

                    <!-- thumbnail_image (Image) -->
                    <div class="col-md-6">
                        <label class="form-label" for="thumbnail_image">{{ __('Thumbnail') }}</label>
                        <input type="file" name="thumbnail_image" id="thumbnail_image"
                               class="form-control @error('thumbnail_image') is-invalid @enderror">
                        @if($thisData->thumbnail_image)
                            <div class="mt-2">
                                <img src="{{ asset($thisData->thumbnail_image) }}" alt="thumbnail_image" class="img-thumbnail_image" width="100">
                            </div>
                        @endif
                        <div class="invalid-feedback">{{ $errors->first('thumbnail_image') }}</div>
                    </div>

                    <!-- Position -->
                    <div class="col-md-6">
                        <label class="form-label" for="position">{{ __('Position') }}</label>
                        <input type="number" name="position" id="position" value="{{ old('position', $thisData->position) }}"
                               class="form-control @error('position') is-invalid @enderror" placeholder="Enter position">
                        <div class="invalid-feedback">{{ $errors->first('position') }}</div>
                    </div>

                    <!-- Status -->
                    <div class="col-md-6">
                        <label class="form-label w-100" for="status">{{ __('Status') }}</label>
                        <div class="form-check-inline">
                            <input id="status1" type="radio" name="status" value="1" class="form-check-input @error('status') is-invalid @enderror"
                                {{ old('status', $thisData->status) == 1 ? 'checked' : '' }}>
                            <label for="status1" class="form-check-label">{{ __('Active') }}</label>
                        </div>
                        <div class="form-check-inline">
                            <input id="status2" type="radio" name="status" value="0" class="form-check-input @error('status') is-invalid @enderror"
                                {{ old('status', $thisData->status) == 0 ? 'checked' : '' }}>
                            <label for="status2" class="form-check-label">{{ __('Inactive') }}</label>
                        </div>
                        <div class="invalid-feedback">{{ $errors->first('status') }}</div>
                    </div>

                </div>

                <div class="pt-4">
                    <button type="submit" class="btn btn-primary me-sm-3 me-1">{{ __('Update') }}</button>
                    <a href="{{ route('service-categories.index') }}" class="btn btn-secondary">{{ __('Cancel') }}</a>
                </div>
            </form>
        </div>
    </div>
@endsection
