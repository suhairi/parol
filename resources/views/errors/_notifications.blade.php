<div class="row">
    <div class="col-xs-12">
        @if(Session::has('success'))
            <div class="alert alert-success">{{ Session::get('success') }}</div>
        @endif

        @if(Session::has('error'))
            <div class="alert alert-success">{{ Session::get('success') }}</div>
        @endif
    </div>
</div>