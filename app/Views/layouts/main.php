<!DOCTYPE html>
<html lang="en">

<head>

    <meta charset="UTF-8">

    <meta
        name="viewport"
        content="width=device-width, initial-scale=1.0"
    >

    <title><?= $title ?? 'Client Dashboard' ?></title>

    <link
        rel="stylesheet"
        href="<?= base_url('assets/css/style.css') ?>"
    >

</head>

<body>

    <aside class="sidebar">

        <div class="brand">

            <div class="brand-mark">
                W
            </div>

            <div>
                <strong>Web Portal</strong>
                <span>Client Dashboard</span>
            </div>

        </div>


        <nav>

            <a href="/">
                Dashboard
            </a>

            <a href="/website">
                Website
            </a>

            <a href="/credentials">
                Credentials
            </a>

            <a href="/reports">
                Monthly Reports
            </a>

            <a href="/documents">
                Documents
            </a>

            <a href="/maintenance">
                Maintenance
            </a>

        </nav>


        <div class="sidebar-bottom">

            <a href="#">
                Support
            </a>

            <a href="#">
                Logout
            </a>

        </div>

    </aside>


    <main class="main">

        <?= $this->renderSection('content') ?>


        <footer>
            © 2026 Web Portal · Client Website Dashboard
        </footer>

    </main>

</body>

</html>