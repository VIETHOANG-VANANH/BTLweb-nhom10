<!-- home.blade.php -->
<h1>Chào mừng, {{ session('user.username') }}!</h1>
<P>Day ka trang dang ki</P>
<a href="{{ route('logout') }}">Đăng xuất</a>
