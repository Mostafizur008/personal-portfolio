@extends('backend.main-section.body.main')
@section('main')

<div class="nk-content ">
    <div class="container-fluid">
        <div class="nk-content-inner">
            <div class="nk-content-body">
                <div class="components-preview wide-md mx-auto">
                    <div class="nk-block nk-block-lg">
                        <div class="card card-bordered card-preview">
                            <div class="card-inner">
                                <div class="nk-block-head">
                                    <div class="nk-block-head-content" align="right">
                                        <a href="{{route('sk.add')}}" class="btn btn-primary">Add Skill</a>
                                    </div>
                                </div>
                                <table class="datatable-init table">
                                    <thead>
                                        <tr>
                                            <th>Sl</th>
                                            <th>Coding Name</th>
                                            <th>Parsent (%)</th>
                                            <th>Design Name</th>
                                            <th>Parsent (%)</th>
                                            <th>Action</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        @foreach ($allData as $key => $sk)
                                        @foreach ($dg as $key => $sl)
                                        <tr>
                                            <td>{{$key+1}}</td>
                                            <td>{{$sk->name}}</td>
                                            <td>{{$sk->parsent}}</td>
                                            <td>{{$sl->dname}}</td>
                                            <td>{{$sl->dparsent}}</td>
                                            <td align="center">
                                                <a href="{{route('sk.edit',$sk->id)}}" class="btn btn-xs btn-primary"><em class="icon ni ni-edit"></em></a>
                                                <a href="{{route('sk.delete',$sk->id)}}" class="btn btn-xs btn-danger"><em class="icon ni ni-trash"></em></a>
                                            </td>
                                        </tr>
                                        @endforeach
                                        @endforeach
                                    </tbody>
                                </table>
                            </div>
                        </div><!-- .card-preview -->
                    </div> <!-- nk-block -->
                </div><!-- .components-preview -->
            </div>
        </div>
    </div>
</div>
@endsection