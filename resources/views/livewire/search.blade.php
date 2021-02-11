

<input wire:model="search" list="mylist" id='search-box' name='search' size='25' style='background: #ffffff; float:right; border: 2px solid #F33F3F' type='text' placeholder="Car Search"/>

@if(!empty($query))
    <datalist id="mylist">
        @foreach($datalist as $rs)
            <option value="{{$rs->title}}">{{$rs->category->title}}</option>
        @endforeach
    </datalist>
@endif
