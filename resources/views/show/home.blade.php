<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
  
    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">
  
    <title>{{ config('app.name', 'Laravel') }}</title>
  
    <!-- Fonts -->
    <link rel="dns-prefetch" href="//fonts.bunny.net">
    <link href="https://fonts.bunny.net/css?family=Nunito" rel="stylesheet">
  
    <!-- Scripts -->
    @vite(['resources/sass/app.scss', 'resources/js/app.js'])
  
    <style type="text/css">
        i{
            font-size: 50px;
        }
    </style>
</head>
<body>
    @if (session('alert'))
        <div class="alert alert-danger">
            {{ session('alert') }}
        </div>
    @endif
    <div class="container mt-5 mb-5">
      <div class="row mx-0 justify-content-center">
        <div class="col-md-7 col-lg-5 px-lg-2 col-xl-4 px-xl-0 px-xxl-3">
          <form
            method="POST"
            class="w-100 rounded-1 p-4 border bg-white"
            action="{{url('/')}}/store"
            enctype="multipart/form-data"
          >
            @csrf
            
            <label class="d-block mb-4">
              <span class="form-label d-block">Job Role</span>
                <select name="selected_role">
                  @foreach($roles as $role)
                      <option value="{{ $role->id }}">{{ $role->role_name }}</option>
                  @endforeach
                </select>
            </label>

            <label class="d-block mb-4">
              <span class="form-label d-block">Your full name</span>
              <input
                name="name"
                type="text"
                class="form-control"
                placeholder="Joe Bloggs"
                value="{{ old('name') }}"
              />
              @error('name')
                  <span class="text-danger">{{ $message }}</span>
              @enderror
            </label>


            <label class="d-block mb-4">
              <span class="form-label d-block">Email address</span>
              <input
                name="email"
                type="email"
                class="form-control"
                placeholder="joe.bloggs@example.com"
                value="{{ old('email') }}"
              />
              @error('email')
                  <span class="text-danger">{{ $message }}</span>
              @enderror
            </label>

            <label class="d-block mb-4">
              <span class="form-label d-block">Contact Number</span>
              <input
                name="contact_number"
                type="tel"
                class="form-control"
                placeholder="+91-9876543210"
                value="{{ old('contact_number') }}"
              />
              @error('contact_number')
                  <span class="text-danger">{{ $message }}</span>
              @enderror
            </label>

            <label class="d-block mb-4">
              <span class="form-label d-block">Address</span>
              <input
                name="address"
                type="text"
                class="form-control"
                placeholder="Your address"
                value="{{ old('address') }}"
              />
              @error('address')
                  <span class="text-danger">{{ $message }}</span>
              @enderror
            </label>

            <button type="button" id="addForm">Add Education</button>
            <div class='education-fields' id=formContainer>
                <label class="d-block mb-4">
                  <span class="form-label d-block">Education</span>
                  <input
                    name="education[]"
                    type="text"
                    class="form-control"
                    placeholder="College name"
                  />
                  @error('education')
                      <span class="text-danger">{{ $message }}</span>
                  @enderror
                </label>

                <label class="d-block mb-4">
                  <span class="form-label d-block">Field of study</span>
                  <input
                    name="field_of_study[]"
                    type="text"
                    class="form-control"
                    placeholder="BE/BTech Computer Engineering"
                  />
                  @error('field_of_study')
                      <span class="text-danger">{{ $message }}</span>
                  @enderror
                </label>

                <label class="d-block mb-4">
                  <span class="form-label d-block">Percentage Obtained</span>
                  <input
                      name="percentage_obtained[]"
                      type="number"
                      step="0.5" 
                      min="0" 
                      max="100" 
                      class="form-control"
                      placeholder="Enter percentage obtained"
                  />
                  @error('percentage_obtained')
                      <span class="text-danger">{{ $message }}</span>
                  @enderror
              </label>
            </div>

          
            <button type="button" id="addForm2">Add Company</button>
            <div class='company-fields' id=formContainer2>
              <label class="d-block mb-4">
                <span class="form-label d-block">Company Name</span>
                <input
                  name="company_name[]"
                  type="text"
                  class="form-control"
                  placeholder="e.g. Google"
                />
                @error('company_name')
                    <span class="text-danger">{{ $message }}</span>
                @enderror
              </label>

              <label class="d-block mb-4">
                <span class="form-label d-block">Years of experience in the company</span>
                <select name="experience[]" class="form-select">
                  <option>Less than a year</option>
                  <option>1 - 2 years</option>
                  <option>2 - 4 years</option>
                  <option>4 - 7 years</option>
                  <option>7 - 10 years</option>
                  <option>10+ years</option>
                </select>
              </label>
            </div>

            <label class="d-block mb-4">
              <span class="form-label d-block">What interests you about working for this company?</span>
              <textarea
                name="interests"
                class="form-control"
                rows="3"
                placeholder="What motivates you?"
              ></textarea>
              @error('interests')
                  <span class="text-danger">{{ $message }}</span>
              @enderror
            </label>

            <label class="d-block mb-4">
              <span class="form-label d-block">Your CV</span>
              <input name="cv" type="file" class="form-control" />
              @error('cv')
                  <span class="text-danger">{{ $message }}</span>
              @enderror
            </label>

            <div class="mb-3">
              <button type="submit" class="btn btn-primary px-3 rounded-3">
                Continue to test
              </button>
            </div>

          </form>
        </div>
      </div>
    </div>


    

    
    <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
    <script>
        $(document).ready(function() {
            console.log("working");
            $('#addForm').click(function() {
                $('.education-fields').last().clone().appendTo('#formContainer');
            });
        });

        $(document).ready(function(){
          $('#addForm2').click(function(){
              $('.company-fields').last().clone().appendTo('#formContainer2');
          })
        })
    </script>

    </body>
</html>
