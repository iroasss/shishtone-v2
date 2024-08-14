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
                    <th>Full Name</th>
                    <th>Age</th>
                    <th>Sex</th>
                    <th>Birthday</th>
                    <th>Email</th>
                    <th>More</th>
                </tr>
            </thead>
            <tbody>
                <tr>
                    <td>Jay Marl Mondido</td>
                    <td>21</td>
                    <td>Male</td>
                    <td>03/20/2003</td>
                    <td>Jaymarlmondido2020@gmail.com</td>
                    <td><button class="view-button">View</button></td>
                </tr>
                <tr>
                    <td>Jay Marl Mondido</td>
                    <td>21</td>
                    <td>Male</td>
                    <td>03/20/2003</td>
                    <td>Jaymarlmondido2020@gmail.com</td>
                    <td><button class="view-button">View</button></td>
                </tr>
                <tr>
                    <td>Jay Marl Mondido</td>
                    <td>21</td>
                    <td>Male</td>
                    <td>03/20/2003</td>
                    <td>Jaymarlmondido2020@gmail.com</td>
                    <td><button class="view-button">View</button></td>
                </tr>
                <tr>
                    <td>Jay Marl Mondido</td>
                    <td>21</td>
                    <td>Male</td>
                    <td>03/20/2003</td>
                    <td>Jaymarlmondido2020@gmail.com</td>
                    <td><button class="view-button">View</button></td>
                </tr>
                <!-- Add more rows as needed -->
            </tbody>
        </table>
    </div>

<?php
include("footer.php");
?>
