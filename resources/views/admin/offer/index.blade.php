@extends('layouts.admin')
@section('content')
<div class="row">
    <div class="card bg-white">
        <div class="card-header border-b border-slate-200">
            <div class="card-header-container">
                <h6 class="card-title">
                    {{ trans('cruds.offer.title_singular') }}
                    {{ trans('global.list') }}
                </h6>

                @can('offer_create')
                    <a class="btn btn-indigo" href="{{ route('offers.create') }}">
                        {{ trans('global.add') }} {{ trans('cruds.offer.title_singular') }}
                    </a>
                @endcan
            </div>
        </div>
        @livewire('offer.index')

    </div>
</div>
@endsection
