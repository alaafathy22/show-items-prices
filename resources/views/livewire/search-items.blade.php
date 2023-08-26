{{-- <form class="d-flex" method="POST" role="search" action="{{ route('search_items') }}">
        @csrf
        <input wire:model="search_input" class="form-control me-2" type="search" placeholder="Search" aria-label="Search" name="search_input">
        <button class="btn btn-outline-success" type="submit">بحث</button>
        <div>{{$search_input }}</div>
    </form> --}}
<div>
    <div class="div_input_search">
        <input wire:model="search_input" class="form-control input_search" type="search"
            placeholder="ابحث بأسم الصنف او جزء من الأسم" aria-label="Search">

    </div>

    <table class="table text-center" wire:loading.class="opacity-50">
        <thead class="table-dark">
            <tr class="tr_for_tabel_inside_head">
                {{-- <th scope="col">@sortablelink('id_item', 'كود الصنف')</th>
                <th scope="col">@sortablelink('name', 'اسم الصنف') </th>
                <th scope="col">@sortablelink('id_group', 'المجموعه')</th>
                <th scope="col">@sortablelink('price', 'سعر الصنف الاول')</th>
                <th scope="col">@sortablelink('price2', 'سعر الصنف الثانى ')</th>
                <th scope="col">@sortablelink('price3', 'سعر الصنف الثالث')</th> --}}
                <th scope="col" wire:click="sort_by('id_item')">
                    كود الصنف
                </th>
                <th scope="col" wire:click="sort_by('name')">
                    اسم الصنف </th>
                <th scope="col" wire:click="sort_by('id_group')">المجموعه</th>
                <th scope="col" wire:click="sort_by('price')">سعر الصنف الاول</th>
                <th scope="col" wire:click="sort_by('price2')">سعر الصنف الثانى</th>
                <th scope="col" wire:click="sort_by('price3')">سعر الصنف الثالث</th>
            </tr>
        </thead>
        <tbody>
            @forelse ($items_and_prices as $key => $value)
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
            @empty
                <tr>
                    <td colspan="6">لا يوجد بيانات بهذا الاسم يرجو تغيير الاسم او مسح الاسم بالكامل</td>
                </tr>
            @endforelse
        </tbody>
    </table>
</div>
