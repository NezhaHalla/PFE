<x-master :title="$user->name">
    <section style="background-color: #ffffff;">
        <div class="container py-5">
            <div class="row">
                <div class="col-lg-4">
                    <div class="card mb-4">
                        <div class="card-body text-center">
                            <img src="{{ asset('storage/'.$user->image) }}" alt="avatar" class="rounded-circle img-fluid img-square" style="width: 200px;height:200px;">
                            <h5 class="my-3">{{ $user->name }}</h5>
                            <p class="text-muted mb-1">{{ $user->role }} in ScholarNet</p>
                </div>
              </div>

            </div>
            <div class="col-lg-8">
              <div class="card mb-4">
                <div class="card-body">
                  <div class="row">
                    <div class="col-sm-3">
                      <p class="mb-0">Full Name</p>
                    </div>
                    <div class="col-sm-9">
                      <p class="text-muted mb-0">{{ $user->name }}</p>
                    </div>
                  </div>
                  <hr>
                  @if($user->role === "Student")
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
                      <p class="text-muted mb-0">{{ $user->email }}</p>
                    </div>
                  </div>
                  <hr>
                  <div class="row">
                    <div class="col-sm-3">
                      <p class="mb-0">Date Of Birth</p>
                    </div>
                    <div class="col-sm-9">
                      <p class="text-muted mb-0">{{ Str::limit($user->DateDeNaissance,11,'') }}</p>
                    </div>
                  </div>
                  <hr>
                  <div class="row">
                    <div class="col-sm-3">
                      <p class="mb-0">Gender</p>
                    </div>
                    <div class="col-sm-9">
                      <p class="text-muted mb-0">{{ $user->gender }}</p>
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