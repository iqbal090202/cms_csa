<div class="row">
    <div class="col-12">
        <div class="card mb-4">
            <div class="card-header pb-0">
                <h6>Program Kerja</h6>
            </div>
            <div class="card-body px-0 pt-0 pb-2">
            <div class="table-responsive p-0">
                <table class="table align-items-center mb-0">
                <thead>
                    <tr>
                    <th class="text-center text-uppercase text-secondary text-xxs font-weight-bolder opacity-7">Judul Proker</th>
                    <th class="text-center text-uppercase text-secondary text-xxs font-weight-bolder opacity-7">Deskripsi</th>
                    <th class="text-secondary opacity-7"></th>
                    </tr>
                </thead>
                <tbody>
                @foreach ($data as $workplan)
                    <tr>
                    <!-- <td>
                        <div class="d-flex px-2 py-1">
                        <div>
                            <img src="../assets/img/team-2.jpg" class="avatar avatar-sm me-3">
                        </div>
                        <div class="d-flex flex-column justify-content-center">
                            <h6 class="mb-0 text-sm">John Michael</h6>
                            <p class="text-xs text-secondary mb-0">john@creative-tim.com</p>
                        </div>
                        </div>
                    </td> -->
                    <td class="align-middle text-center">
                        <p class="text-xs font-weight-bold mb-0">{{$workplan->plan}}</p>
                    </td>
                    <!-- <td class="align-middle text-center text-sm">
                        <span class="badge badge-sm bg-gradient-success">Online</span>
                    </td> -->
                    <td class="">
                        <span class="text-secondary text-xs font-weight-bold">{{$workplan->description}}</span>
                    </td>
                    <td class="align-middle">
                        <a href="javascript:;" class="text-secondary font-weight-bold text-xs" data-toggle="tooltip" data-original-title="Edit user">
                        Edit
                        </a>
                    </td>
                    </tr>
                <!-- @endforeach -->
                </tbody>
                </table>
            </div>
            </div>
        </div>
        </div>
    </div>
</div>