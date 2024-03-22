<x-master title="My Account">
    <section style="background-color: #ffffff;">
        <div class="container py-5">
            <div class="row">
                <div class="col-lg-4">
                    <div class="card mb-4">
                        <div class="card-body text-center">
                            <img src="{{ asset('storage/'.auth()->user()->image) }}" alt="avatar" class="rounded-circle img-fluid img-square" style="width: 200px;height:200px">
                            <h5 class="my-3">{{ auth()->user()->name }}</h5>
                            <p class="text-muted mb-1">{{ auth()->user()->role }} in ScholarNet</p>
                </div>
              </div>

            @if(auth()->user()->role === "Student")
            <div class="card mb-4 mb-lg-0">
                <div class="card-body p-0">
                  <ul class="list-group list-group-flush rounded-3">
                    <li class="list-group-item d-flex justify-content-between align-items-center p-3">
                        <button type="button" class="btn btn-primary" style="width: 100%; height:100%;">My Saved Courses</button>
                    </li>
                    <li class="list-group-item d-flex justify-content-between align-items-center p-3">
                        <button type="button" class="btn btn-primary" style="width: 100%; height:100%;">My Submitted Assignments</button>
                    </li>
                    <li class="list-group-item d-flex justify-content-between align-items-center p-3">
                        <a href="{{ route('password.show') }}" type="button" class="btn btn-primary" style="width: 100%; height:100%;">Modify Password</a>
                    </li>
                    <li class="list-group-item d-flex justify-content-between align-items-center p-3">
                        <a href="{{ route('logout') }}" type="button" class="btn btn-danger" style="width: 100%; height:100%;" >Exit</a>
                    </li>
                  </ul>
                </div>
              </div>
            @endif

            @if(auth()->user()->role === "Teacher")
            <div class="card mb-4 mb-lg-0">
                <div class="card-body p-0">
                  <ul class="list-group list-group-flush rounded-3">
                    <li class="list-group-item d-flex justify-content-between align-items-center p-3">
                        <a href="{{ route('MyCourses') }}"type="button" class="btn btn-primary" style="width: 100%; height:100%;">My Courses</a>

                    </li>
                    <li class="list-group-item d-flex justify-content-between align-items-center p-3">
                        <a href="{{ route('Assignmentt') }}" type="button" class="btn btn-primary" style="width: 100%; height:100%;">My Assignments</a>

                    </li>
                    <li class="list-group-item d-flex justify-content-between align-items-center p-3">
                        <a href="{{ route('password.show') }}" type="button" class="btn btn-primary" style="width: 100%; height:100%;">Modify Password</a>
                    </li>
                    <li class="list-group-item d-flex justify-content-between align-items-center p-3">
                        <a href="{{ route('logout') }}" type="button" class="btn btn-danger" style="width: 100%; height:100%;" >Exit</a>
                    </li>
                  </ul>
                </div>
              </div>
            @endif

            @if(auth()->user()->role === "Admin")
            <div class="card mb-4 mb-lg-0">
                <div class="card-body p-0">
                  <ul class="list-group list-group-flush rounded-3">
                    </li>
                    <li class="list-group-item d-flex justify-content-between align-items-center p-3">
                        <a href="{{ route('password.show') }}" type="button" class="btn btn-primary" style="width: 100%; height:100%;">Modify Password</a>
                    </li>
                    <li class="list-group-item d-flex justify-content-between align-items-center p-3">
                        <a href="{{ route('logout') }}" type="button" class="btn btn-danger" style="width: 100%; height:100%;" >Exit</a>
                    </li>
                  </ul>
                </div>
              </div>
            @endif



            </div>
            <div class="col-lg-8">
              <div class="card mb-4">
                <div class="card-body">
                  <div class="row">
                    <div class="col-sm-3">
                      <p class="mb-0">Full Name</p>
                    </div>
                    <div class="col-sm-9">
                      <p class="text-muted mb-0">{{ auth()->user()->name }}</p>
                    </div>
                  </div>
                  <hr>
                  @if(auth()->user()->role === "Student")
                  <div class="row">
                    <div class="col-sm-3">
                      <p class="mb-0">Class</p>
                    </div>
                    <div class="col-sm-9">
                      <p class="text-muted mb-0">Study {{$class->Branch}}, In {{$class->Level}}</p>
                    </div>
                  </div>
                  <hr>
                  @endif
                  <div class="row">
                    <div class="col-sm-3">
                      <p class="mb-0">Email</p>
                    </div>
                    <div class="col-sm-9">
                      <p class="text-muted mb-0">{{ auth()->user()->email }}</p>
                    </div>
                  </div>
                  <hr>
                  <div class="row">
                    <div class="col-sm-3">
                      <p class="mb-0">Date Of Birth</p>
                    </div>
                    <div class="col-sm-9">
                      <p class="text-muted mb-0">{{ Str::limit(auth()->user()->DateDeNaissance,11,'') }}</p>
                    </div>
                  </div>
                  <hr>
                  <div class="row">
                    <div class="col-sm-3">
                      <p class="mb-0">Gender</p>
                    </div>
                    <div class="col-sm-9">
                      <p class="text-muted mb-0">{{ auth()->user()->gender }}</p>
                    </div>
                  </div>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
      </section>
</x-master>
