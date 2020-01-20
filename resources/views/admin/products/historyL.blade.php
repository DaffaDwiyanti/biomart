@extends('layouts.admin.app')

@section('content')
    <!-- Main content -->
    <section class="content">
    @include('layouts.errors-and-messages')
    <!-- Default box -->
        @if(!$historyL->isEmpty())
            <div class="box">
                <div class="box-body">
                    <h2>History Logistik</h2>
                    @include('admin.shared.historyL')
                </div>
                <!-- /.box-body -->
            </div>
            <!-- /.box -->
        @endif

    </section>
    <!-- /.content -->
@endsection
