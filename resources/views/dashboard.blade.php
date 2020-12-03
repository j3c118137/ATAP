@extends('layouts.navadmin')
@section('content')

        <div class="content">
            <div class="title">
                <svg>
                    <rect>
                </svg>
                <p>Dashboard</p>
            </div>
            
            <!--content card-->
            <div>
                <div class="card-deck">
                    <div class="card">
                      <div class="card-body">
                        <h5 class="card-title">View Total</h5>
                        <p class="card-text">167,931</p>
                        {{-- <p class="card-text inc">increased by <span>30%</span></p> --}}
                      </div>
                    </div>
                    <div class="card">
                      <div class="card-body">
                        <h5 class="card-title">Total Articles</h5>
                        <p class="card-text">7</p>
                        {{-- <p class="card-text inc">increased by <span>100%</span></p> --}}
                      </div>
                    </div>
                    <div class="card">
                      <div class="card-body">
                        <h5 class="card-title">Total Insight</h5>
                        <p class="card-text">185,453</p>
                        {{-- <p class="card-text inc">increased by <span>40%</span></p> --}}
                      </div>
                    </div>
                  </div>
            </div>

            <!--content table-->
            <div class="content-table">
                <div class="margin">
                    <div class="title">
                        <h5>Articles</h5>
                        <a href="{{route('add')}}"><button class="btn-green">Add New Article</button></a>
                    </div>
                    <table class="table table-borderless">
                        <thead>
                        <tr>
                            <th scope="col">Title</th>
                            <th scope="col">Date Post</th>
                            <th scope="col">Posted by</th>
                            <th scope="col">Views</th>
                            <th scope="col"></th>
                        </tr>
                        </thead>
                        <tbody>
                          @forelse($artikel as $data)
                          <tr>
                              <td>{{$data->judul}}</td>
                              <td>{{$data->created_at}}</td>
                              <td>{{$data->nama}}</td>
                              <td>{{$data->views}}</td>
                          <td><a href="{{route('delete',['id_artikel'=>$data->id_artikel])}}"><button class="btn-green">delete</button></a></td>
                              <td><a href="{{route('edit',['artikel'=>$data->id_artikel])}}"><button class="btn-green">EDIT</button></a></td>
                          </tr>
                          @empty
                              <td colspan="4" class="text-center">Data Mahasiswa Tidak Ada...</td>
                          @endforelse

                        </tbody>
                    </table>
                </div>
            </div>


        </div>
    </div>
</div>
@endsection
