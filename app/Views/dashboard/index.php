<?= $this->extend('layouts/main') ?>

<?= $this->section('content') ?>

<header class="topbar">

    <div>

        <p class="eyebrow">
            CLIENT PORTAL
        </p>

        <h1>
            Welcome, ABC Company
        </h1>

        <p class="muted">
            Here is a quick overview of your website.
        </p>

    </div>

    <div class="profile">
        AC
    </div>

</header>


<section class="status-grid">

    <div class="card status-card">

        <div class="card-label">
            Website
        </div>

        <div class="card-value">
            example.com
        </div>

        <span class="status online">
            ● Online
        </span>

    </div>


    <div class="card status-card">

        <div class="card-label">
            Domain
        </div>

        <div class="card-value">
            example.com
        </div>

        <div class="small">
            Expires June 15, 2027
        </div>

    </div>


    <div class="card status-card">

        <div class="card-label">
            Hosting
        </div>

        <div class="card-value">
            Hostinger
        </div>

        <span class="status online">
            ● Active
        </span>

    </div>


    <div class="card status-card">

        <div class="card-label">
            Platform
        </div>

        <div class="card-value">
            WordPress
        </div>

        <div class="small">
            Custom Theme
        </div>

    </div>

</section>


<section class="content-grid">

    <div class="card">

        <div class="section-head">

            <div>

                <p class="eyebrow">
                    LATEST
                </p>

                <h2>
                    Monthly Report
                </h2>

            </div>

            <a href="/reports" class="text-link">
                View all
            </a>

        </div>


        <div class="report-summary">

            <div>

                <span>
                    September 2026
                </span>

                <strong>
                    Website Performance
                </strong>

            </div>

            <a href="/reports" class="button">
                View Report
            </a>

        </div>


        <div class="metrics">

            <div>
                <span>Users</span>
                <strong>12,540</strong>
            </div>

            <div>
                <span>Page Views</span>
                <strong>28,320</strong>
            </div>

            <div>
                <span>New Users</span>
                <strong>9,840</strong>
            </div>

            <div>
                <span>Conversions</span>
                <strong>245</strong>
            </div>

        </div>

    </div>


    <div class="card">

        <div class="section-head">

            <div>

                <p class="eyebrow">
                    WEBSITE
                </p>

                <h2>
                    Quick Information
                </h2>

            </div>

        </div>


        <div class="info-list">

            <div>
                <span>Website URL</span>
                <strong>www.example.com</strong>
            </div>

            <div>
                <span>CMS</span>
                <strong>WordPress</strong>
            </div>

            <div>
                <span>SSL</span>
                <strong class="good">Active</strong>
            </div>

            <div>
                <span>Last Update</span>
                <strong>Sep 18, 2026</strong>
            </div>

        </div>

    </div>

</section>

<?= $this->endSection() ?>