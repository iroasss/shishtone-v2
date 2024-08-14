<?php
include("header.php");
include("../config/config.php");

// Set default limit and get value from GET parameter if available
$limit = isset($_GET['limit']) ? intval($_GET['limit']) : 20;

// Get the current page number from the GET parameter, default to 1 if not set
$page = isset($_GET['page']) ? intval($_GET['page']) : 1;

// Calculate the starting record for the query
$offset = ($page - 1) * $limit;

// Get the total number of records for pagination
$total_result = $conn->query("SELECT COUNT(*) AS total FROM pet_list");
$total_rows = $total_result->fetch_assoc()['total'];
$total_pages = ceil($total_rows / $limit);

// Execute SQL query to retrieve pet list data with limit and offset
$sql = "SELECT * FROM pet_list LIMIT $limit OFFSET $offset";
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
                <button class="action-button add" onclick="openModal()"><i class="fa fa-plus"></i> Add</button>
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
                    echo "<button class='action-button edit' onclick='editPet(" . $row['id'] . ")'><i class='fas fa-edit'></i></button>";
                    echo "<button class='action-button archive' onclick='archivePet(" . $row['id'] . ")'><i class='fas fa-archive'></i></button>";
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
                    echo "<p data-field='image' style='display:none'><a href='" . $row['pet_image'] . "' target='_blank'>View Image</a></p>";
                    echo "</div>";
                }
            } else {
                echo "<tr><td colspan='11'>No data found</td></tr>";
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
<!-- Add Modal -->
<div id="addModal" class="modal">
    <div class="modal-content">
        <span class="close" onclick="closeModal()">&times;</span>
        <h2>Add New Pet</h2>
        <form action="../backend/add_pet.php" method="post" enctype="multipart/form-data">

            <label for="petName">Pet Name</label>
            <input type="text" id="petName" name="petName" required pattern="[A-Za-z\s]+" title="Pet name should only contain letters and spaces.">

            <label for="petAge">Pet Age</label>
            <input type="number" id="petAge" name="petAge" required min="0" title="Pet age must be a non-negative number.">

            <label for="petSpecies">Pet Species</label>
            <input type="text" id="petSpecies" name="petSpecies" required pattern="[A-Za-z\s]+" title="Pet species should only contain letters and spaces.">

            <label for="petBreed">Pet Breed</label>
            <input type="text" id="petBreed" name="petBreed" required pattern="[A-Za-z\s]+" title="Pet breed should only contain letters and spaces.">

            <label for="petColor">Pet Color</label>
            <input type="text" id="petColor" name="petColor" required pattern="[A-Za-z\s]+" title="Pet color should only contain letters and spaces.">

            <label for="distinctiveFeatures">Distinctive Features</label>
            <input type="text" id="distinctiveFeatures" name="distinctiveFeatures" required>

            <label for="medicalHistory">Medical History</label>
            <textarea id="medicalHistory" name="medicalHistory" required></textarea>

            <label for="petDescription">Pet Description</label>
            <textarea id="petDescription" name="petDescription" required></textarea>

            <label for="petImages">Images (max 4)</label>
            <input type="file" id="petImages" name="petImages[]" accept="image/*" multiple onchange="previewImages(event)">
            <div id="imagePreviewContainer" style="margin-top:10px; display: flex; flex-wrap: wrap;"></div>

            <button type="submit" class="save-button">Save</button>
        </form>
    </div>
</div>

<script src="../js/admin.js"></script>
<?php
include("footer.php");
?>