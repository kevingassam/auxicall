<div>
    @if ($partenaires->count() > 0)
        <section class="icons-section overflow-hidden">
            <div class="container">
                <div class="row">
                    <div class="col-12">
                        <h4 class="text-center p-0" data-aos="fade-zoom-in">
                            Quelques partenaires et clients !
                        </h4>
                    </div>
                </div>
                <div class="row">
                    @forelse ($partenaires as $item)
                        <div class="col-lg-2 col-sm-4 col-6 mb-md-0 mb-4 text-center d-table align-items-center">
                            <div class="logo-box" data-aos="flip-left" data-aos-easing="ease-out-cubic"
                                data-aos-duration="2000">
                                <figure class="mb-0 comapanies-icon-margin icons-mb">
                                    <img src="{{ Strorage::url($item->logo) }}" alt="" height="94">
                                </figure>
                            </div>
                        </div>
                    @empty
                    @endforelse
                </div>
            </div>
        </section>
    @endif

</div>
