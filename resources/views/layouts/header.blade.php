<nav class="navbar navbar-expand-lg navbar-light bg-primary fixed-top">
    <div class="container-fluid">
        <a class="navbar-brand text-white"><i class="fas fa-user"></i> WELCOME <?php echo ucfirst(Auth::user()->role) . ' ' . ucfirst(Auth::user()->position); ?> | PT BANGUN PRIMA ABADI</a>
        <a href="http://localhost:8000/logout/" class="btn btn-primary mt-3" role="button"><i class="fas fa-sign-out-alt mr-2"></i> Logout</a>
    </div>
</nav>