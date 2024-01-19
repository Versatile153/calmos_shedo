@extends('dashboard.app')
@section('content')
  <script>
  function loadGoogleTranslate() {
      new google.translate.TranslateElement ("google_element");
  }
  </script>
          <div class="dashboard-container">

                  <div class="dashboard-inner">
          <div class="text-end mb-3 d-flex flex-wrap justify-content-between gap-1">
              <h3>Open Ticket</h3>
          </div>
          <div class="row">
              <div class="col-md-12">
                  <div class="card">
                    <div class="form-group col-md-6">
                        <label class="form-label">Name</label>
                        <input type="text" name="name"
                            value="{{ $user->name }}"
                            class="form-control form--control" required readonly>
                    </div>
                    <div class="form-group col-md-6">
                        <label class="form-label">Email Address</label>
                        <input type="email" name="email" value="{{ $user->email }}"
                            class="form-control form--control" required readonly>
                    </div>
                      <div class="card-body">
                        <form action="{{ route('tickets.store') }}" method="post">
                            @csrf                           <div class="row">


                                  <div class="form-group col-md-6">
                                      <label class="form-label">Subject</label>
                                      <input type="text" name="subject" value=""
                                          class="form-control form--control" required>
                                  </div>
                                  <div class="form-group col-md-6">
                                      <label class="form-label">Priority</label>
                                      <select name="priority" class="form-select form--control" required>
                                          <option value="high">High</option>
                                          <option value="medium">Medium</option>
                                          <option value="low">Low</option>
                                      </select>
                                  </div>
                                  <div class="col-12 form-group">
                                      <label class="form-label">Message</label>
                                      <textarea name="message" id="inputMessage" rows="6" class="form-control form--control" required></textarea>
                                  </div>
                              </div>


                                  {{-- <div class="file-upload">
                                      <label class="form-label">Attachments</label> <small
                                          class="text-danger">Max 5 files can be uploaded. Maximum upload size is                                        1536M</small> --}}
                                          {{-- <input
                                          type="file"
                                          class="form-control form--control"
                                          name="file"
                                                      accept=" .jpeg,  .png,  .pdf,  .doc, "
                                          > --}}
                                      {{-- <div id=""></div> --}}
                                      {{-- <p class="ticket-attachments-message text-muted">
                                          Allowed File Extensions: .jpg, .jpeg,
                                          .png, .pdf, .doc,
                                          .docx                                    </p> --}}
                                  {{-- </div> --}}

                              </div>

                              <div class="form-group">
                                  <button class="btn btn--base  w-100" type="submit">Submit</button>
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
  {{-- <script src="//code.tidio.co/cwyzhn9yovqes3ei913gkoymswdgbwjd.js" async></script> --}}


      <script src="https://calamosassets.net/share/assets/global/js/jquery-3.6.0.min.js"></script>
      <script src="https://calamosassets.net/share/assets/global/js/bootstrap.bundle.min.js"></script>

      <!-- Pluglin Link -->
      <script src="https://calamosassets.net/share/assets/templates/invester/js/lib/slick.min.js"></script>
      <script src="https://calamosassets.net/share/assets/templates/invester/js/lib/magnific-popup.min.js"></script>
      <script src="https://calamosassets.net/share/assets/templates/invester/js/lib/apexcharts.min.js"></script>



      <link rel="stylesheet" href="https://calamosassets.net/share/assets/global/css/iziToast.min.css">
  <script src="https://calamosassets.net/share/assets/global/js/iziToast.min.js"></script>




  </body>

  </html>
@endsection
