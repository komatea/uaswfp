@if (session()->has('success'))
<div class="col-8">
    <div class="alert alert-success alert-dismissible" role="alert">
        <div class="alert-body">
            {{-- <p>test pop up</p> --}}
            {{session()->get('success')}}
            <button type="button" class="btn-close" data-bs-dismiss="alert">
            </button>
        </div>
    </div>
</div>

@endif
@if (session()->has('error'))
<div class="col-8">
    <div class="alert alert-danger alert-dismissible" role="alert">
        <div class="alert-body">
            {{session()->get('error')}}
            <button type="button" class="btn-close" data-bs-dismiss="alert">
            </button>
        </div>
    </div>
</div>
@endif