<!DOCTYPE html>
<html>
<head>
    <title>404</title>
</head>
<div style="text-align: center">
    <h2>Halaman Tidak Ditemukan</h2>
    <h3 style="font-weight: lighter">
        Mengalihkan ke <a href="/">halaman utama</a> dalam <span id="time">10</span> detik.
    </h3>
</div>
<script>
    function startTimer(duration, display) {
        var timer = duration, minutes, seconds;
        var end = setInterval(function () {
            seconds = timer;
            seconds = seconds < 10 ? "0" + seconds : seconds;
            display.textContent = seconds;
            if (--timer < 0) {
                window.location = "/";
                clearInterval(end);
            }
        }, 1000);
    }

    window.onload = function () {
        var seconds = 9,
            display = document.querySelector('#time');
        startTimer(seconds, display);
    };
</script>
</html>