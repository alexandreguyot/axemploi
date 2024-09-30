@extends('layouts.admin')
@section('content')
<div class="row">
    <div class="card bg-slate-100">
        <div class="card-header">
            <div class="card-header-container">
                <h6 class="card-title">
                    {{ trans('global.view') }}
                    {{ trans('cruds.offer.title_singular') }}:
                    {{ trans('cruds.offer.fields.id') }}
                    {{ $offer->id }}
                </h6>
            </div>
        </div>

        <div class="card-body">
            <div class="pt-3">
                <table class="table table-view">
                    <tbody class="bg-white">
                        <tr>
                            <th>
                                {{ trans('cruds.offer.fields.id') }}
                            </th>
                            <td>
                                {{ $offer->id }}
                            </td>
                        </tr>
                    </tbody>
                </table>
            </div>
            <div class="form-group">
                @can('offer_edit')
                    <a href="{{ route('offers.edit', $offer) }}" class="btn btn-indigo mr-2">
                        {{ trans('global.edit') }}
                    </a>
                @endcan
                <a href="{{ route('offers.index') }}" class="btn btn-secondary">
                    {{ trans('global.back') }}
                </a>
            </div>
        </div>
    </div>
</div>
@endsection
