<?php
declare(strict_types=1);

$page = "gallery";

$galleries = [
    "concrete-and-stone-work" => [
        "title" => "Concrete And Stone Work",
        "count" => 36, // live page exposes many images in this category
    ],
    "framing" => [
        "title" => "Framing",
        "count" => 2,
    ],
    "hardscape" => [
        "title" => "Hardscape",
        "count" => 6,
    ],
    "pool-builder" => [
        "title" => "Pool Builder",
        "count" => 30,
    ],
    "remodeling" => [
        "title" => "Remodeling",
        "count" => 0, // unknown / can be changed if images exist
    ],
];

$img = isset($_GET["img"]) ? trim((string)$_GET["img"]) : "";
$slug = array_key_exists($img, $galleries) ? $img : "";

$currentTitle = $slug !== "" ? $galleries[$slug]["title"] : "Gallery";
$pageTitle = $currentTitle . " | Buildscapes Construction Inc.";

$siteBase = "https://www.jrelitebuilders.com";
$galleryBasePath = $siteBase . "/assets/img/galleries";

function h(string $value): string
{
    return htmlspecialchars($value, ENT_QUOTES, "UTF-8");
}

function buildGalleryItems(string $siteBase, string $slug, int $count): array
{
    $items = [];

    if ($slug === "" || $count < 1) {
        return $items;
    }

    for ($i = 1; $i <= $count; $i++) {
        $src = rtrim($siteBase, "/") . "/assets/img/galleries/" . rawurlencode($slug) . "/" . $i . ".jpg";
        $items[] = [
            "src" => $src,
            "thumb" => $src,
            "alt" => ucwords(str_replace("-", " ", $slug)) . " " . $i,
            "caption" => ucwords(str_replace("-", " ", $slug)) . " #" . $i,
        ];
    }

    return $items;
}

$galleryItems = [];
if ($slug !== "") {
    $galleryItems = buildGalleryItems($siteBase, $slug, (int)$galleries[$slug]["count"]);
}

require __DIR__ . "/includes/header.php";
?>

<!-- Page Title -->
<div class="breadcumb-wrapper background-image" style="background-image: url('https://www.jrelitebuilders.com/assets/img/bg/breadcumb-bg.jpg');">
  <div class="container">
    <div class="breadcumb-content">
      <h1 class="breadcumb-title"><?php echo h($currentTitle); ?></h1>
      <ul class="breadcumb-menu">
        <li><a href="index.php">Home</a></li>
        <li><?php echo h($currentTitle); ?></li>
      </ul>
    </div>
  </div>
</div>

