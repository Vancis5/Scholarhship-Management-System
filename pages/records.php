<?php
$page_title = "Records";
$page_css = "records.css";
$page_js = "records.js";

include __DIR__ . '/../includes/header.php';
?>

<div class="page">
    <div class="table-header-toolbar">
        <div class="toolbar">
            <div class="search-wrap">
                <input type="text" placeholder="Search applicant...">
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

        <button class="btn-primary btn-export">
            <i data-lucide="download"></i>
            Export Records
        </button>
    </div>

        <div class="table-card">
        <!-- Table -->
        <div class="table-wrap">
            <table class="records-table">
                <thead>
                    <tr>
                        <th>Student ID</th>
                        <th>Name</th>
                        <th>Scholarship Type</th>
                        <th>Status</th>
                        <th>Semester</th>
                        <th>SY</th>
                        <th>Date Evaluated</th>
                        <th>Action</th>
                    </tr>
                </thead>
                <tbody id="tableBody">
                    <!-- Database -->
                </tbody>
            </table>
        </div>
    </div>
</div>

<?php include __DIR__ . '/../includes/footer.php'; ?>