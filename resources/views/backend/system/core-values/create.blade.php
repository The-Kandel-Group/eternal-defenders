@extends('backend.system.layouts.master')

@section('content')
    <div class="container-xxl flex-grow-1 container-p-y">
        @include('backend.system.partials.errors')

        <div class="card mb-4">
            <h5 class="card-header">{{ __('Create Core Values') }}</h5>

            <form class="card-body" action="{{ route('core-values.store') }}" method="post"
                  enctype="multipart/form-data">
                @csrf
                <div class="row g-3">

                    <!-- Title -->
                    <div class="col-md-6">
                        <label class="form-label" for="title">{{ __('Title') }}</label> *
                        <input required type="text" name="title" id="title" value="{{ old('title') }}"
                               class="form-control @error('title') is-invalid @enderror" placeholder="Core Values Title"/>
                        <div class="invalid-feedback">@error('title') {{ $message }} @enderror</div>
                    </div>

                    <!-- Subtitle -->
                    <div class="col-md-6">
                        <label class="form-label" for="subtitle">{{ __('Subtitle') }}</label> *
                        <input type="text" name="subtitle" required id="subtitle" value="{{ old('subtitle') }}"
                               class="form-control @error('subtitle') is-invalid @enderror"
                               placeholder="Core Values Subtitle"/>
                        <div class="invalid-feedback">@error('subtitle') {{ $message }} @enderror</div>
                    </div>

                    <!-- Description -->
                    <div class="col-md-12">
                        <label class="form-label" for="description">{{ __('Description') }}</label>
                        <textarea name="description" id="description"
                                  class="form-control text-editor @error('description') is-invalid @enderror"
                                  placeholder="Core Values Description">{{ old('description') }}</textarea>
                        <div class="invalid-feedback">@error('description') {{ $message }} @enderror</div>
                    </div>
                    <!-- Icon (Image) -->
                    <div class="col-md-6">
                        <label class="form-label" for="icon">{{ __('Icon') }}</label> *
                        <input type="file" required name="icon" id="icon"
                               class="form-control @if ($errors->first('icon')) is-invalid @endif"/>
                        <div class="invalid-feedback">{{ $errors->first('icon') }}</div>
                    </div>
                    <!-- Status -->
                    <div class="col-md-6">
                        <label class="form-label w-100" for="status">{{ __('Status') }}</label>
                        <div class="form-check-inline">
                            <input type="radio" id="status1" name="status" value="1" checked
                                   class="form-check-input @error('status') is-invalid @enderror"
                                   @if(old('status') == '1') checked @endif>
                            <label for="status1" class="form-check-label">{{ __('Active') }}</label>
                        </div>
                        <div class="form-check-inline">
                            <input type="radio" id="status2" name="status" value="0"
                                   class="form-check-input @error('status') is-invalid @enderror"
                                   @if(old('status') == '0') checked @endif>
                            <label for="status2" class="form-check-label">{{ __('Inactive') }}</label>
                        </div>
                        <div class="invalid-feedback">@error('status') {{ $message }} @enderror</div>
                    </div>
                </div>

                <div class="pt-4">
                    <button type="submit" class="btn btn-primary me-sm-3 me-1">{{ __('Create') }}</button>
                </div>

            </form>
        </div>
    </div>
@endsection
