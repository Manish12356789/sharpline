@extends('layouts.admin')

@section('content')
    <div class="content-wrapper">
        <div class="page-header">
            <h3 class="page-title"> Frequency Controller </h3>
            <nav aria-label="breadcrumb">
                <ol class="breadcrumb">
                    <li class="breadcrumb-item active" aria-current="page">Book</li>
                </ol>
            </nav>
        </div>
        <div class="row">
            <div class="col-lg-12 grid-margin stretch-card">
                <div class="card">
                    <div class="card-body">
                        <h4 class="card-title">Frequency</h4>
                        <div class="table-responsive">
                            <table class="table table-striped">
                                <thead>
                                    <tr>
                                        <th>Title</th>
                                        <th>Rate </th>
                                        <th>Actions</th>

                                    </tr>
                                </thead>
                                <tbody>
                                    @foreach ($frequency as $frequency)
                                        
                                    <tr>
                                        <td>
                                            {{ $frequency->title }}
                                        </td>
                                        <td>{{ $frequency->rate }}</td>
                                        <td><a href="{{route('admin.book.frequency.edit', ['id'=>$frequency->id])}}"></a>
                                            <a href="{{route('admin.book.frequency.destroy', ['id'=>$frequency->id])}}"></a>
                                        </td>
                                    </tr>
                                    @endforeach

                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

@endsection
