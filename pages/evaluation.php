<?php
require_once __DIR__ . '/../config/config.php';
requireRegistrar();

$page_title = "Evaluation";
$page_css = "evaluation.css";
$page_js = "evaluation.js";
include __DIR__ . '/../includes/header.php';
?>

<div class="page">
    <div class="table-header-toolbar">
        <div class="toolbar">
            <div class="search-wrap">
                <input id="searchInput" placeholder="Search applicant...">
                <i data-lucide="search"></i>
            </div>
            <div class="select-wrap">
                <select id="filterType"><option value="all">All Scholarship Types</option></select>
                <i data-lucide="chevron-down"></i>
            </div>
            <div class="select-wrap">
                <select id="filterStatus">
                    <option value="all">All Status</option>
                    <option value="review">For Review</option>
                    <option value="interview">For Interview</option>
                    <option value="approved">Approved</option>
                    <option value="rejected">Rejected</option>
                </select>
                <i data-lucide="chevron-down"></i>
            </div>
        </div>
    </div>

    <div class="table-wrap">
        <div class="table-card" id="tableWrap">
            <!-- Dynamic Evaluation Table rendered by JS -->
        </div>
    </div>
</div>

<div class="toast" id="toast"></div>

<?php include __DIR__ . '/../includes/footer.php'; ?>