<?php
if(session_id() == '') {
    session_start();
}
if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    if ($_POST['name'] && $_POST['passwd']) {
        $name = $_POST['name'];
        $passwd = $_POST['passwd'];
        $mysqli = new mysqli('localhost', 'root', 'asdf;lkj', 'site');
        if ($mysqli->connect_errno) {
            // printf("Can't connect");
        } else {
            $result = $mysqli->query("SELECT * FROM user where username='".$name."' and passwd='".$passwd."'");
//            echo "SELECT * FROM user where username='".$name."' and passwd='".$passwd."'";
            if (is_object($result)) {
                while ($row = $result->fetch_array(MYSQLI_NUM)) {
                    $_SESSION['login'] = $row[0];
                }
            }
        }
        $mysqli->close();
    }
} else if ($_SERVER['REQUEST_METHOD'] === 'GET') {
    if (isset($_GET['logout'])) {
        unset($_SESSION['login']);
        session_destroy();
    }
}
?>
<nav class="navigation">
    <ul class="main">
        <li><a id="nowTab" href="index.php">Now</a></li>
        <li><a id="pastTab" href="past.php">Past</a></li>
        <li><a id="aboutTab" href="about.html">About me</a></li>
    </ul>
    <ul class="social-icons">
        <li><a href="https://plus.google.com/u/0/115812373950976163521/posts" class="icon-google"></a></li>
        <li><a href="https://www.facebook.com/profile.php?id=100000272868368" class="icon-facebook"></a></li>
        <li><a href="https://twitter.com/velXeor" class="icon-twitter"></a></li>
        <li><a href="http://www.linkedin.com/profile/view?id=197193291&trk=nav_responsive_tab_profile_pic" class="icon-linkedin"></a></li>
    </ul>
    <div>
    <?php
    if (isset($_SESSION['login'])) {
        echo "<span>Hello, ".$_SESSION['login']."</span>";
        ?>
            <form name="logoutForm" method="get" target="_self">
                <input type="hidden" name="logout" value="true">
                <a href="" onclick="document.forms['logoutForm'].submit(); return false;">Logout</a>
            </form>
        <?php
    } else {
        ?>
            <form name="loginForm" method="post" target="_self">
                <input type="text" name="name" placeholder="username"/>
                <input type="password" name="passwd" placeholder="password"/>
                <a href="" onclick="document.forms['loginForm'].submit(); return false;">Login</a>
            </form>
        <?php
    }
    ?>
    </div>
    <div class="top-background"></div>
</nav>
