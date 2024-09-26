<title><?= isset($title) ? $title : "DINH DEV" ?></title>
<!-- meta main -->
<meta name="description" content="<?= isset($meta_description) ? $meta_description : "blog tin tuc vu dinh" ?>">
<meta name="keywords" content="<?= isset($meta_keywords) ? $meta_keywords : "blog, tin tuc, vu dinh, lap trinh" ?>">
<meta name="robots" content="<?= isset($meta_robots) ? $meta_robots : "index, follow" ?>">
<!-- meta facebook -->
<meta property="og:title" content="<?= isset($meta_title) ? $meta_title : "Blog tin tức Vũ Định" ?>">
<meta property="og:description"
    content="<?= isset($meta_description) ? $meta_description : "Tin tức, kiến thức lập trình từ Vũ Định" ?>">
<meta property="og:image"
    content="<?= isset($meta_image) ? $meta_image : "https://example.com/path/to/default-image.jpg" ?>">
<meta property="og:url" content="<?= isset($meta_url) ? $meta_url : "https://example.com" ?>">
<meta property="og:type" content="<?= isset($meta_type) ? $meta_type : "website" ?>">
<!-- meta twitter -->
<meta name="twitter:card" content="summary_large_image">
<meta name="twitter:title" content="<?= isset($meta_title) ? $meta_title : "Blog tin tức Vũ Định" ?>">
<meta name="twitter:description"
    content="<?= isset($meta_description) ? $meta_description : "Tin tức và kiến thức lập trình được chia sẻ bởi Vũ Định" ?>">
<meta name="twitter:image"
    content="<?= isset($meta_image) ? $meta_image : "https://example.com/path/to/default-twitter-image.jpg" ?>">