<style id="buildscapes-gallery-page-style">
  .bs-gallery-wrap {
    background: #f7f9fc;
  }

  .bs-gallery-intro {
    text-align: center;
    max-width: 760px;
    margin: 0 auto 40px;
  }

  .bs-gallery-nav {
    display: flex;
    flex-wrap: wrap;
    justify-content: center;
    gap: 12px;
    margin-bottom: 34px;
  }

  .bs-gallery-nav a {
    display: inline-flex;
    align-items: center;
    justify-content: center;
    min-height: 48px;
    padding: 12px 18px;
    border: 1px solid rgba(15, 23, 42, .12);
    background: #fff;
    color: #0f172a;
    font-weight: 700;
    transition: all .25s ease;
    box-shadow: 0 10px 24px rgba(15, 23, 42, .06);
  }

  .bs-gallery-nav a:hover,
  .bs-gallery-nav a:focus,
  .bs-gallery-nav a.is-active {
    background: var(--theme-color, #0f172a);
    color: #fff;
    border-color: var(--theme-color, #0f172a);
    transform: translateY(-2px);
  }

  .bs-gallery-summary {
    display: flex;
    align-items: center;
    justify-content: space-between;
    gap: 16px;
    flex-wrap: wrap;
    margin-bottom: 28px;
    padding: 20px 24px;
    background: #fff;
    border: 1px solid rgba(15, 23, 42, .08);
    box-shadow: 0 18px 42px rgba(15, 23, 42, .08);
  }

  .bs-gallery-summary h3 {
    margin: 0 0 6px;
    font-size: 28px;
    line-height: 1.15;
  }

  .bs-gallery-summary p {
    margin: 0;
    color: #5d6676;
  }

  .bs-gallery-count {
    display: inline-flex;
    align-items: center;
    justify-content: center;
    min-width: 88px;
    min-height: 54px;
    padding: 10px 16px;
    background: #0f172a;
    color: #fff;
    font-size: 13px;
    font-weight: 800;
    letter-spacing: .08em;
    text-transform: uppercase;
  }

  .bs-gallery-grid {
    display: grid;
    grid-template-columns: repeat(12, minmax(0, 1fr));
    gap: 24px;
  }

  .bs-gallery-item {
    grid-column: span 4;
  }

  .bs-gallery-card {
    position: relative;
    overflow: hidden;
    background: #fff;
    box-shadow: 0 18px 44px rgba(15, 23, 42, .10);
  }

  .bs-gallery-card a {
    position: relative;
    display: block;
    overflow: hidden;
    aspect-ratio: 1 / 1;
    background: #e8edf4;
  }

  .bs-gallery-card img {
    width: 100%;
    height: 100%;
    display: block;
    object-fit: cover;
    transition: transform .4s ease;
  }

  .bs-gallery-card a::before {
    content: "";
    position: absolute;
    inset: 0;
    background: linear-gradient(to top, rgba(0,0,0,.48), rgba(0,0,0,.08));
    opacity: 0;
    z-index: 1;
    transition: opacity .25s ease;
  }

  .bs-gallery-zoom {
    position: absolute;
    right: 16px;
    bottom: 16px;
    z-index: 2;
    width: 52px;
    height: 52px;
    display: inline-flex;
    align-items: center;
    justify-content: center;
    background: rgba(255,255,255,.95);
    color: #0f172a;
    font-size: 18px;
    opacity: 0;
    transform: translateY(8px);
    transition: all .25s ease;
    box-shadow: 0 10px 24px rgba(0,0,0,.18);
  }

  .bs-gallery-card a:hover img,
  .bs-gallery-card a:focus img {
    transform: scale(1.06);
  }

  .bs-gallery-card a:hover::before,
  .bs-gallery-card a:focus::before {
    opacity: 1;
  }

  .bs-gallery-card a:hover .bs-gallery-zoom,
  .bs-gallery-card a:focus .bs-gallery-zoom {
    opacity: 1;
    transform: translateY(0);
  }

  .bs-gallery-empty {
    padding: 46px 26px;
    text-align: center;
    background: #fff;
    border: 1px solid rgba(15, 23, 42, .08);
    box-shadow: 0 18px 42px rgba(15, 23, 42, .08);
  }

  .bs-gallery-empty h3 {
    margin: 0 0 10px;
    font-size: 30px;
    line-height: 1.2;
  }

  .bs-gallery-empty p {
    margin: 0;
    color: #5d6676;
  }

  @media (max-width: 1199px) {
    .bs-gallery-item {
      grid-column: span 6;
    }
  }

  @media (max-width: 767px) {
    .bs-gallery-item {
      grid-column: span 12;
    }

    .bs-gallery-summary {
      padding: 18px;
    }

    .bs-gallery-summary h3 {
      font-size: 24px;
    }
  }
</style>

<section class="space bs-gallery-wrap">
  <div class="container">
    <div class="title-area text-center">
      <span class="sub-title">Latest Projects</span>
      <h2 class="sec-title">Let's See Our Latest Projects</h2>
    </div>

    <div class="bs-gallery-nav">
      <?php foreach ($galleries as $gallerySlug => $galleryData): ?>
        <a
          href="gallery.php?img=<?php echo h($gallerySlug); ?>"
          class="<?php echo $slug === $gallerySlug ? 'is-active' : ''; ?>"
        >
          <?php echo h($galleryData["title"]); ?>
        </a>
      <?php endforeach; ?>
    </div>

    <?php if ($slug === ""): ?>
      <div class="bs-gallery-empty">
        <h3>Select a Gallery</h3>
        <p>Choose one of the gallery categories above to load its images.</p>
      </div>
    <?php elseif (empty($galleryItems)): ?>
      <div class="bs-gallery-empty">
        <h3>No Images Found</h3>
        <p>No images were found for this gallery category yet.</p>
      </div>
    <?php else: ?>
      <div class="bs-gallery-summary">
        <div>
          <h3><?php echo h($galleries[$slug]["title"]); ?></h3>
          <p>Click any image to open it in the site lightbox.</p>
        </div>
        <div class="bs-gallery-count">
          <?php echo (int)count($galleryItems); ?> Photos
        </div>
      </div>

      <div class="row gy-4 bs-gallery-grid popup-gallery">
        <?php foreach ($galleryItems as $item): ?>
          <div class="bs-gallery-item">
            <div class="bs-gallery-card">
              <a
                href="<?php echo h($item["src"]); ?>"
                title="<?php echo h($item["caption"]); ?>"
                class="popup-image"
              >
                <img
                  src="<?php echo h($item["thumb"]); ?>"
                  alt="<?php echo h($item["alt"]); ?>"
                  loading="lazy"
                  decoding="async"
                >
                <span class="bs-gallery-zoom">
                  <i class="fa-regular fa-magnifying-glass-plus"></i>
                </span>
              </a>
            </div>
          </div>
        <?php endforeach; ?>
      </div>
    <?php endif; ?>
  </div>
</section>

<script>
(function () {
  "use strict";

  // Highlight gallery menu item in header/mobile menu
  var currentSlug = <?php echo json_encode($slug, JSON_UNESCAPED_SLASHES | JSON_UNESCAPED_UNICODE); ?>;
  var exactGalleryHref = currentSlug ? ("gallery.php?img=" + currentSlug) : "gallery.php";

  document.querySelectorAll(".main-menu a, .th-mobile-menu a").forEach(function (link) {
    var href = (link.getAttribute("href") || "").trim();

    if (href === "gallery.php") {
      link.classList.add("active");
      var parent = link.closest("li");
      if (parent) {
        parent.classList.add("current-menu-item");
      }
    }

    if (href === exactGalleryHref) {
      link.classList.add("active");
    }
  });

  // Use existing Magnific Popup already loaded in footer.php
  if (window.jQuery && jQuery.fn && jQuery.fn.magnificPopup) {
    jQuery(".popup-gallery").magnificPopup({
      delegate: "a.popup-image",
      type: "image",
      gallery: {
        enabled: true
      },
      removalDelay: 180,
      mainClass: "mfp-fade"
    });
  }
})();
</script>

<?php require __DIR__ . "/includes/footer.php"; ?>