<?php
// Replace these paths with your own images. Paths can be local or remote URLs.
$images = [
    ['src' => 'file:///C:/Users/Rachit%20bhai/OneDrive/%E7%94%BB%E5%83%8F/lock-404662.jpg, 'alt' => 'Mountain lake'],
    ['src' => 'https://images.unsplash.com/photo-1470770841072-f978cf4d019e?auto=format&fit=crop&w=1600&q=85', 'alt' => 'Forest cabin'],
    ['src' => 'https://images.unsplash.com/photo-1507525428034-b723cf961d3e?auto=format&fit=crop&w=1600&q=85', 'alt' => 'Beach at sunset'],
];
?>
<!doctype html>
<html lang="en">
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title>PHP Image Slider</title>
  <style>
    * { box-sizing: border-box; }
    body { margin: 0; min-height: 100vh; display: grid; place-items: center; background: #0f172a; font-family: Arial, sans-serif; }
    .slider { position: relative; width: min(900px, 92vw); overflow: hidden; border-radius: 16px; box-shadow: 0 18px 50px rgba(0,0,0,.35); }
    .slides { display: flex; transition: transform .55s ease; }
    .slide { min-width: 100%; aspect-ratio: 16 / 9; }
    .slide img { width: 100%; height: 100%; object-fit: cover; display: block; }
    .arrow { position: absolute; top: 50%; transform: translateY(-50%); border: 0; width: 44px; height: 44px; border-radius: 50%; background: rgba(15,23,42,.7); color: white; font-size: 28px; cursor: pointer; }
    .arrow:hover { background: rgba(15,23,42,.95); }
    .previous { left: 14px; } .next { right: 14px; }
    .dots { position: absolute; bottom: 14px; left: 50%; transform: translateX(-50%); display: flex; gap: 9px; }
    .dot { width: 10px; height: 10px; padding: 0; border: 0; border-radius: 50%; background: rgba(255,255,255,.55); cursor: pointer; }
    .dot.active { background: white; transform: scale(1.25); }
  </style>
</head>
<body>
  <?php if ($images): ?>
    <section class="slider" aria-label="Image gallery">
      <div class="slides">
        <?php foreach ($images as $image): ?>
          <div class="slide"><img src="<?= htmlspecialchars($image['src']) ?>" alt="<?= htmlspecialchars($image['alt']) ?>"></div>
        <?php endforeach; ?>
      </div>
      <button class="arrow previous" aria-label="Previous image">&#8249;</button>
      <button class="arrow next" aria-label="Next image">&#8250;</button>
      <div class="dots" aria-label="Select image">
        <?php foreach ($images as $index => $image): ?>
          <button class="dot<?= $index === 0 ? ' active' : '' ?>" aria-label="Show image <?= $index + 1 ?>"></button>
        <?php endforeach; ?>
      </div>
    </section>
  <?php endif; ?>

  <script>
    const slides = document.querySelector('.slides');
    const dots = [...document.querySelectorAll('.dot')];
    const total = dots.length;
    let current = 0, timer;

    function showSlide(index) {
      current = (index + total) % total;
      slides.style.transform = `translateX(-${current * 100}%)`;
      dots.forEach((dot, i) => dot.classList.toggle('active', i === current));
    }
    function restartAutoplay() {
      clearInterval(timer);
      timer = setInterval(() => showSlide(current + 1), 5000);
    }
    document.querySelector('.previous').addEventListener('click', () => { showSlide(current - 1); restartAutoplay(); });
    document.querySelector('.next').addEventListener('click', () => { showSlide(current + 1); restartAutoplay(); });
    dots.forEach((dot, i) => dot.addEventListener('click', () => { showSlide(i); restartAutoplay(); }));
    restartAutoplay();
  </script>
</body>
</html>