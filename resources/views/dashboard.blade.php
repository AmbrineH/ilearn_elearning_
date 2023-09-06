
@if (session('success'))
                        <div class="alert alert-success" role="alert">
                            {{ session('success') }}
                        </div>
                        <div>
                    @endif
<div class ="container"> @include('home') </div>

