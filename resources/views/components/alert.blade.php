<div>
    <div>
        @if($errors->has('file') )

            <div class="alert alert-danger text-center" role="alert">
                {{ $errors->first('file') }}
            </div>

        @elseif(session('success'))

            <div class="alert alert-success text-center" role="alert">
                {{session("success")}}
            </div>

        @endif
    </div>
</div>
