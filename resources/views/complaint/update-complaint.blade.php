@include('component.sidebar')

@include('component.header')
<!-- / Navbar -->
<!-- / Navbar -->



<!-- Content wrapper -->
<div class="content-wrapper">
    <!-- Content -->

    <div class="container-xxl flex-grow-1 container-p-y">
        <!-- <h4 class="fw-bold py-3 mb-4"><span class="text-muted fw-light"> Add Complaints</h4> -->

        <div class="row">
            <div class="col-md-12">
                <div class="card mb-4">
                    @if ($errors->any())
                    <div class="alert alert-danger">
                        <ul>
                            @foreach ($errors->all() as $error)
                            <li>{{ $error }}</li>
                            @endforeach
                        </ul>
                    </div>
                    @endif
                    @if(session()->has('status'))
                    <div class="alert my-3 p-3 alert-success">
                        {{session('status')}}
                    </div>
                    @endif

                    <div class="card-body">
                        <h4 style="font-weight: 500; color:#8a8a91;"> Close Complaint </h4>

                        <form method="post" action="{{ route('update-complaint') }}" enctype="multipart/form-data">
                            @csrf
                            <div class="row">
                                <div class="form-group col-md-8 my-2 col-sm-12">
                                    <label>Image</label>
                                    <input type="hidden" name="id" value="{{$complaint->id}}">
                                    <input type="file" class="form-control" name="image" required>
                                </div>
                                <div class=" col-md-4 my-4 col-sm-12">
                                <button type="submit" class="btn btn-primary" style="width: 25% !important ;margin-top:10px">Submit</button>
                                </div>
                                               
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- / Content -->

<!-- Footer -->
<script>
    function initMap() {
        if (navigator.geolocation) {
            navigator.geolocation.getCurrentPosition(showPosition);
        } else {}
    }

    function showPosition(position) {
        const latitude = position.coords.latitude;
        const longitude = position.coords.longitude;
        document.getElementsByName("latitude")[0].value = latitude;
        document.getElementsByName("longitude")[0].value = longitude;
    }
    window.onload = function() {
        initMap();
    };
</script>
@include('component.footer')