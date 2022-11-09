<div class="col-md-2 bg-dark mt-2 pr-3 pt-4">
    @if(strtolower(Auth::user()->role) == 'admin')
        <ul class="nav flex-column ml-3 mb-5">
            <li class="nav-item">
                <a class="nav-link active text-white" aria-current="page" href={{ url("dashboard") }}><i class="fas fa-tachometer-alt mr-2"></i> Dashboard</a><hr class="bg-secondary">
            </li>
            <li class="nav-item">
                <a class="nav-link text-white" href={{ url("user") }}><i class="fas fa-user-cog mr-2"></i> User</a><hr class="bg-secondary">
            </li>
            <li class="nav-item">
                <a class="nav-link text-white" href={{ url("po") }}><i class="fas fa-file-alt mr-2"></i> Purchase Order</a><hr class="bg-secondary">
            </li>
            <li class="nav-item">
                <a class="nav-link text-white" href={{ url("ap") }}><i class="fas fa-file-alt mr-2"></i> Account Payable</a><hr class="bg-secondary">
            </li>
            <li class="nav-item">
                <a class="nav-link text-white" href={{ url("payment") }}><i class="fas fa-cash-register mr-2"></i> Payment</a><hr class="bg-secondary">
            </li>
            <li class="nav-item">
                <a class="nav-link text-white" href={{ url("report") }}><i class="fas fa-file-invoice mr-2"></i> Report</a><hr class="bg-secondary">
            </li>
            <li class="nav-item has-submenu">
                <a class="nav-link text-white" href={{ url("setting") }}> 
                    <i class="fas fa-cog mr-2"></i> Setting
                </a>
                <ul class="submenu collapse">
                    <li><a class="nav-link text-white" href={{ url('setting/vendor') }}>Vendor </a></li>
                    <li><a class="nav-link text-white" href="http://localhost:8000/setting/wh">Warehouse </a></li>
                </ul>
            </li>
        </ul>
    @elseif(strtolower(Auth::user()->role) == 'manager')
        @if(strtolower(Auth::user()->position) == 'accounting')
            <ul class="nav flex-column ml-3 mb-5">
                <li class="nav-item">
                    <a class="nav-link active text-white" aria-current="page" href={{ url("dashboard") }}><i class="fas fa-tachometer-alt mr-2"></i> Dashboard</a><hr class="bg-secondary">
                </li>
                <li class="nav-item">
                    <a class="nav-link text-white" href={{ url("ap") }}><i class="fas fa-file-alt mr-2"></i> Account Payable</a><hr class="bg-secondary">
                </li>
                <li class="nav-item">
                    <a class="nav-link text-white" href={{ url("payment") }}><i class="fas fa-cash-register mr-2"></i> Payment</a><hr class="bg-secondary">
                </li>
                <li class="nav-item">
                    <a class="nav-link text-white" href={{ url("report") }}><i class="fas fa-file-invoice mr-2"></i> Report</a><hr class="bg-secondary">
                </li>
            </ul>
        @else
            <ul class="nav flex-column ml-3 mb-5">
                <li class="nav-item">
                    <a class="nav-link active text-white" aria-current="page" href={{ url("dashboard") }}><i class="fas fa-tachometer-alt mr-2"></i> Dashboard</a><hr class="bg-secondary">
                </li>
                <li class="nav-item">
                    <a class="nav-link text-white" href={{ url("po") }}><i class="fas fa-file-alt mr-2"></i> Purchase Order</a><hr class="bg-secondary">
                </li>
                <li class="nav-item has-submenu">
                    <a class="nav-link text-white" href={{ url("setting") }}> 
                        <i class="fas fa-cog mr-2"></i> Setting
                    </a>
                    <ul class="submenu collapse">
                        <li><a class="nav-link text-white" href={{ url('setting/vendor') }}>Vendor </a></li>
                        <li><a class="nav-link text-white" href="http://localhost:8000/setting/wh">Warehouse </a></li>
                    </ul>
                </li>
            </ul>
        @endif
    @else
        @if(strtolower(Auth::user()->position) == 'accounting')
            <ul class="nav flex-column ml-3 mb-5">
                <li class="nav-item">
                    <a class="nav-link active text-white" aria-current="page" href={{ url("dashboard") }}><i class="fas fa-tachometer-alt mr-2"></i> Dashboard</a><hr class="bg-secondary">
                </li>
                <li class="nav-item">
                    <a class="nav-link text-white" href={{ url("ap") }}><i class="fas fa-file-alt mr-2"></i> Account Payable</a><hr class="bg-secondary">
                </li>
                <li class="nav-item">
                    <a class="nav-link text-white" href={{ url("payment") }}><i class="fas fa-cash-register mr-2"></i> Payment</a><hr class="bg-secondary">
                </li>
            </ul>
        @else
            <ul class="nav flex-column ml-3 mb-5">
                <li class="nav-item">
                    <a class="nav-link active text-white" aria-current="page" href={{ url("dashboard") }}><i class="fas fa-tachometer-alt mr-2"></i> Dashboard</a><hr class="bg-secondary">
                </li>
                <li class="nav-item">
                    <a class="nav-link text-white" href={{ url("po") }}><i class="fas fa-file-alt mr-2"></i> Purchase Order</a><hr class="bg-secondary">
                </li>
                <li class="nav-item has-submenu">
                    <a class="nav-link text-white" href={{ url("setting") }}> 
                        <i class="fas fa-cog mr-2"></i> Setting
                    </a>
                    <ul class="submenu collapse">
                        <li><a class="nav-link text-white" href={{ url('setting/vendor') }}>Vendor </a></li>
                        <li><a class="nav-link text-white" href="http://localhost:8000/setting/wh">Warehouse </a></li>
                    </ul>
                </li>
            </ul>
        @endif
    @endif
</div>

<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>
<script src={{ asset('/js/scripts.js') }}></script>