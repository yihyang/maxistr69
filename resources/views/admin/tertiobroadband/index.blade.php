@extends('layouts.master')
@section('title')
Broadband List
@endsection
@section('content')
<div class="content-wrapper">
    <section class="content">
        <div class="row">
        <div class="col-lg-12">
            <div class="ibox float-e-margins">
                <div class="ibox-title">
                    <div class="row">
                        <div class="col-lg-2">
                            <h5>Maxis One</h5>
                        </div>
                        <div class="col-lg-10">
                            <div class="ibox-tools">
                                <div class="row">
                                    <div class="col-lg-3">
                                        @if (Session::has('message'))
                                          <div class="text-success">{{ Session::get('message') }}</div>
                                        @endif
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="ibox-content">
                    <table class="table table-responsive table-bordered  table-hover jobListTable">
                        <thead>
                        <tr>
                            <th class="text-center">ID</th>
                            <th class="text-center">Username</th>
                            <th class="text-center">Service</th>
                            <th class="text-center">Serial No</th>
                            <th class="text-center">VOIP No</th>
                            <th class="text-center">Status</th>
                            <th class="text-center">Action</th>
                        </tr>
                        </thead>
                        <tbody>
                            @foreach ($tertiobroadbands as $tertiobroadband)
                                <tr>
                                    <td class="text-center">{{ $tertiobroadband->id }}</td>
                                    <td class="text-center">{{ $tertiobroadband->username }}</td>
                                    <td class="text-center">{{ $tertiobroadband->serviceName }}</td>
                                    <td class="text-center">{{ $tertiobroadband->serialNo }}</td>
                                    <td class="text-center">{{ $tertiobroadband->voipNo}}</td>
                                    <td class="text-center">{{ $tertiobroadband->status }}</td>
                                    <td class="text-center">
                                      <a href="{{ URL::to('admin/broadband/show/'.$tertiobroadband->id) }}" class="btn btn-sm btn-success">
                                        <i class="fa fa-eye"></i> View
                                      </a>
                                    </td>
                                </tr>
                            @endforeach
                        </tbody>
                    </table>
                    <div class="box-footer clearfix">
                    </div>

                    <script>
                        $('.jobListTable').DataTable({
                            select: true
                        });
                    </script>

                </div>
            </div>
        </div>
        </div>
    </section>
</div>
@endsection
