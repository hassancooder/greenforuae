<?php
include "includes/dbconfig.php";
include "includes/functions.php";
include INCLUDES . "routes.php";


$urlPath = parseUrl($_SERVER['REQUEST_URI']);
$pageKey = $urlPath[0] ?? '';


if (array_key_exists($pageKey, $routes)) {
    $pageDetails = $routes[$pageKey];
    // ob_start('compress_output');
    include INCLUDES . "public-layout.php";
    // ob_end_flush();
} elseif ($pageKey === API_SLUG) {
    $slug = $urlPath[1] ?? 'home';
    if ($pageKey === ADMIN_SLUG && array_key_exists($slug, $adminRoutes)) {
        session_start();
        if (!isset($_SESSION['loggedin']) || $_SESSION['loggedin'] !== true) {
            if ($slug !== "login") {
                header("location: /" . ADMIN_SLUG . "/login");
                exit;
            } else {
                $page = $slug;
            }
        } else {
            if ($slug === "login") {
                header("location: /" . ADMIN_SLUG . "/home");
                exit;
            } else {
                $page = $slug;
            }
        }

        $subPage = $urlPath[2] ?? '';
        $pageDetails = $adminRoutes[$page];
        // if (!in_array($urlPath[1], ['blogpost', 'addnewimage'])) {
        //     ob_start('compress_output');
        // }
        include INCLUDES . "admin-layout.php";
        // ob_end_flush();
    } elseif ($pageKey === API_SLUG && array_key_exists($slug, $apiRoutes)) {
        $endpoint = $slug;
        header("Content-Type: application/json");
        include API_ENDPOINTS . $apiRoutes[$slug];
    } else {
        header("Location: /404");
    }
} else {
    $pageDetails = $defaultRoute;
    // ob_start('compress_output');
    include INCLUDES . "public-layout.php";
    // ob_end_flush();
}
?>