<?php
include("header.php");
?>
<div class="table-container">
    <span>Entries per page</span>
    <div class="table-controls">
        <select class="entries-per-page">
            <option value="1">1</option>
            <option value="5">5</option>
            <option value="10">10</option>
        </select>
        <div class="search-container">
            <input type="text" class="search-input" placeholder="Search">
            <button class="search-button"><i class="fa fa-search"></i></button>
            <button class="action-button add" onclick="openModal()"><i class="fa fa-plus"></i> Add Compound</button>
        </div>
    </div>
    <table class="data-table">
        <thead>
            <tr>
                <th>Barangay List</th>
                <th>Barangay Representative</th>
                <th>Number of Available Pets</th>
                <th>Action</th>
            </tr>
        </thead>
        <tbody>
            <tr>
                <td>San Antonio</td>
                <td><em>Barangay Administrative</em></td>
                <td>79</td>
                <td>
                    <button class="action-button delete"><i class="fa fa-trash"></i></button>
                    <button class="action-button edit"><i class="fa fa-edit"></i></button>
                </td>
            </tr>
            <tr>
                <td>San Antonio</td>
                <td><em>Barangay Administrative</em></td>
                <td>79</td>
                <td>
                    <button class="action-button delete"><i class="fa fa-trash"></i></button>
                    <button class="action-button edit"><i class="fa fa-edit"></i></button>
                </td>
            </tr>
            <tr>
                <td>San Antonio</td>
                <td><em>Barangay Administrative</em></td>
                <td>79</td>
                <td>
                    <button class="action-button delete"><i class="fa fa-trash"></i></button>
                    <button class="action-button edit"><i class="fa fa-edit"></i></button>
                </td>
            </tr>
            <tr>
                <td>San Antonio</td>
                <td><em>Barangay Administrative</em></td>
                <td>79</td>
                <td>
                    <button class="action-button delete"><i class="fa fa-trash"></i></button>
                    <button class="action-button edit"><i class="fa fa-edit"></i></button>
                </td>
            </tr>
            <!-- Add more rows as needed -->
        </tbody>
    </table>
</div>
<?php
include("footer.php");
?>