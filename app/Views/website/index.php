<?= $this->extend('layouts/main') ?>

<?= $this->section('content') ?>

<header class="topbar">

    <div>

        <p class="eyebrow">
            WEBSITE
        </p>

        <h1>
            Website Information
        </h1>

        <p class="muted">
            Information and details about your website.
        </p>

    </div>

    <div class="profile">
        AC
    </div>

</header>


<section class="content-grid">

    <div class="card">

        <div class="section-head">

            <div>

                <p class="eyebrow">
                    WEBSITE DETAILS
                </p>

                <h2>
                    Website Information
                </h2>

            </div>

        </div>


        <div class="info-list">

            <div>
                <span>Website URL</span>

                <strong>
                    www.example.com
                </strong>
            </div>


            <div>
                <span>Platform</span>

                <strong>
                    WordPress
                </strong>
            </div>


            <div>
                <span>Theme</span>

                <strong>
                    Custom Theme
                </strong>
            </div>


            <div>
                <span>SSL</span>

                <strong class="good">
                    Active
                </strong>
            </div>


            <div>
                <span>Website Status</span>

                <strong class="good">
                    Online
                </strong>
            </div>

        </div>

    </div>


    <div class="card">

        <div class="section-head">

            <div>

                <p class="eyebrow">
                    DOMAIN
                </p>

                <h2>
                    Domain Information
                </h2>

            </div>

        </div>


        <div class="info-list">

            <div>
                <span>Domain</span>

                <strong>
                    example.com
                </strong>
            </div>


            <div>
                <span>Registrar</span>

                <strong>
                    Hostinger
                </strong>
            </div>


            <div>
                <span>Registration</span>

                <strong>
                    June 15, 2025
                </strong>
            </div>


            <div>
                <span>Expiration</span>

                <strong>
                    June 15, 2027
                </strong>
            </div>

        </div>

    </div>

</section>


<section class="content-grid">

    <div class="card">

        <div class="section-head">

            <div>

                <p class="eyebrow">
                    HOSTING
                </p>

                <h2>
                    Hosting Information
                </h2>

            </div>

        </div>


        <div class="info-list">

            <div>
                <span>Hosting Provider</span>

                <strong>
                    Hostinger
                </strong>
            </div>


            <div>
                <span>Server</span>

                <strong>
                    Shared Hosting
                </strong>
            </div>


            <div>
                <span>PHP Version</span>

                <strong>
                    8.3
                </strong>
            </div>


            <div>
                <span>Status</span>

                <strong class="good">
                    Active
                </strong>
            </div>

        </div>

    </div>


    <div class="card">

        <div class="section-head">

            <div>

                <p class="eyebrow">
                    MAINTENANCE
                </p>

                <h2>
                    Website Maintenance
                </h2>

            </div>

        </div>


        <div class="info-list">

            <div>
                <span>Last Maintenance</span>

                <strong>
                    September 18, 2026
                </strong>
            </div>


            <div>
                <span>Next Maintenance</span>

                <strong>
                    October 18, 2026
                </strong>
            </div>


            <div>
                <span>Backup</span>

                <strong class="good">
                    Active
                </strong>
            </div>


            <div>
                <span>Monitoring</span>

                <strong class="good">
                    Active
                </strong>
            </div>

        </div>

    </div>

</section>

<?= $this->endSection() ?>