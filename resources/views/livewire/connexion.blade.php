<form class="row g-3" wire:submit ="login">
    <div class="col-12">
        <label for="inputEmailAddress" class="form-label">Email Address</label>
        <input type="email" class="form-control" id="inputEmailAddress" wire:model="email" required placeholder="Email Address">
        @error('email')
        <span class="text-danger">{{ $message }}</span>
        @enderror
    </div>
    <div class="col-12">
        <label for="inputChoosePassword" class="form-label">Enter Password</label>
        <div class="input-group" id="show_hide_password">
            <input type="password" class="form-control border-end-0" wire:model="password" required id="inputChoosePassword" value="12345678" placeholder="Enter Password"> <a href="javascript:;" class="input-group-text bg-transparent"><i class="bx bx-hide"></i></a>
        </div>
        @error('password')
        <span class="text-danger">{{ $message }}</span>
        @enderror
    </div>
    <div class="col-md-6">
        <div class="form-check form-switch">
            <input class="form-check-input" type="checkbox" id="flexSwitchCheckChecked" checked="">
            <label class="form-check-label" for="flexSwitchCheckChecked">Remember Me</label>
        </div>
    </div>
    <div class="col-md-6 text-end">	{{-- <a href="authentication-forgot-password.html">Forgot Password ?</a> --}}
    </div>
    <div class="col-12">
        <div class="d-grid">
            <button type="submit" class="btn btn-primary">
                <i class="bx bxs-lock-open"></i>
                Sign in
                <span class="spinner-border spinner-border-sm" wire:loading role="status" aria-hidden="true"></span>
            </button>
        </div>
    </div>
    
</form>