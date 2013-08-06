<!DOCTYPE html>
<html>
<?php
include 'head.php';
?>
<body>
<?php
include 'nav.php';
?>
<section id="nowSection" class="article gray">
    <img src="img/icons/bookmark.png" class="bookmark">
    <?php
    if (isset($_SESSION['login'])) {
        echo '<a href="secret.php"><img src="img/icons/secret.png" class="secret"></a>';
    }
    ?>
    <h2>Tasty *NIX commands</h2>
    <hr/>
    <ul>
        <li class="item">
            <div>
                <strong>tree</strong>
                <small>shows the tree view of the directory deep to it's end</small>
            </div>
            <img src="img/linux_commands/tree.png">
            <aside>
                <p>Invoked without parameters tree will show the full directory tree of current directory.</p>
                <blockquote>
                    <strong>-a</strong>
                    <p>all files are listed, including hidden ones</p>                  dd
                    <strong>-d</strong>
                    <p>list directories only</p>
                    <strong>-s</strong>
                    <p>prints the size of each file</p>
                    <strong>--filelimit [limit]</strong>
                    <p>will not collapse directories containing more that [limit] filed</p>
                </blockquote>
                <br>
                <p><img src="img/icons/tree_icon.png" style="max-width: 100px; float: right"/>
                    tree is a great tool if you want to see the full picture.
                    Simple commands as ls and pwd are not so illustrative.
                    I've found tree very helpful when working on a web project.
                    Project is a place where hierarchy matters a lot and tree is a synonym to hierarchy.</p>
            </aside>
        </li>
        <li class="item">
            <div>
                <strong>ls</strong>
                <small>prints list of files and directories in the presented directory</small>
            </div>
            <img src="img/linux_commands/ls.png">
        </li>
        <li class="item">
            <div>
                <strong>du</strong>
                <small>shows the size of files and directories (in M, K, G or blocks)</small>
            </div>
            <img src="img/linux_commands/du.png">
        </li>
        <li class="item">
            <div>
                <strong>env</strong>
                <small>prints all system set environmental variables</small>
            </div>
            <img src="img/linux_commands/env.png">
        </li>
    </ul>
</section>

<?php
include 'footer.html';
?>

</body>
</html>