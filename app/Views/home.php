<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <title>Welcome to CodeIgniter 4!</title>
    <meta name="description" content="The small framework with powerful features">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="shortcut icon" type="image/png" href="/favicon.ico">

    <!-- STYLES -->

    <style {csp-style-nonce}>
        * {
            transition: background-color 300ms ease, color 300ms ease;
        }

        table,
        th,
        td {
            border-bottom: 1px solid #ddd;
            border-collapse: collapse;
        }

        td {
            width: 150px;
        }

        tr:hover {
            background-color: #D6EEEE;
        }


        *:focus {
            background-color: rgba(221, 72, 20, .2);
            outline: none;
        }

        html,
        body {
            color: rgba(33, 37, 41, 1);
            font-family: -apple-system, BlinkMacSystemFont, "Segoe UI", Helvetica, Arial, sans-serif, "Apple Color Emoji", "Segoe UI Emoji";
            font-size: 16px;
            margin: 0;
            padding: 0;
            -webkit-font-smoothing: antialiased;
            -moz-osx-font-smoothing: grayscale;
            text-rendering: optimizeLegibility;
        }

        header {
            background-color: rgba(247, 248, 249, 1);
            padding: .4rem 0 0;
        }

        .menu {
            padding: .4rem 2rem;
        }

        header ul {
            border-bottom: 1px solid rgba(242, 242, 242, 1);
            list-style-type: none;
            margin: 0;
            overflow: hidden;
            padding: 0;
            text-align: right;
        }

        header li {
            display: inline-block;
        }

        header li a {
            border-radius: 5px;
            color: rgba(0, 0, 0, .5);
            display: block;
            height: 44px;
            text-decoration: none;
        }

        header li.menu-item a {
            border-radius: 5px;
            margin: 5px 0;
            height: 38px;
            line-height: 36px;
            padding: .4rem .65rem;
            text-align: center;
        }

        header li.menu-item a:hover,
        header li.menu-item a:focus {
            background-color: rgba(221, 72, 20, .2);
            color: rgba(221, 72, 20, 1);
        }

        header .logo {
            float: left;
            height: 44px;
            padding: .4rem .5rem;
        }

        header .menu-toggle {
            display: none;
            float: right;
            font-size: 2rem;
            font-weight: bold;
        }

        header .menu-toggle button {
            background-color: rgba(221, 72, 20, .6);
            border: none;
            border-radius: 3px;
            color: rgba(255, 255, 255, 1);
            cursor: pointer;
            font: inherit;
            font-size: 1.3rem;
            height: 36px;
            padding: 0;
            margin: 11px 0;
            overflow: visible;
            width: 40px;
        }

        header .menu-toggle button:hover,
        header .menu-toggle button:focus {
            background-color: rgba(221, 72, 20, .8);
            color: rgba(255, 255, 255, .8);
        }

        header .heroe {
            margin: 0 auto;
            max-width: 1100px;
            padding: 1rem 1.75rem 1.75rem 1.75rem;
        }

        header .heroe h1 {
            font-size: 2.5rem;
            font-weight: 500;
        }

        header .heroe h2 {
            font-size: 1.5rem;
            font-weight: 300;
        }

        section {
            margin: 0 auto;
            max-width: 1100px;
            padding: 2.5rem 1.75rem 3.5rem 1.75rem;
        }

        section h1 {
            margin-bottom: 2.5rem;
        }

        section h2 {
            font-size: 120%;
            line-height: 2.5rem;
            padding-top: 1.5rem;
        }

        section pre {
            background-color: rgba(247, 248, 249, 1);
            border: 1px solid rgba(242, 242, 242, 1);
            display: block;
            font-size: .9rem;
            margin: 2rem 0;
            padding: 1rem 1.5rem;
            white-space: pre-wrap;
            word-break: break-all;
        }

        section code {
            display: block;
        }

        section a {
            color: rgba(221, 72, 20, 1);
        }

        section svg {
            margin-bottom: -5px;
            margin-right: 5px;
            width: 25px;
        }

        .further {
            background-color: rgba(247, 248, 249, 1);
            border-bottom: 1px solid rgba(242, 242, 242, 1);
            border-top: 1px solid rgba(242, 242, 242, 1);
        }

        .further h2:first-of-type {
            padding-top: 0;
        }

        footer {
            background-color: rgba(221, 72, 20, .8);
            text-align: center;
        }

        footer .environment {
            color: rgba(255, 255, 255, 1);
            padding: 2rem 1.75rem;
        }

        footer .copyrights {
            background-color: rgba(62, 62, 62, 1);
            color: rgba(200, 200, 200, 1);
            padding: .25rem 1.75rem;
        }

        @media (max-width: 629px) {
            header ul {
                padding: 0;
            }

            header .menu-toggle {
                padding: 0 1rem;
            }

            header .menu-item {
                background-color: rgba(244, 245, 246, 1);
                border-top: 1px solid rgba(242, 242, 242, 1);
                margin: 0 15px;
                width: calc(100% - 30px);
            }

            header .menu-toggle {
                display: block;
            }

            header .hidden {
                display: none;
            }

            header li.menu-item a {
                background-color: rgba(221, 72, 20, .1);
            }

            header li.menu-item a:hover,
            header li.menu-item a:focus {
                background-color: rgba(221, 72, 20, .7);
                color: rgba(255, 255, 255, .8);
            }
        }

        #overlay {
            width: 0vw;
            height: 0vh;
            visibility: visible;
            opacity: 0%;
            background-color: #333;
            z-index: 85;
            position: fixed;
        }

        #editMenu {
            top: auto;
            margin-left: auto;
            visibility: hidden;
            position: fixed;
            z-index: 200;
            display: flex;
            background-color: white;
        }
    </style>

