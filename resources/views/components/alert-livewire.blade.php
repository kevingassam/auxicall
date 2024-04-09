

@if (session()->has('success'))
<div class="alert alert-success border-0 bg-success alert-dismissible fade show">
    <div class="text-white">{{ session('success') }}</div>
    <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
</div>
@endif

@if (session()->has('error'))
    <div class="alert alert-danger border-0 bg-danger alert-dismissible fade show">
        <div class="text-white">{{ session('error') }}</div>
        <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
    </div>
@endif

@if (session()->has('warning'))
    <div class="alert alert-warning border-0 bg-warning alert-dismissible fade show">
        <div class="text-dark">{{ session('warning') }}</div>
        <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
    </div>
@endif

@if (session()->has('info'))
    <div class="alert alert-info border-0 bg-info alert-dismissible fade show">
        <div class="text-dark">{{ session('info') }}</div>
        <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
    </div>
@endif

@if (session()->has('dark'))
    <div class="alert alert-dark border-0 bg-dark alert-dismissible fade show">
        <div class="text-white"> {{ session('dark') }}</div>
        <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
    </div>
@endif
