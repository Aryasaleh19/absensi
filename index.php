<?php
include('function.php');
?>

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
        <div class="px-2 w-full self-center">
          <h1 class="mx-auto text-4xl font-bold">Live Steram Bola</h1>
          <p class="font-semibold pb-2">
            Selamat Datang di Live
            <span class="text-hijau font-bold">Streamming bola</span>
          </p>
          <button class="px-2 cursor-pointer bg-biru py-2 rounded-md hover:bg-slate-700">
            <a href="#channel" class="text-white">Lihat Siaran</a>
          </button>
        </div>
      </div>
    </div>
  </section>

  <section id="channel ">
    <div class="w-full text-black pb-10">
      <h1 class="text-center text-4xl font-bold py-5">Channel</h1>
      <p class="px-2 text-lg">
        Silahkan pilih Channel yang anda ingin nonton bokep
      </p>
    </div>
    <div class="w-full flex flex-wrap gap-2 pb-2">

      <?php foreach ($siaran as $row) : ?>
        <div class="card bg-hijau rounded-md h-32 w-48 mx-auto">
          <a href="siaran.php?id=<?= $row['id'] ?>">
            <h1 class="px-2 pt-2 text-gray-300 font-semibold"><?= $row['nama']; ?></h1>
            <img src="img/<?= $row['foto'] ?> " class="mx-auto w-40" alt="" />
          </a>
        </div>
      <?php endforeach; ?>
    </div>
  </section>

  <!-- <video id="myVideo" src="" controls></video>

    <video id="channel2" src="" controls></video> -->
  <script src="node_modules/hls.js/dist//hls.js"></script>
  <script>
    document.addEventListener('DOMContentLoaded', function() {
      var videoElement = document.getElementById('myVideo')
      var hls = new Hls()

      // Cek apakah peramban mendukung HLS
      if (Hls.isSupported()) {
        hls.loadSource(
          'https://admdn5.cdn.mangomolo.com/adsports2/smil:adsports2.stream.smil/playlist.m3u8'
        )
        hls.attachMedia(videoElement)
      } else if (videoElement.canPlayType('application/vnd.apple.mpegurl')) {
        videoElement.src =
          'https://admdn5.cdn.mangomolo.com/adsports2/smil:adsports2.stream.smil/playlist.m3u8'
      }
    })

    // channel 2
    document.addEventListener('DOMContentLoaded', function() {
      var videoElement = document.getElementById('channel2')
      var hls = new Hls()

      // Cek apakah peramban mendukung HLS
      if (Hls.isSupported()) {
        hls.loadSource(
          'https://dmitwlvvll.cdn.mangomolo.com/dubaisportshd/smil:dubaisportshd.smil/index.m3u8'
        )
        hls.attachMedia(videoElement)
      } else if (videoElement.canPlayType('application/vnd.apple.mpegurl')) {
        videoElement.src =
          'https://dmitwlvvll.cdn.mangomolo.com/dubaisportshd/smil:dubaisportshd.smil/index.m3u8'
      }
    })
  </script>
</body>

</html>