@extends('backend.system.layouts.master')

@section('content')
    <div class="container-xxl flex-grow-1 container-p-y">
        @include('backend.system.partials.errors')
        <div class="card mb-4">
            <h5 class="card-header">{{ $title }}</h5>
            <div class="card">
                <div class="card-datatable table-responsive">
                    <form method="get" action="{{ route('vacancy-applications.index') }}">
                        <div class="dataTables_wrapper dt-bootstrap5 no-footer">
                            <div class="row me-2">
                                <div class="col-md-2">
                                    <div class="me-3">
                                        <div class="dataTables_length">
                                            <label>
                                                <select name="show" class="form-select">
                                                    <option value="10" @if (request('show') == 10) selected @endif>10
                                                    </option>
                                                    <option value="25" @if (request('show') == 25) selected @endif>25
                                                    </option>
                                                    <option value="50" @if (request('show') == 50) selected @endif>50
                                                    </option>
                                                    <option value="100" @if (request('show') == 100) selected @endif>
                                                        100
                                                    </option>
                                                </select>
                                            </label>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-md-10">
                                    <div
                                            class="dt-action-buttons text-xl-end text-lg-start text-md-end text-start d-flex align-items-center justify-content-end flex-md-row flex-column mb-3 mb-md-0">
                                        <div class="dataTables_filter">
                                            <label>
                                                <select name="vacancy" class="form-select select2">
                                                    <option value="">{{ __('Select Vacancy') }}</option>
                                                    @foreach($vacancies as $category)
                                                        <option value="{{ $category->id }}"
                                                                @if (request('vacancy') == $category->id) selected @endif>
                                                            {{ ucfirst($category->title) }}
                                                        </option>
                                                    @endforeach
                                                </select>
                                            </label>
                                        </div>
                                        <div class="dataTables_filter">
                                            <label>
                                                <input type="text" value="{{ request('keyword') }}" name="keyword"
                                                       class="form-control" placeholder="Search..">
                                            </label>
                                        </div>
                                        <div class="dt-buttons btn-group flex-wrap">
                                            <div class="btn-group">
                                                <button type="submit" class="btn btn-primary mx-3">
                                                    <span><i class="ti ti-filter me-1 ti-xs"></i> Filter</span>
                                                </button>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <table class="datatables-vacancies table dataTable no-footer dtr-column"
                                   id="DataTables_Table_0">
                                <thead class="border-top">
                                <tr>
                                    <th>{{ __('SN') }}</th>
                                    <th>{{ __('Vacancy') }}</th>
                                    <th>{{ __('Full Name') }}</th>
                                    <th>{{ __('Email') }}</th>
                                    <th>{{ __('Phone Number') }}</th>
                                    <th>{{ __('Resume') }}</th>
                                    <th>{{ __('Applied Date') }}</th>
                                </tr>
                                </thead>
                                <tbody class="table-border-bottom-0">
                                @if (!$thisDatas->count())
                                    <tr>
                                        <td class="text-center" colspan="12">{{ __('No data found.') }}</td>
                                    </tr>
                                @endif
                                @foreach ($thisDatas as $index => $post)
                                    <tr>
                                        <td>{{ $index + 1 }}</td>
                                        <td>{{ $post->vacancy?->title??'N/A' }}</td>
                                        <td>{{ $post->full_name }}</td>
                                        <td>{{ $post->email }}</td>
                                        <td>{{ $post->phone_number }}</td>
                                        <td>
                                            @if($post->resume)
                                                <a href="{{ asset( $post->resume) }}"
                                                   target="_blank">{{ __('View Resume') }}</a>
                                            @else
                                                {{ __('No Resume') }}
                                            @endif
                                        </td>
                                        <td>{{ $post->created_at->format('Y-m-d') }}</td>
                                    </tr>
                                @endforeach
                                </tbody>
                            </table>
                            <div class="row mx-2">
                                <div class="row">
                                    <div class="col">
                                        <nav>
                                            {{ $thisDatas->appends(request()->query())->links('pagination::bootstrap-4') }}
                                        </nav>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
@endsection