</head>

<body>
    <div id="editMenu">
        <form action="/edit">
            <table id="editTable">
                <tr>
                    <td>Name</td>
                    <td>Email</td>
                    <td>Role</td>
                    <td></td>
                </tr>
                <tr>
                    <input type="number" name="id" id="id" hidden required>
                    <td><input type="text" name="name" id="name" autocomplete="off" required></td>
                    <td><input type="email" name="email" id="email" autocomplete="off" required></td>
                    <td>
                        <select name="role" id="role" required>
                            <?php foreach ($role as $value) { ?>
                                <option value="<?php echo $value["id"] ?>"><?php echo $value['role'] ?></option>
                            <?php } ?>
                        </select>
                    </td>
                    <td>
                        <input type="submit" value="Save">
                    </td>
                </tr>
            </table>
        </form>
    </div>
    <div id="overlay" onclick="toggleMenuOff()"></div>
    <!-- HEADER: MENU + HEROE SECTION -->
    <header>

        <div class="menu">
            <ul>
                <li class="logo">
                    <a href="#">
                        <h2>Database helper.</h2>
                    </a>
                </li>
            </ul>
        </div>

        <div class="heroe">
            <form action="/handlecsv" method="POST" enctype="multipart/form-data">
                <input type="file" name="csv" id="csvFile" required>
                <input type="submit">
            </form>

        </div>

    </header>

    <section>
        <table id="dataTable">
            <tr>
                <td>Sr.no</td>
                <td>Name</td>
                <td>Email</td>
                <td>Role</td>
                <td>Action</td>
            </tr>
            <?php $count=2; if (isset($fedata)) { ?>
                <?php foreach ($fedata as $value) { ?>
                    <tr>
                        <td><?php echo $value['id'] ?></td>
                        <td><?php echo $value['name']; ?></td>
                        <td><?php echo $value['email']; ?></td>
                        <td><?php echo $value['role']; ?></td>
                        <td>
                            <button id="edit" name="edit" onclick="toggleMenuOn(<?php echo $count++; ?>)" value="<?php echo $value['id'] ?>">Edit</button>
                            <form action="<?php echo base_url('/delete'); ?>">
                                <button name="delete" value="<?php echo $value['id'] ?>">Delete</button>
                            </form>
                        </td>
                    </tr>
                <?php } ?>
            <?php } ?>
        </table>

    </section>
</body>


<script>
    const editBtn = document.getElementById("edit");
    const editMenu = document.getElementById("editMenu");

    const overlay = document.getElementById("overlay");

    editBtn.addEventListener("click", "toggleMenuOn");

    function toggleMenuOn(value) {
        var table = document.getElementById('dataTable');
        var rowIndex = value - 1;  // Subtract 1 because row indices are zero-based
        var cells = table.rows[rowIndex].cells;

        // Extract data from the table cells
        var id = cells[0].innerHTML;
        var name = cells[1].innerHTML;
        var email = cells[2].innerHTML;
        var role = cells[3].innerHTML;

        // Populate the modal form with the extracted data
        document.getElementById('id').value = id;
        document.getElementById('name').value = name;
        document.getElementById('email').value = email;
        document.getElementById('role').value = role;

        overlay.style.opacity = "60%";
        overlay.style.pointerEvents = "all";
        overlay.style.height = "100vh";
        overlay.style.width = "100vw";

        editMenu.style.visibility = "visible";
    }

    overlay.addEventListener("click", "toggleMenuOff");

    function toggleMenuOff() {
        overlay.style.opacity = "0%";
        overlay.style.pointerEvents = "none";
        overlay.style.height = "0vh";
        overlay.style.width = "0vw";

        editMenu.style.visibility = "hidden";
    }
</script>


</html>