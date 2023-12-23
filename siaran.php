<?php
include('function.php');

$id = $_GET['id'];

$siaran = mysqli_query($conn, "SELECT * FROM saluran WHERE id = '$id'");

$siaran = mysqli_fetch_assoc($siaran);

$saluran = $siaran['ip'];
var_dump($saluran);

?>

<script>
    console.log('<?= $saluran ?>');
</script>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>halaman utama</title>
    <link rel="stylesheet" href="dist/output.css" />
</head>

<body class="bg-silver">
    <section id="home" class="bg-white">
        <div class="h-screen w-full">
            <div class="flex h-screen">
                <div class="px-2  w-full self-center">
                    <h1 class="pb-5 mx-auto text-4xl font-bold">Live Steram Bola</h1>

                    <video class="mx-auto w-full" id="channel" src="" controls></video>
                </div>
            </div>
        </div>
    </section>





    <script src="node_modules/hls.js/dist//hls.js"></script>
    <script>
        // channel 2
        document.addEventListener('DOMContentLoaded', function() {
            var videoElement = document.getElementById('channel')
            var hls = new Hls()

            // Cek apakah peramban mendukung HLS
            if (Hls.isSupported()) {
                hls.loadSource(
                    '<?= $saluran ?>'
                )
                hls.attachMedia(videoElement)
            } else if (videoElement.canPlayType('application/vnd.apple.mpegurl')) {
                videoElement.src =
                    '<?= $saluran ?>'
            }
        })
    </script>
</body>

</html>