<?php
include("header.php");
include("../config/config.php");

// Archive Pet Functionality
if (isset($_GET['archive_id'])) {
    $archive_id = intval($_GET['archive_id']);
    $conn->query("UPDATE pet_list SET is_archived = 1, archived_date = NOW() WHERE id = $archive_id");
    header("Location: pet_list.php");
    exit();
}

// Unarchive Pet Functionality
if (isset($_GET['unarchive_id'])) {
    $unarchive_id = intval($_GET['unarchive_id']);
    $conn->query("UPDATE pet_list SET is_archived = 0, archived_date = NULL WHERE id = $unarchive_id");
    header("Location: pet_list.php");
    exit();
}
$limit = isset($_GET['limit']) ? intval($_GET['limit']) : 20;
$page = isset($_GET['page']) ? intval($_GET['page']) : 1;

$offset = ($page - 1) * $limit;
$total_result = $conn->query("SELECT COUNT(*) AS total FROM pet_list WHERE is_archived = 0");
$total_rows = $total_result->fetch_assoc()['total'];
$total_pages = ceil($total_rows / $limit);

// Execute SQL query to retrieve pet list data with limit and offset
$sql = "SELECT * FROM pet_list WHERE is_archived = 0 LIMIT $limit OFFSET $offset";
$result = $conn->query($sql);
?>
<div class="table-container">
    <div class="table-controls-container">
        <div class="table-controls">
            <form method="get" action="" class="entries-form">
                <label for="limit" class="entries-label">Entries per page:</label>
                <select id="limit" name="limit" class="entries-select" onchange="this.form.submit()">
                    <option value="20" <?php echo ($limit == 20) ? 'selected' : ''; ?>>20</option>
                    <option value="40" <?php echo ($limit == 40) ? 'selected' : ''; ?>>40</option>
                    <option value="60" <?php echo ($limit == 60) ? 'selected' : ''; ?>>60</option>
                    <option value="80" <?php echo ($limit == 80) ? 'selected' : ''; ?>>80</option>
                    <option value="100" <?php echo ($limit == 100) ? 'selected' : ''; ?>>100</option>
                </select>
                <input type="hidden" name="page" value="<?php echo $page; ?>">
            </form>

            <div class="search-container">
                <input type="text" class="search-input" placeholder="Search">
                <button class="search-button"><i class="fa fa-search"></i></button>
            </div>
        </div>
    </div>
    <table class="data-table">
        <thead>
            <tr>
                <th>Pet Name</th>
                <th>Pet Age</th>
                <th>Pet Species</th>
                <th>Pet Breed</th>
                <th>Pet Color</th>
                <th>Action</th>
            </tr>
        </thead>
        <tbody>
            <?php
            if ($result && $result->num_rows > 0) {
                while ($row = $result->fetch_assoc()) {
                    echo "<tr>";
                    echo "<td>" . $row['pet_name'] . "</td>";
                    echo "<td>" . $row['pet_age'] . "</td>";
                    echo "<td>" . $row['pet_species'] . "</td>";
                    echo "<td>" . $row['pet_breed'] . "</td>";
                    echo "<td>" . $row['pet_color'] . "</td>";
                    echo "<td>";
                    echo "<button class='action-button view-more' onclick='viewMore(" . $row['id'] . ")'><i class='fas fa-eye'></i></button>";
                    echo "</td>";
                    echo "</tr>";

                    // Hidden div to hold the details for the modal
                    echo "<div id='pet-details-" . $row['id'] . "' class='pet-details' style='display:none;'>";
                    echo "<p data-field='name' style='display:none'>" . $row['pet_name'] . "</p>";
                    echo "<p data-field='age' style='display:none'>" . $row['pet_age'] . "</p>";
                    echo "<p data-field='species' style='display:none'>" . $row['pet_species'] . "</p>";
                    echo "<p data-field='breed' style='display:none'>" . $row['pet_breed'] . "</p>";
                    echo "<p data-field='color' style='display:none'>" . $row['pet_color'] . "</p>";
                    echo "<p data-field='distinctive' style='display:none'>" . $row['distinctive'] . "</p>";
                    echo "<p data-field='medical_history' style='display:none'>" . $row['medical_history'] . "</p>";
                    echo "<p data-field='description' style='display:none'>" . $row['pet_description'] . "</p>";
                    echo "<p data-field='location' style='display:none'>" . $row['location'] . "</p>";
                    echo "<p data-field='image' style='display:none'><a href='" . $row['pet_image'] . "' target='_blank'>View Image</a></p>";
                    echo "</div>";
                }
            } else {
                echo "<tr><td colspan='12'>No data found</td></tr>";
            }
            ?>
            <!-- Details Modal -->
            <div id="detailsModal" class="modal">
                <div class="modal-content">
                    <span class="close" onclick="closeDetailsModal()">&times;</span>
                    <div id="modalContent"></div>
                </div>
            </div>
        </tbody>
    </table>
    <div class="pagination">
        <?php
        if ($total_pages > 1) {
            for ($i = 1; $i <= $total_pages; $i++) {
                echo "<a href='?limit=$limit&page=$i'" . ($i == $page ? " class='active'" : "") . ">$i</a> ";
            }
        }
        ?>
    </div>
</div>
<?php
include("footer.php");
?>