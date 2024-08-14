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
            </div>
        </div>
        <table class="data-table">
            <thead>
                <tr>
                    <th>Name</th>
                    <th>Report Date</th>
                    <th>Type of Report</th>
                    <th>Action</th>
                </tr>
            </thead>
            <tbody>
                <tr>
                    <td>Jay Marl Mondido</td>
                    <td>09/05/2024</td>
                    <td>Lost Pet</td>
                    <td>
                        <button class="action-button check"><i class="fa fa-check"></i></button>
                    </td>
                </tr>
                <tr>
                    <td>Jay Marl Mondido</td>
                    <td>09/05/2024</td>
                    <td>Lost Pet</td>
                    <td>
                        <button class="action-button check"><i class="fa fa-check"></i></button>
                    </td>
                </tr><tr>
                    <td>Jay Marl Mondido</td>
                    <td>09/05/2024</td>
                    <td>Lost Pet</td>
                    <td>
                        <button class="action-button check"><i class="fa fa-check"></i></button>
                    </td>
                </tr><tr>
                    <td>Jay Marl Mondido</td>
                    <td>09/05/2024</td>
                    <td>Lost Pet</td>
                    <td>
                        <button class="action-button check"><i class="fa fa-check"></i></button>
                    </td>
                </tr>
                <!-- Add more rows as needed -->
            </tbody>
        </table>
    </div>
<?php
include("footer.php");
?>