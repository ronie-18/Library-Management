<?php
session_start();
if (!isset($_SESSION['std_id'])) {
    header("Location:login.php");
    exit();
}
$name = $_SESSION['name'];
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Student Library Dashboard</title>
    <style>
        /* Reset and base styles */
        * {
            margin: 0;
            padding: 0;
            box-sizing: border-box;
        }
        
        body {
            font-family: 'Segoe UI', Tahoma, Geneva, Verdana, sans-serif;
            background-color: #f3f4f6;
            color: #1f2937;
        }
        
        /* Layout */
        .container {
            display: flex;
            min-height: 100vh;
        }
        
        /* Sidebar */
        .sidebar {
            width: 250px;
            background-color: #ffffff;
            box-shadow: 2px 0 5px rgba(0, 0, 0, 0.05);
            display: flex;
            flex-direction: column;
        }
        
        .sidebar-header {
            height: 80px;
            display: flex;
            align-items: center;
            justify-content: center;
            border-bottom: 1px solid #e5e7eb;
        }
        
        .sidebar-header h1 {
            font-size: 1.25rem;
            font-weight: bold;
            color: #2563eb;
        }
        
        .sidebar-menu {
            flex: 1;
            padding: 1rem;
            display: flex;
            flex-direction: column;
            gap: 0.5rem;
        }
        
        .menu-item {
            display: flex;
            align-items: center;
            gap: 0.75rem;
            padding: 0.75rem;
            border-radius: 0.5rem;
            cursor: pointer;
            text-decoration: none;
            color: inherit;
        }
        
        .menu-item:hover {
            background-color: #f3f4f6;
        }
        
        .menu-item.active {
            background-color: #dbeafe;
            color: #2563eb;
        }
        
        .menu-item i {
            font-size: 1.25rem;
        }
        
        .sidebar-footer {
            padding: 1rem;
            border-top: 1px solid #e5e7eb;
        }
        
        .logout-btn {
            display: flex;
            align-items: center;
            gap: 0.75rem;
            padding: 0.75rem;
            border-radius: 0.5rem;
            cursor: pointer;
            color: #ef4444;
            width: 100%;
            text-align: left;
            background: none;
            border: none;
            text-decoration: none;
        }
        
        .logout-btn:hover {
            background-color: #fee2e2;
        }
        
        /* Main content */
        .main-content {
            flex: 1;
            display: flex;
            flex-direction: column;
            overflow: hidden;
        }
        
        /* Header */
        .header {
            height: 64px;
            background-color: #ffffff;
            box-shadow: 0 1px 3px rgba(0, 0, 0, 0.1);
            display: flex;
            align-items: center;
            justify-content: space-between;
            padding: 0 1.5rem;
        }
        
        .user-info {
            display: flex;
            align-items: center;
            gap: 0.5rem;
        }
        
        .mobile-menu-btn {
            display: none;
            background: none;
            border: none;
            cursor: pointer;
        }
        
        /* Page content */
        .page-content {
            flex: 1;
            padding: 1.5rem;
            overflow-y: auto;
        }
        
        .page-title {
            font-size: 1.5rem;
            font-weight: bold;
            margin-bottom: 1.5rem;
        }
        
        /* Dashboard cards */
        .dashboard-cards {
            display: grid;
            grid-template-columns: repeat(3, 1fr);
            gap: 1.5rem;
            margin-bottom: 2rem;
        }
        
        .card {
            background-color: #ffffff;
            border-radius: 0.5rem;
            padding: 1.5rem;
            box-shadow: 0 1px 3px rgba(0, 0, 0, 0.1);
        }
        
        .card-header {
            display: flex;
            justify-content: space-between;
            align-items: center;
            margin-bottom: 0.5rem;
        }
        
        .card-title {
            font-size: 1.125rem;
            font-weight: 600;
        }
        
        .card-badge {
            width: 2.5rem;
            height: 2.5rem;
            border-radius: 50%;
            display: flex;
            align-items: center;
            justify-content: center;
            font-weight: 600;
        }
        
        .badge-blue {
            background-color: #dbeafe;
            color: #2563eb;
        }
        
        .badge-yellow {
            background-color: #fef3c7;
            color: #d97706;
        }
        
        .badge-red {
            background-color: #fee2e2;
            color: #dc2626;
        }
        
        .card-text {
            color: #6b7280;
        }
        
        /* Tables */
        .table-container {
            background-color: #ffffff;
            border-radius: 0.5rem;
            box-shadow: 0 1px 3px rgba(0, 0, 0, 0.1);
            overflow: hidden;
        }
        
        table {
            width: 100%;
            border-collapse: collapse;
        }
        
        th {
            background-color: #f9fafb;
            padding: 0.75rem 1.5rem;
            text-align: left;
            font-size: 0.75rem;
            font-weight: 500;
            color: #6b7280;
            text-transform: uppercase;
            letter-spacing: 0.05em;
        }
        
        td {
            padding: 1rem 1.5rem;
            white-space: nowrap;
            border-top: 1px solid #e5e7eb;
        }
        
        /* Responsive */
        @media (max-width: 768px) {
            .sidebar {
                display: none;
            }
            
            .mobile-menu-btn {
                display: block;
            }
            
            .dashboard-cards {
                grid-template-columns: 1fr;
            }
            
            .table-container {
                overflow-x: auto;
            }
        }
    </style>
    <!-- Font Awesome for icons -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css">
