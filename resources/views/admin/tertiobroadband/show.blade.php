@extends('layouts.master')
@section('title')
Show Broadband
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
                            <h5>Job Detail</h5>
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
                    <div class="row">
                        <div class="col-lg-6">
                            <table class="table table-responsive table-bordered  table-hover ">
                                <tbody>
                                    <tr>
                                        <th>Broadband username</th>
                                        <td>{{ $tertiobroadband->username }}</td>
                                    </tr>
                                    <tr>
                                        <th>Password</th>
                                        <td>{{ $tertiobroadband->Password }}</td>
                                    </tr>
                                    <tr>
                                        <th>Service Name</th>
                                        <td>{{ $tertiobroadband->serviceName }}</td>
                                    </tr>
                                    <tr>
                                        <th>Broadband status</th>
                                        <td>{{ $tertiobroadband->status }}</td>
                                    </tr>
                                    <tr>
                                        <th>Serial No</th>
                                        <td>{{ $tertiobroadband->serialNo }}</td>
                                    </tr>
                                    <tr>
                                        <th>VOIP No</th>
                                        <td>{{ $tertiobroadband->voipNo }}</td>
                                    </tr>
                                    <tr>
                                        <th>Template ID</th>
                                        <td>{{ $tertiobroadband->templateId }}</td>
                                    </tr>
                                    <tr>
                                        <th>vlaninternet</th>
                                        <td>{{ $tertiobroadband->vlaninternet }}</td>
                                    </tr>
                                    <tr>
                                        <th>vlanmgt</th>
                                        <td>{{ $tertiobroadband->vlanmgt }}</td>
                                    </tr>
                                    <tr>
                                        <th>vlanvoip</th>
                                        <td>{{ $tertiobroadband->vlanvoip }}</td>
                                    </tr>
                                    <tr>
                                        <th>vlaniptv</th>
                                        <td>{{ $tertiobroadband->vlaniptv }}</td>
                                    </tr>
                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        </div>
    </section>
</div>
@endsection
