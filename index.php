<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Nuit de L'info</title>
    <link rel="stylesheet" href="./assert/index.css">
    <style>
        .random-image {
            position: absolute;
            width: 20px;
            height: 20px;
            transition: all 0.3s;
        }
    </style>
</head>
<body>
  <header>
    <h1>Nuit de l'informatique 2024</h1>
    <h2>Ctrl + Alt + Elite</h2>
  </header>

  <main>
    <section class="buttons">
      <a href="ordi.php" class="button">Version PC</a>
      <a href="mobile.php" class="button">Version mobile</a>
      <a href="podcast.php" class="button">Podcast</a>
    </section>

    <section class="github-link">
      <p>Defi : the worst code ever</p>
      <a href="https://github.com/ChickenNuggetsK/AUR-Helper-" target="_blank">Github Repo</a>
    </section>

    <section class="credits">
      <h3>Credits</h3>
      <ul>
        <li>Pierre Mittelbronn</li>
        <li>Thibault Ponsot</li>
        <li>Timéo Sand</li>
        <li>Alexis Trinon</li>
        <li>Eneal Merle</li>
        <li>Laurick Spahn-Eigner</li>
      </ul>
    </section>
  </main>

  <a href="https://www.youtube.com/watch?v=FtutLA63Cp8"><img id="randomImage" class="random-image" src="./assert/logo.png" alt="Random Icon"></a>

  <script>
      function positionRandomImage() {
          const img = document.getElementById("randomImage");
          const viewportWidth = window.innerWidth;
          const viewportHeight = window.innerHeight;

          const randomX = Math.random() * (viewportWidth - 60);
          const randomY = Math.random() * (viewportHeight - 60);

          img.style.left = `${randomX}px`;
          img.style.top = `${randomY}px`;
      }

      window.onload = positionRandomImage;
  </script>
</body>
</html>
