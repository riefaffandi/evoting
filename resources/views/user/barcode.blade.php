<x-user-layout>
    <div class="py-3">
        <div class="row h-100 g-0 my-5 justify-content-center">
            <div class="col-lg-6 my-auto">
                <div class="card border-0 shadow">
                    <div class="card-header text-center fs-3 fw-bold text-uppercase p-3 border-0 shadow-sm">
                        Barcode
                    </div>
                    <div class="card-body p-3">
                        <div class="display-3 text-center my-3">
                            <img src="{{ asset('storage' . Auth::user()->qr_code) }}" alt="">
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</x-user-layout>
