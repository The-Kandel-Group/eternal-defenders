@extends('backend.system.layouts.master')

@section('content')
    <div class="container-xxl flex-grow-1 container-p-y">
        @include('backend.system.partials.errors')
        <div class="card mb-4">
            <h5 class="card-header">{{ $title }}</h5>

            <form class="card-body" action="{{ route('services.update', $thisData->id) }}" method="post"
                  enctype="multipart/form-data">
                @csrf
                @method('PUT')
                <input type="hidden" name="id" value="{{ $thisData->id }}">
                <div class="row g-3">

                    <!-- Service Category -->
                    <div class="col-md-6">
                        <label class="form-label" for="service_category_id">{{ __('Service Category') }}</label> *
                        <select class="form-control @error('service_category_id') is-invalid @enderror" required
                                name="service_category_id">
                            <option value="">{{ __('Select Category') }}</option>
                            @foreach($categories as $category)
                                <option value="{{ $category->id }}"
                                        @if($thisData->service_category_id == $category->id) selected @endif>
                                    {{ ucfirst($category->title) }}
                                </option>
                            @endforeach
                        </select>
                        <div class="invalid-feedback">@error('service_category_id') {{ $message }} @enderror</div>
                    </div>

                    <!-- Title -->
                    <div class="col-md-6">
                        <label class="form-label" for="title">{{ __('Title') }}</label> *
                        <input required type="text" name="title" id="title" value="{{ $thisData->title }}"
                               class="form-control @error('title') is-invalid @enderror"
                               placeholder="Enter Service Title"/>
                        <div class="invalid-feedback">@error('title') {{ $message }} @enderror</div>
                    </div>

                    <!-- Sub Title -->
                    <div class="col-md-6">
                        <label class="form-label" for="sub_title">{{ __('Sub Title') }}</label> *
                        <input type="text" name="sub_title" id="sub_title" value="{{ $thisData->sub_title??old('sub_title') }}" required
                               class="form-control @error('sub_title') is-invalid @enderror"
                               placeholder="Enter Sub Title"/>
                        <div class="invalid-feedback">@error('sub_title') {{ $message }} @enderror</div>
                    </div>
                    <!-- Icon FontAwesome -->
                    <div class="col-md-6">
                        <label class="form-label" for="icon_fa">{{ __('Icon (FontAwesome)') }}</label>
                        <input type="text" name="icon_fa" id="icon_fa" value="{{ $thisData->icon_fa??old('icon_fa') }}"
                               class="form-control @error('icon_fa') is-invalid @enderror"
                               placeholder="Enter Icon Class (e.g., fas fa-home)"/>
                        <div class="invalid-feedback">@error('icon_fa') {{ $message }} @enderror</div>
                    </div>

                    <!-- Description -->
                    <div class="col-md-12">
                        <label class="form-label" for="description">{{ __('Description') }}</label>
                        <textarea name="description" id="description"
                                  class="form-control @error('description') is-invalid @enderror"
                                  placeholder="Enter Description">{{ $thisData->description??old('description') }}</textarea>
                        <div class="invalid-feedback">@error('description') {{ $message }} @enderror</div>
                    </div>


                    <!-- Position -->
                    <div class="col-md-6">
                        <label class="form-label" for="position">{{ __('Position') }}</label>
                        <input type="number" name="position" id="position" value="{{ $thisData->position??old('position') }}"
                               class="form-control @error('position') is-invalid @enderror"
                               placeholder="Enter Position"/>
                        <div class="invalid-feedback">@error('position') {{ $message }} @enderror</div>
                    </div>

                    <!-- Status Field -->
                    <div class="col-md-6">
                        <label class="form-label w-100" for="status">{{ __('Status') }}</label>
                        <div class="form-check-inline">
                            <input id="status1" type="radio" name="status" value="1"
                                   class="form-check-input @if ($errors->first('status')) is-invalid @endif"
                                   @if($thisData->status == '1') checked @endif>
                            <label for="status1" class="form-check-label">{{ __('Active') }}</label>
                        </div>
                        <div class="form-check-inline">
                            <input type="radio" id="status2" name="status" value="0"
                                   class="form-check-input @if ($errors->first('status')) is-invalid @endif"
                                   @if($thisData->status == '0') checked @endif>
                            <label for="status2" class="form-check-label">{{ __('Inactive') }}</label>
                        </div>
                        <div class="invalid-feedback">{{ $errors->first('status') }}</div>
                    </div>

                </div>

                <div class="pt-4">
                    <button type="submit" class="btn btn-primary me-sm-3 me-1">{{ __('Update') }}</button>
                </div>
            </form>
        </div>
    </div>
@endsection
