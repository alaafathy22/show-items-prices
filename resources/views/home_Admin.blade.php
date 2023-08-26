@extends('layouts.app')

@section('content')
    {{-- <div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">{{ __('Dashboard') }}</div>

                <div class="card-body">
                    @if (session('status'))
                        <div class="alert alert-success" role="alert">
                            {{ session('status') }}
                        </div>
                    @endif

                    {{ __('You are logged in!') }}
                </div>
            </div>
        </div>
    </div>
</div> --}}
    <table class="table text-center">
        <thead class="table-dark">
            <tr class="tr_for_tabel_inside_head">
                <th scope="col">@sortablelink('id_item', 'كود الصنف') </th>
                <th scope="col">@sortablelink('name', 'اسم الصنف') </th>
                <th scope="col">@sortablelink('id_group', 'المجموعه')</th>
                <th scope="col">@sortablelink('cost', 'سعرالشراء')</th>
                <th scope="col">@sortablelink('mount', 'الكمية')</th>
                <th scope="col">@sortablelink('price', 'سعر الصنف الاول')</th>
                <th scope="col">@sortablelink('price2', 'سعر الصنف الثانى ')</th>
                <th scope="col">@sortablelink('price3', 'سعر الصنف الثالث')</th>
                <th scope="col">تعديل / حذف</th>
            </tr>
        </thead>
        <tbody>
            @foreach ($items_and_prices as $key => $value)
                <tr>
                    <td scope="row">{{ $value->id_item }}</td>
                    <td>{{ is_null($value->name) ? 'لا يوجد' : $value->name }}</td>
                    <td>
                        @foreach ($Groups as $key => $value_Groups)
                            {{ $value->id_group == $value_Groups->id ? $value_Groups->name : '' }}
                        @endforeach
                        {{ is_null($value->id_group) ? 'لا يوجد' : '' }}
                    </td>
                    <td>{{ is_null($value->cost) ? 'لا يوجد' : $value->cost }}</td>
                    <td>{{ is_null($value->mount) ? 'لا يوجد' : $value->mount }}</td>
                    <td>{{ is_null($value->price) ? 'لا يوجد' : $value->price }}</td>
                    <td>{{ is_null($value->price2) ? 'لا يوجد' : $value->price2 }}</td>
                    <td>{{ is_null($value->price3) ? 'لا يوجد' : $value->price3 }}</td>
                    <td>
                        <a type="button" class="btn btn-primary" data-bs-toggle="modal"
                            data-bs-target="#exampleModal{{ $value->id }}"><i class="fa-solid fa-trash-can"></i></a>
                        <span>/</span>
                        <a type="button" class="btn btn-primary" data-bs-toggle="modal"
                            data-bs-target="#exampleModaledit{{ $value->id }}"><i
                                class="fa-solid fa-pen-to-square"></i></a>
                    </td>
                </tr>
            @endforeach
        </tbody>
    </table>
    <div class="add_item">
        <button type="button" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#exampleModaladd_item">اضافه
            صنف جديد</button>
    </div>


    <!-- Modal -->
    @foreach ($items_and_prices as $key => $value)
        <div class="modal fade" id="exampleModal{{ $value->id }}" tabindex="-1" aria-labelledby="exampleModalLabel"
            aria-hidden="true">
            <div class="modal-dialog">
                <div class="modal-content">
                    <div class="modal-header">
                        <h1 class="modal-title fs-5" id="exampleModalLabel">حذف</h1>
                        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                    </div>
                    <div class="modal-body">
                        {{ $value->name }}
                    </div>
                    <div class="modal-footer">
                        <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">الغاء</button>
                        <a href="remove_item?id={{ $value->id }}" type="button" class="btn btn-primary">تأكيد الحذف</a>
                    </div>
                </div>
            </div>
        </div>
    @endforeach

    @foreach ($items_and_prices as $key => $value)
        <div class="modal fade" id="exampleModaledit{{ $value->id }}" tabindex="-1" aria-labelledby="exampleModalLabel"
            aria-hidden="true">
            <div class="modal-dialog">
                <div class="modal-content">
                    <div class="modal-header">
                        <h1 class="modal-title fs-5" id="exampleModalLabel">تعديل</h1>
                        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                    </div>
                    <form action="{{ route('edit_item') }}" method="POST">
                        @csrf
                        <div class="modal-body">
                            <label style="display: block">اسم الصنف</label>
                            <input class="form-control" name="item_name" type="text" value="{{ $value->name }}"
                                required>
                        </div>
                        <div class="modal-body">
                            <label style="display: block">المجموعه</label>
                            <select name="group_id" class="form-select">
                                @foreach ($Groups as $key => $value_Groups)
                                    <option value="{{ $value_Groups->id }}"
                                        {{ $value->id_group == $value_Groups->id ? 'selected' : '' }}>
                                        {{ $value_Groups->name }}
                                    </option>
                                @endforeach
                            </select>
                            {{-- <input name="item_name" type="text" value="{{ $value_Groups->name }}"> --}}
                        </div>
                        <div class="modal-body">
                            <label style="display: block">سعر شراء الصنف</label>
                            <input class="form-control" name="item_cost" type="number" value="{{ $value->cost }}">
                        </div>
                        <div class="modal-body">
                            <label style="display: block">الكمية</label>
                            <input class="form-control" name="item_mount" type="number" value="{{ $value->mount }}">
                        </div>
                        <div class="modal-body">
                            <label style="display: block">سعر الصنف</label>
                            <input class="form-control" name="item_price" type="number" value="{{ $value->price }}"
                                required>
                        </div>
                        <div class="modal-body">
                            <label style="display: block">سعر الصنف الثانى</label>
                            <input class="form-control" name="item_price2" type="number" value="{{ $value->price2 }}">
                        </div>
                        <div class="modal-body">
                            <label style="display: block">سعر الصنف الثالث</label>
                            <input class="form-control" name="item_price3" type="number" value="{{ $value->price3 }}">
                        </div>

                        <div class="modal-footer">
                            <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">الغاء</button>
                            {{-- <button type="button" class="btn btn-primary"></button> --}}
                            <input type="hidden" name="id_row" value="{{ $value->id }}">
                            <input type="submit" value="تأكيد التعديل" type="button" class="btn btn-primary">
                        </div>
                    </form>
                </div>
            </div>
        </div>
    @endforeach

    <div class="modal fade" id="exampleModaladd_item" tabindex="-1" aria-labelledby="exampleModalLabel"
        aria-hidden="true">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-header">
                    <h1 class="modal-title fs-5" id="exampleModalLabel">اضافه صنف جديد</h1>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <form action="{{ route('Add_item') }}" method="POST">
                    @csrf
                    <div class="modal-body">
                        <label style="display: block">كود الصنف </label>
                        <input class="form-control" name="item_id" type="number" required>
                    </div>
                    <div class="modal-body">
                        <label style="display: block">اسم الصنف</label>
                        <input class="form-control" name="item_name" type="text" required>
                    </div>
                    <div class="modal-body">
                        <label style="display: block">المجموعه</label>
                        {{-- <input name="item_name" type="text"> --}}
                        <select name="group_id" class="form-select">
                            @foreach ($Groups as $key => $value_Groups)
                                <option value="{{ $value_Groups->id }}">
                                    {{ $value_Groups->name }}
                                </option>
                            @endforeach
                        </select>
                    </div>
                    <div class="modal-body">
                        <label style="display: block">سعر الشراء</label>
                        <input class="form-control" name="item_cost" type="number">
                    </div>
                    <div class="modal-body">
                        <label style="display: block">الكمية</label>
                        <input class="form-control" name="item_mount" type="number">
                    </div>
                    <div class="modal-body">
                        <label style="display: block">سعر الصنف</label>
                        <input class="form-control" name="item_price" type="number" required>
                    </div>
                    <div class="modal-body">
                        <label style="display: block">سعر الصنف الثانى</label>
                        <input class="form-control" name="item_price2" type="number">
                    </div>
                    <div class="modal-body">
                        <label style="display: block">سعر الصنف الثالث</label>
                        <input class="form-control" name="item_price3" type="number">
                    </div>

                    <div class="modal-footer">
                        <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">الغاء</button>
                        <input type="submit" value="تأكيد الاضافه" type="button" class="btn btn-primary">
                    </div>
                </form>
            </div>
        </div>
    </div>
@endsection
