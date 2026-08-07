<?php
$page_title = "Scholarships";
$page_css = "scholarships.css";
$page_js = "scholarships.js";

include __DIR__ . '/../includes/header.php';
?>

<div class="page">
    <div class="table-header-toolbar">
        <div class="toolbar">
            <div class="search-wrap">
                <input type="text" placeholder="Search scholarship...">
                <i data-lucide="search"></i>
            </div>

            <div class="select-wrap">
                <select id="filterType">
                    <option>All Scholarship Types</option>
                </select>
                <i data-lucide="chevron-down"></i>
            </div>

            <div class="select-wrap">
                <select id="filterStatus">
                    <option>All Status</option>
                </select>
                <i data-lucide="chevron-down"></i>
            </div>
        </div>

        <button class="btn-primary" id="addScholarshipBtn">
            <i data-lucide="plus"></i>
            Add Scholarship
        </button>
    </div>

        <div class="table-card">
            <!-- Table -->
            <div class="table-wrap">

                <table class="scholarships-table">

                    <thead>
                        <tr>
                            <th>Scholarship Name</th>
                            <th>Type</th>
                            <th>Slots</th>
                            <th>Status</th>
                            <th>Actions</th>
                        </tr>
                    </thead>

                    <tbody id="tableBody">
                        <!-- Database -->
                    </tbody>

                </table>
            </div>
        </div>

    </div>

</div>

<?php include __DIR__ . '/../includes/footer.php'; ?>