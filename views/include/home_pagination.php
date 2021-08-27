<?php
$limit = isset($_SESSION['records-limit']) ? $_SESSION['records-limit'] : 8;
$page = (isset($_GET['page']) && is_numeric($_GET['page'])) ? $_GET['page'] : 1;
$paginationStart = ($page - 1) * $limit;

$allRecrods = isset($_SESSION['total-records']) ? $_SESSION['total-records'] : 15;

// Calculate total pages
$totoalPages = ceil($allRecrods / $limit);

// Prev + Next
$prev = $page - 1;
$next = $page + 1;

?>
<!-- Total records -->
<div class="total">
    <?php echo 'Total products: '. $allRecrods ?>
    <?php echo ' -- Total pages: '. $totoalPages ?>
</div>
<!-- Pagination -->
<nav aria-label="Page navigation example mt-5" class="flex">
    <div class="d-flex flex-row-reverse bd-highlight mb-3">
        <form action="?mod=page&act=home&page=1" method="post">
            <select name="records-limit" id="records-limit" class="custom-select">
                <option disabled selected>Records Limit</option>
                <?php foreach ([4, 8, 12] as $limit) : ?>
                    <option <?php if (isset($_SESSION['records-limit']) && $_SESSION['records-limit'] == $limit) echo 'selected'; ?> value="<?= $limit; ?>">
                    <?= $limit; ?>
                </option>
                <?php endforeach; ?>
            </select>
        </form>
    </div>
    <ul class="pagination justify-content-center">
        <li class="page-item <?php if ($page <= 1) {
                                    echo 'disabled';
                                } ?>">
            <a class="page-link" href="<?php if ($page <= 1) {
                                            echo '?mod=page&act=home';
                                        } else {
                                            echo "?mod=page&act=home&page=1";
                                        } ?>">First</a>
        </li>
        <li class="page-item <?php if ($page <= 1) {
                                    echo 'disabled';
                                } ?>">
            <a class="page-link" href="<?php if ($page <= 1) {
                                            echo '?mod=page&act=home';
                                        } else {
                                            echo "?mod=page&act=home&page=" . $prev;
                                        } ?>">Previous</a>
        </li>

        <li class="page-item <?php {
                                    echo 'active';
                                } ?>">
            <a class="page-link" href="?mod=page&act=home&page=<?= $page; ?>"> <?= $page; ?> </a>
        </li>

        <li class="page-item <?php if ($page >= $totoalPages) {
                                    echo 'disabled';
                                } ?>">
            <a class="page-link" href="<?php if ($page >= $totoalPages) {
                                            echo '?mod=page&act=home';
                                        } else {
                                            echo "?mod=page&act=home&page=" . $next;
                                        } ?>">Next</a>
        </li>
        <li class="page-item <?php if ($page >= $totoalPages) {
                                    echo 'disabled';
                                } ?>">
            <a class="page-link" href="<?php if ($page >= $totoalPages) {
                                            echo '?mod=page&act=home';
                                        } else {
                                            echo "?mod=page&act=home&page=" . $totoalPages;
                                        } ?>">Last</a>
        </li>
    </ul>
</nav>