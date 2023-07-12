
<?php
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "reseausocial";

$conn = new mysqli($servername, $username, $password, $dbname);

// Récupérer les posts depuis la base de données
$sql = "SELECT * FROM posts";
$result = $conn->query($sql);
$posts = array();

if ($result->num_rows > 0) {
    // Parcourir les résultats de la requête
    while ($row = $result->fetch_assoc()) {
        $posts[] = $row;
    }
}

if ($conn->connect_error) {
    die("Erreur de connexion à la base de données : " . $conn->connect_error);
}
?>
<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Page de profil</title>
    <link href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css" rel="stylesheet">
    <link href="https://maxcdn.bootstrapcdn.com/font-awesome/4.3.0/css/font-awesome.min.css" rel="stylesheet">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <link rel="stylesheet" type="text/css" href="style.css">
    <style type="text/css">
        body {
            margin-top: 20px;
            background-color: #e9ebee;
        }

        .profile-banner {
            width: 100%;
            height: 300px;
            background-position: center center;
            background-size: cover;
            position: relative;
            background-color: #252932;
            border-bottom: 4px solid #fff;
            box-shadow: 2px 0px 4px rgba(0, 0, 0, 0.1);
        }

        .avatar-container {
            height: 300px;
            text-align: center;
        }

        .profile-avatar {
            width: 200px;
            height: 200px;
            border-radius: 50%;
            position: relative;
            margin-top: 100px;
            border: 4px solid #f3f3f3;
            object-fit: cover;
        }

        .profile-actions {
            position: absolute;
            bottom: 20px;
        }

        .user-profile-2 {
            margin-top: 50px;
        }

        .user-profile-sidebar {
            margin: 0 0 20px 0;
        }

        .user-profile-sidebar .user-identity {
            margin: 20px 0 0 0;
        }

        .user-profile-sidebar img {
            width: 90px;
        }

        .account-status-data {
            text-align: center;
            padding: 10px 0;
            border-top: 1px dashed #ddd;
            border-bottom: 1px dashed #ddd;
            margin: 10px 0 20px 0;
        }

        .account-status-data h5 {
            font-size: 11px;
            line-height: 150%;
            color: #909090;
        }

        .user-button {
            margin: 15px 0;
        }

        .user-button .btn {
            margin: 5px 0;
        }

        #social {
            padding: 10px;
            background: #E5E9EC;
            text-align: center;
        }

        #social a:hover {
            text-decoration: none;
        }

        .fa-circle.facebook {
            color: #5471AE;
        }

        .fa-circle.twitter {
            color: #4EC6F6;
        }

        .fa-circle.gplus {
            color: #E24E3E;
        }

        .fa-circle.tumblr {
            color: #4D77A3;
        }

        .fa-circle.linkedin {
            color: #3097CE;
        }

        .user-profile-content {
            margin: 30px 15px;
        }

        .tab-pane {
            padding-top: 20px;
        }

        .user-message {
            width: 50px;
            height: 50px;
        }

        .timeline-item-profile-img {
            width: 50px;
            height: 50px;
            border-radius: 50%;
        }

        .post-image-container {
            width: 100%;
            height: 200px;
            overflow: hidden;
            border-radius: 5px;
        }

        .post-image-container img {
            width: 100%;
            height: 100%;
            object-fit: cover;
        }

        .profile-timeline {
            display: flex;
            flex-wrap: wrap;
            justify-content: center;
        }

        .profile-timeline .card {
            width: 100%;
            max-width: 600px;
            margin: 10px;
        }

        .comment-form {
            margin-top: 10px;
        }

        .comment-form textarea {
            resize: vertical;
        }

        .comment-list {
            margin-top: 20px;
            list-style-type: none;
            padding: 0;
        }

        .comment-list .comment-item {
            margin-bottom: 10px;
            padding-bottom: 10px;
            border-bottom: 1px solid #ddd;
        }

        .comment-list .comment-item:last-child {
            margin-bottom: 0;
            padding-bottom: 0;
            border-bottom: none;
        }

        .comment-list .comment-item .comment-content {
            margin-left: 60px;
        }

        .comment-list .comment-item .comment-author {
            font-weight: bold;
        }

        .comment-list .comment-item .comment-text {
            margin-top: 5px;
        }
    </style>
