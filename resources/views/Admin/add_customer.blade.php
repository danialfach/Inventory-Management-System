@extends('layouts.admin_master')

@section('content')

<main>
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-lg-7">
                <div class="card shadow-lg border-0 rounded-lg mt-5">
                    <div class="card-header"><h1 class="text-center font-weight-light my-4"><b>Add New User</b></h1></div>
                    <div class="card-body">
                        <form method="POST" action="{{ url('/insert-customer') }}" enctype="multipart/form-data">
                        @csrf
                            <div class="form-row">
                                <div class="col-md-6">
                                    <div class="form-group">
                                        <label class="small mb-1" for="inputFirstName">User Name</label>
                                        <input class="form-control py-4" name="name" type="text" placeholder="" />
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <div class="form-group">
                                        <label class="small mb-1" for="inputFirstName">User Email</label>
                                        <input class="form-control py-4" name="email" type="text" placeholder="" />
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <div class="form-group">
                                        <label class="small mb-1" for="inputLastName">Company</label>
                                        <input class="form-control py-4" name="company" type="text" placeholder="" />
                                    </div>
                                </div>

                                <div class="col-md-6">
                                    <div class="form-group">
                                        <label class="small mb-1" for="inputLastName">Address</label>
                                        <input class="form-control py-4" name="address" type="text" placeholder="" />
                                    </div>
                                </div>

                                <div class="col-md-6">
                                    <div class="form-group">
                                        <label class="small mb-1" for="inputLastName">Phone</label>
                                        <input class="form-control py-4" name="phone" type="text" placeholder="" />
                                    </div>
                                </div>
                            </div>

                            <div class="form-group mt-4 mb-0"><button class="btn btn-primary btn-block">Submit</button></div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
</main>

{{--  <script>
    $(document).ready(function(){
    $("#name").change(function() {
        var c_name = $("#name").val();
        console.log(c_name);
        $.ajax({
            type: 'POST',
            url: "http://127.0.0.1:8000/api/get-customer",
            dataType: 'json',
            data: {
                "id" : c_name
            },
            success: function(data) {
                console.log(data);
                $("#email").html('<label class="small mb-1" for="inputFirstName">Customer Email</label>');
                var x = '<input class="form-control py-4" name="email" value="'+data.customer.email+'" type="text"/>';
                $("#email").append(x);

                $("#company").html('<label class="small mb-1" for="inputFirstName">Customer company</label>');
                var x = '<input class="form-control py-4" name="company" value="'+data.customer.company+'" type="text"/>';
                $("#company").append(x);

                $("#phone").html('<label class="small mb-1" for="inputFirstName">Customer Phone</label>');
                var x = '<input class="form-control py-4" name="phone" value="'+data.customer.phone+'" type="text"/>';
                $("#phone").append(x);

                $("#address").html('<label class="small mb-1" for="inputFirstName">Customer Address</label>');
                var x = '<input class="form-control py-4" name="address" value="'+data.customer.address+'" type="text"/>';
                $("#address").append(x);
            }
        });
    });
    });
</script>  --}}
@endsection
