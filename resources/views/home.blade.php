{{-- @extends('layouts.app')

@section('content')
    <table class="table text-center">
        <thead class="table-dark">
            <tr class="tr_for_tabel_inside_head">
                <th scope="col">@sortablelink('id_item', 'كود الصنف')</th>
                <th scope="col">@sortablelink('name', 'اسم الصنف') </th>
                <th scope="col">@sortablelink('id_group', 'المجموعه')</th>
                <th scope="col">@sortablelink('price', 'سعر الصنف الاول')</th>
                <th scope="col">@sortablelink('price2', 'سعر الصنف الثانى ')</th>
                <th scope="col">@sortablelink('price3', 'سعر الصنف الثالث')</th>
            </tr>
        </thead>
        <tbody>
            @foreach ($items_and_prices as $key => $value)
                <tr>
                    <th scope="row">{{ $value->id_item }}</th>
                    <td>{{ is_null($value->name) ? 'لا يوجد' : $value->name }}</td>
                    <td>
                        @foreach ($Groups as $key => $value_Groups)
                            {{ $value->id_group == $value_Groups->id ? $value_Groups->name : '' }}
                        @endforeach
                        {{ is_null($value->id_group) ? 'لا يوجد' : '' }}
                    </td>
                    <td>{{ is_null($value->price) ? 'لا يوجد' : $value->price }}</td>
                    <td>{{ is_null($value->price2) ? 'لا يوجد' : $value->price2 }}</td>
                    <td>{{ is_null($value->price3) ? 'لا يوجد' : $value->price3 }}</td>
                </tr>
            @endforeach
        </tbody>
    </table>
@endsection --}}
@extends('layouts.app')
@section('content')
    @can('isUser')
        <livewire:search-items />
    @endcan
    @can('isAdmin')
        @include('home_Admin')
    @endcan
@endsection