</head>
<body>
    <div class="container">
        <!-- Sidebar -->
        <div class="sidebar">
            <div class="sidebar-header">
                <h1>Campus Library</h1>
            </div>
            <div class="sidebar-menu">
                <a href="dashboard.php" class="menu-item active">
                    <i class="fas fa-home"></i>
                    <span>Dashboard</span>
                </a>
                
                <a href="user/my_books.php" class="menu-item">
                    <i class="fas fa-book-open"></i>
                    <span>My Books</span>
                </a>
                
            </div>
            <div class="sidebar-footer">
                <a href="auth/logout.php" class="logout-btn">
                    <i class="fas fa-sign-out-alt"></i>
                    <span>Logout</span>
                </a>
            </div>
        </div>

        <!-- Main Content -->
        <div class="main-content">
            <!-- Header -->
            <div class="header">
                <button class="mobile-menu-btn">
                    <i class="fas fa-bars"></i>
                </button>
                <div class="user-info">
                    <i class="fas fa-user"></i>
                    <span><?php echo htmlspecialchars($name); ?></span>
                </div>
            </div>

            <!-- Page Content -->
            <div class="page-content">
                <h2 class="page-title">Welcome, <?php echo htmlspecialchars($name); ?>!</h2>
                
                <!-- Dashboard Cards -->
                <div class="dashboard-cards">
                    <div class="card">
                        <div class="card-header">
                            <h3 class="card-title">Books Borrowed</h3>
                            <div class="card-badge badge-blue">2</div>
                        </div>
                        <p class="card-text">You currently have 2 books checked out</p>
                    </div>
                    <div class="card">
                        <div class="card-header">
                            <h3 class="card-title">Due Soon</h3>
                            <div class="card-badge badge-yellow">1</div>
                        </div>
                        <p class="card-text">You have 1 book due within 7 days</p>
                    </div>
                    <div class="card">
                        <div class="card-header">
                            <h3 class="card-title">Overdue</h3>
                            <div class="card-badge badge-red">0</div>
                        </div>
                        <p class="card-text">You have no overdue books</p>
                    </div>
                </div>
                
                <!-- Recently Borrowed Table -->
                <h3 class="page-title" style="font-size: 1.25rem; margin-top: 2rem;">Recently Borrowed</h3>
                <div class="table-container">
                    <table>
                        <thead>
                            <tr>
                                <th>Title</th>
                                <th>Author</th>
                                <th>Issue Date</th>
                                <th>Due Date</th>
                            </tr>
                        </thead>
                        <tbody>
                            <!-- Example data; replace with dynamic queries as needed -->
                            <tr>
                                <td>The Great Gatsby</td>
                                <td>F. Scott Fitzgerald</td>
                                <td>2023-05-15</td>
                                <td>2023-06-15</td>
                            </tr>
                            <tr>
                                <td>Brave New World</td>
                                <td>Aldous Huxley</td>
                                <td>2023-05-20</td>
                                <td>2023-06-20</td>
                            </tr>
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>

    <script>
        // Simple JavaScript to handle mobile menu toggle
        document.querySelector('.mobile-menu-btn').addEventListener('click', function() {
            const sidebar = document.querySelector('.sidebar');
            sidebar.style.display = sidebar.style.display === 'flex' ? 'none' : 'flex';
        });
    </script>
</body>
</html>