</head>
<body>
<div class="container bootdey">
    <div class="content-page">
        <div class="profile-banner" style="background:url(https://bootdey.com/img/Content/bg1.jpg);">
            <div class="col-sm-3 avatar-container">
                <img src="https://th.bing.com/th?id=OIP.U0-rQFT7iDtg302OonXg0gHaFZ&w=293&h=213&c=8&rs=1&qlt=90&o=6&dpr=3&pid=3.1&rm=2" class="profile-avatar" alt="User avatar">
            </div>
            <div class="col-sm-12 profile-actions">
                <a href="ajoutami.php" class="btn btn-success btn-sm float-end"><i class="fa fa-check"></i> AMIS</a>
                <button type="button" class="btn btn-primary btn-sm float-end"><i class="fa fa-envelope"></i> Send Message</button>
            </div>
        </div>
        <div class="content">
            <div class="row">
                <div class="col-sm-3">
                    <div class="text-center user-profile-2" style="margin-top:120px">
                        <ul class="list-group">
                            <li class="list-group-item">
                                <h4>Ndeye Boury, <b>LAKHONE</b></h4>
                            </li>
                        </ul>
                        <div class="user-button">
                            <div class="row">
                
                            </div>
                        </div>
                    </div>
                    <table class="table">
                        <tbody>
                            <tr>
                                <td><strong>Posts</strong></td>
                                <td><span class="badge">1,245</span></td>
                            </tr>
                            <tr>
                                <td><strong>Followers</strong></td>
                                <td><span class="badge">1,245</span></td>
                            </tr>
                            <tr>
                                <td><strong>Following</strong></td>
                                <td><span class="badge">245</span></td>
                            </tr>
                        </tbody>
                    </table>
                    <div class="user-button">
                        <div class="row">
                            <div class="col-lg-6">
                               <a href="profil.php" class="btn btn-primary btn-sm btn-block"><i class="fa fa-envelope"></i> Voir le Profil</a>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-sm-9">
                    <div class="widget widget-tabbed">
                        <ul class="nav nav-tabs nav-justified">
                            <li class="active"><a href="#my-timeline" data-toggle="tab"><i class="fa fa-pencil"></i> Timeline</a></li>
                            <li><a href="#about" data-toggle="tab"><i class="fa fa-user"></i> About</a></li>
                            <li><a href="#user-activities" data-toggle="tab"><i class="fa fa-laptop"></i> Activities</a></li>
                            <li><a href="#mymessage" data-toggle="tab"><i class="fa fa-envelope"></i> Message</a></li>
                        </ul>
                        <div class="tab-content">
                            <div class="tab-pane animated active fadeInRight" id="my-timeline">
                                <div class="user-profile-content">
                                    <div class="the-timeline">
                                        <form role="form" class="post-to-timeline">
                                            <textarea class="form-control" style="height: 70px;margin-bottom:10px;" placeholder="What's on your mind..."></textarea>
                                            <div class="row">
                                                <div class="col-sm-6">
                                                    <a class="btn btn-sm btn-default"><i class="fa fa-camera"></i></a>
                                                    <a class="btn btn-sm btn-default"><i class="fa fa-video-camera"></i></a>
                                                    <a class="btn btn-sm btn-default"><i class="fa fa-map-marker"></i></a>
                                                </div>
                                                <div class="col-sm-6 text-right">
                                                    <a href="ajoutpost.php" class="btn btn-primary">Ajouter un post</a>
                                                </div>
                                            </div>
                                        </form>
                                        <br><br>
                                        <div class="profile-timeline">
                                            <?php foreach ($posts as $post) { ?>
                                                <div class="card card-white grid-margin">
                                                   <div class="card-body">
                                                        <div class="timeline-item-header">
                                                            <img src="https://th.bing.com/th/id/R.52b1436adffa21c6593fd4bf6b09c6a3?rik=WfA7Kbcbc1euog&pid=ImgRaw&r=0" alt="" class="timeline-item-profile-img" />
                                                            <?php if (isset($post['texte'])) { ?>
                                                                <p><?php echo $post['texte']; ?></p>
                                                            <?php } ?>
                                                            <?php if (isset($post['date_posts'])) { ?>
                                                                <small><?php echo $post['date_posts']; ?></small>
                                                            <?php } ?>
                                                        </div>
                                                        <?php if (isset($post['media']) && $post['media'] != '') { ?>
                                                            <div class="post-image-container">
                                                                <img src="<?php echo $post['media']; ?>" alt="Post Image" class="post-image">
                                                            </div>
                                                        <?php } ?>
                                                        <div class="timeline-options">
                                                            <a href="#" onclick="toggleLike(this)"><i class="fa fa-thumbs-up"></i> Like (<span id="likeCount">15</span>)</a>
                                                            <a href="#"><i class="fa fa-comment"></i> Comment (4)</a>
                                                            <a href="#"><i class="fa fa-share"></i> Share (6)</a>
                                                        </div>
                                                        <div class="timeline-comment">
                                                            <div class="comment-form">
                                                                <form action="ajoutcommentaire.php" method="POST">
                                                                    <textarea class="form-control" name="comment" rows="2" placeholder="Write a comment"></textarea>
                                                                    <button type="submit" class="btn btn-primary mt-2">Add Comment</button>
                                                                </form>
                                                            </div>
                                                            <div class="comment-list">
                                                                <?php if (isset($post['comments'])) {
                                                                    foreach ($post['comments'] as $comment) { ?>
                                                                        <div class="comment-item">
                                                                            <div class="comment-author"><?php echo $comment['author']; ?></div>
                                                                            <div class="comment-text"><?php echo $comment['text']; ?></div>
                                                                        </div>
                                                                <?php }
                                                                } ?>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            <?php } ?>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="tab-pane animated fadeInRight" id="about">
                                <h3 class="section-title">About</h3>
                                <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Suspendisse fringilla, velit et viverra facilisis, tellus elit gravida odio, ac ultrices lorem neque id mi. In dignissim massa non dolor pulvinar, vel consectetur purus eleifend. Cras interdum tempor lacus. Suspendisse ac gravida lorem. Fusce sodales, risus a facilisis gravida, nulla tortor commodo neque, in semper eros turpis in est. Pellentesque congue, tortor in lacinia dignissim, sem lorem vestibulum lacus, non hendrerit odio purus ut leo. Sed ultricies dapibus massa, sit amet convallis libero tristique sed. Vestibulum ante ipsum primis in faucibus orci luctus et ultrices posuere cubilia Curae; Sed feugiat viverra est, a viverra dolor bibendum at. Sed sagittis non nisi sit amet varius. Aliquam erat volutpat.</p>
                            </div>
                            <div class="tab-pane animated fadeInRight" id="user-activities">
                                <h3 class="section-title">Activities</h3>
                                <ul class="list-unstyled activity-timeline">
                                    <li>
                                        <i class="fa fa-comment activity-icon"></i>
                                        <p>Commented on <a href="#">Post Title</a></p>
                                        <span class="activity-time">2 minutes ago</span>
                                    </li>
                                    <li>
                                        <i class="fa fa-thumbs-up activity-icon"></i>
                                        <p>Liked <a href="#">Post Title</a></p>
                                        <span class="activity-time">5 hours ago</span>
                                    </li>
                                    <li>
                                        <i class="fa fa-share activity-icon"></i>
                                        <p>Shared <a href="#">Post Title</a></p>
                                        <span class="activity-time">1 day ago</span>
                                    </li>
                                    <li>
                                        <i class="fa fa-comment activity-icon"></i>
                                        <p>Commented on <a href="#">Post Title</a></p>
                                        <span class="activity-time">3 days ago</span>
                                    </li>
                                    <li>
                                        <i class="fa fa-thumbs-up activity-icon"></i>
                                        <p>Liked <a href="#">Post Title</a></p>
                                        <span class="activity-time">1 week ago</span>
                                    </li>
                                </ul>
                            </div>
                            <div class="tab-pane animated fadeInRight" id="mymessage">
                                <h3 class="section-title">Message</h3>
                                <div class="row">
                                    <div class="col-md-12">
                                        <form role="form">
                                            <div class="form-group">
                                                <input type="text" class="form-control" placeholder="To">
                                            </div>
                                            <div class="form-group">
                                                <input type="text" class="form-control" placeholder="Subject">
                                            </div>
                                            <div class="form-group">
                                                <textarea class="form-control" rows="8" placeholder="Message"></textarea>
                                            </div>
                                            <div class="form-group">
                                                <button class="btn btn-primary" type="submit">Send</button>
                                                <button class="btn btn-default" type="reset">Clear</button>
                                            </div>
                                        </form>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

<script type="text/javascript">
    function toggleLike(element) {
        var likeCountElement = document.getElementById('likeCount');
        var likeCount = parseInt(likeCountElement.innerText);
        if (element.classList.contains('liked')) {
            element.classList.remove('liked');
            likeCount--;
        } else {
            element.classList.add('liked');
            likeCount++;
        }
        likeCountElement.innerText = likeCount;
    }
</script>
</body>
</html>
