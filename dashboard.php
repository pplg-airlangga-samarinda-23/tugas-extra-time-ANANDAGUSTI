<?php
session_start();

if (!isset($_SESSION['username'])) {
    header("Location: index.php");
    exit();
}
?>

<!DOCTYPE html>
<html lang="id">
<head>
    <title>Dashboard</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            margin: 0;
            background-color: #f8f8f8;
            display: flex;
            height: 100vh;
        }

        .sidebar {
            width: 200px;
            background-color: #e0e0e0;
            padding: 10px;
            display: flex;
            flex-direction: column;
            align-items: center;
            box-shadow: 2px 0 5px rgba(0, 0, 0, 0.1);
        }

        .sidebar button {
            width: 100%;
            margin: 10px 0;
            padding: 10px;
            background-color: #007BFF;
            color: white;
            border: none;
            border-radius: 5px;
            text-align: left;
        }

        .sidebar button:hover {
            background-color: #0056b3;
        }

        .main-content {
            flex-grow: 1;
            display: flex;
            flex-direction: column;
            justify-content: space-between;
        }

        .topbar {
            padding: 10px;
            background-color: #ffffff;
            display: flex;
            justify-content: space-between;
            align-items: center;
            border-bottom: 1px solid #ddd;
        }

        .topbar .username {
            font-size: 14px;
            color: #555;
        }

        .topbar .avatar {
            width: 30px;
            height: 30px;
            background-color: #007BFF;
            border-radius: 50%;
        }

        .content {
            flex-grow: 1;
            padding: 20px;
        }

        .search-bar {
            margin-bottom: 10px;
            display: flex;
            justify-content: flex-end;
        }

        .search-bar input {
            padding: 5px;
            border: 1px solid #ccc;
            border-radius: 3px;
        }

        .data-table {
            width: 100%;
            border-collapse: collapse;
            background-color: #ffffff;
            border: 1px solid #ddd;
        }

        .data-table th, .data-table td {
            border: 1px solid #ddd;
            padding: 8px;
            text-align: center;
        }

        .data-table th {
            background-color: #f2f2f2;
        }

        .footer {
            padding: 10px;
            text-align: center;
            font-size: 12px;
            color: #666;
            background-color: #e0e0e0;
        }
    </style>
</head>
<body>
    <div class="sidebar">
        <button>Dashboard</button>
        <button>Master Barang</button>
        <button>Receiving</button>
        <button>Issuing</button>
    </div>

    <div class="main-content">
        <div class="topbar">
            <span class="username"><?php echo $_SESSION['username']; ?></span>
            <div class="avatar"></div>
        </div>

        <div class="content">
            <div class="search-bar">
                <input type="text" placeholder="Pencarian...">
            </div>

            <table class="data-table">
                <thead>
                    <tr>
                        <th>No</th>
                        <th>Nama Barang</th>
                        <th>Pengadaan</th>
                        <th>Stok</th>
                        <th>Status Baik</th>
                        <th>Status Rusak</th>
                    </tr>
                </thead>
                <tbody>
                    <tr>
                        <td>1</td>
                        <td>Barang A</td>
                        <td>100</td>
                        <td>50</td>
                        <td>30</td>
                        <td>20</td>
                    </tr>
                    <tr>
                        <td>2</td>
                        <td>Barang B</td>
                        <td>200</td>
                        <td>150</td>
                        <td>140</td>
                        <td>10</td>
                    </tr>
                    <tr>
                        <td>3</td>
                        <td>Barang C</td>
                        <td>150</td>
                        <td>50</td>
                        <td>0</td>
                        <td>20</td>
                    </tr>
                    <tr>
                        <td>4</td>
                        <td>Barang D</td>
                        <td>20</td>
                        <td>50</td>
                        <td>10</td>
                        <td>2</td>
                    </tr>
                    <tr>
                        <td>5</td>
                        <td>Barang E</td>
                        <td>2</td>
                        <td>43</td>
                        <td>18</td>
                        <td>2</td>
                    </tr>
                </tbody>
            </table>
        </div>
        <div class="footer">
            Copyright &copy; 2024
        </div>
    </div>
</body>
</html>
