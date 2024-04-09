<form wire:submit="save" class="contact-form">
    <div class="row">
        <div class="col-sm-12 col-md-6">
            <div class="form-group custom-form-group mb-20">
                <div class="input-group">
                    <label for="name">Name*</label>
                    <input type="text" wire:model="name" id="name" class="form-control" required
                        data-error="Please enter your name" />
                </div>
                @error('name')
                    <div class="invalid-feedback">{{ $message }}</div>
                @enderror
            </div>
        </div>
        <div class="col-sm-12 col-md-6">
            <div class="form-group custom-form-group mb-20">
                <div class="input-group">
                    <label for="phone_number">Phone*</label>
                    <input type="text" wire:model="phone" id="phone_number" required
                        data-error="Please enter your phone number" class="form-control" />
                </div>
                @error('name')
                    <div class="invalid-feedback">{{ $message }}</div>
                @enderror
            </div>
        </div>
        <div class="col-sm-12 col-md-6">
            <div class="form-group custom-form-group mb-20">
                <div class="input-group">
                    <label for="email">Email Address*</label>
                    <input type="email" wire:model="email" id="email" class="form-control" required
                        data-error="Please enter your email" />
                </div>
                @error('email')
                    <div class="invalid-feedback">{{ $message }}</div>
                @enderror
            </div>
        </div>
        <div class="col-sm-12 col-md-6">
            <div class="form-group custom-form-group mb-20">
                <div class="input-group">
                    <label for="msg_subject">Subject*</label>
                    <input type="text" wire:model="sujet" id="msg_subject" class="form-control" required
                        data-error="Please enter your subject" />
                </div>
                @error('sujet')
                    <div class="invalid-feedback">{{ $message }}</div>
                @enderror
            </div>
        </div>
        <div class="col-sm-12 col-md-12">
            <div class="form-group custom-form-group mb-20">
                <div class="input-group">
                    <label for="message">Message</label>
                    <textarea wire:model="message" class="form-control" id="message" rows="8"></textarea>
                    @error('message')
                        <div class="invalid-feedback">{{ $message }}</div>
                    @enderror
                </div>
            </div>
        </div>

        @include('components.alert-livewire')

        <div class="col-sm-12 col-md-12 col-lg-12">
            <button class="btn" type="submit">
                <span wire:loading>
                    <img src="https://i.gifer.com/ZKZg.gif" style="height: 20px !important;">
                </span>
                Send Message
            </button>
        </div>
    </div>
</form>
