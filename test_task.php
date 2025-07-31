<?php
$categories = array(
    "Mobile phones and gadgets",
    "Laptops and Accessories",
    "Computers",
    "Smart watches"
);

$sub_categories = array(
    "Desktops",
    "Laptops",
    "Tablets",
    "Servers"
);
?>

<!DOCTYPE html>
<html>

<head>
    <title>Test Task</title>
    <style>
        body{
            font-family: Arial, Helvetica, sans-serif;
            font-size: 16px;
        }

        /* Task 1 */
        .top-menu {
            position: relative;
        }

        .menu-categories {
            list-style: none;
            padding: 0;
            margin: 0;
            display: flex;
        }

        .menu-categories li {
            margin-right: 20px;
            position: relative;
        }

        .menu-categories a {
            text-decoration: none;
            white-space: nowrap;
            overflow: hidden;
            text-overflow: ellipsis;
            max-width: 150px;
            display: block;
            padding: 20px;
            border: 1px solid white;
            background-color: #596c80;
            color: white;
            border-radius: 25px;
        }

        .menu-categories a:hover {
            border: 1px solid #466a8d;
            background-color: #466a8d;
            border-radius: 25px;
        }
        
        .menu-toggle {
            background: none;
            border: none;
            cursor: pointer;
        }

        .menu-toggle span {
            color: white;
            display: inline-block;
            transition: transform 0.3s;
        }
        
        .has-submenu:hover span {
            transform: rotate(180deg);
        }   

        /* Task 2 */
        .submenu {
            list-style: none;
            padding: 0;
            margin: 0;
            position: absolute;
            top: 100%;
            left: 0;
            background-color: #f9f9f9;
            display: none;
        }

        .has-submenu:hover .submenu {
            display: block;
            animation: fadeIn 0.3s;
        }

        @keyframes fadeIn {
            from {
                opacity: 0;
            }

            to {
                opacity: 1;
            }
        }

        /* Task 3 */
        .cabinet {
            position: relative;
            display: inline-block;
            border: 2px solid #1E90FF;
            margin: 20px 0;
            padding: 15px 35px;
            border-radius: 25px;
            background-color:#9eb9d3;
        }

        .cabinet:hover {
            background-color:rgb(142, 161, 179);
        }

        .form-container {
            display: none;
            background: white;
            padding: 15px 35px;
            border: 1px solid #ddd;
            box-shadow: 0 5px 15px rgba(0, 0, 0, 0.2);
            animation: fadeIn 0.5s ease-in-out;
            position: absolute;
            top: 100%;
            left: 0;
            width: 350px;
            box-sizing: border-box;
        }

        .cabinet:hover .form-container {
            display: block;
        }

        .highlight {
            color: #1E90FF;
            font-weight: 700;
            border-bottom: 1px dashed #1E90FF;
        }

        .form-group {
            margin-bottom: 10px;
            display: flex;
            font-size: 14px;
            align-items: center;
        }

        .form-group label {
            width: 35%;
            margin-right: 5px;
        }

        input[type="text"] {
            width: 150px;
            padding: 8px;
            border-radius: 8px;
            border: 1px solid #ccc;
        }

        @keyframes fadeIn {
            from {
                opacity: 0;
                transform: translateY(10px);
            }

            to {
                opacity: 1;
                transform: translateY(0);
            }
        }
    </style>
</head>

<body>
    <nav class="top-menu">
        <ul class="menu-categories">
            <?php foreach ($categories as $category) : ?>
                <?php if ($category == "Computers") : ?>
                    <li class="has-submenu"><a href="#"><?php echo $category; ?> <button class="menu-toggle"><span>&#9660</span></button></a>
                        <ul class="submenu">
                            <?php foreach ($sub_categories as $sub_category) : ?>
                                <li><a href="#"><?php echo $sub_category; ?></a></li>
                            <?php endforeach; ?>
                        </ul>
                    </li>
                <?php else : ?>
                    <li><a href="#"><?php echo $category; ?></a></li>
                <?php endif; ?>
            <?php endforeach; ?>
        </ul>
    </nav>

    <div class="cabinet">Cabinet
        <div class="form-container">
            <h3><span class="highlight">First Name</span> Settings</h3>
            <div class="form-group">
                <label>Label</label>
                <input type="text" value="First Name" />
            </div>
            <div class="form-group">
                <label>Placeholder</label>
                <input type="text" />
            </div>
            <div class="form-group">
                <label>Required</label>
                <input type="checkbox" />
            </div>
        </div>
    </div>
</body>

</html>