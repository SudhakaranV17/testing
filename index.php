<?php
$pageTitle = "Home Page"; // Define the page title
include __DIR__ . '/includes/parts/head.php'; // Include the common head section
?>

<body>
    <?php include __DIR__ . '/includes/parts/header.php'; ?>

    <div class="main">
        <h1 class="main-title">hello world javascript</h1>
    </div>
    <div id="g_id_onload" data-client_id="993797730483-v9gf8bgvcm3n1deau06lq10rua4rjegi.apps.googleusercontent.com" data-context="use" data-ux_mode="redirect" data-login_uri="http://localhost:3000/torch.php" data-callback="handleData" data-auto_prompt="false">
    </div>

    <div class="g_id_signin" data-type="standard" data-shape="pill" data-theme="outline" data-text="signin_with" data-size="large" data-locale="en-US" data-logo_alignment="left">
    </div>

    <?php include __DIR__ . '/includes/parts/footer.php'; ?>

</body>