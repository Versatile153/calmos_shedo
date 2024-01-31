

@extends('dashboard.app')
@section('content')



<script>
    function loadGoogleTranslate() {
        new google.translate.TranslateElement ("google_element");
    }
    </script>
            <div class="dashboard-container">
                @if(session('info'))
                <div class="alert alert-danger text-center" id="infoAlert" style="font-size: 18px;">
                    {{ session('info') }}
                </div>

                <script>
                    // Automatically hide the alert after 3 seconds
                    setTimeout(function() {
                        document.getElementById('infoAlert').style.display = 'none';
                    }, 3000);
                </script>
            @endif



        <div class="dashboard-inner">
            <div class="mb-4">
                <h3>KYC Submission</h3>
                <p>The system requires you to submit KYC (know your client) information. Your submitted data will be verified by the system\s admin. If all of your information is correct, the admin will approve the KYC data and you'll be able to make withdrawal requests  and transfer money to other users .</p>
            </div>
            <div class="row">
                <div class="col-12">
                    <div class="card custom--card">
                        <div class="card-body">
                            <form action="{{ route('kyc.store') }}" method="post" enctype="multipart/form-data">
                                @csrf
                                <div class="form-group">
            <label class="form-label">Full Name
            </label>

                        <input type="text"
                class="form-control form--control"
                name="full_name"
                value=""
                 required             >
                </div>
        <div class="form-group">
            <label class="form-label">NID Number
            </label>

                        <input type="text"
                class="form-control form--control"
                name="nid_number"
                value=""
                 required             >
                </div>
        <div class="form-group">
            <label class="form-label">Gender
            </label>

                        <select
                    class="form-control form--control form-select"
                    name="gender"
                     required             >
                    <option value="">Select One</option>
                                        <option value="Male" >Male</option>
                                        <option value="Female" >Female</option>
                                        <option value="Others" >Others</option>
                                </select>
                </div>
        <div class="form-group">
            <label class="form-label">You Hobby
            </label>

                                        <div class="form-check">
                        <input
                            class="form-check-input"
                            name="you_hobby[]"
                            type="checkbox"
                            value="Programming"
                            id="you_hobby_programming"
                        >
                        <label class="form-check-label" for="you_hobby_programming">Programming</label>
                    </div>
                                <div class="form-check">
                        <input
                            class="form-check-input"
                            name="you_hobby[]"
                            type="checkbox"
                            value="Gardening"
                            id="you_hobby_gardening"
                        >
                        <label class="form-check-label" for="you_hobby_gardening">Gardening</label>
                    </div>
                                <div class="form-check">
                        <input
                            class="form-check-input"
                            name="you_hobby[]"
                            type="checkbox"
                            value="Traveling"
                            id="you_hobby_traveling"
                        >
                        <label class="form-check-label" for="you_hobby_traveling">Traveling</label>
                    </div>
                                <div class="form-check">
                        <input
                            class="form-check-input"
                            name="you_hobby[]"
                            type="checkbox"
                            value="Others"
                            id="you_hobby_others"
                        >
                        <label class="form-check-label" for="you_hobby_others">Others</label>
                    </div>
                            </div>
        <div class="form-group">
            <label class="form-label">NID Photo
            </label>

                        <input
                type="file"
                class="form-control form--control"
                name="nid_photo"
                 required             accept=" .jpg,  .png, "
                >
                <pre class="text--base mt-1">Supported mimes: jpg,png</pre>
                </div>

                                <div class="form-group">
                                    <button type="submit" class="btn btn--base w-100">Submit</button>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>



            </div>
        </div>
    </div>




@endsection
