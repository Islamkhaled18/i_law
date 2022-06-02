@if(Session::has('success'))
    <div class="row mr-2 ml-2">
            <button type="text" class="btn btn-lg btn-block btn-outline-success mb-2"
                    id="type-error">{{Session::get('success')}}
            </button>
    </div>
        <script>
                $(window).on('load', function () {
                        // On load Toast
                        setTimeout(function () {
                        toastr['success'](
                        '{{Session::get("success")}}',
                        'تم بنجاح',
                        {
                        closeButton: true,
                        tapToDismiss: false,
                        rtl: isRtl
                        }
                        );
                        }, 2000);
                }); 
        </script>     
@endif

