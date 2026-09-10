<section class="page-banner compact">
    <p class="eyebrow">Customer accounts</p>
    <h1>Collectors in our community</h1>
    <p>Five sample customer records supplied by a static PHP array in the Customers controller.</p>
</section>

<section class="content-section table-section" aria-labelledby="customer-table-title">
    <div class="table-heading">
        <div>
            <p class="eyebrow">Directory</p>
            <h2 id="customer-table-title">Customer records</h2>
        </div>
        <span class="record-count"><?= count($customers) ?> customers</span>
    </div>

    <div class="table-wrap">
        <table>
            <thead>
                <tr>
                    <th scope="col">No.</th>
                    <th scope="col">Full name</th>
                    <th scope="col">Email address</th>
                    <th scope="col">Phone number</th>
                </tr>
            </thead>
            <tbody>
                <?php foreach ($customers as $index => $customer): ?>
                    <tr>
                        <td><span class="row-number"><?= $index + 1 ?></span></td>
                        <td><strong><?= esc($customer['full_name']) ?></strong></td>
                        <td><a href="mailto:<?= esc($customer['email']) ?>"><?= esc($customer['email']) ?></a></td>
                        <td><?= esc($customer['phone']) ?></td>
                    </tr>
                <?php endforeach; ?>
            </tbody>
        </table>
    </div>
    <p class="data-note">These are fictional records created for this classroom activity.</p>
</section>
