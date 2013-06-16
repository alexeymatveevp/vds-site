<!DOCTYPE html>
<html>
<?php
include 'head.php';
?>
<body>
<?php
include 'nav.php';
?>

<section id="pastSection">
    <div id="centos">
        <div class="header container hero-unit comp-header">
            <div class="row">
                <div class="span8">
                    <h1>Today is <strong>CentOS</strong></h1>
                    <a href="http://www.centos.org/centos.php">http://www.centos.org/</a>
                </div>
                <div class="span4">
                    <img class="img-polaroid" src="img/centos.png"/>
                </div>
            </div>
        </div>
        <div class="container hero-unit comp-content">
            <div class="row">
                <div class="span12">
                    <p>CentOS is a stable linux that should be very easy for Fedora and Ubuntu (<10 version) users. That's because it uses Gnome and is pretty much the same for the regular user as me.</p>
                    <p>I recently installed CentOS 6.0.</p>
                    <p>During installation there was a choice of "what type of linux you want" like:</p>
                    <ul>
                        <li>Empty</li>
                        <li>Basic</li>
                        <li>Media studio</li>
                        <li>Education</li>
                        <li>Developer</li>
                    </ul>
                    <p>I chose the last one and got Eclipse, OpenJDK and Qt as a present.
                        When installation finishes, there was a reboot and easy login. Ok, now I have "Developer CentOS".</p>
                    </hr>
                    <p>First, I downloaded Chromium to have my bookmarks and neat place to google.</p>
                    <p>You can do it with the following command:</p>
                    <code>yum install google-chrome-stable</code>
                    <p>Of course with sudo prefix or as a super user.</p>
                    <blockquote><span class="label label-info">Hint</span>By default your first user is not in the sudoers list, so you should add it manually in /etc/sudoers</blockquote>
                    <p>CentOS is using yum packet manager, that is pretty much the same as apt-get, but work with .rpm packages instead of .deb.
                        Repository list is located under /etc/yum.repos.d/ folder, where you can add new ones.


                    </p>
                    <p>Next step was to install Steam client. Well, little bit tricky, because Steam for linux is distributed only in .deb package.
                        You can simply unzip the package with tar or dpkg utility, look inside and copy contents manually. But that's lazy.</p>
                    <p>There is a program called alien that will convert .deb into .rpm and vice versa for you.</p>
                    <blockquote><span class="label label-info">Hint</span>Alternatively you can use rpmbuild, but it requires skills and knowledge of how .rpm is structured.</blockquote>
                </div>
            </div>
        </div>
    </div>
</section>

<?php
include 'footer.html';
?>

</body>
</html>