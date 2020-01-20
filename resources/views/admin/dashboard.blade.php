
@extends('layouts.admin.app')

@section('content')
    <!-- Main content -->
    <section class="content">

        <!-- Default box -->
        <div class="box">
            <div class="box-header with-border">
                <h3 class="box-title">Omzet perMonth</h3>

                <div class="box-tools pull-right">
                    <button type="button" class="btn btn-box-tool" data-widget="collapse" data-toggle="tooltip" title="Collapse">
                        <i class="fa fa-minus"></i></button>
                    <button type="button" class="btn btn-box-tool" data-widget="remove" data-toggle="tooltip" title="Remove">
                        <i class="fa fa-times"></i></button>
                </div>
            </div>
            <div class="box-body"><div class="box">
                <div class="box-body">
                    <h2>Have a Nice Day!</h2>
                    <table class="table">
                        <thead>
                            <tr>
                                <td class="col-md-2">Month</td>
                                <td class="col-md-1">Omzet</td>
                            </tr>
                        </thead>
                        <tbody>
                        @foreach ($omzet as $c)
                            <tr>
                                <td>{{ $c->Month }}</td>
                                <td>{{ $c->Omzet }}</td>
                            </tr>
                        @endforeach
                        </tbody>
                    </table>
                </div>
                <!-- /.box-body -->
            </div>
            </div>
            <!-- /.box-body -->
            <div class="box-footer">
                Footer
            </div>
            <!-- /.box-footer-->
        </div>
        <!-- /.box -->

    </section>
    <!-- /.content -->
@endsection
