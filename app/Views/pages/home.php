<section class="hero">
    <div class="hero-content">
        <p class="eyebrow">Welcome to Maaku POS</p>
        <h1>Anime treasures carried in by the tide.</h1>
        <p class="hero-copy">
            A calm and organized point-of-sale foundation for a shop filled with anime collectibles,
            cozy Studio Ghibli finds, art prints, and small keepsakes.
        </p>
        <div class="hero-actions">
            <a class="button primary" href="<?= base_url('customers') ?>">View customers</a>
            <a class="button secondary" href="<?= base_url('about') ?>">Discover Maaku POS</a>
        </div>
    </div>

    <div class="water-orb" aria-hidden="true">
        <span class="moon"></span>
        <span class="wave wave-one"></span>
        <span class="wave wave-two"></span>
        <span class="wave wave-three"></span>
    </div>
</section>

<section class="content-section highlights" aria-labelledby="highlights-title">
    <div class="section-heading">
        <p class="eyebrow">Store overview</p>
        <h2 id="highlights-title">A simple first chapter</h2>
        <p>This version focuses on the people behind every purchase before products and databases arrive.</p>
    </div>

    <div class="card-grid">
        <article class="feature-card">
            <span class="feature-number">01</span>
            <h3>Customer Accounts</h3>
            <p>Keep sample customer contact records together in a clear, readable list.</p>
            <a href="<?= base_url('customers') ?>">Open customer list <span aria-hidden="true">→</span></a>
        </article>
        <article class="feature-card">
            <span class="feature-number">02</span>
            <h3>Store Crew</h3>
            <p>See the team members and roles that keep Maaku POS running smoothly.</p>
            <a href="<?= base_url('users') ?>">Meet the staff <span aria-hidden="true">→</span></a>
        </article>
        <article class="feature-card">
            <span class="feature-number">03</span>
            <h3>Water-inspired Design</h3>
            <p>A peaceful blue interface inspired by ocean scenes and hand-painted animation backgrounds.</p>
            <a href="<?= base_url('about') ?>">Read our story <span aria-hidden="true">→</span></a>
        </article>
    </div>
</section>
