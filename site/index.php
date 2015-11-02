

<table border="1">
    <?php
//    if (!isset($_SESSION['first_name']) && (!isset($_SESSION['last_name'])) && (!isset($_SESSION['phone'])) && (!isset($_SESSION['email']))) {
//        include'sign_up.html';
//    }else{
    $a = ['header', 'content', 'footer'];
    $menu = [
        'main' => ['href' => 'index.php', 'title' => 'Main'],
        'about' => ['href' => 'index.php?page=about', 'title' => 'About'],
        'contacts' => ['href' => 'index.php?page=contacts', 'title' => 'Contacts'],
        'multiple' => ['href' => 'index.php?page=multiple', 'title' => 'Multiple_Table'],
        'calculator' => ['href' => 'index.php?page=calculator', 'title' => 'Calculator'],
        'on-line-test' => ['href' => 'index.php?page=on-line-test', 'title' => 'On-Line-Test'],
        'log' => ['href' => 'index.php?page=log', 'title' => 'log'],
        'log-view' => ['href' => 'index.php?page=log-view', 'title' => 'log-view'],
        'Пользователи' => ['href' => 'index.php', 'title' => 'Пользователи']
    ];
    foreach ($a as $val) {
        $val = strtoupper($val);
        ?>
        <tr align='center'>
            <?php
            if ($val == 'CONTENT') { ?>
                <td width=20% height=100%>
                    <table border="1" width="100%" height=100%>
                        <?php foreach ($menu as $v) { ?>
                            <tr>
                                <td align='center'
                                    "<?php echo $v['href']; ?>">
                                <a href="<?php echo  $v['href'] ?>"><?php echo $v['title']; ?></a>
                                </td>
                            </tr>
                        <?php
                        }
                        ?>
                    </table>
                </td>
                <td><?php if (!empty($_GET['page'])) {
                        include $_GET['page'] . '.php';
                    } else {
                        echo 'CONTENT';
                    }
                    ?>
                </td>
            <?php
            } elseif ($val == 'HEADER') { ?>
                <td height="150" colspan='2'>
                        <?php
                        session_start();
                        if (isset($_SESSION['first_name']) && (isset($_SESSION['last_name'])) && (isset($_SESSION['phone'])) && (isset($_SESSION['email'])) && (isset($_SESSION['password']))) {
                            $first_name = $_SESSION['first_name'];
                            $last_name = $_SESSION['last_name'];
                            $email = $_SESSION['email'];
                            $phone = $_SESSION['phone'];
                            $password = $_SESSION['password'];
                            echo "Hello " . $first_name . " " . "$last_name" . ", your email: " . $email . ", phone: " . $phone;
                        } else {
                            if (isset($_SESSION['email']) && (isset($_SESSION['password']))) {
                                $email = $_SESSION['email'];
                                $password = $_SESSION['password'];
                                echo $email . " " . $password;
                            }
                        }
                        ?>
                </td>
            <?php
            } else {
                ?>
                <td colspan='2' align='center'
                    height=100><?php echo $val; ?></td>

            <?php
            }
            ?>
        </tr>
    <?php
    }
    ?>
    <br />
    <a href="sign_in.html">sign_in</a><br />
    <a href="sign_up.html">sign_up</a><br />
    <a href="logout.php">logout</a><br />
<?php //} ?>
</table>



