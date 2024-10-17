<link rel="shortcut icon" href="<?= getAsset('favicon.webp','images/');?>" type="image/x-icon">
<!-- Favicons End -->
<script src="<?= getAsset('fontawesome.js', 'js/'); ?>" crossorigin="anonymous"></script>
<link rel="stylesheet" href="<?= getAsset('inter-font.css', 'css/'); ?>">
<link rel="stylesheet" href="<?= getAsset('rubik-font.css', 'css/'); ?>">
<script src="<?= getAsset('tailwind.js', 'js/'); ?>"></script>
<script>
    tailwind.config = {
        theme: {
            extend: {
                colors: {
                    bgPrimary: "<?= $theme['bgPrimary']; ?>",
                    bgSecondary: "<?= $theme['bgSecondary']; ?>",
                    textPrimary: "<?= $theme['textPrimary']; ?>",
                    textSecondary: "<?= $theme['textSecondary']; ?>",
                    primary: "<?= $theme['primary']; ?>",
                    secondary: "<?= $theme['secondary']; ?>"

                },
            }
        }
    }
</script>
<link rel="stylesheet" href="<?= getAsset('custom.css', 'css/'); ?>">
<link rel="stylesheet" href="<?= getAsset('aos.css', 'css/'); ?>" />
<link
    rel="stylesheet"
    href="<?= getAsset('swiper-bundle.min.css', 'css/'); ?>" />