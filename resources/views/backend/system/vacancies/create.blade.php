@extends('backend.system.layouts.master')

@section('content')
    <div class="container-xxl flex-grow-1 container-p-y">
        @include('backend.system.partials.errors')
        <div class="card mb-4">
            <h5 class="card-header">{{ $title }}</h5>

            <form class="card-body" action="{{ route('vacancies.store') }}" method="post" enctype="multipart/form-data">
                @csrf
                <div class="row g-3">
                    <!-- Title Field -->
                    <div class="col-md-6">
                        <label class="form-label" for="title">Title</label> *
                        <input required value="{{ old('title') }}" type="text" name="title" id="title"
                               class="form-control @error('title') is-invalid @enderror"
                               placeholder="Title"/>
                        <div class="invalid-feedback">{{ $errors->first('title') }}</div>
                    </div>

                    <!-- Slug Field -->
                    <div class="col-md-6">
                        <label class="form-label" for="slug">Slug</label> *
                        <input required readonly value="{{ old('slug') }}" type="text" name="slug" id="slug"
                               class="form-control @error('slug') is-invalid @enderror"
                               placeholder="Slug"/>
                        <div class="invalid-feedback">{{ $errors->first('slug') }}</div>
                    </div>

                    <!-- Subtitle Field -->
                    <div class="col-md-6">
                        <label class="form-label" for="sub_title">Sub Title</label>
                        <input value="{{ old('sub_title') }}" type="text" name="sub_title" id="sub_title"
                               class="form-control @error('sub_title') is-invalid @enderror"
                               placeholder="Sub Title"/>
                        <div class="invalid-feedback">{{ $errors->first('sub_title') }}</div>
                    </div>

                    <!-- Employment Type Field -->
                    <div class="col-md-6">
                        <label class="form-label" for="employment_type">Employment Type</label>
                        <select name="employment_type" id="employment_type"
                                class="form-control @error('employment_type') is-invalid @enderror">
                            <option value="">None</option>
                            <option value="full-time">Full-time</option>
                            <option value="part-time">Part-time</option>
                            <option value="contract">Contract</option>
                            <option value="internship">Internship</option>
                            <option value="temporary">Temporary</option>
                        </select>
                        <div class="invalid-feedback">{{ $errors->first('employment_type') }}</div>
                    </div>

                    <!-- Salary Range -->
                    <div class="col-md-6">
                        <label class="form-label" for="salary_range">Salary Range</label>
                        <input type="text" name="salary_range" id="salary_range"
                               class="form-control @error('salary_range') is-invalid @enderror"
                               placeholder="Salary Range" value="{{ old('salary_range') }}"/>
                        <div class="invalid-feedback">{{ $errors->first('salary_range') }}</div>
                    </div>

                    <!-- Location Field -->
                    <div class="col-md-6">
                        <label class="form-label" for="location">Location</label>
                        <input type="text" name="location" id="location"
                               class="form-control @error('location') is-invalid @enderror"
                               placeholder="Location" value="{{ old('location') }}"/>
                        <div class="invalid-feedback">{{ $errors->first('location') }}</div>
                    </div>

                    <!-- Contact Email -->
                    <div class="col-md-6">
                        <label class="form-label" for="contact_email">Contact Email</label>
                        <input type="email" name="contact_email" id="contact_email"
                               class="form-control @error('contact_email') is-invalid @enderror"
                               placeholder="Contact Email" value="{{ old('contact_email') }}"/>
                        <div class="invalid-feedback">{{ $errors->first('contact_email') }}</div>
                    </div>


                    <!-- Description Field -->
                    <div class="col-md-12">
                        <label class="form-label" for="description">Description</label>
                        <textarea name="description" id="description" rows="4"
                                  class="form-control text-editor @error('description') is-invalid @enderror"
                                  placeholder="Description">{{ old('description') }}</textarea>
                        <div class="invalid-feedback">{{ $errors->first('description') }}</div>
                    </div>

                    <div class="col-md-12">
                        <label class="form-label" for="short_description">Short Description</label>
                        <textarea name="short_description" id="short_description" rows="4"
                                  class="form-control text-editor @error('short_description') is-invalid @enderror"
                                  placeholder="Short Description">{{ old('short_description') }}</textarea>
                        <div class="invalid-feedback">{{ $errors->first('short_description') }}</div>
                    </div>

                    <!-- Image Upload Field -->
                    <div class="col-md-6">
                        <label class="form-label" for="image">Upload Image</label>
                        <input type="file" name="image" id="image"
                               class="form-control @error('image') is-invalid @enderror"/>
                        <div class="invalid-feedback">{{ $errors->first('image') }}</div>
                    </div>

                    <!-- Status Field -->
                    <div class="col-md-6">
                        <label class="form-label w-100" for="status">Status</label>
                        <div class="form-check-inline">
                            <input type="radio" id="status1" name="status" value="1" checked
                                   class="form-check-input @error('status') is-invalid @enderror"
                                   @if(old('status') == '1') checked @endif>
                            <label for="status1" class="form-check-label">Active</label>
                        </div>
                        <div class="form-check-inline">
                            <input type="radio" id="status2" name="status" value="0"
                                   class="form-check-input @error('status') is-invalid @enderror"
                                   @if(old('status') == '0') checked @endif>
                            <label for="status2" class="form-check-label">Inactive</label>
                        </div>
                        <div class="invalid-feedback">{{ $errors->first('status') }}</div>
                    </div>
                </div>

                <div class="pt-4">
                    <button type="submit" class="btn btn-primary me-sm-3 me-1">Create</button>
                </div>
            </form>
        </div>
    </div>
@endsection
