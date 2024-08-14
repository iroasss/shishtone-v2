<?Php
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
                    <th>Date</th>
                    <th>Message</th>
                </tr>
            </thead>
            <tbody>
                <tr>
                    <td>Jay Marl Mondido</td>
                    <td>05/10/2024</td>
                    <td>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.</td>
                </tr>
                <tr>
                    <td>Jay Marl Mondido</td>
                    <td>05/10/2024</td>
                    <td>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.</td>
                </tr>
                <tr>
                    <td>Jay Marl Mondido</td>
                    <td>05/10/2024</td>
                    <td>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.</td>
                </tr>

                <tr>
                    <td>Jay Marl Mondido</td>
                    <td>05/10/2024</td>
                    <td>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.</td>
                </tr>
                <!-- Add more rows as needed -->
            </tbody>
        </table>
    </div>
<?php
include("footer.php");
?>