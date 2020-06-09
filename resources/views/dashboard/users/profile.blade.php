@extends('layout.dashboard.dashboard')

@section('title')
    Update Profile
@endsection

@section('content')

    <div class="content-page">

        <!-- Start content -->
        <div class="content">

            <div class="container-fluid">

                <div class="row">
                    <div class="col-xl-12">
                        <div class="breadcrumb-holder">
                            <h1 class="main-title float-left">Dashboard</h1>
                            <ol class="breadcrumb float-right">
                                <li class="breadcrumb-item">Home</li>
                                <li class="breadcrumb-item active">Dashboard</li>
                            </ol>
                            <div class="clearfix"></div>
                        </div>
                    </div>
                </div>
                <!-- end row -->

                <div class="row">

                    <div class="col-xs-12 col-sm-12 col-md-12 col-lg-12 col-xl-12">
                        <div class="card mb-3">
                            <div class="card-header">
                                <h3> Update Profile</h3>
                            </div>

                            <div class="card-body">


                                <form id="edit_user" enctype="multipart/form-data">
                                    @csrf
                                    <div class="row">

                                        <div class="col-lg-12 col-xl-12">

                                            <div class="row">
                                                <div class="col-lg-6">
                                                    <div class="form-group">
                                                        <label>Full Name<span class="asterik">*</span></label>
                                                        <input class="form-control" name="name" type="text" onkeypress="return isCharacterKey(event)"
                                                               value="{{$user->name}}"
                                                               placeholder="Full Name" required>
                                                    </div>
                                                </div>

                                                <div class="col-lg-6">
                                                    <div class="form-group">
                                                        <label>Valid Email<span class="asterik">*</span></label>
                                                        <input class="form-control" name="email" type="email"
                                                               value="{{$user->email}}"
                                                               value="" placeholder="office@website.com" required>
                                                    </div>
                                                </div>
                                            </div>

                                            <div class="row">


                                                <div class="col-lg-6">
                                                    <div class="form-group">
                                                        <label>Password<span class="asterik">*</span></label>
                                                        <input class="form-control" name="password"
                                                               @if(auth()->user()->role_id == 1 || auth()->user()->id == $user->id) type="text"
                                                               @else type="password" @endif
                                                               value="{{$user->actual_password}}"
                                                               required
                                                        >
                                                    </div>
                                                </div>
                                                <div class="col-lg-6">
                                                    <div class="form-group">
                                                        <label>Phone<span class="asterik">*</span></label>
                                                        <input class="form-control" name="phone" type="number"
                                                               value="{{$user->phone}}"
                                                               placeholder="Phone Number" required>
                                                    </div>
                                                </div>
                                            </div>

                                            <div class="row">
                                                <div class="col-lg-12">
                                                    <div class="form-group">
                                                        <label> Image </label>
                                                        <input type="file" class="form-control" accept="image/png,image/jpeg,image/jpg" id="background_check" name="profile_image">
                                                        <input type="hidden" class="form-control"
                                                               name="profile_image_hide"
                                                               value="{{$user->profile_image}}">
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="row">
                                                <div class="col-lg-12">
                                                    <div class="form-group">
                                                        <label> Note</label>
                                                        <textarea class="form-control" name="remarks"
                                                                  id="your_textarea_edit"
                                                                  cols="60"
                                                                  rows="8"> {{$user->remarks}}</textarea>
                                                    </div>
                                                </div>
                                            </div>

                                            <div class="row">
                                                <div class="col-lg-12">
                                                    <button type="submit" class="btn btn-primary btn-chng1">Update
                                                        Profile
                                                    </button>
                                                </div>
                                            </div>

                                        </div>


                                    </div>

                                </form>

                            </div>
                            <!-- end card-body -->

                        </div>
                        <!-- end card -->

                    </div>
                    <!-- end col -->

                </div>
            </div>
        </div>
    </div>
@endsection

@section('script')
    <script>
        // $("#your_textarea_edit").on('keyup', function (event) {
        //     var count = $("#your_textarea_edit").val().length;
        //     if (count > 2000) {
        //         window.toastr.warning('For Note You Add Only 2000 Characters And Your Characters are ' + count + '');
        //     }
        // });

    </script>
    <script>


        $("#background_check").change(function () {
            background_check(this, this.id);
        });

        function background_check(input, id) {
            if (input.files && input.files[0]) {
                var fileName = input.files[0].name;
                var filesize = input.files[0].size;
                var extention = fileName.split('.').pop().toLowerCase();
                console.log(extention);

                if (extention == 'jpg' || extention == 'jpeg' || extention == 'png') {
                    if (filesize > 5000000) {
                        $('#' + id).val('');
                        window.toastr.error("Please upload a file less then 5MB");
                    }
                } else {
                    $('#' + id).val('');
                    window.toastr.error("Please upload only jpg/jpeg or png file");
                }
            }
        }




        $('form#edit_user').on('submit', function (e) {
            e.preventDefault();
            var formData = new FormData(this);
            $.blockUI({
                css: {
                    border: 'none',
                    padding: '15px',
                    backgroundColor: '#000',
                    '-webkit-border-radius': '10px',
                    '-moz-border-radius': '10px',
                    opacity: .5,
                    color: '#fff'
                }
            });
            $.ajax({
                type: 'POST',
                url: "{{route('edit-profile-post',$user->id)}}",
                data: formData,
                processData: false,
                contentType: false,
                cache: false,
                success: function (response, status) {
                    if (response.result == 'success') {
                        $.unblockUI();
                        window.toastr.success(response.message);
                        setTimeout(function () {
                            window.location.reload();
                        }, 1000);
                    } else if (response.result == 'error') {
                        $.unblockUI();
                        window.toastr.error(response.message);
                    }
                },
                error: function (data) {
                    $.each(data.responseJSON.errors, function (key, value) {
                        $.unblockUI();
                        window.toastr.error(value);
                    });
                }
            });
        });
    </script>

@endsection
